
<div class="jumbotron" style="background-color: #FFC2C2 !important;margin-bottom: 0px;">
	<div class="container">
		<H1 class="text-center"><strong>《<?php echo $pre;?>》</strong></H1>
		<br>
		<div class="alert alert-warning">
		<H4>功能說明:</H4>
		<H4>限制上傳圖片格式為(JPG / PNG / GIF)及檔案容量小於500kb以下的圖片
			，上傳完閉後顯示圖片。</H4>
		</div>
		<div class="alert alert-danger">
		<p>範例:</p><br>	
		<form action="/CI/Photo_upload/upload" method="post" enctype="multipart/form-data">
		<input type="file" name="upfile"><br>
		<input type="submit" class="btn btn-default" name="sub" value="上傳">
		</form><br>	
		</div>
		<h4>連結網址:<a href="<?php echo $url;?>" target="_blank"><?php echo $url;?></a></h4>
		<h6>建立日期 : <?php echo $c_date;?></h6>
		<hr>
		<br>
		<div class="panel panel-default">
			<div class="panel-heading text-center"><H3><strong>功能製作摘要</strong></H3></div>
			<div class="panel-body">
				<ol style="font-size: 18pt;">
					<li>首先於controllers中建立Photo_upload.php，並於內部建立名為index、upload、show的class。
						<blockquote class="danger">							
								<p>index負責上傳表單介面並將資料傳送upload功能。</p>
								<p>upload負責上傳功能並導向show功能。</p>
								<p>show負責圖片顯示功能。</p>
						</blockquote>
					</li>
					<li>在View中建立表單，傳送圖片只能使用 <kbd>method="post"</kbd> 方式，並且須加上 <kbd>enctype="multipart / form-data"</kbd> 才可傳送圖片檔案。
						<blockquote class="danger">							
<pre>&lt;form action="/CI/Photo_upload/upload" method="post" enctype="multipart/form-data"&gt;
&lt;/form&gt;</pre>
						</blockquote>
					</li>
					<li>選擇圖片檔上傳後於upload功能，使用 <code>$_FILES[""]</code> 函數將檔案指定給一變數。
						<blockquote class="danger">							
							<pre>$file = $_FILES["upfile"];</pre>
						</blockquote>
					</li>
					<li>接著使用 <code>$file['size']</code> 及 <code>$file['type']</code> 函數判斷檔案大小及格式，若不符合規則即顯示錯誤訊息。
						<blockquote class="danger">							
<pre>$file['size'] >= 500000  //判斷檔案小於500kb</pre>
<pre>switch ($file['type']) {
   case 'image/jpeg':    //判斷檔案格式為JPEG時
   $hz = ".jpg";         //指定變數$hz為副檔名。
   break;
}</pre>
						</blockquote>
					</li>
					<li>判斷完格式及檔案容量正確後，使用 <CODE>move_uploaded_file</CODE> 將上傳在暫存資料夾檔案 <code>$file['tmp_name']</code> 移動至指定位置。
						<blockquote class="danger">							
<pre>move_uploaded_file($file['tmp_name'],"./assets/img/uploadfile/photo{$hz}");  
//副檔名(hz)，使用相同檔名覆蓋上一個上傳檔案。也可以使用時間變數當檔案名稱(例如:1440334137.jpg)</pre>
						</blockquote>
					</li>
					<li>移動完成後將網頁導向show功能，並將檔名 (photo.副檔名) 當作參數傳遞給網頁做為顯示照片索引。
						<blockquote class="danger">							
							<pre>header('Location: '.base_url().'photo_upload/show/photo'.$hz);</pre>
						</blockquote>
					</li>
					<li>show功能，將收到的參數作為 <code>img</code> 的src值，完成顯示上傳的圖片。。
						<blockquote class="danger">							
							<pre>&lt;img class="img-thumbnail center-block" src="&lt;?php echo base_url().'assets/img/uploadfile/'.$photoname;?&gt;"&gt;</pre>
						</blockquote>
					</li>
				</ol>
			</div>
		</div>
		<br>
		<div class="panel panel-default">
			<div class="panel-heading text-center"><H3><strong>本次學習重點</strong></H3></div>
			<div class="panel-body">
				<ol style="font-size: 18pt;">
					<li>取得上傳檔案內容 : <kbd>$file = $_FILES["upfile"];</kbd></li>
					<li>取得上傳檔案容量 : <kbd>$file['size']</kbd></li>
					<li>取得上傳檔案格式 : <kbd>$file['type']</kbd></li>
					<li>取得上傳檔案暫存檔名 : <kbd>$file['tmp_name']</kbd></li>
					<li>移動上傳檔案函數 : <kbd>move_uploaded_file ('檔案名稱','檔案新位置');</kbd></li>
					<li>刪除上傳檔案函數 : <kbd>unlink('檔案名稱位置');</kbd> EX: 'Test/file.txt' </li>
				</ol>
			</div>
		</div>
	</div>
</div>