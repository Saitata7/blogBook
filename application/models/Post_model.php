<?php
	class Post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts($slug = FALSE, $limit = FALSE, $offset = FALSE){
			if($limit){
				$this->db->limit($limit, $offset);
			}
			if($slug === FALSE){
				$this->db->order_by('posts.id', 'DESC');
				$this->db->join('tags', 'tags.id = posts.tag_id');
				$query = $this->db->get('posts');
				return $query->result_array();
			}

			$query = $this->db->get_where('posts', array('slug' => $slug));
			return $query->row_array();
		}

		public function create_post($post_image){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
				'tag_id' => $this->input->post('tag_id'),
				'user_id' => $this->session->userdata('user_id'),
				'post_image' => $post_image
			);

			return $this->db->insert('posts', $data);
		}

		public function delete_post($id){
			$image_file_name = $this->db->select('post_image')->get_where('posts', array('id' => $id))->row()->post_image;
			$cwd = getcwd(); // save the current working directory
			$image_file_path = $cwd."\\assets\\images\\posts\\";
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); // Restore the previous working directory
			$this->db->where('id', $id);
			$this->db->delete('posts');
			return true;
		}

		public function update_post(){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
				'tag_id' => $this->input->post('tag_id')
			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('posts', $data);
		}

		public function get_tags(){
			$this->db->order_by('name');
			$query = $this->db->get('tags');
			return $query->result_array();
		}

		public function get_posts_by_tag($tag_id){
			$this->db->order_by('posts.id', 'DESC');
			$this->db->join('tags', 'tags.id = posts.tag_id');
				$query = $this->db->get_where('posts', array('tag_id' => $tag_id));
			return $query->result_array();
		}

		public function top_posts($slug = FALSE)
		{
			if ($slug === FALSE) {
				$this->db->select('posts.*, COUNT(comments.post_id) as comment_count, tags.name AS tag_name');
				$this->db->from('posts');
				$this->db->join('comments', 'comments.post_id = posts.id', 'left');
				$this->db->join('tags', 'tags.id = posts.tag_id');
				$this->db->group_by('posts.id');
				$this->db->order_by('comment_count', 'desc');
				$this->db->limit(5); // Retrieve the top 5 posts
		
				$query = $this->db->get();
				$result = $query->result();
		
				// Result from objects to associative arrays
				$posts = [];
				foreach ($result as $row) {
					$posts[] = (array) $row;
				}
				return $posts;
			}
		
			$query = $this->db->get_where('posts', array('slug' => $slug));
			return $query->row_array();
		}
	}