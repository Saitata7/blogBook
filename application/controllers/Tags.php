<?php
	class tags extends CI_Controller{
		public function index(){
			$data['title'] = 'Tags';

			$data['tags'] = $this->tag_model->get_tags();

			$this->load->view('templates/header');
			$this->load->view('tags/index', $data);
			$this->load->view('templates/footer');
		}

		public function create(){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			
			$data['title'] = 'Create tag';

			$this->form_validation->set_rules('name', 'Name', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('tags/create', $data);
				$this->load->view('templates/footer');
			} else {
				$this->tag_model->create_tag();

				// Set message
				$this->session->set_flashdata('tag_created', 'Your tag has been created');

				redirect('tags');
			}
		}

		public function posts($id){
			$data['title'] = $this->tag_model->get_tag($id)->name;

			$data['posts'] = $this->post_model->get_posts_by_tag($id);

			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}

		public function delete($id){
			// Check login
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}

			$this->tag_model->delete_tag($id);

			// Set message
			$this->session->set_flashdata('tag_deleted', 'Your tag has been deleted');

			redirect('tags');
		}
	}