<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iaido extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Iaido | Arte Marcial Japonesa do Desembainhar da Espada';

		for ($i=1; $i <= 29; $i++) { 
			$data['fotos'][] = 'iaido'.$i.'.jpg';
		}
									
		$this->load->view('header', $data);
		$this->load->view('iaido');
		$this->load->view('footer');
	}
}