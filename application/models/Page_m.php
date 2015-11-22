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

	//類別二 指定Tag標籤搜尋筆記清單資料
	function note_Tag_select($note_class){
		$this->db->where("note_class",$note_class);
		$this->db->select("*");
		$this->db->order_by('id', 'DESC');
		$q = $this->db->get('note_data');
		return $q -> result();
	}

	//類別三 指定字串搜尋筆記清單資料
	function note_Search_select($Search_str){
		$this->db->like('note_title',$Search_str);			//搜尋標題
		$this->db->or_like('note_contents',$Search_str);//開放可搜尋內容
		//$this->db->or_like('note_class',$Search_str); 	//開放可搜尋筆記類別
		$this->db->select("*");
		$this->db->order_by('id', 'DESC');
		$q = $this->db->get('note_data');
		return $q -> result();
	}
}
?>