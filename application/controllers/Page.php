<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function Number($note_id)
	{
		$this->load->model('Page_m');
		//指定搜尋的筆記ID清單
		$note_list = $this->Page_m->note_list_select($note_id);
		$note_contents = $this->Page_m->note_contents_select($note_id);
		//echo var_dump($note_list);
		//echo var_dump($note_contents);
		$data = array('note_list' => $note_list , 'note_contents' => $note_contents);
		$this->load->view('Page_v',$data);
		
	}
	
}
?>