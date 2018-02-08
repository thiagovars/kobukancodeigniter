<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Naginata extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Naginata | Espada lança';

		$ignore = array();
		for ($i=1; $i <= 16; $i++) {
			if (in_array($i, $ignore)) {
				continue;
			}
			$data['fotos'][] = 'naginata'.$i.'.jpg';
		}
									
		$this->load->view('header', $data);
		$this->load->view('naginata');
		$this->load->view('footer');
	}
}