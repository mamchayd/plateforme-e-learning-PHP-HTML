<?php
include("connection.php");
 
$params = $_REQUEST;
$action = isset($params['action']) && $params['action'] !='' ? $params['action'] : 'list';
$empCls = new Employee();
 
switch($action) {
 case 'list':
  $empCls->getEmployees();
 break;
 case 'add':
	$empCls->insertEmployee();
 break;
 default:
 return;
}
 
 
class Employee {
  protected $conn;
  protected $data = array();
  function __construct() {

	$db = new dbObj();
	$connString =  $db->getConnstring();
    $this->conn = $connString;
  }
  
  function getEmployees() {
    $sql = "SELECT * FROM employee";
	$queryRecords = pg_query($this->conn, $sql) or die("error to fetch employees data");
	$data = pg_fetch_all($queryRecords);
	echo json_encode($data);
  }
}
 function insertEmployee() {
	$data = $resp = array();
	$resp['status'] = false;
	$data['employee_name'] = $_POST["employee_name"];
	$data['employee_salary'] = $_POST["employee_salary"];
	$data['employee_age'] = $_POST["employee_age"];
	
	$result = pg_insert($this->conn, 'employee' , $data) or die("error to insert employee data");
	
	
	$resp['status'] = true;
	$resp['Record'] = $data;
	echo json_encode($resp);  // send data as json format*/
	
}

?>