<?php 
class Welcome_m extends CI_Model{

	//必要繼承父元件
	function __construct(){
		parent:: __construct();
		//連結資料庫語法
		$this->load->database();
	}

	//類別一 搜尋note_list資料表全部資料
	function note_select_all(){
		$this->db->select("*");
		$q = $this->db->get('note_list');
		return $q -> result();
	}
}
?>