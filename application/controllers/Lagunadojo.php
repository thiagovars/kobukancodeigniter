<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lagunadojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['endereco'] = 'R. Getúlio Vargas, 57, Laguna - Santa Catarina';
		$data['title'] = 'Dojo Laguna | '.$data['endereco'];

		for ($i=1; $i <= 11; $i++) { 
			$data['fotos'][] = 'laguna'.$i.'.jpg';
		}
									
		$this->load->view('header', $data);
		$this->load->view('laguna_dojo', $data);
		$this->load->view('footer');
	}
}