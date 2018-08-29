<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Culturaoriental extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data = array(
			'title' => 'Fotos sobre cultura oriental',
			'fotos' => $this->getFotos(),
		);
		$this->load->view('header', $data);
		$this->load->view('culturaoriental');
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/cultura_oriental/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/cultura_oriental/'.$foto;
		}
		return $fotos;
	}
}