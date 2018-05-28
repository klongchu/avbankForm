<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Bank_model');
        $this->load->library('pagination');
    }

    public function index() {

        $this->load->view('template/header');
        $this->load->view('bank/index');
        $this->load->view('template/footer');
    }

    public function datatable() {
        $this->load->view('bank/datatable');
    }

    
    public function form() {
        $this->load->view('template/header');
        $this->load->view('bank/form');
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
