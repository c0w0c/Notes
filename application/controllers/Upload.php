<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	function index (){
		$title = "圖片上傳練習";
		$arr = array('title' => $title );
		$this->load->view('bs3_t', $arr);
		$this->load->view('up');
		$this->load->view('bs3_f');
	}

	function up(){

		if(!empty($_POST["sub"])){

			$file = $_FILES["upfile"];

			if ($file['size'] >= 999999){
				echo "檔案容量過大!!";
			}else{
				switch ($file['type']) {
					case 'image/jpeg':
						$hz = ".jpg";
						break;
					case 'image/x-icon':
						$hz = ".ico";
						break;					
					default:
						$hz = false ;
						break;
				}

				if($hz){
					$time = time();
					//var_dump($file);
					move_uploaded_file($file['tmp_name'],"./upload/{$time}{$hz}");
				}else{
					echo "上傳檔案格式錯誤";
				}
			}
		}
	}
}
