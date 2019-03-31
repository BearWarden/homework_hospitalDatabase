<?php
  require_once("dbtools.inc.php");
	header("Content-type: text/html; charset=utf-8");

	//取得表单资料
	$name=$_POST['name'];
	$sex=$_POST['sex'];
	$id=$_POST['ID'];//获取病人身份证号
	$docid=$_POST['doc_id'];//获取医生身份证号
	$year=$_POST['old'];
	$phone=$_POST['phoneNum'];
	$date=$_POST['date'];
	
	//建立数据库连接
	$link = create_connection();
	//执行select语句
	$sql = "SELECT * FROM patients WHERE id ='$id'";
	$result=execute_sql($link,"hospital",$sql);

	if(mysqli_num_rows($result)==0){
		mysqli_free_result($result);
		
		
		$sql = "INSERT INTO patients (name,sex,year_old,id,phone_num) VALUES('$name','$sex','$year','$id','$phone')";
		$result = execute_sql($link,"hospital", $sql);
		
		$sql = "SELECT * FROM history WHERE pat_id ='$id'";
		$result = execute_sql($link,"hospital", $sql);
		if(mysqli_num_rows($result)==0){
			$sql = "INSERT INTO history (pat_id,doc_id,pat_name,pat_time) VALUES('$id','$docid','$name','$date')";
			$result = execute_sql($link,"hospital",$sql ); 
			echo "<script type='text/javascript'>alert('挂号成功!!!');location.href='result.php';</script>";
		}
		else{
			echo "<script type='text/javascript'>alert('该身份证已挂号!!!');location.href='getNum.php';</script>";
		}
		
	}
	else{
		mysqli_free_result($result);
		$sql = "SELECT * FROM history WHERE pat_id ='$id'";
		$result = execute_sql($link,"hospital", $sql);
		if(mysqli_num_rows($result)==0){
			$sql = "INSERT INTO history (pat_id,doc_id,pat_name,pat_time) VALUES('$id','$docid','$name','$date')";
			$result = execute_sql($link,"hospital",$sql ); 
			echo "<script type='text/javascript'>alert('挂号成功!!!');location.href='result.php';</script>";
		}
		else{
			echo "<script type='text/javascript'>alert('该身份证已挂号!!!');location.href='getNum.php';</script>";
		}
		
	}
	mysqli_close($link);
	
	
?>