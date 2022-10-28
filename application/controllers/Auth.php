<?php
class Auth extends  CI_Controller
{


	public function login()
	{

		$data['title'] = 'Login Here!';

		$this->form_validation->set_rules('username', 'User Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');


		$this->form_validation->set_error_delimiters(
			'<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong class="uppercase"><bdi>Error!: </bdi></strong> &nbsp;',
			'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
		);



		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('auth/login', $data);
			$this->load->view('templates/footer');
		}
		else
		{
			//Encrypt password
			$username = $this->input->post('username');
			$password = $this->input->post('password');


			$data = $this->AuthModel->login($username, $password);

			if($data)
			{
				//create session
				$user_data = array(
					'data'=>$data,
					'user_name'=>$username,
					'logged_in'=>true,
				);

				$this->session->set_userdata($user_data);


				//session message
				$this->session->set_flashdata('login_success', 'You are now logged in.');
				redirect(base_url());
			}
			else
			{
				//session message
				$this->session->set_flashdata('login_failed', 'Incorrect username or password.');
				redirect(base_url() . 'users/login');
			}
		}


	}



	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('user_name');

		//session message
		$this->session->set_flashdata('user_logged_out', 'You have logged out.');
		redirect(base_url() . 'users/login');
	}

}
