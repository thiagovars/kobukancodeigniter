<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bonsai extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Bonsai | A Natureza em Miniatura';
		for ($i=1; $i <= 18; $i++) {
			$data['fotos'][] = 'bonsai'.$i.'.jpg';
		}

		$this->load->view('header', $data);
		$this->load->view('bonsai');
		$this->load->view('footer');
	}
}