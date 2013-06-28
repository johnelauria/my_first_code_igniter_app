<?php
	class Pages extends ci_controller {
		public function view($page = 'home') {
			if (!file_exists('application/views/pages/'.$page.'.php')) {
				show_404();
			}

			$data['title'] = ucfirst($page);

			$this->load->view('layouts/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('layouts/footer', $data);
		}
	}
?>