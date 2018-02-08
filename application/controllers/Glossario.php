<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Glossario extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Glossário | Principais termos dentro do dojo';

		$this->load->view('header', $data);
		$this->load->view('glossario');
		$this->load->view('footer');
	}
}