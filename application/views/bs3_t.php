<!DOCTYPE html>
<html lang="zh">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $title ?></title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap/bootstrap.min.css';?>">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			blockquote {
				background:;
				color:#B2B2B2;
			 	border-color:#FF8080;
			}
			.jumbotron {
				margin-top: -30px;
			}
			footer{
				height: 50px;
  				background-color: #f5f5f5;
			}
			.homebtn{
  			position: fixed;
  			bottom: 10%;
  			right: 0;
  			width: 70px;
  			height: 0px;
  			text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="homebtn"><a href="<?php echo substr_replace(base_url(),'',-1) ;?>">回首頁</a></div>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<h1 class="navbar-text text-center">
						<a style="color:#666666;text-decoration: none;" href="#">
							<strong><?php echo $header_t ;?></strong>
						</a>
					</h1>
				</div>
			</div>
		</nav>
		