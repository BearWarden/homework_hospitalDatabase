<?php
  require_once("dbtools.inc.php");
	header("Content-type: text/html; charset=utf-8");
	
	//取得表单资料
	$id=$_POST['ID'];
	//建立数据库连接
	
	$link = create_connection();
	//执行select语句
	
	$sql = "DELETE FROM operation WHERE operation.pat_id = '$id'";
	$result = execute_sql($link,"hospital", $sql);
  
  echo "<script type='text/javascript'>alert('该手术已结束!!!');location.href='operationresult.php';</script>";
  
	mysqli_close($link);
	
?>
