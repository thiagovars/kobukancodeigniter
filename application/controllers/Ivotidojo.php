<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ivotidojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['endereco'] = 'Rua Alberto Pasqualini, 75 - RS';
		$data['title'] = 'Dojo Ivoti | '.$data['endereco'];

		for ($i=1; $i <= 4; $i++) { 
			$data['fotos'][] = 'imagem'.$i.'.jpg';
		}
									
		$this->load->view('header', $data);
		$this->load->view('ivoti_dojo', $data);
		$this->load->view('footer');
	}
}