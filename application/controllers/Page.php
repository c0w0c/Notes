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
		if (!$page_num) {
			$page_num = 0;
		}

		$this->load->model('Page_m');
		//指定搜尋的筆記Tag標籤群組
		$note_data = $this->Page_m->note_Tag_select($note_class);

		$this->load->library('Pagination');
		$config['base_url'] = 'Page/Tag/'.$note_class.'';
		$config['total_rows'] = count($note_data);
		$config['per_page'] = 2;
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

		$this->load->view('Page_v_class',$data);
	}
}
?>