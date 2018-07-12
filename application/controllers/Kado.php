<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kado extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data = array(
			'title' => 'Kadô | A arte dos arranjos florais',
			'fotos' => $this->getFotos(),
		);

		$this->load->view('header', $data);
		$this->load->view('ikebana');
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/ikebana/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/ikebana/fotos/'.$foto;
		}
		return $fotos;
	}
}