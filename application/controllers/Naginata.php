<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Naginata extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data = array(
			'title' => 'Naginata | Espada lança',
			'fotos' => $this->getFotos(),
		);

		$this->load->view('header', $data);
		$this->load->view('naginata');
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/naginata/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/naginata/fotos/'.$foto;
		}
		return $fotos;
	}
}