<?php

Class App
{ 
	private $ci;
	private $_request;
	public function __construct(){
		$this->ci = &get_instance();
	}
	public function request()
	{
		$this->_request = $this->ci->input->server('REQUEST_METHOD');
		return $this;
	}

	public function post()
	{
		if($this->_request == 'POST'){
			return true;
		}else{
			return false;
		}
	}

}