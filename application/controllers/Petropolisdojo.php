<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petropolisdojo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'R. Frederico Michaelsen, 443 - Centro - Nova Petrópolis - RS',
			'title' => 'Dojo Nova Petrópolis',
			'fotos' => $this->getFotos(),
			'contato' => array(
				'Rodrigo Sfredo' => '(54) 98133 4651',
			),
			'horarios_treino' => array(
				'Segundas' => array('hora' => '18h - 19h', 'instrutor' => 'Rodrigo Sfredo'),
				'Quartas'  => array('hora' => '18h - 19h', 'instrutor' => 'Rodrigo Sfredo'),
			),
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