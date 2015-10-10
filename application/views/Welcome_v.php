<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ShrHe 學習筆記</title>

    <link rel="icon" href="">
    <!-- Bootstrap Core CSS -->
    <link href="./assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./assets/css/welcome_layout.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="">ShrHe 筆記</a>
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
                            <li><a href="#"><i class="fa fa-html5"> HTML5</i></a></li>
                            <li><a href="#"><i class="fa fa-css3"> CSS3</i></a></li>
                            <li><a href="#">JS</a></li>
                            <li><a href="#">Bootstrap</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Back End <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">PHP</a></li>
                            <li><a href="#">Codeigniter</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">專案管理</a></li>
                            <li><a href="#">商用日文</a></li>
                            <li><a href="#">網頁程式設計(四)</a></li>
                            <li><a href="#">手機程式設計</a></li>
                            <li><a href="#">3D動畫設計</a></li>
                            <li><a href="#">雲端實務Python</a></li>
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
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="col-lg-12">
        </div>
        <!-- Marketing Icons Section -->
        <div class="row">
            <?php
                for($i = (count($note_data)-1) ; $i >= 0 ; $i--){
                    //抓取文章代碼
                    //$id = $note_data[$i]->id;
                    //$da = str_replace ("-","",$note_data[$i]->createdate);
                    //$note_id = $da.$id;
                    switch ($note_data[$i]->note_class) { //定義Pennal 顏色
                        case 'Codeigniter':
                            $class_color = 'primary';
                            break;
                        case 'PHP':
                            $class_color = 'primary';
                            break;
                        case 'Sublimetext':
                            $class_color = 'warning';
                            break;
                        default:
                            $class_color = 'default';
                            break; 
                    }
                    echo '<div class="col-md-6"><div class="panel panel-'.$class_color.'">';
                    echo '<div class="panel-heading"><h2><i class="fa fa-thumb-tack"> '.$note_data[$i]->note_class.'</i></h2></div>';
                    echo '<div class="panel-body"><div class="panel_img" style="background-image:url(assets/img/index/'.$note_data[$i]->note_id.'.png);"></div>';
                    echo '<h1 class="con-title">《'.$note_data[$i]->note_title.'》</h1>';    
                    echo '<h3 class="text-justify text-muted ">'.mb_substr( $note_data[$i]->note_contents,0,54,"utf-8").'...</h3>';
                    echo '<div class="info col-md-9"><h4><i class="fa fa-calendar"> : '.$note_data[$i]->createdate.'</i></h4></div>';
                    echo '<div class="info col-md-3"><h4><i class="fa fa-pencil-square-o"> : Shrhe</i></h4></div>';
                    echo '<a href="'.base_url().$note_data[$i]->note_id.'" class=" col-md-12 btn btn-'.$class_color.' btn-lg btn-block">了解更多..</a>';
                    echo '</div></div></div>';
                }
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
    <script src="./assets/js/v1.11.3.jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./assets/js/bootstrap.min.js"></script>

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
