<?php
 $id = $this->input->get('id');
$row = $this->db->select('*')->where('i_id', $id)->get('tb_member')->row();
$s_username = $row->s_username;

$this->db->select('m.*,m.s_status as status,b.s_fname_th as bankname');
$this->db->from('tb_member_bank m');
$this->db->join('tb_bank b', 'b.i_bank = m.i_bank');
$this->db->where('m.s_username',$s_username);

 
$query = $this->db->get()->result();

foreach ($query as $data){
    $json[] = $data;
}
$res['data'] = $json;
echo json_encode($res);

?>