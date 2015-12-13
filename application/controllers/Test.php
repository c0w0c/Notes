<?php
//測試用
class Test extends CI_Controller {

    public function page_id()
    {
    	//陣列物件化，給予測試的值。
        $note_data[] = new ArrayObject(array(), ArrayObject::STD_PROP_LIST);
    	$note_data[0]->note_title = '測試文章' ;
    	$note_data[0]->createdate = date("Y-m-d") ;
    	$note_data[0]->note_class = '測試' ;
    	$note_data[0]->test = true ;
    	$data = array('note_data' => $note_data);
    	$this->load->view('page_V_id',$data);
    	//var_dump($note_data);
    }
}