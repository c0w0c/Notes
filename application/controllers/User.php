<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function ins($name,$pass){
		$this->load->model('user_m');
		//將變數指定至陣列
		$arr = array('uname' => $name ,'upass' => $pass );
		//新增欄位使用陣列資料
		$this->user_m->user_insert($arr);
	}

	function upd($id,$name,$pass){
		$this->load->model('user_m');
		//將變數指定至陣列
		$arr = array('uname' => $name ,'upass' => $pass );
		//修改欄位使用陣列資料
		$this->user_m->user_update($id,$arr);
	}

	function del($id){
		$this->load->model('user_m');
		//刪除指定欄位
		$this->user_m->user_delete($id);
	}

	function sel($id){
		$this->load->model('user_m');
		//搜尋指定欄位
		$userdata = $this->user_m->user_select($id);
		//將資料從陣列中拉出來顯示
		echo '使用者名稱為:'.$userdata[0]->uname.'<br>';
		echo '使用者密碼為:'.$userdata[0]->upass;
		//查看資料陣列語法
		//var_dump($userdata);

	}


}
