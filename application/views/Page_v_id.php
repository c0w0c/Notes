<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <!-- head設定 -->
    <?php include('head_Setting.php'); ?>
    <!-- CSS -->
    <link href="assets/css/Page_layout.css" rel="stylesheet">        
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
        <div class="row">
            <div class="col-md-12">   
                <p class="ti"><i class="fa fa-clock-o fa-2x"> <?php echo $note_data[0]->createdate; ?></i></p>
                <p class="cl"><i class="fa fa-tags fa-2x"> <?php echo $note_data[0]->note_class; ?></i></p>
                <hr><!--文章內容-->
                <div class="con">             
                <?php
                    //內容字串處理 
                    $cont = str_replace("|","",$note_data[0]->note_contents);
                    //$cont = str_replace("../../",base_url(),$cont); 
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
</body>

</html>
