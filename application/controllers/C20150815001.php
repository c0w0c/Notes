<?php
//單元名稱:網站訪問人數
defined('BASEPATH') OR exit('No direct script access allowed');

class C20150815001 extends CI_Controller {

	//測試網址:http://localhost/CI/index.php/holle/index/123/321
	function index(){
		$name = "shrhe";				//進站人名
		@$count = file_get_contents('./num.txt') ;
		$count = $count ? $count : 0 ;
		$count++;

		$re = fopen('./num.txt', 'w');
		fwrite($re, $count);
		fclose($re);

		$data = array(
			'url' => base_url().'C20150815001' , 				//網頁URL
			'title' => $name.'歡迎光臨!! Codeigniter練習' , //網頁抬頭
			'header_t' => 'Codeigniter 練習',				//練習類別
			'pre' => '網站訪問人數' ,						//練習題目
			'c_date' => '2015/08/15' ,						//練習建立日期
			'name' => $name ,
			'count' => $count ,		 
			);



		$this->load->view('bs3_t' , $data);
		$this->load->view('visit');
		$this->load->view('bs3_f');
	}

}
?>