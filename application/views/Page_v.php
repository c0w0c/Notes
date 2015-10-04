<!DOCTYPE html>
<html lang="zh">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ShrHe 學習筆記</title>
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
		</style>
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<h1 class="navbar-text text-center">
					<a style="color:#666666;text-decoration: none;" href="#">
						<strong><!--專案分類--><?php echo $note_list[0]->note_class ;?></strong>
					</a>
					</h1>
				</div>
			</div>
		</nav>
		<!--=================================摩西分海========================================-->
		<div class="jumbotron" style="background-color: #FFC2C2 !important;margin-bottom: 0px;">
			<div class="container">
				<H1 class="text-center"><strong>《<!--功能摘要變數--><?php echo $note_list[0]->note_title ;?>》</strong></H1>
				<br>
				<div class="alert alert-warning">
					<H4>功能說明:</H4>
					<H4><!--功能摘要變數--><?php echo $note_list[0]->note_summary ;?></H4>
				</div>
				<div class="alert alert-danger">
					<p>範例:</p><br>
					<!--範例變數-->
				</div>
				<?php  
				$url = base_url().'Page/Number/'.$note_list[0]->note_id ;
				echo '<h4>連結網址:<a href="'.$url.'" target="_blank">'.$url.'</a></h4>';
				?>
				<h6>建立日期 :<?php echo $note_list[0]->createdate ;?></h6>
				<hr>
				<br>
				<div class="panel panel-default">
					<div class="panel-heading text-center"><H3><strong>功能製作摘要</strong></H3></div>
					<div class="panel-body">
						<ol style="font-size: 18pt;">
						<!--製作摘要內容變數-->
						<?php echo $note_contents[0]->program ; ?>
						</ol>
					</div>
				</div>
				<br>
				<div class="panel panel-default">
					<div class="panel-heading text-center"><H3><strong>本次學習重點</strong></H3></div>
					<div class="panel-body">
						<ol style="font-size: 18pt;">
						<!--學習重點內容變數-->
						<?php echo $note_contents[0]->point ; ?>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!--=================================摩西分海========================================-->
		<footer class="footer">
			<div class="container" >
				<h4 class="text-muted text-center" style="margin-top: 15px;">
				<strong>Copyright © 2015 by Shrhe</strong>
				</h4>
			</div>
		</footer>
		<!-- jQuery -->
		<script src="<?php echo base_url().'assets/js/v1.11.3.jquery.min.js';?>"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>
	</body>
</html>