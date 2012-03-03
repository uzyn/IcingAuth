<?php
class IcingAuthAppModel extends AppModel {
	private $uses = array();
	
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		
//		$this->loadConfig();
	}
	
	public function loadConfig(){
		$uses = Configure::read('IcingAuth.uses');
	}
		
}