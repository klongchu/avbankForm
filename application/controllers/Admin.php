<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('pagination');
    }

    public function index() {

        $this->load->view('template/header');
        $this->load->view('admin/index');
        $this->load->view('template/footer');
    }

    public function datatable() {
        $this->load->view('admin/datatable');
    }

    
    public function form() {
        $this->load->view('template/header');
        $this->load->view('admin/form');
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
        $s_level = $this->Admin_model->Postdata();
        echo $s_level;
    }
/////////////////////////// END CLASS    
}
