<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Culturaoriental extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Fotos sobre cultura oriental';
		for ($i=1; $i <= 48; $i++) {
			$data['fotos'][] = $i.'.jpg';
		}
		$this->load->view('header', $data);
		$this->load->view('culturaoriental');
		$this->load->view('footer');
	}
}