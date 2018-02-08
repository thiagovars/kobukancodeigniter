<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kado extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Kadô | A arte dos arranjos florais';
		for ($i=1; $i <= 22; $i++) { 
			$data['fotos'][] = 'ikebana'.$i.'.JPG';
		}
		$this->load->view('header', $data);
		$this->load->view('ikebana');
		$this->load->view('footer');
	}
}