<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gramadodojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['endereco'] = 'Av. Borges de Medeiros, 4770 - Floresta, Gramado - RS';
		$data['title'] = 'Dojo Gramado | '.$data['endereco'];

		for ($i=1; $i <= 24; $i++) { 
			$data['fotos'][] = 'gramado'.$i.'.jpg';
		}
									
		$this->load->view('header', $data);
		$this->load->view('gramado_dojo', $data);
		$this->load->view('footer');
	}
}