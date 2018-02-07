<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Capivaridojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data = array('title' => 'Dojo Capivari de baixo | Rua João Goulart, 610, centro - Capivari de Baixo - SC');
		for ($i=1; $i < 19; $i++) { 
			$data['fotos'][] = 'imagem'.$i.'.jpg';
		}
		$this->load->view('header', $data);
		$this->load->view('capivari_dojo');
		$this->load->view('footer');
	}
}