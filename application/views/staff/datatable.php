<?php
$query = $this->db->select('*,s_status as status')->where('s_level','N')->get('tb_staff')->result();
foreach ($query as $data){
    $json[] = $data;
}
$res['data'] = $json;
echo json_encode($res);

?>