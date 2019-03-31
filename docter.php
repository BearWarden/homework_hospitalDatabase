<!doctype html>
<html lang="en-gb" class="no-js">
<head>
<meta charset= "utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>医生</title>
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
          <li><a href="index.php#plans" class="scroll-link">事务</a></li>
          <li class="active" id="firstLink"><a href="index.php#team" class="scroll-link">医生</a></li>
        </ul>
      </div>
 
    </nav>

  </div>

</header>

<div id="#top"></div>

<section id="home">
	<div class="container">
		
		<div class="heading text-center"> 
      <h2>管理者登录</h2>
    </div>
    
		<div align="center">
			<form action="getdocter.php" method="post">
				 <table width="20%" align="center" border="2">
        		<tr> 

          		<td width="100" align="center">
								<b>用户名</b>
							</td>
							<td>
								<input type="text" name="idname">
							</td>
        		</tr>
        		<tr>
							<td width="100" align="center">
								<b>密码</b>
							</td>
							<td>
							<input type="text" name="code">
							</td>
						</tr>
				 </table>
				 <table align="center">
						<tr>
							<td align="center"><input type="submit" value="提交"/></td>
							<td align="center"><input type="reset" value="取消"/></td>
						</tr>
      	 </table>
				
			</form>
		</div>		
				
	</div>			
</section>

</body>

</html>