<!DOCTYPE html>
<html lang="zh">
	<head>
    <!-- head設定 -->
    <?php include('head_Setting.php'); ?>
		<title><?php echo $title ?></title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
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
		<div class="homebtn"><a href="<?=base_url(); ?>">回首頁</a></div>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<h1 class="navbar-text text-center">
						<strong><?php echo $header_t ;?></strong>
					</h1>
				</div>
			</div>
		</nav>
		