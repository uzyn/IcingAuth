<?php
class IcingAuthAppModel extends AppModel {
	
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		
		$this->loadConfig();
	}
	
	public function loadConfig(){
		debug(Configure::read('IcingAuth'));
	}
	
	
}