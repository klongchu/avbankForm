<?php

class Admin_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /*
     *
     *  Function  
     *
     * @return
     */
    /* ====================================
     * **************** *********************
     * **************** Load all Data *********************
     * **************** *********************
      ======================================= */

    ///////////////////
    public function Postdata() {
        $id = $this->input->post('id');
        $this->s_password = $this->input->post('s_password');
        $this->s_firstname = $this->input->post('s_firstname');
        $this->s_lastname = $this->input->post('s_lastname');
        $this->s_phone = $this->input->post('s_phone');
        $this->s_line = $this->input->post('s_line');
        $this->s_level = $this->input->post('s_level');
        $this->s_status = 'A';
        $this->d_update = date('Y-m-d H:i:s');
        $this->s_update_by = $this->session->userdata('member_id');
        if ($id == 0) {
            $this->s_username = $this->input->post('s_username');
            $this->d_create = date('Y-m-d H:i:s');
            $this->s_create_by = $this->session->userdata('member_id');
            $this->db->insert('tb_staff', $this);
        } else {
            $this->db->update('tb_staff', $this, array('id' => $id));
        }
        if($this->input->post('s_level') == "S"){
            $s_level = "admin";
        }else{
            $s_level = "staff";
        }
        return $s_level;
    }
    /*
     *
     *  Function  
     *
     * @return
     */
}
