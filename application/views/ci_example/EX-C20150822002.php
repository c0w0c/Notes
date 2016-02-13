<H2>範例:</H2>
<form action="/Notes/C20150822002" method="post" enctype="multipart/form-data" class="alert alert-warning">
	<?=$label?>
  <input type="file" name="upfile" style="margin-bottom: 10px;">
	<a name="thumbnail"></a>
  <input type="submit" class="btn btn-success btn-lg btn-block" name="sub" value="上傳圖片">
</form>
<div class="row">
  <div class="col-sm-4 col-md-4">
    <a class="thumbnail">
      <img src="assets/img/uploadfile/<?=$img_file['jpg']?>" alt="jpg格式圖片">
      <div class="caption">
    		<h3 class="text-center">jpg格式圖片</h3>
      </div>
    </a>
  </div>
  <div class="col-sm-4 col-md-4">
    <a class="thumbnail">
      <img src="assets/img/uploadfile/<?=$img_file['png']?>" alt="png格式圖片">
      <div class="caption">
    		<h3 class="text-center">png格式圖片</h3>
      </div>
    </a>
  </div>
  <div class="col-sm-4 col-md-4">
    <a class="thumbnail">
      <img src="assets/img/uploadfile/<?=$img_file['gif']?>" alt="gif格式圖片">
      <div class="caption">
    		<h3 class="text-center">gif格式圖片</h3>
      </div>
    </a>
  </div>
</div>
<hr>