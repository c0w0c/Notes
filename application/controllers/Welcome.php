<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('Welcome_m');
		$note_data = $this->Welcome_m->note_select_all();
		$data = array('note_data' => $note_data);
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