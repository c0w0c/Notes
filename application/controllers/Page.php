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
		public function Tag($note_class)
	{
		$this->load->model('Page_m');
		//指定搜尋的筆記Tag標籤群組
		$note_data = $this->Page_m->note_Tag_select($note_class);
		$data = array('note_data' => $note_data);
		$this->load->view('Page_v_class',$data);
	}
}
?>