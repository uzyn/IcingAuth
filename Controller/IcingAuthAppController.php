<?php
class IcingAuthAppController extends AppController {
	
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
	
	/**
	 * Alias of request()
	 */
	public function index(){
		$this->request();
	}
}