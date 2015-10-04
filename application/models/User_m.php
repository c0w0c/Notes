<?php 
class User_m extends CI_Model{

	//必要繼承父元件
	function __construct(){
		parent:: __construct();
		//連結資料庫語法
		$this->load->database();
	}

	//類別一 資料庫欄位新增
	function user_insert($arr){
		$this->db->insert("note_ci_member",$arr);

	}

	//類別二 資料庫欄位修改
	function user_update($id,$arr){
		$this->db->where("uid",$id);
		$this->db->update("note_ci_member",$arr);
	}

	//類別三 資料庫欄位刪除
	function user_delete($id){
		$this->db->where("uid",$id);
		$this->db->delete("note_ci_member");
	}
	
	//類別四 資料庫欄位查詢
	function user_select($id){
		$this->db->where("uid",$id);
		$this->db->select("*");
		$q = $this->db->get('note_ci_member');
		return $q -> result();
	}

	//類別四 資料庫欄位全部查詢
	function user_select_all(){
		$this->db->select("*");
		$q = $this->db->get('note_ci_member');
		return $q -> result();
	}

}
?>