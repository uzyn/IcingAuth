<?php
class IcingAuthAppModel extends AppModel {
	public $callback_url;
	public $request_url;
	
	public $compulsories = array();
	public $optionals = array();
	
	public $configs;
	
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		
		$this->callback_url = Router::url(array('action' => 'callback'), true);
		$this->request_url = Router::url(array('action' => 'request'), true);
		
		if (is_array($this->compulsories)){
			foreach ($this->compulsories as $key => $not){
				$this->compulsories[$key] = $this->expects($key, $not);
			}
		}

		if (is_array($this->optionals)){
			foreach ($this->optionals as $key => $default){
				$this->optionals[$key] = $this->optional($key, $default);
			}
		}
		
		$this->configs = array_merge($this->compulsories, $this->optionals);
	}
	
	/**
	 * Loads a compulsory value from Configure, throws an error if it's not set
	 */
	protected function expects($key, $not = null){
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
	protected function optional($key, $default = null){
		$configureKey = 'IcingAuth.'.$this->name.'.'.$key;
		
		$value = Configure::read($configureKey);
	
		if (empty($value)) return $default;
		else return $value;
	}
		
}