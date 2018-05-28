<?php
header('Content-Type: application/json');
$meta[page] = 1;      
$meta[pages] = 1;      
$meta[perpage] = -1;      
$meta[total] = 100;      
$meta[sort] = "asc";      
$meta[field] = "RecordID";      
$arr['meta'] = $meta;

$datas = array();

for($i=0;$i<100;$i++){
	

$data[RecordID] = $i;
$data[OrderID] = "".$i;
$data[Country] = "China";
$data[ShipCity] = "Tieba";
$data[ShipCountry] = "CN";
$data[ShipName] = "Collins, Dibbert ";
$data[ShipDate] = $i."2/12/2018";

$datas[] = $data;

}


$arr['data'] = $datas;

echo json_encode($arr);
//var_dump($arr);

/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'datatables_demo';
 
// Table's primary key
$primaryKey = 'id';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'first_name', 'dt' => 0 ),
    array( 'db' => 'last_name',  'dt' => 1 ),
    array( 'db' => 'position',   'dt' => 2 ),
    array( 'db' => 'office',     'dt' => 3 ),
    array(
        'db'        => 'start_date',
        'dt'        => 4,
        'formatter' => function( $d, $row ) {
            return date( 'jS M y', strtotime($d));
        }
    ),
    array(
        'db'        => 'salary',
        'dt'        => 5,
        'formatter' => function( $d, $row ) {
            return '$'.number_format($d);
        }
    )
);
 
// SQL server connection information
$sql_details = array(
    'user' => '',
    'pass' => '',
    'db'   => '',
    'host' => ''
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
//require( 'ssp.class.php' );
 
 