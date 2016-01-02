<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <!-- head設定 -->
    <?php include('head_Setting.php'); ?>
    <title><?=str_replace("|","",$note_data[0]->note_title); ?> - 【ShrHe 學習筆記】</title>
    <!-- CSS -->
    <link href="assets/css/page_id.css" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <?php include('navbar.php'); ?>
    <!--container-->
    <div class="container">
    <?php if (empty($note_data[0]->note_title)): //判斷是否有該篇文章?>
        <hr><div class="alert alert-warning" role="alert"><h1 class="text-center"><strong>Sorry! 目前尚未有相關文章喔!</strong></h1></div>
    <?php else: ?>
        <div class="row">
            <div class="col-md-12">
                <div class="page-header text-center">【<?php echo str_replace("|","",$note_data[0]->note_title); ?>】</div>
            </div>
        </div>
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 alert alert-danger">
                <div class="col-sm-6 col-xs-12 "><i class="fa fa-clock-o fa-2x"> <?php echo $note_data[0]->createdate; ?></i></div>
                <div class="col-sm-6 col-xs-12 info_class"><i class="fa fa-tags fa-2x"> <?php echo $note_data[0]->note_class; ?></i></div>
            </div>
        </div></div>
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 alert alert-danger">
                <!--文章內容-->
                <div class="con text-justify">
                <?php
                    if ($note_data[0]->test === true) {
                        //page編輯測試用頁
                        include('page_v_id_edit_con.php');
                    }else{
                        //內容字串處理
                        $cont = str_replace("|","",$note_data[0]->note_contents);
                        //$cont = str_replace("../../",base_url(),$cont);
                        echo $cont;
                    }
                ?>
                </div>
                <!-- /.文章內容-->
                <!-- 分享列表 -->
                <br>
                <hr>
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <!-- 分享按鈕 -->
                            <?php include('sharebtn.php'); ?>
                        <!-- ./分享按鈕 -->
                    </div>
                </div>
                <!-- /.分享列表 -->
            </div>
        </div>
        <!-- 留言板 -->
        <div class="row">
            <div class="col-md-12 alert alert-success">
                <?php include('disqus.php'); ?>
            </div>
        </div>
        <!-- /.留言板 -->
        </div>
    <?php endif ?>
        <hr>
        <!-- Footer -->
        <footer>
            <h4 class="text-center"><strong>Copyright © 2015 by Shrhe</strong></h4>
        </footer>
        <!-- /.Footer -->
    </div>
    <!-- /.container -->
</body>

</html>
