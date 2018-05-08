<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chado extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Chadô | A Cerimônia do Chá';
		$ignore = array(17, 18, 19, 20, 21, 22, 23, 24, 25);
		for ($i=1; $i <= 41; $i++) { 
			if (in_array($i, $ignore)) {
				continue;
			}
			$data['fotos'][] = '/img/chanoyu/chanoyu'.$i.'.jpg';
		}
		$this->load->view('header', $data);
		$this->load->view('chanoyu');
		$this->load->view('footer');
	}
}