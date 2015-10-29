<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?php echo base_url().'assets/img/nav/shrhe.ico';?>">
        <title>ShrHe 學習筆記</title>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url().'assets/css/bootstrap/bootstrap.min.css';?>" rel="stylesheet">
        <!-- CSS -->
        <link href="<?php echo base_url().'assets/css/Page_layout.css';?>" rel="stylesheet">
        <!-- Custom Fonts -->
    	<link href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css';?>" rel="stylesheet" type="text/css">
        <!-- sprite css -->
        <link href="<?php echo base_url().'assets/css/sprite.css';?>" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nhp">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">ShrHe 筆記</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Front End <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url().'Page/Tag/HTML5'; ?>"><i class="sprite sprite-html5">　 HTML5</i></a></li>
                            <li><a href="<?php echo base_url().'Page/Tag/CSS3'; ?>"><i class="sprite sprite-css3">　 CSS3</i></a></li>
                            <li><a href="<?php echo base_url().'Page/Tag/Javascript'; ?>"><i class="sprite sprite-js">　 Javascript</i></a></li>
                            <li><a href="<?php echo base_url().'Page/Tag/Bootstrap'; ?>"><i class="sprite sprite-bootstrap">　 Bootstrap</i></a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Back End <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url().'Page/Tag/PHP'; ?>"><i class="sprite sprite-php">　 PHP</i></a></li>
                            <li><a href="<?php echo base_url().'Page/Tag/Codeigniter'; ?>"><i class="sprite sprite-codeigniter">　 Codeigniter</i></a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url().'Page/Tag/Python'; ?>"><i class="sprite sprite-python">　 Python</i></a></li>
                            <li><a href="<?php echo base_url().'Page/Tag/SublimeText'; ?>"><i class="sprite sprite-sublimetext">　 SublimeText</i></a></li>
                        </ul>
                    </li>
                    <li>
                    <form class="navbar-form">
                        <div class="form-group">
                        <input type="text" placeholder="搜尋文章..." class="form-control">                        
                        </div>
                        <button type="submit" class="btn btn-success"><i class="fa fa-search"></i></button>
                    </form></li>                
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation -->

    <!--container-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header text-center">【<?php echo str_replace("|","",$note_data[0]->note_title); ?>】</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">   
                <p class="ti"><i class="fa fa-clock-o fa-2x"> <?php echo $note_data[0]->createdate; ?></i></p>
                <p class="cl"><i class="fa fa-tags fa-2x"> <?php echo $note_data[0]->note_class; ?></i></p>
                <hr><!--文章內容-->
                <div class="con">             
                <?php
                    //內容字串處理 
                    $cont = str_replace("|","",$note_data[0]->note_contents);
                    $cont = str_replace("../../",base_url(),$cont); 
                    echo $cont;
                ?>
                </div>                
                <hr><!--文章內容-->
                <!-- Comments Form -->
                <div class="well">
                    <h4><i class="fa fa-comments"> 留言:</i></h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3">功能尚未完成</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" disabled="disabled">送出</button>
                    </form>
                </div>
                <!-- Comments Form -->
            </div>
        </div>
        <hr>
    	<!-- Footer -->
    	<footer>
            <h4 class="text-center"><strong>Copyright © 2015 by Shrhe</strong></h4>
        </footer>
        <!-- Footer -->
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/js/v1.11.3.jquery.min.js';?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>

    <!--滾動HEADER加陰影語法-->
    <script>
        $(window).load(function() {
        var header = $('.navbar');
            if (header.offset().top > 5) {
                if (!header.hasClass('shadow')) {
                    header.addClass('shadow');
                }
            } else {
                header.removeClass('shadow');
            }
        $(window).scroll(function(e) {
            if (header.offset().top > 5) {
                if (!header.hasClass('shadow')) {
                    header.addClass('shadow');
                }
            } else {
                header.removeClass('shadow');
            }
            });
        });
    </script>

</body>

</html>
