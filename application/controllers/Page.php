<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	//指定搜尋單頁
	public function Number($note_id)
	{
		$this->load->model('Page_m');
		//指定搜尋的筆記ID清單
		$note_data = $this->Page_m->note_id_select($note_id);
		//echo var_dump($note_data);
		$data = array('note_data' => $note_data);
		$this->load->view('Page_v_id',$data);

	}

	//指定搜尋Tag標籤群組
		public function Tag($note_class,$page_num)
	{
		if (!$page_num) {	//當無輸入時分頁數為1
			$page_num = 1;
		}

		$this->load->model('Page_m');
		//指定搜尋的筆記Tag標籤群組
		$note_data = $this->Page_m->note_Tag_select($note_class);
		//使用pagination CI內建函數，已經內建函數改為替代為自己設定好參數函數
		//位址為application/libraries及application/language/english
		$this->load->library('Pagination');
		$config['base_url'] = 'Page/Tag/'.$note_class.'';	//分頁網址
		$config['total_rows'] = count($note_data);				//資料總筆數
		$config['per_page'] = 4;													//每頁顯示資料數
		$config['uri_segment'] = 4;												//讀取網址第幾個區塊為頁碼
		$this->pagination->initialize($config);						//寫入設定參數
		$data = array(
			'note_data' => $note_data,
			'page_num' => $page_num,
			'config' => $config
		);

		$this->load->view('Page_v_class',$data);
	}
}
?>