<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iaido extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'title' => 'Iaido | Arte Marcial Japonesa do Desembainhar da Espada',
			'fotos' => $this->getFotos(),
		);

		$this->load->view('header', $data);
		$this->load->view('iaido', $data);
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/iaido/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/iaido/fotos/'.$foto;
		}
		return $fotos;
	}
}