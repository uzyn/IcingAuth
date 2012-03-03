<?php
class FacebookController extends IcingAuthAppController {
	public $uses = array('IcingAuth.Facebook');
	
	public function index(){
		echo $this->Facebook->request();
	}
}