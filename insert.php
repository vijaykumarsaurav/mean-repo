<?php
error_reporting(E_ALL);
include_once 'db.php';

$data = json_decode(file_get_contents("php://input"));


 $btnName = $data->btnName;
	 if($btnName == "Insert")
	 {
		 $fname = $data->fname;
		 $lname = $data->lname;
		 $email = $data->email;
		  $sql = "INSERT INTO `student`(`fname`, `lname`, `email`) VALUES ('".$fname."','".$lname."','".$email."')";
		$db->query($sql);
		$sql_2 = "SELECT *  FROM student";
		$res_2 = $db->query($sql_2);
		while ($row_2 = $res_2->fetch_assoc()) 
		{
			$test[] = $row_2;
		}
		echo(json_encode($test));	
	 }
	 else
	 {
		 $id = $data->id;
		$fname = $data->fname;
		$lname = $data->lname;
		$email = $data->email;
		 $sql = "UPDATE  student SET fname='".$fname."', lname='".$lname."', email='".$email."' where  id ='".$id."'";
		$db->query($sql);
		$sql_2 = "SELECT *  FROM student";
		$res_2 = $db->query($sql_2);
		while ($row_2 = $res_2->fetch_assoc()) 
		{
			$test[] = $row_2;
		}
		echo(json_encode($test));
	}
	
?>