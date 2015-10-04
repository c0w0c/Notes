<div class="jumbotron" style="background-color: #FFC2C2 !important;margin-bottom: 0px;">
	<div class="container">
		<H1 class="text-center"><strong>《<?php echo $pre;?>》</strong></H1>
		<div class="alert alert-danger">
			<p>指定搜尋:</p><br>
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
			</table>
			<BUTTON onclick="document.location.href = '/Notes/C20150824003#datetable';">返回主頁</BUTTON>
		</div>
		<h4>連結網址:<a href="<?php echo $url;?>" target="_blank"><?php echo $url;?></a></h4>
		<h6>建立日期 : <?php echo $c_date;?></h6>
	</div>
</div>