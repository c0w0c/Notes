<div class="jumbotron" style="background-color: #FFC2C2 !important;margin-bottom: 0px;">
	<div class="container">
		<H1 class="text-center"><strong>《<?php echo $pre;?>》</strong></H1>
		<br>
		<H2>範例:</H2>
		<H1 class="alert alert-danger text-center">
		<?php echo $name;?> 是第 <?php echo $count;?> 位參觀者
		</H1>
		<h4>連結網址:<a href="<?php echo $url;?>" target="_blank"><?php echo $url;?></a></h4>
		<h6>建立日期 : <?php echo $c_date;?></h6>
		<br>
		<div class="panel panel-default">
			<div class="panel-heading text-center"><H3><strong>使用工具</strong></H3></div>
			<div class="panel-body">
				<ol style="font-size: 18pt;">
					<li>PHP 5.5.12</li>
					<li>Codeigniter 3.0</li>
					<li>IDE sublime Text2</li>
				</ol>
			</div>
		</div>		
		<br>
		<div class="panel panel-default">
			<div class="panel-heading text-center"><H3><strong>功能製作摘要</strong></H3></div>
			<div class="panel-body">
				<ol style="font-size: 18pt;">
					<li>首先於controllers中建立Holle.php，並於內部建立名為Holle的class。
						<blockquote class="danger">
							<p>檔名與class名需相同並首字都需大寫。否則容易產生錯誤!!</p>
						</blockquote>
					</li>
					<li>建立名為show的功能。</li>
					<li>設定登入者名稱變數、次數變數。</li>
					<li>使用PHP內建函數 <code>&lt;file_get_contents&gt;</code> <code>&lt;fopen&gt;</code> <code>&lt;fwrite&gt;</code> <code>&lt;fclose&gt;</code>功能，將登入次數寫入儲存 <u>num.txt</u> 的檔案。</li>
					<li>將名稱及次數變數存入陣列中 <abbr title="attribute">$data</abbr>。</li>
					<li>調用視圖View並將陣列指定於第一張視圖中。
						<blockquote>
							<p>陣列寫入方法:<kbd>$this->load->view('*.php' , $data);</kbd></p>
						</blockquote>
					</li>
					<li>完成。</li>
				</ol>
			</div>
		</div>
		<br>
		<div class="panel panel-default">
			<div class="panel-heading text-center"><H3><strong>本次學習重點</strong></H3></div>
			<div class="panel-body">
				<ol style="font-size: 18pt;">
					<li>讀取檔案內容 : <kbd>$count = file_get_contents('./num.txt');</kbd></li>
					<li>資料寫入陣列 : <kbd>$data = array('' => , );</kbd></li>
					<li>已寫入方式開啟檔案 : <kbd>$re = fopen('./num.txt', 'w');</kbd></li>
					<li>將資料寫入檔案 : <kbd>fwrite($re, $count);</kbd></li>
					<li>關閉檔案 : <kbd>fclose($re);</kbd></li>
				</ol>
			</div>
		</div>
	</div>
</div>
