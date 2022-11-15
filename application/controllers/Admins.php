<?php

class Admins extends  MY_Controller
{
	public function index()
	{
		$data['title'] = 'Admin Dashboard.';


		/*
		if ($this->session->userdata('logged_in') == TRUE)
		{
			$user_data = $this->session->userdata('data');

			$data['user_data'] = $user_data;

		}
		else
		{
			redirect(base_url() . 'login');
		}
		*/


		$this->load->view('templates/header');
		$this->load->view('templates/topnav');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/wrapper');
		$this->load->view('admins/index');
		$this->load->view('templates/footer');
	}
}
