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
		
		$this->configs['redirect_uri'] = Router::url(array('action' => 'after_auth'), true);
	}
	
	public function requestURL(){
		$url = 'https://www.facebook.com/dialog/oauth';
		
		$params = array(
			'client_id' => $this->configs['app_id'],
			'redirect_uri' => $this->configs['redirect_uri']
		);
		if (!empty($this->configs['scope'])) $params['scope'] = $this->configs['scope'];
		
		return $url.'?'.http_build_query($params);
	}
	
	public function validateCode($code){
		$url = 'https://graph.facebook.com/oauth/access_token';
		
		$params = array(
			'client_id' => $this->configs['app_id'],
			'redirect_uri' => $this->configs['redirect_uri'],
			'code' => $code,
			'client_secret' => $this->configs['app_secret']
		);
		
		App::uses('HttpSocket', 'Network/Http');
		$HttpSocket = new HttpSocket();
		$response = $HttpSocket->get($url, $params);
		
		if ($response->isOK()){
			parse_str($response->body, $results);
			debug($results);
			return $results;
		}
		else return false;
	}
}