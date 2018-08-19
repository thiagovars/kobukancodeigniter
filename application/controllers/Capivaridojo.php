<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Capivaridojo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'R. João Goulart, 610, centro - Capivari de Baixo - SC',
			'title' => 'Dojo Capivari de baixo',
			'fotos' => $this->getFotos(),
			'contato' => array(
				'Samuel S. Medeiros' => '(48) 99129 2803',
			),
			'horarios_treino' => array(
				'Terças'  => array('hora' => '20h00 - 21h30', 'instrutor' => 'Samuel S. Medeiros'),
				'Quintas' => array('hora' => '20h00 - 21h30', 'instrutor' => 'Samuel S. Medeiros'),
				'Sabado'  => array('hora' => '18h30', 'instrutor' => 'Samuel S. Medeiros'),
			),
		);
		
		$this->load->view('header', $data);
		$this->load->view('capivari_dojo', $data);
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/capivari/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/capivari/fotos/'.$foto;
		}
		return $fotos;
	}
}