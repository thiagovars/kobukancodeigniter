<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acupuntura extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Acupuntura | Medicina Tradicional Chinesa';
		for ($i=1; $i <= 6; $i++) {
			$data['fotos'][] = 'acupuntura'.$i.'.jpg';
		}
		$this->load->view('header', $data);
		$this->load->view('acupuntura');
		$this->load->view('footer');
	}
}