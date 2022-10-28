<?php

class AuthModel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function login($username, $password)//: bool|array
	{

		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('departments', 'users.user_department_id = departments.department_id', 'left');
		$this->db->where('user_name', $username);
		$query = $this->db->get();
		$result = $query->row_array();

		if (!empty($result) && password_verify($password, $result['password']))
		{
			return $result;
		} else
		{
			return false;
		}
	}
}
