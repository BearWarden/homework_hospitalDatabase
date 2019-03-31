<?php
  require_once("dbtools.inc.php");
	header("Content-type: text/html; charset=utf-8");
	
	//取得表单资料
	$name=$_POST['name'];
	$sex=$_POST['sex'];
	$id=$_POST['ID'];
	$year=$_POST['old'];
	$deptment=$_POST['subject'];
	$roomNum=$_POST['roomnum'];
	$bedNum = $_POST['bednum'];
	$phone=$_POST['phoneNum'];
	$date=$_POST['date'];
	
	
	switch($deptment)
    {
    	case'内科' :
    		$flat = 1;
				break;
			case '外科':
				$flat =2;
				break;
			case '儿科':
				$flat =3;
				break;
			case '妇科':
				$flat =4;
				break;
			case '男科':
				$flat =5;
				break;
			case '肿瘤科':
				$flat =6;
				break;
			case '皮肤性病科':
				$flat =7;
				break;
			case '传染科':
				$flat =8;
				break;
    }
   
	
	
	
	//建立数据库连接
	$link = create_connection();
	//执行select语句
	$sql = "SELECT * FROM livehospital WHERE pat_id ='$id'";
	$result=execute_sql($link,"hospital",$sql);

	if(mysqli_num_rows($result)==0){
		mysqli_free_result($result);
		
		$sql = "INSERT INTO patients(name,sex,year_old,id,phone_num) VALUES('$name','$sex','$year','$id','$phone')";
		$result = execute_sql($link,"hospital", $sql);
    
    $sql = "INSERT INTO livehospital(pat_id,flat,room_ID,bed_ID,dept_name) VALUES('$id','$flat','$roomNum','$bedNum','$deptment')";
		$result = execute_sql($link,"hospital", $sql);
	 	
		header("location:hospitalresult.php");
	}
	else{
		mysqli_free_result($result);
		
		echo "<script type='text/javascript'>alert('该房间已预订');location.href='liveinhospital.html';</script>";

		header("location:hospitalresult.php");
	}
	mysqli_close($link);
	
?>