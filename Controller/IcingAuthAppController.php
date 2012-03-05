<?php
class IcingAuthAppController extends AppController {
	
	/**
	 * index() as alias of request()
	 */
	public function index(){
		$this->request();
	}
	
	/**
	 * Request for auth, overrides this at strategy's controller
	 */
	public function request(){
	}
	
	/**
	 * Callback for auth, successful or otherwise
	 */
	public function callback(){
	}
}