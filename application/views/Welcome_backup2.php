<!DOCTYPE html>
<html  lang="zh-Hant-TW">
<!--第二版首頁-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="">
        <title>ShrHe 學習筆記</title>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url().'assets/css/bootstrap/bootstrap.min.css';?>" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url().'assets/css/bootstrap/starter-template.css';?>" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url().'assets/css/bootstrap/carousel.css';?>" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
        .navbar{
            background-color: #b2b2b2;
        }
        footer{
            background-color: #b2b2b2;
            margin-bottom: -40px;
        }
        .jumbotron{
            background-color: #dcdcdc;
            margin-bottom: -40px;
        }
        a , a:hover {
            text-decoration:none;
            color :black;
        }
        .r1{
            background: #F8F8F8;
            border-radius:15px;
            box-shadow:4px 4px 12px 4px rgba(20%,20%,40%,0.5);
        }
        .img-responsive{
            margin-top: 10px;
            margin-bottom: 10px;
            border-radius: 15px;
        }
        .col{
            margin: 0px auto;
        }
        .btn01{
            height: 40px;
            background: #FBFBFB;
            border-radius:5px;
            box-shadow:1px 1px 8px 3px rgba(20%,20%,40%,0.5); 
        }
        .btn01:hover{
            box-shadow:4px 4px 20px 10px rgba(20%,20%,40%,0.5);
            transition: box-shadow 0.6s ;
        }
        .btntext{
            padding:5px;
        }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">ShrHe 筆記</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Web<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">HMTL</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">JS</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PHP<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">PHP</a></li>
                                <li><a href="#">Codeigniter</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">學務專區<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">專案管理</a></li>
                                <li><a href="#">商用日文</a></li>
                                <li><a href="#">網頁程式設計(四)</a></li>
                                <li><a href="#">手機程式設計</a></li>
                                <li><a href="#">3D動畫設計</a></li>
                                <li><a href="#">雲端實務Python</a></li>
                            </ul>
                        </li>
                        <li><a href="#">ABOUT</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <!-- jumbotron-->
        <div class="jumbotron">
            <div class="container">
                <?php 
                    for($i = (count($note_data)-1) ; $i >= 0 ; $i--){
                        //抓取文章代碼
                        //$id = $note_data[$i]->id;
                        //$da = str_replace ("-","",$note_data[$i]->createdate);
                        //$note_id = $da.$id;
                        
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
                        
                            //左文右圖
                            //echo '';
                            //echo '<div class="row r1"><div class="col col-md-5 col-md-push-7"><center>';
                            //echo '<img class="img-responsive" src="'.base_url().'assets/img/index/'.$note_data[$i]->note_id.'.png" style="height:300px;" data-src="holder.js/500x400/auto" alt="image"></center></div><div class="col-md-7 col-md-pull-5">';
                            //echo '<h1 class="text-center"><strong>《'.substr($note_data[$i]->note_title,0,$ti_num).'》</strong></h1>';
                            //echo '<h3 class="text-justify text-muted">'.mb_substr($cont,1,45,"utf-8").'...</h3><br><div class="row">';
                            //echo '<div class="col-md-7"><h4>類別:'.$note_data[$i]->note_class.'</h4></div>';
                            //echo '<div class="col-md-5"><h4>建立日期:'.$note_data[$i]->createdate.'</h4></div>';
                            //echo '<div class="col-md-12"><a href= '.base_url().$note_data[$i]->note_id.'><div class="btn01"><h3 class="btntext text-center">詳細閱讀</h3></div></a></div></br>';
                            //echo '</div></div></div><hr>';
                            //左文右圖end

                            //左圖右文
                            echo '<div class="row r1"><div class="col-md-5"><center>';
                            echo '<img class="img-responsive" src="'.base_url().'assets/img/index/'.$note_data[$i]->note_id.'.png" style="height:300px;" data-src="holder.js/500x400/auto" alt="image"></center></div><div class="col-md-7">';
                            echo '<h1 class="text-center"><strong>《'.substr($note_data[$i]->note_title,0,$ti_num).'》</strong></h1>';
                            echo '<h3 class="text-justify text-muted">'.mb_substr($cont,1,45,"utf-8").'...</h3><br><div class="row">';
                            echo '<div class="col-md-7"><h4>類別:'.$note_data[$i]->note_class.'</h4></div>';
                            echo '<div class="col-md-5"><h4>建立日期:'.$note_data[$i]->createdate.'</h4></div>';
                            echo '<div class="col-md-12"><a href= '.base_url().$url_add.$note_data[$i]->note_id.'><div class="btn01"><h3 class="btntext text-center">詳細閱讀</h3></div></a></div></br>';
                            echo '</div></div></div><hr>';
                            //左圖右文end
                    }
                ?>
            </div>
        </div>
        <!-- jumbotron結束-->
        <footer class="footer">
            <div class="container" >
                <h4 class="text-muted text-center">
                <strong>Copyright © 2015 by Shrhe</strong>
                </h4>
            </div>
        </footer>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url().'assets/js/v1.11.3.jquery.min.js';?>"></script>
        <script src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="<?php echo base_url().'assets/js/holder.min.js';?>"></script>
    </body>
</html>