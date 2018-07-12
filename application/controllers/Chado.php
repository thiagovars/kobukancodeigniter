<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chado extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'title' => 'Chadô | A Cerimônia do Chá',
			'fotos' => $this->getFotos(),
		);
		
		$this->load->view('header', $data);
		$this->load->view('chanoyu');
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/chanoyu/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/chanoyu/fotos/'.$foto;
		}
		return $fotos;
	}
}