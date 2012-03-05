<?php
class FacebookController extends IcingAuthAppController {
	public $uses = array('IcingAuth.Facebook');
	public $autoRender = false;
	
	public function request(){
		$this->redirect($this->Facebook->request());
	}
}