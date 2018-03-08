<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Capivaridojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['endereco'] = 'Rua João Goulart, 610, centro - Capivari de Baixo - SC';
		$data['title'] = 'Dojo Capivari de baixo | '.$data['endereco'];

		for ($i=1; $i < 19; $i++) { 
			$data['fotos'][] = 'imagem'.$i.'.jpg';
		}
		$this->load->view('header', $data);
		$this->load->view('capivari_dojo', $data);
		$this->load->view('footer');
	}
}