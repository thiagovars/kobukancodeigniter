<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lagunadojo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'R. Getúlio Vargas, 57, Lagnuna - Santa Catarina',
			'title' => 'Dojo Laguna',
			'fotos' => $this->getFotos(),
		);

		$this->load->view('header', $data);
		$this->load->view('laguna_dojo', $data);
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/laguna/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/laguna/fotos/'.$foto;
		}
		return $fotos;
	}
}