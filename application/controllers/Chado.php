<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chado extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Chadô | A Cerimônia do Chá';
		$ignore = array();
		for ($i=1; $i <= 30; $i++) { 
			if (in_array($i, $ignore)) {
				continue;
			}
			$data['fotos'][] = 'chanoyu'.$i.'.jpg';
		}
		$this->load->view('header', $data);
		$this->load->view('chanoyu');
		$this->load->view('footer');
	}
}