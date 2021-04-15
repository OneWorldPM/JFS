<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Honorees extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->common->set_timezone();
        $login_type = $this->session->userdata('userType');
        if ($login_type != 'user') {
            redirect('login');
        }
        if ($this->session->userdata('cid') != "100028") {
            $get_user_token_details = $this->common->get_user_details($this->session->userdata('cid'));
            if ($this->session->userdata('token') != $get_user_token_details->token) {
                redirect('login');
            }
        }
    }


    public function index(){
        $this->load->view('header');
        $this->load->view('honoree');
        $this->load->view('footer');
    }
    public function send_message(){
        $cust_id = $this->session->userdata('cid');
        $date = date('Y-m-d H:i:s');
        $post=$this->input->post();

        $this->db->select('*');

        $result = $this->db->insert('honoree_message',array('message'=>$post['message'], 'cust_id'=>$cust_id, 'date'=>$date, 'message_recepient'=>$post['recepient']));

       if($result == 1){
           $return = "success";
       }else{
           $return = "error";
       }
       echo json_encode(array('data'=>"success"));
    }
}