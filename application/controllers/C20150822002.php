<?php
//單元名稱:圖片上傳顯示
defined('BASEPATH') OR exit('No direct script access allowed');

class C20150822002 extends CI_Controller {

	function index(){
		//指定文章ID
		$note_id = "C20150822002";
		//開啟資料庫連接
		$this->load->model('Page_m');
		//指定搜尋的筆記ID清單
		$note_data = $this->Page_m->note_id_select($note_id);
		//設定上頁篇文章連結資料
		include('pre_next_btn_set.php');
		//抓取各類別文章數量
		include('navbar_count.php');

		//判斷JPG,PNG,GIF檔案是否存在，不存在則給予noimg。
		$file_type = array(0 => 'jpg', 1 => 'png' , 2 => 'gif' );

		for ($i=0; $i < count($file_type) ; $i++) {
			if (is_file('assets/img/uploadfile/photo.'.$file_type[$i])) {
				$img_file[$file_type[$i]] = 'photo.'.$file_type[$i];
			}else{
				$img_file[$file_type[$i]] = 'noimg.jpg';
			}
		}

		//指定提示使用者變數
		$label = '<h3 class="alert alert-info"><i class="fa fa-exclamation-triangle"></i> 僅可上傳格式為JPG、PNG、GIF且容量小於500kb以下的圖片。</h3>';

		//判斷是否為上傳網頁，如是則執行上傳動作。
		if (!empty($_POST["sub"])) {

			$file = $_FILES["upfile"];

			if ($file['size'] >= 60000){
				$label = '<h3 class="alert alert-danger"><i class="fa fa-frown-o"></i> 抱歉，上傳失敗，僅可上傳容量小於50KB以下的圖片喔。</h3>' ;
			}else{
				switch ($file['type']) {
					case 'image/jpeg':
						$type = ".jpg";
						break;
					case 'image/gif':
						$type = ".gif";
						break;
					case 'image/png':
						$type = ".png";
						break;
					default:
						$type = false ;
						break;
				}

				//檢查變數$type的值是否存在
				if($type){
					//$time = time();
					//move_uploaded_file($file['tmp_name'],"./assets/img/uploadfile/{$time}{$hz}"); 
					//header('Location: '.base_url().'photo_upload/show/'.time.$hz);
					//如使用變數方式增加檔案如要刪除則要使用 unlink('名稱位置'); 函數進行。
					move_uploaded_file($file['tmp_name'],"./assets/img/uploadfile/photo{$type}");
					header('Location: '.base_url().'C20150822002/test#thumbnail');
				}else{
					$label = '<h3 class="alert alert-danger"><i class="fa fa-frown-o"></i> 抱歉，上傳失敗，格式錯誤，請選擇正確的圖片格式。</h3>' ;
				}
			}
		}

		$data = array(
			'note_data' 		=> $note_data ,
			'badge'					=> $badge,
			'pre_next_btn' 	=> $pre_next_btn,
			'CI_example'		=> true ,
			'img_file'			=> $img_file,
			'label'					=> $label,
			);

		$this->load->view('Page_v_id' , $data);
	}
}
