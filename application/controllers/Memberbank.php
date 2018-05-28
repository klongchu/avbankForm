<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Memberbank extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Memberbank_model');
        $this->load->library('pagination');
    }

    public function index() {

        $this->load->view('template/header');
        $this->load->view('memberbank/index');
        $this->load->view('template/footer');
    }

    public function datatable() {
        $this->load->view('memberbank/datatable');
    }

    
    public function form() {
        $this->load->view('template/header');
        $this->load->view('memberbank/form');
        $this->load->view('template/footer');
    }

    
    public function validUser() {
        $username = $this->input->post('username');
        $row = $this->db->select('i_id')->where('s_username',$username)->get('tb_member')->row();
        if($row->i_id > 0){
            echo 1;
        }else{
            echo 0;
        }
    }
    public function Postdata() {
        $s_level = $this->Memberbank_model->Postdata();
        echo $s_level;
    }
/////////////////////////// END CLASS    
}
