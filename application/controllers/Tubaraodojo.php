<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tubaraodojo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'Rua Prudente de Moraes 352 - Tubarão - SC Brasil',
			'title' => 'Dojo Tubarão',
			'fotos' => $this->getFotos(),
		);

		$this->load->view('header', $data);
		$this->load->view('tubarao_dojo', $data);
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/tubarao/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/tubarao/fotos/'.$foto;
		}
		return $fotos;
	}
}