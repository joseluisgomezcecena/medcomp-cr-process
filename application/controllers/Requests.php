<?php

class Requests extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Change Review List';
		$data['requests'] = $this->RequestModel->get_requests();

		//load header, page & footer
		$this->load->view('templates/header');
		$this->load->view('templates/topnav');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/wrapper');
		$this->load->view('requests/index', $data); //loading page and data
		$this->load->view('templates/footer');


	}


	public function new()
	{
		$cr_id = $this->RequestModel->generate_new_request();
		redirect('requests/create/'.$cr_id);
	}


	public function create()
	{
		$data['title'] = 'Create Request';

		$this->form_validation->set_rules('request_title', 'Request Title', 'required');
		$this->form_validation->set_rules('request_description', 'Request Description', 'required');
		$this->form_validation->set_rules('request_status', 'Request Status', 'required');

		if($this->form_validation->run() === FALSE)
		{
			//load header, page & footer
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('templates/wrapper');
			$this->load->view('requests/create', $data); //loading page and data
			$this->load->view('templates/footer');
		}
		else
		{
			$this->RequestModel->create_request();
			//set message
			$this->session->set_flashdata('request_created', 'Your request has been created');
			redirect(base_url() . 'requests');
		}


	}



}
