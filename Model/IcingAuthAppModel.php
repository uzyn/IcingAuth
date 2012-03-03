<?php
class IcingAuthAppModel extends AppModel {
	private $uses = array();
	
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
	}
	
	/**
	 * Loads a key from Configure, throws an error if it's not set
	 *
	 */
	public function expects($key, $not = null){
		$configureKey = 'IcingAuth.'.$this->name.'.'.$key;
		
		$value = Configure::read($configureKey);
		
		if (empty($value) || $value == $not){
			trigger_error("CakePHP's configuration key: $configureKey expected.", E_USER_WARNING);
		}
		return $value;
	}
		
}