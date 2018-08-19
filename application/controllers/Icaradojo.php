<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Icaradojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data = array(
			'endereco' => 'R. António Jesuino Figueira - Tereza Cristina Içara - SC',
			'title' => 'Dojo Içara',
			'fotos' => $this->getFotos(),
			'contato' => array(
				'Robson Lee' => '(48) 99652 7723',
			),
			'horarios_treino' => array(
				'Terças' => array('hora' => '19h30 - 21h', 'instrutor' => 'Robson Lee'),
				'Quintas' => array('hora' => '19h30 - 21h', 'instrutor' => 'Robson Lee')
			),
		);

		$this->load->view('header', $data);
		$this->load->view('icara_dojo', $data);
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/icara/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/icara/fotos/'.$foto;
		}
		return $fotos;
	}
}