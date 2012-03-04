<?php
class IcingAuthAppModel extends AppModel {
	public $compulsories = array();
	public $optionals = array();
	
	public $configs;
	
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		
		if (is_array($this->compulsories)){
			foreach ($this->compulsories as $key => $value){
				$this->compulsories[$key] = $this->expects($key, $value);
			}
		}
		
		debug($this->compulsories);
		exit();
	}
	
	/**
	 * Loads a compulsory value from Configure, throws an error if it's not set
	 */
	public function expects($key, $not = null){
		$configureKey = 'IcingAuth.'.$this->name.'.'.$key;
		
		$value = Configure::read($configureKey);
		
		
		if (empty($value) || $value == $not){
			trigger_error("CakePHP's configuration key: $configureKey expected.", E_USER_ERROR);
		}
		return $value;
	}
	
	/**
	 * Loads an optional value from Configure if it is set
	 */
	public function optional($key){
		$configureKey = 'IcingAuth.'.$this->name.'.'.$key;
		
		$value = Configure::read($configureKey);
		
		if (!empty($value)) return $value;
	}
		
}