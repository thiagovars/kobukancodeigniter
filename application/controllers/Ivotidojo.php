<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ivotidojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data = array(
			'endereco' => 'Av. Capivara, 126 - Harmonia - RS',
			'title' => 'Dojo Ivoti',
			'fotos' => $this->getFotos(),
			'contato' => array(
				'Manoel Valim' => '(51) 8289 1676',
			),
			'horarios_treino' => array(
				'Segunda' => array('hora' => '19h15 - 21h15', 'instrutor' => 'Manuel Valim'),
				'Sexta'   => array('hora' => '19h15 - 21h15', 'instrutor' => 'Manuel Valim'),
				'Sábado'  => array('hora' => '10h', 'instrutor' => 'Manuel Valim'),
			),
		);

		$this->load->view('header', $data);
		$this->load->view('ivoti_dojo', $data);
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/ivoti/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/ivoti/fotos/'.$foto;
		}
		return $fotos;
	}
}