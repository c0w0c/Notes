<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Holle extends CI_Controller {

	//測試網址:http://localhost/CI/index.php/holle/index/123/321
	function index($name,$name2){
		echo $name." and ".$name2." holle word!!";
	}

	//測試網址:http://localhost/CI/index.php/holle/show
	function show(){
		$url = base_url()."holle/show";
		//測試網站網址
		$name = "shrhe";				//進站人名
		$title = $name."歡迎光臨!!";	//網頁抬頭
		$pre = "拜訪人數"; 				//練習項目標題
		@$count = file_get_contents('./num.txt') ;
		$count = $count ? $count : 0 ;
		$count++;
		
		$data = array('url' => $url ,'name' => $name , 'count' => $count ,
		'title' => $title , 'pre' => $pre );

		$re = fopen('./num.txt', 'w');
		fwrite($re, $count);
		fclose($re);

		$this->load->view('bs3_t' , $data);
		$this->load->view('visit');
		$this->load->view('bs3_f');
	}

}
?>