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
	}
	
	public function request(){
		$url = 'https://www.facebook.com/dialog/oauth';
		
		$params = array(
			'client_id' => $this->configs['id'],
			'redirect_uri' => $this->configs['redirect_uri']
		);
		if (!empty($this->configs['scope'])) $params['scope'] = $this->configs['scope'];
		
		return $url.'?'.http_build_query($params);
	}
}