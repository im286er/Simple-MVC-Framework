<?php
class homeController Extends Controller {
	protected function init(){
		/*$this->db = new Database();*/
	}

	public function index() {
		/* template variables */
		$data['title'] = 'Home - Simple-MVC-Framework';

		/*$data['user'] = $this->model->getUser();*/

	    /* parse variables as an array to template*/
		$this->template->data = $data;
		$this->template->render('shared');
	}

	public function about(){
		/* template variables */
		$data['title'] = 'About - Simple-MVC-Framework';

	    /* parse variables as an array to template*/
		$this->template->data = $data;
		$this->template->render('shared');
	}
}