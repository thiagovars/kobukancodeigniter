<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imbitubadojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Dojo Imbituba';

		for ($i=1; $i <= 4; $i++) { 
			$data['fotos'][] = 'imbituba'.$i.'.jpg';
		}
									
		$this->load->view('header', $data);
		$this->load->view('imbituba_dojo');
		$this->load->view('footer');
	}
}