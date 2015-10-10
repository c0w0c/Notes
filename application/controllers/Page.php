<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function Number($note_id)
	{
		$this->load->model('Page_m');
		//指定搜尋的筆記ID清單
		$note_data = $this->Page_m->note_data_select($note_id);
		//echo var_dump($note_data);
		$data = array('note_data' => $note_data);
		$this->load->view('Page_v',$data);
		
	}
	
}
?>