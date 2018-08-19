<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portoalegredojo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'R. Joaquim Silveira, 466 - Porto Alegre - RS',
			'title' => 'Dojo Porto Alegre',
			'fotos' => $this->getFotos(),
			'contato' => array(
				'Mathaeus Silveira' => '(51) 99147 8021',
			),
			'horarios_treino' => array(
				'Terças'  => array('hora' => '19h30 - 20h30', 'instrutor' => 'Mathaeus Silveira'),
				'Quintas' => array('hora' => '19h30 - 20h30', 'instrutor' => 'Mathaeus Silveira'),
				'Sábado'  => array('hora' => '10h00 - 12h00', 'instrutor' => 'Mathaeus Silveira'),
			),
		);

		$this->load->view('header', $data);
		$this->load->view('portoalegre_dojo', $data);
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/portoalegre/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/portoalegre/fotos/'.$foto;
		}
		return $fotos;
	}
}