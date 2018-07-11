<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Farroupilhadojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['endereco'] = 'Rua Marechal Deodoro da Fonseca, 855. Bairro Planalto';
		$data['title'] = 'Dojo Farroupilha | '.$data['endereco'];
		
		for ($i=1; $i <= 4; $i++) { 
			$data['fotos'][] = '/img/farroupilha/farroupilha'.$i.'.jpg';
		}
		$this->load->view('header', $data);
		$this->load->view('farroupilha_dojo', $data);
		$this->load->view('footer');
	}
}