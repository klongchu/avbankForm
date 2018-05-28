<?php
$this->db->select('m.*,m.s_status as status,w.s_name as webname');
$this->db->from('tb_member m');
$this->db->join('tb_website w', 'w.i_website = m.i_website');

 
$query = $this->db->get()->result();

foreach ($query as $data){
    $json[] = $data;
}
$res['data'] = $json;
echo json_encode($res);

?>