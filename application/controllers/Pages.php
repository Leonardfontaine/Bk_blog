<?php
	/**
	 * 
	 */
	class Pages extends CI_Controller
	{



		public function view($page = 'about'){
			if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
				show_404();
			}

			$data['title'] = ucfirst($page);
			$data['posts'] = $this->post_model->get_posts();
			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('pages/howdoesitwork', $data);
			$this->load->view('pages/features', $data);
			$this->load->view('pages/roadmap', $data);
			$this->load->view('pages/ourteam', $data);
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}
		
	}