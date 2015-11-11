<?php 
class Page_m extends CI_Model{
	
	//必要繼承父元件
	function __construct(){
		parent:: __construct();
		//連結資料庫語法
		$this->load->database();
	}

	//類別一 指定ID搜尋筆記清單資料
	function note_id_select($note_id){
		$this->db->where("note_id",$note_id);
		$this->db->select("*");
		$q = $this->db->get('note_data');
		return $q -> result();
	}

	//類別一 指定Tag標籤搜尋筆記清單資料
	function note_Tag_select($note_class){
		$this->db->where("note_class",$note_class);
		$this->db->select("*");
		$q = $this->db->get('note_data');
		return $q -> result();
	}
}
?>