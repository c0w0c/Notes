<script>
	function cheak(a,b,c,d){
		switch(a){
			case '2' :
				if( b == ""){
					alert("帳號欄位不可為空白!!");
					return false ;
				}else{
					if( c == ""){
						alert("密碼欄位不可為空白!!");
						return false ;
					}
				}
				break;

			case '3':
				if(d == "" ){
					alert("ID欄位不可空白!!");
					return false ;
				}else{
					if( b == ""){
						alert("帳號欄位不可為空白!!");
						return false ;
					}else{
						if( c == ""){
							alert("密碼欄位不可為空白!!");
							return false ;
						}
					}
				}
				break;
		}
	}


	function ins(){
		var name = document.getElementById('insname').value;
		var pass = document.getElementById('inspass').value;
		var c = cheak('2',name,pass,'');
		if(c !== false){
			document.location.href = "/Notes/C20150824003/ins/" + name + "/" + pass ;
		}
	}

	function up(){
		var id = document.getElementById('upid').value;
		var name = document.getElementById('upname').value;
		var pass = document.getElementById('uppass').value;
		var c = cheak('3',name,pass,id);
		if(c !== false){
			document.location.href = "/Notes/C20150824003/upd/" + id + '/' + name + "/" + pass ;
		}
	}

	function del(){
		var id = document.getElementById('delid').value;
		var c = cheak('3','no','no',id);
		if(c !== false){
			var r = confirm("確定要刪除資料!?資料將無法復原!!");
    		if (r == true) {
        		document.location.href = "/Notes/C20150824003/del/" + id ;
    		}
		}
	}

	function sel(){
		var id = document.getElementById('selid').value;
		var c = cheak('3','no','no',id);
		if(c !== false){
        		document.location.href = "/Notes/C20150824003/sel/" + id ;
		}
	}
</script>
<div class="jumbotron" style="background-color: #FFC2C2 !important;margin-bottom: 0px;">
	<div class="container">
		<H1 class="text-center"><strong>《<?php echo $pre;?>》</strong></H1>
		<br>
		<div class="alert alert-warning">
			<H4>功能說明:</H4>
			<H4>使用CI搭配MYSQL製作簡易會員系統，可新增、更新、刪除、搜尋的系統。</H4>
			</div><a name="datetable"></a>
			<div class="alert alert-danger">
				<p>範例:</p><br>
				<table class="table table-hover text-center">
					<thead>
						<tr class="bg-primary" >
							<td style="border-right: 1px #FFC2C2 dotted;">ID</td>
							<td style="border-right: 1px #FFC2C2 dotted;">帳號</td>
							<td>密碼</td>
						</tr>
					</thead>
					<tbody>
						<?php
							for($i = 0 ; $i <= (count($userdata)-1) ; $i++){
								echo '<tr class="active">';
								echo '<td style="border-right: 1px #FFC2C2 dotted;">'.$userdata[$i]->uid.'</td>';
								echo '<td style="border-right: 1px #FFC2C2 dotted;">'.$userdata[$i]->uname.'</td>';
								echo '<td>'.$userdata[$i]->upass.'</td>';
								echo '</tr>';
							}
						?>
					</tbody>
				</table><br><p>功能列:</p>
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-success">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title text-center">
							<a style="text-decoration: none;" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								新增使用者資料
							</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body text-center">
								帳號 : <input id="insname" type="text"><br><br>
								密碼 : <input id="inspass" type="text"><br><br>
								<button type="submit" class="btn btn-primary" onclick="ins();">建立資料</button>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title text-center">
							<a style="text-decoration: none;" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								更改使用者資料
							</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body text-center">
								ID　: <input id="upid" type="text"><br><br>
								帳號 : <input id="upname" type="text"><br><br>
								密碼 : <input id="uppass" type="text"><br><br>
								<button type="submit" class="btn btn-primary" onclick="up();">變更資料</button>
							</div>
						</div>
					</div>
					<div class="panel panel-info">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title text-center">
							<a style="text-decoration: none;" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								指定ID查詢資料
							</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body text-center">
								ID　: <input id="selid" type="text"><br><br>
								<button type="submit" class="btn btn-primary" onclick="sel();">搜尋資料</button>
							</div>
						</div>
					</div>
					<div class="panel panel-warning">
						<div class="panel-heading" role="tab" id="headingFour">
							<h4 class="panel-title text-center">
							<a style="text-decoration: none;" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								刪除使用者資料
							</a>
							</h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="panel-body text-center">
								ID　: <input id="delid" type="text"><br><br>
								<button type="submit" class="btn btn-primary" onclick="del();">刪除資料</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<h4>連結網址:<a href="<?php echo $url;?>" target="_blank"><?php echo $url;?></a></h4>
			<h6>建立日期 : <?php echo $c_date;?></h6>
			<hr>
			<br>
			<div class="panel panel-default">
				<div class="panel-heading text-center"><H3><strong>功能製作摘要</strong></H3></div>
				<div class="panel-body">
					<ol style="font-size: 18pt;">
						<li>於MySQL資料庫中建立會員資料表。
							<blockquote class="danger">
								<P>資料表欄位分別為:</P>
								<p>　1.ID</p>
								<p>　2.NAME</p>
								<p>　3.password</p>
							</blockquote>
						</li>
						<li>設定完資料表後，在controllers中建立名為User.php，並分別建立以下五個class。
							<blockquote class="danger">
								<P>1.index  【要求models搜尋的全部資料並讓View顯示】</P>
								<p>2.insert 【要求models建立使用者資料】</p>
								<p>3.updata 【要求models修改使用者資料】</p>
								<p>4.select 【要求models搜尋指定ID資料並讓View顯示】</p>
								<p>4.delete 【要求models刪除指定ID資料】</p>
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
						</ol>
					</div>
			</div>
	</div>
</div>