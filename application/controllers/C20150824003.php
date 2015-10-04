<?php
//單元名稱:簡易會員系統
defined('BASEPATH') OR exit('No direct script access allowed');

class C20150824003 extends CI_Controller {

	function index(){

		$this->load->model('user_m');
		$userdata = $this->user_m->user_select_all();

		$data = array(
			'url' => base_url().'C20150824003' , 							 	//網頁URL
			'title' => 'ShrHe筆記 - Codeigniter 練習 - 簡易會員系統' , 	//網頁抬頭
			'header_t' => 'Codeigniter 練習',							//練習類別
			'pre' => '簡易會員系統' ,									//練習題目
			'c_date' => '2015/08/24' ,									//練習建立日期	 
			'userdata' => $userdata,
		);

		$this->load->view('bs3_t',$data);
		$this->load->view('user_v');
		$this->load->view('bs3_f');
	}

	function ins($name,$pass){
		$this->load->model('user_m');
		//將變數指定至陣列
		$arr = array('uname' => $name ,'upass' => $pass );
		//新增欄位使用陣列資料
		$this->user_m->user_insert($arr);
		header('Location: '.base_url().'C20150824003#datetable');
	}

	function upd($id,$name,$pass){
		$this->load->model('user_m');
		//將變數指定至陣列
		$arr = array('uname' => $name ,'upass' => $pass );
		//修改欄位使用陣列資料
		$this->user_m->user_update($id,$arr);
		header('Location: '.base_url().'C20150824003#datetable');
	}

	function del($id){
		$this->load->model('user_m');
		//刪除指定欄位
		$this->user_m->user_delete($id);
		header('Location: '.base_url().'C20150824003#datetable');
	}

	function sel($id){
		$this->load->model('user_m');
		//搜尋指定欄位
		$userdata = $this->user_m->user_select($id);
		//將資料從陣列中拉出來顯示
		//echo '使用者名稱為:'.$userdata[0]->uname.'<br>';
		//echo '使用者密碼為:'.$userdata[0]->upass;
		//查看資料陣列語法
		//var_dump($userdata);
		
		$data = array(
			'url' => base_url().'C20150824003' , 							 	//網頁URL
			'title' => 'ShrHe筆記 - Codeigniter 練習 - 簡易會員系統' , 	//網頁抬頭
			'header_t' => 'Codeigniter 練習',							//練習類別
			'pre' => '簡易會員系統' ,									//練習題目
			'c_date' => '2015/08/24' ,									//練習建立日期	 
			'userdata' => $userdata,
		);

		$this->load->view('bs3_t',$data);
		$this->load->view('user_sel_v');
		$this->load->view('bs3_f');

	}


}
