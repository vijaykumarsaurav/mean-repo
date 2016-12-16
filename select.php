<?php
error_reporting(E_ALL);
include_once 'db.php';
$sql = "SELECT *  FROM student";
$res = $db->query($sql);
while ($row = $res->fetch_assoc()) 
{
	$data[] = $row;
}
echo json_encode($data);
?>