<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Origami extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data = array(
			'title' => 'Origami | Ori (dobrar) gami (papel)',
			'fotos' => $this->getFotos(),
		);
		
		$this->load->view('header', $data);
		$this->load->view('origami');
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/origami/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/origami/fotos/'.$foto;
		}
		return $fotos;
	}
}