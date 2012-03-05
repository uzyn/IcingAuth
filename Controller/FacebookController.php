<?php
class FacebookController extends IcingAuthAppController {
	public $uses = array('IcingAuth.Facebook');
	public $autoRender = false;
	
	public function request(){
		$this->redirect($this->Facebook->requestURL());
	}
	
	/**
	 * Callback (internal wrt. IcingAuth) after initial request with Facebook
	 */
	public function after_auth(){
		if (!empty($this->request->query['code'])){
			$code = $this->request->query['code'];
			$this->Facebook->validateCode($code);
		}
		else{
			debug('failure');
		}
	}
	
	public function callback(){
		
	}
}