<?php
class Facebook extends IcingAuthAppModel {
    public $name = 'Facebook';
	public $useTable = false;
	
	public $configs = array('id', 'secret');
	
	/**
	 * Loads configs
	 */
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		
		$this->configs['id'] = $this->expects('id', 'App ID');
		$this->configs['secret'] = $this->expects('secret', 'App Secret');
	}
	
	public function request(){
		debug($this->configs);
	}
	
}