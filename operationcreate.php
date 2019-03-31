<?php
  require_once("dbtools.inc.php");
	header("Content-type: text/html; charset=utf-8");
	
	//取得表单资料
	$id=$_POST['operid'];
	$opername = $_POST['opername'];
	$docterid = $_POST['docter'];
	$opercost=$_POST['cost'];

	//建立数据库连接
	
	$link = create_connection();
	//执行select语句
	
	$sql = "SELECT * FROM operation_form WHERE operation_form.oper_ID = '$id'";
	$result = execute_sql($link,"hospital", $sql);
  
  if(mysqli_num_rows($result)>0){
  	echo "<script type='text/javascript'>alert('该手术已经存在!!!');location.href='operationinput.php';</script>";
  }
  else{
  	mysqli_free_result($result);
  	$sql="SELECT * FROM docter WHERE id = '$docterid'";
  	$result = execute_sql($link,"hospital", $sql);
  	
  	$obj = mysqli_fetch_object($result);

  	$sql="INSERT INTO operation_form(name,deptment,doc_id,oper_ID,money,doc_name) VALUES('$opername','$obj->dept_name','$docterid','$id','$opercost','$obj->name')";
  	$result = execute_sql($link,"hospital", $sql);
  	
  	echo "<script type='text/javascript'>alert('手术已创建!!!');location.href='operationinput.php';</script>";
  }
  
  
	mysqli_close($link);
	
?>
