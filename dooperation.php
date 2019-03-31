<?php
  require_once("dbtools.inc.php");
	header("Content-type: text/html; charset=utf-8");

	//取得表单资料
	$name=$_POST['name'];
	$sex=$_POST['sex'];
	
	$id=$_POST['ID'];//获取病人身份证号
	$operid=$_POST['operid'];
	
	$year=$_POST['old'];
	$phone=$_POST['phoneNum'];
	$date=$_POST['date'];
	
	//建立数据库连接
	$link = create_connection();
	//执行select语句
	$sql = "SELECT * FROM operation WHERE oper_ID = '$operid'";
	$result=execute_sql($link,"hospital",$sql);

	if(mysqli_num_rows($result)==0){
		mysqli_free_result($result);
		$sql = "INSERT INTO operation(oper_ID,pat_id,oper_time) VALUES('$operid', '$id','$date')";
		$result = execute_sql($link , "hospital" ,$sql );
		echo "<script type='text/javascript'>alert('成功预约手术!!!');location.href='operationresult.php';</script>";
	}
	else{
		
		echo "<script type='text/javascript'>alert('该手术已被选!!!');location.href='operation.php';</script>";
		
	}
	mysqli_close($link);
?>