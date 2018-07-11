<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Capivaridojo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'Rua João Goulart, 610, centro - Capivari de Baixo - SC',
			'title' => 'Dojo Capivari de baixo',
			'fotos' => $this->getFotos(),
		);
		
		$this->load->view('header', $data);
		$this->load->view('capivari_dojo', $data);
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/capivari/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/capivari/fotos/'.$foto;
		}
		return $fotos;
	}
}