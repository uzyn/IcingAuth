<?php
class Facebook extends IcingAuthAppModel {
    public $name = 'Facebook';
	public $useTable = false;
	
	public $configs = array();
	
	/**
	 * Compulsory configuration values
	 */ 
	public $compulsories = array(
		'app_id' => 'App ID',
		'app_secret' => 'App Secret', 
		'redirect_uri' => 'Redirect URI'
	);
	
	/**
	 * Optional configuration values, with default values
	 */	
	public $optionals = array(
		'url' => 'https://www.facebook.com/dialog/oauth',
		'scope' => null
	);
	
	/**
	 * Loads configs
	 */
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		
		$this->configs['id'] = $this->expects('app_id', 'App ID');
		$this->configs['secret'] = $this->expects('app_secret', 'App Secret');
		
	}
	
	public function request(){
		$url = 'https://www.facebook.com/dialog/oauth?';
		$url .= 'client_id='.$this->configs['id'];
		return $url;
	}
	
}