<?php

Class Breadcrumb
{
	private $_instance = null;
	public $label = [];
	public $url	 = [];
	public function __construct()
	{
		// $this->label[] = $params['label']; 
		// $this->[] = $params['label']; 
	}

	public static function create($params = [])
	{

		// self::$_instance = new Breadcrumb();
		$output = '<nav aria-label="breadcrumb">';
		$output .= '<ol class="breadcrumb">';
		if(!$params)
		{
			die('Missing parameters. Breadcrumb::create([label => $label, url => $url])');
		}else {
			foreach ($params as $item => $val) {
				$url = null;
				if(array_key_exists('url', $val)){
					$url = $val['url'];
				}

				if(array_key_exists('label', $val)){
					$output .= '<li class="breadcrumb-item">';
						if($url){
							$output .= '<a href="' .$url. '" class="ajax-link">';
						}
						$output .= $val['label'];
						if($url){
							$output .= '</a>';
						}
					$output .= '</li>';
				}

			}
		}

		$output .= '</ol>';
		$output .= '</nav>';

		echo $output;
	}
}

// Breadcrumb::create(['label' => 'asdas', 'url' => $url]);
// Breadcrumb::create(['label' => 'asdas', 'url' => $url]);