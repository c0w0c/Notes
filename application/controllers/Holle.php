<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Holle extends CI_Controller {

	//測試網址:http://localhost/CI/index.php/holle/index/123/321
	function index($name,$name2){
		echo $name." and ".$name2." holle word!!";
	}

	//測試網址:http://localhost/CI/index.php/holle/show
	function show(){
		$name = "shrhe";
		@$count = file_get_contents('./num.txt') ;
		$count = $count ? $count : 0 ;
		$title = $name."歡迎光臨!!";

		$count++;
		
		$data = array('name' => $name , 'count' => $count ,'title' => $title );

		$re = fopen('./num.txt', 'w');
		fwrite($re, $count);
		fclose($re);

		$this->load->view('bs3_t' , $data);
		$this->load->view('visit');
		$this->load->view('bs3_f');
	}

}
?>