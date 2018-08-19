<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bentodojo extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		
		$data = array(
			'endereco' => 'R. Pernambuco, 281, centro - Bento Gonçalves - RS',
			'title' => 'Dojo Bento Gonçalves',
			'fotos' => $this->getFotos(),
			'contato' => array(
				'José Aquini' => '(54) 9962 5249',
			),
			'horarios_treino' => array(
				'Terças' => array('hora' => '20h00 - 21h00', 'instrutor' => 'José Aquini'),
				'Quintas' => array('hora' => '20h00 - 21h00', 'instrutor' => 'José Aquini'),
			), 
		);

		$this->load->view('header', $data);
		$this->load->view('bento_dojo', $data);
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/bento/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/bento/fotos/'.$foto;
		}
		return $fotos;
	}
}