<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends MX_Controller  {

	function __construct()
    {
        parent::__construct();
		$this->load->model('users/Usersmd', 'usersmd');
      	$this->load->helpers(['dates', 'clients']);

    }

	public function index()
	{
		Web::Render('index');
	}

	public function create()
	{
		$request = $this->app->request();

		if($request->post()){
			$result['status'] = 'failed';
			$result['msg'] = 'Save data failed';

			$post['project_id'] = Autogen::ID('PJ');
			$post['project_title'] = $this->input->post('title');
			$post['project_description'] = $this->input->post('description');
			$post['start_date'] = DateEN($this->input->post('start_date'));
			$post['end_date'] 	= DateEN($this->input->post('end_date'));

			// echo json_encode($post);
			if($this->db->insert('project', $post)){
				$result['status'] = 'success';
				$result['msg'] = 'Save data success';
			}

			echo json_encode($result);
		}else{
			Web::RenderAjax('create');
		}
	}

	public function resize_event()
	{
		
		$result['status'] = 'failed';
		$result['msg'] = 'Save data failed';

		$post['project_id'] = $this->input->post('id');
		$post['end_date'] 	= DateEN($this->input->post('end_date'));
		$this->db->where('project_id', $post['project_id']);
		if($this->db->update('project', $post)){
			$result['status'] = 'success';
			$result['msg'] = 'Save data success';
		}

		echo json_encode($result);

	}

	public function drag_event()
	{
		
		$result['status'] = 'failed';
		$result['msg'] = 'Save data failed';

		$model = $this->db->get_where('project', ['project_id' => $this->input->post('id')])->row();

		if($model){
			$interval = $this->input->post('xinterval');
			$operator = substr($interval, 0, 1);
			$int_value = substr($interval, 1);

			$start_date = new DateTime($model->start_date);
			$end_date = new DateTime($model->end_date);
			// print_r($operator);
			if($operator == '-'){
				$start_date = $start_date->sub( new DateInterval($int_value) )->format('Y-m-d');
				$end_date = $end_date->sub( new DateInterval($int_value) )->format('Y-m-d');
			}else{
				
				$start_date = $start_date->add( new DateInterval($interval) )->format('Y-m-d');
				$end_date = $end_date->add( new DateInterval($interval) )->format('Y-m-d');
			}
			

			
			

			$post['project_id'] = $this->input->post('id');
			$post['start_date'] = $start_date;
			$post['end_date'] = $end_date;


			$this->db->where('project_id', $post['project_id']);
			if($this->db->update('project', $post)){
				$result['status'] = 'success';
				$result['msg'] = 'Save data success';
			}
		}
		
		echo json_encode($result);
	}
	
	


}
