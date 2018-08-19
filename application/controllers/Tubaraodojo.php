<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tubaraodojo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'R. Prudente de Moraes 352 - Tubarão - SC',
			'title' => 'Dojo Tubarão',
			'fotos' => $this->getFotos(),
			'contato' => array(
				'Fabrício Benedet' => '(48) 99986 0065',
			),
			'horarios_treino' => array(
				'Terças' => array('hora' => '19h30 - 21h30', 'instrutor' => 'Fabrício Benedet'),
				'Quintas' => array('hora' => '19h30 - 21h30', 'instrutor' => 'Hayalon'),
			),
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