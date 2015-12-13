<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <!-- head設定 -->
    <?php include('head_Setting.php'); ?>
    <!-- CSS -->
    <link href="assets/css/welcome_layout.css" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <?php include('navbar.php'); ?>
    <!-- container -->
    <div class="container">
    <?php if (count($note_data) == 0): ?>
        <hr><div class="alert alert-warning" role="alert"><h1 class="text-center"><strong>Sorry! 目前尚未有相關文章喔!</strong></h1></div>
    <?php else: ?>
        <!--row-->
        <div class="row">
        <?php for ($i = ($page_num -1 ) * $config['per_page'] ; $i <= ($page_num * $config['per_page'])-1 ; $i++): ?>
            <?php if (!empty($note_data[$i]->note_title)): ?>
                <?php
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
                ?>
            <div class="col-md-6 panel-box"><div class="panel panel-<?=$class_color?>">
            <div class="panel-heading"><h2><i class="fa fa-thumb-tack"> <?=$note_data[$i]->note_class?></i></h2></div>
            <div class="panel-body"><div class="panel_img" style="background-image:url(assets/img/index/<?=$note_data[$i]->note_id?>.png);"></div>
            <h1 class="con-title">《<?=substr($note_data[$i]->note_title,0,$ti_num)?>》</h1>
            <h4 class="text-justify text-muted "><?=mb_substr($cont,1,50,"utf-8")?>...</h3>
            <div class="info col-md-9"><h4><i class="fa fa-calendar"> : <?=$note_data[$i]->createdate?></i></h4></div>
            <div class="info col-md-3"><h4><i class="fa fa-pencil-square-o"> : Shrhe</i></h4></div>
            <a href="<?=$url_add.$note_data[$i]->note_id?>" class=" col-md-12 btn btn-<?=$class_color?> btn-lg btn-block">查看筆記..</a>
            </div></div></div>
            <?php endif ?>
        <?php endfor ?>
        </div>
        <!--row-->
    <?php endif ?>
        <div class="container">
            <?=$this->pagination->create_links();?>
        </div>
        <hr>
        <!-- Footer -->
        <footer>
            <h4 class="text-center">
                <strong>Copyright © 2015 by Shrhe</strong>
            </h4>
            <h6 class="text-center"><a href="<?=base_url().'Welcome/bk1'?>">第一版</a> | <a href="<?=base_url().'Welcome/bk2'?>">第二版</a></h6>
        </footer>
    </div>
    <!--container -->
</body>
</html>
