<?php
//單元名稱:網站訪問人數
defined('BASEPATH') OR exit('No direct script access allowed');

class C20150815001 extends CI_Controller {

	function index(){
		//指定文章ID
		$note_id = "C20150815001";
		//開啟資料庫連接
		$this->load->model('Page_m');
		//指定搜尋的筆記ID清單
		$note_data = $this->Page_m->note_id_select($note_id);
		//設定上頁篇文章連結資料
		include('pre_next_btn_set.php');
		//抓取各類別文章數量
		include('navbar_count.php');

		@$count = file_get_contents('./Counter.txt') ;
		$count = $count ? $count : 0 ;
		$count++;

		$re = fopen('./Counter.txt', 'w');
		fwrite($re, $count);
		fclose($re);

		$data = array(
			'count' 				=> $count ,
			'note_data' 		=> $note_data ,
			'badge'					=> $badge,
			'pre_next_btn' 	=> $pre_next_btn,
			'CI_example'		=> true ,
			);

		$this->load->view('Page_v_id' , $data);

	}
}
?>