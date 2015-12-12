<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <!-- head設定 -->
    <?php include('head_Setting.php'); ?>
    <!-- CSS -->
    <link href="assets/css/page_layout.css" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <?php include('navbar.php'); ?>
    <!--container-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header text-center">【<?php echo str_replace("|","",$note_data[0]->note_title); ?>】</div>
            </div>
        </div>
        <div class="container-fluid">
        <div class="row">
                <div class="col-md-12 col-sm-12 alert alert-danger">
                    <div class="col-md-9 col-sm-9"><i class="fa fa-clock-o fa-2x"> <?php echo $note_data[0]->createdate; ?></i></div>
                    <div class="col-md-3 col-sm-3 cl2"><i class="fa fa-tags fa-2x"> <?php echo $note_data[0]->note_class; ?></i></div>
                </div>
        </div></div>
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 alert alert-danger">
                <!--文章內容-->
                <div class="con">
                <?php
                    if ($test === true) {
                        //測試用頁
                        include('page_v_id_edit_con.php');
                    }else{
                        //內容字串處理
                        $cont = str_replace("|","",$note_data[0]->note_contents);
                        //$cont = str_replace("../../",base_url(),$cont);
                        echo $cont;
                    }
                ?>
                </div>
                <!--文章內容結束-->
            </div>
        </div>
        <!-- 留言板 -->
        <div class="row">
            <div class="col-md-12 alert alert-success">
                <?php include('disqus.php'); ?>
            </div>
        </div>
        </div>
        <!-- 留言板結束 -->
    	<!-- Footer -->
        <hr>
    	<footer>
            <h4 class="text-center"><strong>Copyright © 2015 by Shrhe</strong></h4>
        </footer>
        <!-- Footer -->
    </div>
    <!-- /.container -->
</body>

</html>
