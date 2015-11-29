<?php
		//抓取各類別文章數量
		$this->load->model('Navbar_m');
		$class_name = array(
			0 => 'HTML5',
			1 => 'CSS3',
			2 => 'Javascript',
			3 => 'Bootstrap',
			4 => 'PHP',
			5 => 'Codeigniter',
			6 => 'Python',
			7 => 'Django',
			8 => 'SublimeText',
			);

		for ($i=0; $i < count($class_name) ; $i++) {
			$badge[$class_name[$i]] = count($this->Navbar_m->class_count($class_name[$i]));
		}
?>