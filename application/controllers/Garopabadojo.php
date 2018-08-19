<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Garopabadojo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'Estrada Geral do Ouvidor 372, Campo Duna, Garopaba - SC',
			'title' => 'Dojo Garopaba',
			'fotos' => $this->getFotos(),
			'contato' => array(
				'Rafael Pereira' => '(48) 99927 7509',
			),
			'horarios_kids' => array(
				'Terças'  => array('hora' => '18h - 19h', 'instrutor' => 'Rafael Pereira'),
				'Quintas' => array('hora' => '18h - 19h', 'instrutor' => 'Rafael Pereira'),
			),
			'horarios_treino' => array(
				'Terças'  => array('hora' => '19h - 20h20', 'instrutor' => 'Rafael Pereira'),
				'Quintas' => array('hora' => '19h - 20h20', 'instrutor' => 'Rafael Pereira'),
			),
		);

		$this->load->view('header', $data);
		$this->load->view('garopaba_dojo', $data);
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/garopaba/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/garopaba/fotos/'.$foto;
		}
		return $fotos;
	}
}