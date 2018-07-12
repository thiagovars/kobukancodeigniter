<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petropolisdojo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'Rua Frederico Michaelsen, 443 - Centro - Nova Petrópolis / RS',
			'title' => 'Dojo Nova Petrópolis',
			'fotos' => $this->getFotos(),
		);

		$this->load->view('header', $data);
		$this->load->view('petropolis_dojo', $data);
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/petropolis/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/petropolis/fotos/'.$foto;
		}
		return $fotos;
	}
}