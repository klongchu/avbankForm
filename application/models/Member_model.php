<?php

class Member_model extends CI_Model {

 
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
  ***************** *********************
  ***************** Load all Data *********************
  ***************** *********************
  =======================================*/
  ///////////////////
public function Postdata() {
        $id = $this->input->post('id');
        //$this->s_password = $this->input->post('s_password');
        $this->s_firstname = $this->input->post('s_firstname');
        $this->s_lastname = $this->input->post('s_lastname');
        $this->s_phone = $this->input->post('s_phone');
        $this->s_line = $this->input->post('s_line');
        $this->i_website = $this->input->post('i_website');
        $this->s_status = 'A';
        $this->d_update = date('Y-m-d H:i:s');
        $this->s_update_by = $this->session->userdata('member_id');
        if ($id == 0) {
            $this->s_username = $this->input->post('s_username');
            $this->d_create = date('Y-m-d H:i:s');
            $this->s_create_by = $this->session->userdata('member_id');
            $this->db->insert('tb_member', $this);
        } else {
            $this->db->update('tb_member', $this, array('i_id' => $id));
        }

        $s_level = "member";
        return $s_level;
    }
  /*
  *
  *  Function  
  *
  * @return
  */



}
