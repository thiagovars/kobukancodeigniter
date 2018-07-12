<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ivotidojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data = array(
			'endereco' => 'Av. Sen. Alberto Pasqualine, 75 - Harmonia, RS',
			'title' => 'Dojo Ivoti',
			'fotos' => $this->getFotos(),
		);

		$this->load->view('header', $data);
		$this->load->view('ivoti_dojo', $data);
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/ivoti/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/ivoti/fotos/'.$foto;
		}
		return $fotos;
	}
}