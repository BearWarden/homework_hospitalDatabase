<!doctype html>
<html lang="en-gb" class="no-js">


<head>
<meta charset= "utf-8">
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

</head>

<body>
	
	
<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="index.php" class="navbar-brand scroll-top logo  animated bounceInLeft"><b>长安<i>医院</i></b></a> </div>

      <div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">
          <li ><a href="index.php" class="scroll-link">主页</a></li>
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
			<h2>预约结果</h2>
		</div>
		<div align='center'>
			<table width="50%" align="center" border="2">
				<tr>
					<td>病人身份证号</td>
					<td>手术编号</td>
					<td>手术时间</td>
				</tr>
					<?php
						require_once("dbtools.inc.php");
						$link = create_connection();
						$sql = "SELECT * FROM operation";
						$result=execute_sql($link,"hospital",$sql);

						while ($row = mysqli_fetch_object($result))
						  {
						
						     echo "<tr>";
						     echo "<td>$row->pat_id</td>";
						     echo "<td>$row->oper_ID</td>";
						     echo "<td>$row->oper_time</td>";
						     echo "</tr>";
						  }
			      mysqli_close($link);
					?>
			</table>
		</div>
	</div>
	
</section>





</body>

</html>