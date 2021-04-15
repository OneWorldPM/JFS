<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Honorees_message extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->common->set_timezone();
        $login_type = $this->session->userdata('aname');
        if ($login_type != 'admin') {
            redirect('admin/alogin');
        }

    }

    public function index(){
        $this->db->select ('h.*,cm.first_name, cm.last_name');
        $this->db->from('honoree_message h');
        $this->db->join('customer_master cm', 'h.cust_id=cm.cust_id');
        $query = $this->db->get();

        $data['messages'] = $query->result();
        $this->load->view('admin/header');
        $this->load->view('admin/honoree_messages',$data);
        $this->load->view('admin/footer');
    }
}

