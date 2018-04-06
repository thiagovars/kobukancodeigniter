<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Origami extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Origami | Ori (dobrar) gami (papel)';
		for ($i=1; $i <= 6; $i++) { 
			$data['fotos'][] = 'img/origami/origami'.$i.'.jpg';
		}
		$this->load->view('header', $data);
		$this->load->view('origami');
		$this->load->view('footer');
	}
}