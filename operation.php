<!doctype html>
<html lang="en-gb" class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html" charset= "utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>手术预约</title>
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="css/animate.css" rel="stylesheet" media="screen">
<link href="flexslider/flexslider.css" rel="stylesheet" />
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css" />
<link href="font/css/font-awesome.min.css" rel="stylesheet">


<script type="text/javascript">
	function deleteoperation(){
		document.form.action="deleteoperation.php";
	}
</script>


</head>

<body>
	
	
<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> 
        	<span class="sr-only">Toggle navigation</span> 
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span> 
        	<span class="icon-bar"></span> 
        </button>
       
        <a href="index.php" class="navbar-brand scroll-top logo  animated bounceInLeft"><b>长安<i>医院</i></b></a> </div>
     
      <div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">
          <li><a href="index.php" class="scroll-link">主页</a></li>
          <li><a href="index.php#work" class="scroll-link">简介</a></li>
          <li class="active" id="firstLink"><a href="index.php#plans" class="scroll-link">事务</a></li>
          <li><a href="index.php#team" class="scroll-link">医生</a></li>
        </ul>
      </div>
  
    </nav>

  </div>

</header>

<div id="#top"></div>


<section id="home">
	<div class="container">
		<div class="heading text-center"> 
      <h2>手术预约</h2>
    </div>
		<div align="center">
			<form id="operation" name="form" action="dooperation.php" method="post">
				<table width="60%" align="center" border="2">
					<tbody>
							<?php
									require_once("dbtools.inc.php");
           	 			$link = create_connection();
									$sql = "SELECT * FROM operation_form";
          				$result = execute_sql($link, "hospital", $sql);
			            while ($row = mysqli_fetch_object($result))
			            {
			              echo "<tr>";
			              echo "<td>";
			              echo "<input type='radio' name='operid' value='$row->oper_ID'>$row->oper_ID</td>";
			              echo "<td>$row->name</td>";
			              echo "<td>$row->doc_id</td>";
			              echo "<td>$row->doc_name</td>";
			              echo "<td>$row->deptment</td>";
			              echo "<td>$row->money</td>";
			              echo "</tr>";
			            }
            			mysqli_close($link);
          			?>
          </tbody>
         </table> 
        <table  align="center">
						<tr>
							<td width="100" align="center">
							<b>姓名</b>
							</td>
							<td>
							<input type="text" name="name">
							</td>
						</tr>
						
						<tr>
							<td width="100" align="center">
								<b>年龄</b>
							</td>
							<td>
							<input type="text" name="old">
							</td>
						</tr>
						
						<tr>
							<td width="100" align="center">
								<b>身份证号</b>
							</td>
							<td>
							<input type="text" name="ID">
							</td>
						</tr>
						
						<tr>
							<td width="100" align="center">
								<b>性别</b>
							</td>
							<td>男
								<input type="radio" name="sex" value="男">						
							</td>
							<td>女
								<input type="radio" name="sex" value="女">						
							</td>
						</tr>
						<tr>
							<td align="center">
								<b>联系电话</b>
							</td>
							<td>
								<input type="text" name="phoneNum">
							</td>
						</tr>
						<tr>
							<td align="center"><b>来院时间</b></td>
							<td><input type="text" name="date"></td>
						</tr>
						<tr>
							<td align="center"><input type="submit" value="提交"/></td>
							<td align="center"><input type="reset" value="取消"/></td>
							<td align="center"><input type="submit" value="手术结束" onclick="deleteoperation()"/></td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	
	</div>
	
</section>




</body>

</html>