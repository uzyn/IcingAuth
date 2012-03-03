<?php
class FacebookController extends IcingAuthAppController {
	public $uses = array('IcingAuth.Facebook');
	public $autoRender = false;
	
	public function index(){
		$this->request();
	}
	
	public function request(){
		echo $this->Facebook->request();
	}
}