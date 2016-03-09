<H2>範例:</H2>
<form action="" method="post" enctype="multipart/form-data" class="alert alert-warning">
	<?=$label?>
  <input type="file" name="upfile" style="margin-bottom: 10px;">
	<a name="thumbnail"></a>
  <input type="submit" class="btn btn-success btn-lg btn-block" name="sub" value="上傳圖片">
</form>
<div class="row">
  <div class="col-sm-4 col-md-4">
    <a class="thumbnail">
      <img src="assets/img/uploadfile/photo.jpg" alt="jpg格式圖片">
      <div class="caption">
    		<h3 class="text-center">jpg格式圖片</h3>
      </div>
    </a>
  </div>
  <div class="col-sm-4 col-md-4">
    <a class="thumbnail">
      <img src="assets/img/uploadfile/photo.png" alt="png格式圖片">
      <div class="caption">
    		<h3 class="text-center">png格式圖片</h3>
      </div>
    </a>
  </div>
  <div class="col-sm-4 col-md-4">
    <a class="thumbnail">
      <img src="assets/img/uploadfile/photo.gif" alt="gif格式圖片">
      <div class="caption">
    		<h3 class="text-center">gif格式圖片</h3>
      </div>
    </a>
  </div>
</div>
<hr>
<div class="con">本次練習在CI中運用POST上傳圖片後於網頁中顯示圖片，並且可以限制上傳圖片的格式及檔案大小。如果掌握好該圖片上傳的運用，可以運用的層級非常廣闊，是一個非常實用的技術。</div>
<div class="baner">
	<h2><i class="fa fa-bookmark"></i> 圖片上傳實作</h2>
	<h3>於網頁載入時判斷該圖檔案是否存在，如不存在則用替代圖片顯示，上傳圖片時限制該格式須為JPG、PNG、GIF，並且需小於50KB的圖片檔案，上傳完畢後顯示新圖片。</h3>
</div>
<div class=con>1. 首先須建立二個必要的檔案分別為控制器的upload_photo.php、視圖的upload_photo_v.php。</div>
<blockquote> <i class="fa fa-file-code-o"></i> upload_photo.php<pre><i class=pre>'專案'/application/controllers/upload_photo.php</i></pre> <i class="fa fa-file-code-o"></i> upload_photo_v.php<pre><i class=pre>'專案'/application/views/upload_photo_v.php</i></pre> </blockquote>
<div class=con>2. 上傳圖片必須使用到Form表單，所以我們先從使用者介面開始做起，開啟編輯upload_photo_v.php檔案，寫入<abbr title=HTML標籤:表單 data-toggle=tooltip>&lt;Form&gt;</abbr>標籤語法。</div>
<div class="panel panel-default">
    <div class=panel-heading style="font-size: 22px;color: #d9534f;"><i class="fa fa-pencil"></i> 表單標籤參數設定</div>
    <div class="panel-body panel-code">
        <script src=https://gist.github.com/tsau-shrhe/bd6a36bfcc9bb0e3007a.js?file=Upload_photo_v-01.php></script>
    </div>
</div>
<blockquote> <i class="fa fa-exclamation-triangle"></i> 使用Form傳送圖片必須使用post方法並編碼必須為multipart/form-data，否則會傳送失敗。 </blockquote>
<div class=con>3. 接著在表單下面寫入要顯示圖片的標籤<abbr title=HTML標籤:圖片 data-toggle=tooltip>&lt;img&gt;</abbr>，這樣我們視圖的部分就完成了。</div>
<div class="panel panel-default">
    <div class=panel-heading style="font-size: 22px;color: #d9534f;"><i class="fa fa-pencil"></i> 圖片標籤參數設定</div>
    <div class="panel-body panel-code">
        <script src=https://gist.github.com/tsau-shrhe/bd6a36bfcc9bb0e3007a.js?file=Upload_photo_v-02.php></script>
    </div>
</div>
<div class="panel panel-default">
    <div class=panel-heading style="font-size: 22px;color: #d9534f;"><i class="fa fa-file-code-o"></i> upload_photo_v.php(完成)</div>
    <div class="panel-body panel-code">
        <script src=https://gist.github.com/tsau-shrhe/bd6a36bfcc9bb0e3007a.js?file=Upload_photo_v.php></script>
    </div>
</div>
<div class=con>4. 完成了視圖部分，開始動手寫控制器，控制器我們共分成四個階段來編寫程式碼，第一階段就是建立類別及功能。</div>
<div class="panel panel-default">
    <div class=panel-heading style="font-size: 22px;color: #d9534f;"><i class="fa fa-pencil"></i> 建立類別及功能</div>
    <div class="panel-body panel-code">
        <script src=https://gist.github.com/tsau-shrhe/bd6a36bfcc9bb0e3007a.js?file=Upload_photo-01.php></script>
    </div>
</div>
<blockquote> <i class="fa fa-exclamation-triangle"></i> 檔名與class名需相同並首字都需大寫。否則容易產生錯誤!! </blockquote>
<div class=con>5. 第二階段我們要使用PHP函數<abbr title=PHP函數:判斷該路徑檔案是否存在 data-toggle=tooltip>&lt;is_file&gt;</abbr>判斷網頁要顯示的圖片檔案是否存在，如果存在就將檔案名稱指定給變數<abbr title="如 : photo.jpg" data-toggle=tooltip>$img_file</abbr>，如果檔案不存在就指定為noimg.jpg。</div>
<div class="panel panel-default">
    <div class=panel-heading style="font-size: 22px;color: #d9534f;"><i class="fa fa-pencil"></i> 判斷檔案並指定檔案名稱</div>
    <div class="panel-body panel-code">
        <script src=https://gist.github.com/tsau-shrhe/bd6a36bfcc9bb0e3007a.js?file=Upload_photo-02.php></script>
    </div>
</div>
<div class=con>6. 第三階段先指定給使用者的提示文字並檢查$_POST["sub"]是否為空值，如不為空值則代表該網頁已經是經由POST傳送的網頁，則使用$_FILES[""]上傳檔案，於上傳檔案時檢查檔案大小及檔案格式，如不符合規定則顯示錯誤訊息並不執行複寫的指令，如都符合規定則執行複寫檔案及重新導向網頁。</div>
<div class="panel panel-default">
    <div class=panel-heading style="font-size: 22px;color: #d9534f;"><i class="fa fa-pencil"></i> 判斷圖片檔案及上傳</div>
    <div class="panel-body panel-code">
        <script src=https://gist.github.com/tsau-shrhe/bd6a36bfcc9bb0e3007a.js?file=Upload_photo-03.php></script>
    </div>
</div>
<div class=con>7. 最後階段建立$data的陣列，並將變數$img_file及$label的資料加入陣列中，並使用load view方法載入視圖，這樣控制器的程式碼就完成囉。</div>
<div class="panel panel-default">
    <div class=panel-heading style="font-size: 22px;color: #d9534f;"><i class="fa fa-pencil"></i> 陣列寫入及調用視圖</div>
    <div class="panel-body panel-code">
        <script src=https://gist.github.com/tsau-shrhe/bd6a36bfcc9bb0e3007a.js?file=Upload_photo-04.php></script>
    </div>
</div>
<div class="panel panel-default">
    <div class=panel-heading style="font-size: 22px;color: #d9534f;"><i class="fa fa-pencil"></i> Upload_photo.php(完成)</div>
    <div class="panel-body panel-code">
        <script src=https://gist.github.com/tsau-shrhe/bd6a36bfcc9bb0e3007a.js?file=Upload_photo.php></script>
    </div>
</div>
<div class=con>以上就完成了本次的實作，目前只學到基本的圖片上傳功能，還有更多的檔案上傳及使用技術還要在更加精進學習。</div>
<hr>
<div class="panel panel-info">
	<div class="panel-heading text-center"><h3>本次學習重點</h3></div>
		<div class=panel-body>
			<i class="fa fa-check-square-o"> 取得上傳檔案內容 :</i><pre><i class=pre>$file = $_FILES["upfile"];</i></pre>
			<i class="fa fa-check-square-o"> 取得上傳檔案容量 :</i><pre><i class=pre>$file['size']</i></pre>
			<i class="fa fa-check-square-o"> 取得上傳檔案格式 :</i><pre><i class=pre>$file['type']</i></pre>
			<i class="fa fa-check-square-o"> 取得上傳檔案暫存檔名 :</i><pre><i class=pre>$file['tmp_name']</i></pre>
			<i class="fa fa-check-square-o"> 移動上傳檔案函數 : </i><pre><i class=pre>move_uploaded_file ('檔案名稱','檔案新位置');</i></pre>
			<i class="fa fa-check-square-o"> 刪除上傳檔案函數 :</i><pre><i class=pre>unlink('檔案名稱位置'); EX: 'Test/file.txt'</i></pre>
		</div>
</div>