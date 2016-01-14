<?php
	//從資料庫抓取該筆筆記的上下筆資料
	$note_data_pre_next = $this->Page_m->note_id_select_pre_next($note_data[0]->id);
	//建立上下頁按鈕物件資料
	$pre_next_btn['pre_title']		= '上一篇:無';
	$pre_next_btn['pre_a_href']		= '';
	$pre_next_btn['pre_no_link']	= 'style="cursor:not-allowed;background-color: #f5c989;border: 2px #f1b35b solid;"';
	$pre_next_btn['next_title']		= '無:下一篇';
	$pre_next_btn['next_a_href']	= '';
	$pre_next_btn['next_no_link']	= 'style="cursor:not-allowed;background-color: #f5c989;border: 2px #f1b35b solid;"';
	for ($i=0; $i < count($note_data_pre_next) ; $i++) {
		//上一篇按鈕設定
		if ($note_data_pre_next[$i]->id < $note_data[0]->id) {
			$pre_next_btn['pre_title']		= '上一篇:' . str_replace("|","",$note_data_pre_next[$i]->note_title);
			$pre_next_btn['pre_no_link']	= '';
			//判斷類別寫入網址
			if ($note_data_pre_next[$i]->note_class != 'Codeigniter') {
				$pre_next_btn['pre_a_href']	= 'href="Page/Number/'. $note_data_pre_next[$i]->note_id .'"' ;
			}else{
				$pre_next_btn['pre_a_href']	= 'href="'. $note_data_pre_next[$i]->note_id.'"' ;
			}
		}
		//下一篇按鈕設定
		if ($note_data_pre_next[$i]->id > $note_data[0]->id) {
			$pre_next_btn['next_title']		= str_replace("|","",$note_data_pre_next[$i]->note_title) . ':下一篇';
			$pre_next_btn['next_no_link']	= '';
			//判斷類別寫入網址
			if ($note_data_pre_next[$i]->note_class != 'Codeigniter') {
				$pre_next_btn['next_a_href']	= 'href="Page/Number/'. $note_data_pre_next[$i]->note_id .'"' ;
			}else{
				$pre_next_btn['next_a_href']	= 'href="'. $note_data_pre_next[$i]->note_id.'"' ;
			}
		}
	}
?>