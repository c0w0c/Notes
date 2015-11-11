<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index($page_num)
	{
		if (!$page_num) {
			$page_num = 0;
		}

		$this->load->model('Welcome_m');
		$note_data = $this->Welcome_m->note_select_all();

		$this->load->library('Pagination');
		$config['base_url'] = 'Welcome/index';
		$config['total_rows'] = count($note_data);
		$config['per_page'] = 4;
		$config['uri_segment'] = 3;
		$config['num_links'] = 3;
		$config['full_tag_open'] = '<h1 class="text-center">';
		$config['full_tag_close'] = '</h1>';
		$config['first_link'] = '';
		$config['first_tag_open'] = '<span>';
		$config['first_tag_close'] = '</span>';
		$config['last_link'] = '';
		$config['last_tag_open'] = '<span>';
		$config['last_tag_close'] = '</span>';
		$config['next_link'] = '<i class="fa fa-arrow-circle-right"></i>';
		$config['next_tag_open'] = '<span> ';
		$config['next_tag_close'] = '</span>';
		$config['prev_link'] = '<i class="fa fa-arrow-circle-left"></i>';
		$config['prev_tag_open'] = '<span>';
		$config['prev_tag_close'] = ' </span>';
		$config['cur_tag_open'] = '<strong style="color:red;"> ';
		$config['cur_tag_close'] = '</strong>';
		$config['num_tag_open'] = '<strong> ';
		$config['num_tag_close'] = '</strong>';
		$this->pagination->initialize($config);

		$data = array(
			'note_data' => $note_data,
			'page_num' => $page_num,
			'config' => $config
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