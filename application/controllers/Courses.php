<?php

class Courses extends CI_Controller
{
	public function index()
	{
		$data['courses'] = $this->CourseModel->get_courses();
		$data['title'] = 'Cursos';

		$this->load->view('templates/header');
		$this->load->view('templates/topnav');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/wrapper');
		$this->load->view('items/index', $data); //loading page and data
		$this->load->view('templates/footer');
	}






	public function view($id = NULL)
	{
		$data['course_item'] = $this->CourseModel->get_courses($id);

		if (empty($data['course_item']))
		{
			show_404();
		}

		$data['title'] = $data['course_item']['title'];

		$this->load->view('templates/header');
		$this->load->view('templates/topnav');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/wrapper');
		$this->load->view('courses/view', $data);
		$this->load->view('templates/footer');
	}




	public function create()
	{
		$data['section'] = 'Cursos';
		$data['title'] = 'Registrar Curso.';
		$data['departments'] = $this->AuthDBModel->get_departments();
		$data['users'] = $this->AuthDBModel->get_users();

		$this->form_validation->set_rules('course_name', 'Nombre del curso', 'required|callback_check_course_exists');

		$this->form_validation->set_error_delimiters(
			'<div class="alert alert-danger alert-dismissible fade show"><strong>Error&nbsp; </strong><br>',
			' <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'
		);

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('templates/wrapper');
			$this->load->view('courses/create', $data);
			$this->load->view('templates/footer');
		}
		else
		{

			$course_id = $this->CourseModel->store_courses();

			$this->session->set_flashdata(
				'created',
				'<br> Se ha registrado el curso: ' . $this->input->post('course_name')
			);

			redirect(base_url() . 'content/create/' . $course_id);
		}
	}







	public function update($id = NULL)
	{

		$data['course_item'] = $this->CourseModel->get_courses($id);
		if (empty($data['course_item']))
		{
			show_404();
		}

		$data['title'] = 'Actualizar Curso: ' . $data['course_item']['title']; ;


		$this->form_validation->set_rules('course_name', 'Nombre del curso', 'required');
		$this->form_validation->set_rules('course_id', 'Curso a actualizar', 'required');


		$this->form_validation->set_error_delimiters(
			'<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong class="uppercase"><bdi>Error</bdi></strong> &nbsp;',
			'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
		);


		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('templates/wrapper');
			$this->load->view('courses/create');
			$this->load->view('templates/footer');
		}
		else
		{
			$this->CourseModel->update_course();

			$this->session->set_flashdata(
				'updated',
				'<br> Se ha actulizado el curso: ' . $this->input->post('course_name')
			);

			redirect(base_url() . 'courses/update');

		}
	}




	public function delete($id = NULL)
	{
		$data['course_item'] = $this->CourseModel->get_courses($id);
		if (empty($data['course_item'])) {
			show_404();
		}

		$data['title'] = 'Eliminar Curso: ' . $data['course_item']['title'];

		$this->form_validation->set_rules('course_id', 'Curso a eliminar', 'required');

		$this->form_validation->set_error_delimiters(
			'<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong class="uppercase"><bdi>Error</bdi></strong> &nbsp;',
			'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
		);

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/topnav');
			$this->load->view('templates/sidebar');
			$this->load->view('templates/wrapper');
			$this->load->view('courses/delete');
			$this->load->view('templates/footer');
		}
		else
		{
			$this->CourseModel->delete_course();

			$this->session->set_flashdata(
				'deleted',
				'<br> Se ha eliminado el curso.'
			);

			redirect(base_url() . 'courses');

		}
	}





	function check_course_exists($course)
	{
		$this->form_validation->set_message('check_course_exists','Un curso con este nombre ya existe, puede agragar otra revision en el menu principal.');

		if($this->CourseModel->check_course_exists($course))
		{
			return true;
		}
		else
		{
			return false;
		}
	}


}
