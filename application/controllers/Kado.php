<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kado extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data = array(
			'title' => 'Kadô | A arte dos arranjos florais',
			'fotos' => get_fotos('kado/fotos'),
		);

		$this->load->view('header', $data);
		$this->load->view('kado');
		$this->load->view('footer');
	}
}