<?php
		require_once("dbtools.inc.php");
		header("Content-type: text/html; charset=utf-8");
		$id=$_POST['idname'];
		$code = $_POST['code'];
		$link = create_connection();
		
		$sql = "SELECT * FROM manager WHERE user_name ='$id' AND code_num = '$code'  ";
	  $result=execute_sql($link,"hospital",$sql);
		
		if(mysqli_num_rows($result)>0){
			header("location:operationinput.php");
		}
		else {
			echo "<script type='text/javascript'>alert('非管理者!!!');location.href='docter.php';</script>";
		}
?>