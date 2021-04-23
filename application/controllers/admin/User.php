<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->common->set_timezone();
        $login_type = $this->session->userdata('aname');
        if ($login_type != 'admin') {
            redirect('admin/alogin');
        }
        $this->load->model('madmin/m_user', 'muser');
    }

    public function index()
    {
        $data['user'] = $this->muser->getUserData();
        $this->load->view('admin/header');
        $this->load->view('admin/user', $data);
        $this->load->view('admin/footer');
    }

    public function filter_search()
    {
        $data['user'] = $this->muser->filter_search();
        $this->load->view('admin/header');
        $this->load->view('admin/users', $data);
        $this->load->view('admin/footer');
    }

    public function editUser($userid)
    {
        $data['user'] = $this->muser->getUserDetail($userid);
        $this->load->view('admin/header');
        $this->load->view('admin/adduser', $data);
        $this->load->view('admin/footer');
    }

    public function updateCustomer()
    {
        $post = $this->input->post();
        $result = $this->muser->updateCustomer($post);
        if ($result == "0") {
            header('location:' . base_url() . 'admin/user?msg=A'); //email or phone already Exist
        } else if ($result == "2") {
            header('location:' . base_url() . 'admin/user?msg=E'); //Some Error
        } else {
            header('location:' . base_url() . 'admin/user?msg=U'); //Register Success
        }
    }

    public function deleteuser($userid)
    {
        $this->db->delete("customer_master", array("cust_id" => $userid));
        header('location:' . base_url() . 'admin/user?msg=D');
    }

    public function user_activity($userid)
    {
        $data['user_activity'] = $this->muser->get_user_activity($userid);
        $this->load->view('admin/header');
        $this->load->view('admin/user_activity', $data);
        $this->load->view('admin/footer');
    }


    public function import_users()
    {

        $allowed_column_names = array(
            'A' => 'FirstName',
            'B' => 'LastName',
            'C' => 'Email',
            'D' => 'Country',
            'E' => 'Password',
            'F' => 'VIP'
        );

        $required_column_names = array(
            'A' => 'FirstName',
            'B' => 'LastName',
            'C' => 'Email',
            'F' => 'VIP'
        );

        $param_column_index = array(
            'first_name' => 'A',
            'last_name' => 'B',
            'email' => 'C',
            'country' => 'D',
            'password' => 'E',
            'vip' => 'F'
        );

        $admin_id = $_SESSION['aid'];

        if (!isset($_FILES['file']['name'])) {
            echo json_encode(array('status' => 'failed', 'msg' => 'File is required'));
            return;
        }

        $file = $_FILES['file'];

        $this->load->library('excel');

        $objPHPExcel = PHPExcel_IOFactory::load($file['tmp_name']);

        /** Save file for logging */
//        $unique_file_name = date("Y-m-d_H:i:s").'.'.pathinfo($file["name"])['extension'];
//        move_uploaded_file($file["tmp_name"], FCPATH.'upload_system_files/data_load_files/'.$unique_file_name);


        $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();

        /** @var array $cell
         * Get the data from spreadsheet file
         */

        foreach ($cell_collection as $cell) {

            $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
            $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
            $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();

            if ($row == 1) {
                $header[$column] = $data_value;

            } else {
                $rows[$row][$column] = $data_value;
            }
        }

        foreach ($allowed_column_names as $columnIndex => $column_name) {
            /** @var array $header */
            if ($header[$columnIndex] != $column_name) {
                echo json_encode(array('status' => 'failed', 'msg' => "Column {$columnIndex} is not {$column_name} in the row 1", 'updatedUsers' => 0, 'importedUsers' => 0));
                return;
            }
        }

        $this->db->trans_begin();

        $updatedUsers = 0;
        $imported_users = 0;

        /** @var array $rows */
        foreach ($rows as $row => $row_columns) {
            foreach ($required_column_names as $columnIndex => $column_name) {
                if ($row_columns[$columnIndex] == "") {
                    $this->db->trans_rollback();
//                    $this->Admin_Logger->log("Data load error", "{$column_name} (Column {$columnIndex}) is empty in the row {$row}");
                    echo json_encode(array('status' => 'failed', 'msg' => "{$column_name} (Column {$columnIndex}) is empty in the row {$row}", 'updatedUsers' => 0, 'importedUsers' => 0));
                    return;
                }
            }


            $first_name = str_replace('\'', "\`", $row_columns[$param_column_index['first_name']]);
            $last_name = str_replace('\'', "\`", $row_columns[$param_column_index['last_name']]);
            $email = str_replace('\'', "\`", $row_columns[$param_column_index['email']]);
            $country = str_replace('\'', "\`", $row_columns[$param_column_index['country']]);
            $vip = str_replace('\'', "\`", $row_columns[$param_column_index['vip']]);
            $password = (isset($row_columns['A'])) ? str_replace('\'', "\`", $row_columns[$param_column_index['password']]) : $first_name;


            $customer_id = $this->checkDuplicate($email);
            (isset($vip) && ($vip=="yes" || $vip=="Yes")? $vip_status = '1' : $vip_status = 0);

            if (!empty($customer_id)) {
                $reg_id = $customer_id->cust_id;
                $register_id = date("Y") . '-20' . $reg_id;
            } else {
                $register_id = date("Y") . '-200';
            }

            if ($customer_id) {

                $desc = json_encode($customer_id);
                $fields_array = array(
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'email' => $email,
                    'country' => $country,
                    'vip' => $vip_status,
                    'password' =>  base64_encode($password),
                    'register_date' => date("Y-m-d h:i"),
                    'register_id' => date($register_id),
                );

                $this->db->where('cust_id', $customer_id->cust_id);
                $this->db->update('customer_master', $fields_array);
//                $this->db->query("INSERT INTO `admin_logs`(`admin_id`, `log_name`, `log_desc`, `ref_company_id`, `other_ref`, `date_time`) VALUES ( '{$admin_id}', 'Ignored load item', '{$desc}', '{$exists->company_id}', null, '{$created_date_time}')");
                $updatedUsers = $updatedUsers + 1;
            } else {

                $fields_array = array(
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'email' => $email,
                    'country' => $country,
                    'vip' => $vip_status,
                    'password' =>  base64_encode($password),
                    'register_id' => date($register_id),
                );
                $this->db->insert('customer_master', $fields_array);
                $imported_users = $imported_users+1;
            }
        }

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
//            $this->Admin_Logger->log("Data load error", json_encode($this->db->error()));
            echo json_encode(array('status' => 'failed', 'msg' => 'Query Transaction Error: Unable to load the data', 'importedUsers' => 0, 'updatedUsers' => 0));
            return;
        } else {
            $this->db->trans_commit();
//            $this->Admin_Logger->log("Data load success", json_encode(array('updatedPresentations'=>0, 'createdPresentations'=>$createdPresentations, 'duplicatedRows'=>$duplicateRows)));
            echo json_encode(array('status' => 'success', 'msg' => 'Data loaded successfully', 'importedUsers' => $imported_users, 'updatedUsers' => $updatedUsers));
            return;
        }

        return;
    }


    private function checkDuplicate($email)
    {
        $this->db->select('cust_id')
            ->from('customer_master cm')
            ->where('email', $email);

        $result = $this->db->get();

        if ($result->num_rows() > 0)
            return $result->row();

        return false;
    }

    public function changeToVip($cust_id){
//        $post = $this->input->post();

        $this->db->select ('*');
        $this->db->from('customer_master');
        $this->db->where('cust_id', $cust_id);
        $result = $this->db->update('customer_master',array('vip'=>'1'));
        if($result){
            $this->session->set_flashdata('msg','success');
            redirect(base_url().'admin/user');
        }else{
            $this->session->set_flashdata('msg','error');
            redirect(base_url().'admin/user');
        }
    }

    public function changeToNonVip($cust_id){
//        $post = $this->input->post();

        $this->db->select ('*');
        $this->db->from('customer_master');
        $this->db->where('cust_id', $cust_id);
        $result =  $this->db->update('customer_master',array('vip'=>'0'));
        if($result){
            $this->session->set_flashdata('msg','success');
            redirect(base_url().'admin/user');
        }else{
            $this->session->set_flashdata('msg','error');
            redirect(base_url().'admin/user');
        }
    }

}
