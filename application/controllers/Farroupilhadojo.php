<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Farroupilhadojo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'Rua Marechal Deodoro da Fonseca, 855. Bairro Planalto',
			'title' => 'Dojo Farroupilha',
			'fotos' => $this->getFotos(),
		);
		
		$this->load->view('header', $data);
		$this->load->view('farroupilha_dojo', $data);
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/farroupilha/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/farroupilha/fotos/'.$foto;
		}
		return $fotos;
	}
}