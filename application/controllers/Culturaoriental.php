<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Culturaoriental extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data = array(
			'title' => 'Fotos sobre cultura oriental',
			'fotos' => get_fotos('cultura_oriental/fotos'),
		);
		$this->load->view('header', $data);
		$this->load->view('culturaoriental');
		$this->load->view('footer');
	}
}