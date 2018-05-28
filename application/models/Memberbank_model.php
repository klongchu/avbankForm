<?php

class Memberbank_model extends CI_Model {

 
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
        $member_id = $this->input->post('member_id');
        $this->s_account_no = $this->input->post('s_account_no');
        $this->s_account_name = $this->input->post('s_account_name');
        $this->s_username = $this->input->post('s_username');
        $this->i_bank = $this->input->post('i_bank');
        $this->s_status = 'A';
        

        if ($id == 0) {
            $this->d_create = date('Y-m-d H:i:s');
            $this->s_create_by = $this->session->userdata('member_id');
            $this->db->insert('tb_member_bank', $this);
        } else {
            $this->db->update('tb_member_bank', $this, array('i_id' => $id));
        }

        $s_level = "memberbank?id=".$member_id;
        return $s_level;
    }
  /*
  *
  *  Function  
  *
  * @return
  */



}
