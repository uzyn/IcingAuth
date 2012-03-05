<?php
class FacebookController extends IcingAuthAppController {
	public $uses = array('IcingAuth.Facebook');
	public $autoRender = false;
	
	public function request(){
		$this->redirect($this->Facebook->request());
	}
	
	public function after_auth(){
		if (!empty($this->request->query['code'])){
			debug('success');
		}
		else{
			debug('failure');
		}
	}
	
	public function callback(){
		
	}
}