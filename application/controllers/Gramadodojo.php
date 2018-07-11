<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gramadodojo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'Av. Borges de Medeiros, 4770 - Floresta, Gramado - RS',
			'title' => 'Dojo Gramado ',
			'fotos' => $this->getFotos(),			
		);

		$this->load->view('header', $data);
		$this->load->view('gramado_dojo', $data);
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/gramado/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/gramado/fotos/'.$foto;
		}
		return $fotos;
	}
}