<?php



	class Post_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts($slug = FALSE){
			if($slug === FALSE){
				$this->db->order_by('posts.id', 'DESC');
				$this->db->join('categories', 'categories.iD = posts.category_id');
				$query = $this->db->get('posts');
				return $query->result_array();
			}

			$query = $this->db->get_where('posts',array('slug' => $slug));
			return $query->row_array();

		}

		public function create_post($post_image){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
				'category_id' => $this->input->post('category_id'),
				'user_id' => $this->session->userdata('user_id'),
				'post_image' => $post_image
			);

			return $this->db->insert('posts', $data);
		}

		public function delete_post($id){
			$this->db->where('posts.id',$id);
			$this->db->delete('posts');
			return true;
		}

		public function update_post(){
			$slug = url_title($this->input->post('title'));

			$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
				'category_id' => $this->input->post('category_id')
			);

			$this->db->where('id',$this->input->post('id'));
			return $this->db->update('posts', $data);
		}

		public function get_categories(){
			$this->db->order_by('name');
			$query = $this->db->get('categories'); 
			return $query->result_array();
		}

		public function get_about($slug = FALSE){
			if($slug === FALSE){
				$query = $this->db->get('about');
				return $query->result_array();
			}

			$query = $this->db->get_where('about',array('slug' => $slug));
			return $query->row_array();

		}

		public function update_about(){
			$slug = url_title($this->input->about('title'));

			$data = array(
				'title' => $this->input->about('title'),
				'slug' => $slug,
				'body' => $this->input->about('body')
			);

			$this->db->where('id',$this->input->post('id'));
			return $this->db->update('posts', $data);
		}
	}