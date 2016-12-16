<?php
error_reporting(E_ALL);
include_once 'db.php';
$data = json_decode(file_get_contents("php://input"));
echo $id = $data->id;
echo $sql = "delete   FROM student  where id='".$id."'";
$res = $db->query($sql);
//print_r(json_encode($data));
?>