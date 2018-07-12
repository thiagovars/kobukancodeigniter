<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sumie extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'title' => 'Sumi-ê | Pintura em carvão',
			'fotos' => $this->getFotos(),
		);
		$this->load->view('header', $data);
		$this->load->view('sumie');
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/sumie/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/sumie/fotos/'.$foto;
		}
		return $fotos;
	}
}