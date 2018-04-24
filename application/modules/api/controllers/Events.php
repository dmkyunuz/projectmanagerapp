<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends MX_Controller  {

	function __construct()
    {
        parent::__construct();
		

    }

	public function index($token = null)
	{
		$model = $this->db->get('project')->result();
		$result = [];
		foreach ($model as $key) {
			array_push($result, ['title' => $key->project_title,
				'start' => $key->start_date,
				'end' => $key->end_date,
				'id' => $key->project_id,
			]);
		}

		$result = json_encode($result);
		echo $result;
	}


}
