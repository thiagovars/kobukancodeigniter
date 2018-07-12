<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bonsai extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'title' => 'Bonsai | A Natureza em Miniatura',
			'fotos' => $this->getFotos(),
		);

		$this->load->view('header', $data);
		$this->load->view('bonsai');
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/bonsai/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/bonsai/fotos/'.$foto;
		}
		return $fotos;
	}
}