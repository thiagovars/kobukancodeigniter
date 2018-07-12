<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shodo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'title' => 'Shodo | A Arte da Caligrafia Japones',
			'fotos' => $this->getFotos(),
		);
		
		$this->load->view('header', $data);
		$this->load->view('shodo');
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/shodo/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/shodo/fotos/'.$foto;
		}
		return $fotos;
	}
}