<?php
class Facebook extends IcingAuthAppModel {
    public $name = 'Facebook';
	
	/**
	 * Loads configs
	 */
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		
		debug('Facebook init');
	}
	
	public function request(){
		echo 'hasdf';
	}
	
}