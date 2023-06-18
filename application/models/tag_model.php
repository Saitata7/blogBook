<?php
	class tag_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_tags(){
			$this->db->order_by('name');
			$query = $this->db->get('tags');
			return $query->result_array();
		}

		public function create_tag(){
			$data = array(
				'name' => $this->input->post('name'),
				'user_id' => $this->session->userdata('user_id')
			);

			return $this->db->insert('tags', $data);
		}

		public function get_tag($id){
			$query = $this->db->get_where('tags', array('id' => $id));
			return $query->row();
		}

		public function delete_tag($id){
			$this->db->where('id', $id);
			$this->db->delete('tags');
			return true;
		}
	}