<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index($page_num)
	{
		if (!$page_num) {	//當無輸入時分頁數為1
			$page_num = 1;
		}

		$this->load->model('Welcome_m');
		$note_data = $this->Welcome_m->note_select_all();
		//使用pagination CI內建函數，已經內建函數改為替代為自己設定好參數函數
		//位址為application/libraries及application/language/english
		$this->load->library('pagination');
		$config['base_url'] = 'Welcome/index';		//分頁網址
		$config['total_rows'] = count($note_data);//資料總筆數
		$config['per_page'] = 4;									//每頁顯示資料數
		$config['uri_segment'] = 3;								//讀取網址第幾個區塊為頁碼
		$this->pagination->initialize($config);		//寫入設定參數

		//抓取各類別文章數量
		$this->load->model('Navbar_m');
		$class_name = array(0 => 'HTML5',1 => 'CSS3',2 => 'Javascript',3 => 'Bootstrap',4 => 'PHP',5 => 'Codeigniter',6 => 'Python',7 => 'Django',8 => 'SublimeText',);
		for ($i=0; $i < count($class_name) ; $i++) {
			$badge[$class_name[$i]] = count($this->Navbar_m->class_count($class_name[$i]));
		}

		$data = array(
			'note_data' => $note_data,
			'page_num' => $page_num,
			'config' => $config,
			'badge' => $badge,
		);
		$this->load->view('Welcome_v',$data);
	}

	//第一版首頁
	public function bk1()
	{
		$this->load->model('Welcome_m');
		$note_data = $this->Welcome_m->note_select_all();
		$data = array('note_data' => $note_data);
		$this->load->view('Welcome_backup1',$data);
	}

	//第二版首頁
	public function bk2()
	{
		$this->load->model('Welcome_m');
		$note_data = $this->Welcome_m->note_select_all();
		$data = array('note_data' => $note_data);
		$this->load->view('Welcome_backup2',$data);
	}
}
?>