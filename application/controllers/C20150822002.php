<?php
//單元名稱:圖片上傳顯示
defined('BASEPATH') OR exit('No direct script access allowed');

class C20150822002 extends CI_Controller {

	function test(){
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

		$data = array(
			'note_data' 		=> $note_data ,
			'badge'					=> $badge,
			'pre_next_btn' 	=> $pre_next_btn,
			'CI_example'		=> true ,
			);

		$this->load->view('Page_v_id' , $data);
	}

	function index(){
		$data = array(
			'url' => base_url().'C20150822002' , 					//網頁URL
			'title' => 'ShrHe筆記 - Codeigniter 練習 - 團片上傳' , 	//網頁抬頭
			'header_t' => 'Codeigniter 練習',						//練習類別
			'pre' => '圖片上傳顯示' ,								//練習題目
			'c_date' => '2015/08/22' ,								//練習建立日期
		);

		$this->load->view('bs3_t', $data);
		$this->load->view('photo_uplaod_v');
		$this->load->view('bs3_f');
	}

	function upload(){

		if(!empty($_POST["sub"])){

			$file = $_FILES["upfile"];

			if ($file['size'] >= 500000){
				echo "上傳檔案容量過大!!";
			}else{
				switch ($file['type']) {
					case 'image/jpeg':
						$hz = ".jpg";
						break;
					case 'image/gif':
						$hz = ".gif";
						break;	
					case 'image/png':
						$hz = ".png";
						break;		
					default:
						$hz = false ;
						break;
				}

				if($hz){
					//$time = time();
					//move_uploaded_file($file['tmp_name'],"./assets/img/uploadfile/{$time}{$hz}"); 
					//header('Location: '.base_url().'photo_upload/show/'.time.$hz);
					//如使用變數方式增加檔案如要刪除則要使用 unlink('名稱位置'); 函數進行。
					move_uploaded_file($file['tmp_name'],"./assets/img/uploadfile/photo{$hz}");
					header('Location: '.base_url().'C20150822002/show/photo'.$hz);
				}else{
					echo "上傳檔案格式錯誤，請更換正確圖片格式檔案。";
				}
			}
		}

	}

	function show($photoname){

		if (empty($photoname)){
			$photoname = 'noimg.jpg';
		} 

		$data = array(
			'url' => base_url().'C20150822002' , 					//網頁URL
			'title' => 'ShrHe筆記 - Codeigniter 練習 - 團片上傳' , 	//網頁抬頭
			'header_t' => 'Codeigniter 練習',						//練習類別
			'pre' => '圖片顯示' ,									//練習題目
			'c_date' => '2015/08/22' ,								//練習建立日期	 									//上傳的檔案名稱
			'photoname' => $photoname ,
		);	
		$this->load->view('bs3_t', $data);
		$this->load->view('photo_show_v');
		$this->load->view('bs3_f');
	}
}
