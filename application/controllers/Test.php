<?php
//測試用
class Test extends CI_Controller {

    public function page_id()
    {
    	$test = true ;
    	$date = array('test' => $test);
    	$this->load->view('page_V_id',$date);
    }
}