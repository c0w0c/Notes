<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?php echo base_url().'assets/img/nav/shrhe.ico';?>">
        <title>ShrHe 學習筆記</title>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url().'assets/css/bootstrap/bootstrap.min.css';?>" rel="stylesheet">
        <!-- CSS -->
        <link href="<?php echo base_url().'assets/css/welcome_layout.css';?>" rel="stylesheet">
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

    <!-- Page Content -->
    <div class="container">
        <div class="col-lg-12">
        </div>
        <!-- Marketing Icons Section -->
        <div class="row">
            <?php
            if (count($note_data) == 0 ) {
                echo '<div class="alert alert-warning" role="alert"><h1 class="text-center"><strong>Sorry! 目前尚未有相關文章喔!</strong></h1></div>';
            }else{
                for($i = (count($note_data)-1) ; $i >= 0 ; $i--){
                    //抓取文章代碼
                    //$id = $note_data[$i]->id;
                    //$da = str_replace ("-","",$note_data[$i]->createdate);
                    //$note_id = $da.$id;
                    
                    //定義Pennal 顏色
                    switch ($note_data[$i]->note_class) { 
                        case 'Codeigniter':
                            $class_color = 'primary';
                            break;
                        case 'PHP':
                            $class_color = 'primary';
                            break;
                        case 'SublimeText':
                            $class_color = 'warning';
                            break;
                        case 'CSS3':
                            $class_color = 'info';
                            break;
                        default:
                            $class_color = 'default';
                            break; 
                    }

                    //判斷是否為Codeigniter的連結如果不是就加頁數
                    if ($note_data[$i]->note_class != 'Codeigniter') {
                        $url_add = 'Page/Number/';
                    }else{
                        $url_add = '';
                    }

                    //抓取title需要使用的字元數
                    $ti_num = strpos($note_data[$i]->note_title,"|");

                    //抓取概要內容
                    $cont = strstr($note_data[$i]->note_contents,"|");

                    echo '<div class="col-md-6 panel-box"><div class="panel panel-'.$class_color.'">';
                    echo '<div class="panel-heading"><h2><i class="fa fa-thumb-tack"> '.$note_data[$i]->note_class.'</i></h2></div>';
                    echo '<div class="panel-body"><div class="panel_img" style="background-image:url('.base_url().'assets/img/index/'.$note_data[$i]->note_id.'.png);"></div>';
                    echo '<h1 class="con-title">《'.substr($note_data[$i]->note_title,0,$ti_num).'》</h1>';    
                    echo '<h4 class="text-justify text-muted ">'.mb_substr($cont,1,50,"utf-8").'...</h3>';
                    echo '<div class="info col-md-9"><h4><i class="fa fa-calendar"> : '.$note_data[$i]->createdate.'</i></h4></div>';
                    echo '<div class="info col-md-3"><h4><i class="fa fa-pencil-square-o"> : Shrhe</i></h4></div>';
                    echo '<a href="'.base_url().$url_add.$note_data[$i]->note_id.'" class=" col-md-12 btn btn-'.$class_color.' btn-lg btn-block">查看筆記..</a>';
                    echo '</div></div></div>';
                }}
            ?>
        <!-- /.row -->   
    </div>
<hr>
    <!-- Footer -->
    <footer>
        <h4 class="text-center">
            <strong>Copyright © 2015 by Shrhe</strong>
        </h4>
        <h6 class="text-center"><a href="<?php echo base_url().'Welcome/bk1' ?>">第一版</a> | <a href="<?php echo base_url().'Welcome/bk2' ?>">第二版</a></h6>
    </footer>
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
