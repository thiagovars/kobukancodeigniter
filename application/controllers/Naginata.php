<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Naginata extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data = array(
			'title' => 'Naginata | Espada lança',
			'fotos' => get_fotos('naginata/fotos'),
		);

		$this->load->view('header', $data);
		$this->load->view('naginata');
		$this->load->view('footer');
	}
}