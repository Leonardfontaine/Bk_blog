 <?php
	/**
	 * 
	 */
	class Posts extends CI_Controller
	{
		public function index(){

			$data['title'] = 'Latest posts';

			$data['posts'] = $this->post_model->get_posts();

			$this->load->view('templates/header2');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}

		public function create(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			
			$data['title'] = 'Create a post';

			$data['categories'] = $this->post_model->get_categories();

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('body', 'Body', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header2');
				$this->load->view('posts/create', $data);
				$this->load->view('templates/footer');
			} else {
				// Upload Image
				$config['upload_path'] = 'C:\xampp\htdocs\bkblog\assets\image\posts';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '200048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$post_image = 'noimage.png';
				} else {
					$data = array('upload_data' => $this->upload->data());
					$post_image = $_FILES['userfile']['name'];
				}

				$this->post_model->create_post($post_image);
				redirect(base_url() .'#ud');
			}

			
		}

		public function delete($id){
			$this->post_model->delete_post($id);
			redirect(base_url() .'#ud');
		}
		
		public function edit($slug){
			$data['post'] = $this->post_model->get_posts($slug);

			$data['categories'] = $this->post_model->get_categories();

			if(empty($data['post'])){
				show_404();
			}

			$data['title'] = 'Edit Post';

			$this->load->view('templates/header2');
			$this->load->view('posts/edit', $data);
			$this->load->view('templates/footer');


		}



		public function update(){
			$this->post_model->update_post();
			redirect(base_url() .'#about');
		}
	}