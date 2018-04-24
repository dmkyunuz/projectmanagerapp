<?php

Class Web
{
	protected static $ci;
	protected $CI;
	protected $_css;
	protected $_js;
	protected $_jqueryPlugins;
	protected static $header_title;
	public $path;
	private static $_meta = [];
	
	public function __construct()
	{
		self::$ci = &get_instance();
		$this->CI = &get_instance();
	}


	public function Register(){
		$assets = $this->CI->config->item('assets');
		$this->_css = $assets['css'];
		$this->_js = $assets['js'];
		$this->_jqueryPlugins = $assets['jqueryPlugins'];
		return $this;
	}

	public function setMeta($params = [])
	{
		$output_meta = [];
		foreach ($params as $meta_name => $meta_value) 
		{
			$output_meta[] = '<meta name="'.$meta_name.'" content="'.$meta_value.'">';
		}

		self::$_meta[] = $output_meta;
	}

	public function getMeta(){
		$print = '';
		foreach (self::$_meta as $key) 
			{
				foreach ($key as $a => $b) 
				{
					$print .=$b;
					$print .= "\n";
				}
			
		}
		
		return $print;
	}

	public function css(){
		$css = $this->_css;
		$output = '';
		$path = '/';
		foreach ($css as $key) {
			$url = site_url($path . $key);
			if(substr($key, 0,4) == "http" || substr($key, 0,5) == "https" || substr($key, 0, 2) == "//"){
				$url = $key;
			}
			$output .= '<link rel="stylesheet" href="' .$url. '" type="text/css">';
			$output .= "\n";
		}

		echo $output;
	}

	public function js(){
		$js = $this->_js;
		$output = '';
		$path = '/';
		foreach ($js as $key) {
			$url = site_url($path . $key);
			if(substr($key, 0,5) == "https" || substr($key, 0, 2) == "//"){
				$url = $key;
			}
			$output .= '<script src="' .$url. '" type="text/javascript"></script>';
			$output .= "\n";
			// echo 1;
		}

		echo $output;
	}
	public function jqueryPlugins(){
		$jp = $this->_jqueryPlugins;
		$output = '';
		$path = '/';
		foreach ($jp as $key) {
			$url = site_url($path . $key);
			if(substr($key, 0,5) == "https" || substr($key, 0, 2) == "//"){
				$url = $key;
			}
			$output .= '<script src="' .$url. '" type="text/javascript"></script>';
			$output .= "\n";
			// echo 1;
		}

		echo $output;
	}

	public static function setTitle($str_title = null)
	{
		self::$ci =&get_instance();
		$prefix = 'Smart Notes';
	    self::$header_title = $prefix. " | " .ucwords($str_title);
	}

	public static function getTitle()
	{
		$ci =&get_instance();
	    return (self::$header_title) ? self::$header_title : 'Smart Notes';
	}


	/*Render View*/

	public static function render($view_name, $params = array(), $layout = 'default')
	{
		$view_content = self::$ci->load->view($view_name, $params, TRUE); 
		if(!self::$ci->input->is_ajax_request()){
			self::$ci->load->view('/layout/index', [ 'content_for_layout' => $view_content ]);
		}else {
			if($_SERVER['X_REQUESTED_WITH'] == 'XMLHttpRequest'){

				self::$ci->load->view($view_name, $params);
			}else{
				self::$ci->load->view($view_name, $params, TRUE);	
			}
		}
	}

	public static function renderAjax($view_name, $params = array(), $layout = 'default')
	{
		$view_content = self::$ci->load->view($view_name, $params, TRUE); 

		self::$ci->load->view($view_name, $params);
	}

	public function __destruct()
	{

	}

}