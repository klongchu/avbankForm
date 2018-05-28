<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Staff_model');
        $this->load->model('Admin_model');
        $this->load->library('pagination');
    }

    public function index() {

        $this->load->view('template/header');
        $this->load->view('staff/index');
        $this->load->view('template/footer');
    }

    public function datatable() {
        $this->load->view('staff/datatable');
    }

    
    public function form() {
        $this->load->view('template/header');
        $this->load->view('staff/form');
        $this->load->view('template/footer');
    }
    public function validUser() {
        $username = $this->input->post('username');
        $row = $this->db->select('id')->where('s_username',$username)->get('tb_staff')->row();
        if($row->id > 0){
            echo 1;
        }else{
            echo 0;
        }
    }
    public function Postdata() {
        echo 1;
    }
/////////////////////////// END CLASS    
}
