<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Member_model');
        $this->load->library('pagination');
    }

    public function index() {

        $this->load->view('template/header');
        $this->load->view('member/index');
        $this->load->view('template/footer');
    }

    public function datatable() {
        $this->load->view('member/datatable');
    }

    
    public function form() {
        $this->load->view('template/header');
        $this->load->view('member/form');
        $this->load->view('template/footer');
    }
    public function bank() {
        $this->load->view('template/header');
        $this->load->view('member/bank');
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
        $s_level = $this->Member_model->Postdata();
        echo $s_level;
    }
/////////////////////////// END CLASS    
}
