<?php
  require_once("dbtools.inc.php");
	header("Content-type: text/html; charset=utf-8");
	//取得表单资料
	$name=$_POST['name'];
	$id=$_POST['ID'];//获取病人身份证号
	$medid=$_POST['med_id'];
	$year=$_POST['old'];
	
	//建立数据库连接
	$link = create_connection();
	//执行select语句
	$sql = "SELECT * FROM history WHERE pat_id ='$id'";
	$result=execute_sql($link,"hospital",$sql);
	
	if(mysqli_num_rows($result)>0){
		mysqli_free_result($result);
		$sql="UPDATE medicine SET number = number-1 WHERE med_ID = '$medid' ";
		$result=execute_sql($link,"hospital",$sql);
		
		$sql="DELETE FROM history WHERE history.pat_id = '$id'";
		$result=execute_sql($link,"hospital",$sql);
		
		echo "<script type='text/javascript'>alert('已购药!!!');location.href='result.php';</script>";
		
	}
	else{
		
		echo "<script type='text/javascript'>alert('未挂号!!!');location.href='getNum.php';</script>";
		
	}
	
	mysqli_close($link);
	
?>
