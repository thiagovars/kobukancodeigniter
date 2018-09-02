<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Origami extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data = array(
			'title' => 'Origami | Ori (dobrar) gami (papel)',
			'fotos' => get_fotos('origami/fotos'),
		);
		
		$this->load->view('header', $data);
		$this->load->view('origami');
		$this->load->view('footer');
	}
}