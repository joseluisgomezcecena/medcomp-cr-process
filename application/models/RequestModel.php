<?php

class RequestModel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_requests($id = FALSE)
	{
		if($id === FALSE)
		{
			$this->db->order_by('cr_id', 'DESC');
			$query = $this->db->get('change_review');
			return $query->result_array();
		}

		$query = $this->db->get_where('change_review', array('cr_id' => $id));
		return $query->row_array();
	}


	public function generate_new_request()
	{
		$data = array(
			'originator' => 'Originator',
		);

		$this->db->insert('change_review', $data);
		return $this->db->insert_id();
	}

}
