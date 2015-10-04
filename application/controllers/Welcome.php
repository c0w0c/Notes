<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('Welcome_m');
		$note_list = $this->Welcome_m->note_select_all();
		$data = array('note_list' => $note_list);
		$this->load->view('Welcome_v',$data);
	}
	
}
?>