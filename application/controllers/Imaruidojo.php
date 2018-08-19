<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imaruidojo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'SC-437, SC, 88770-000, Brazil',
			'title' => 'Dojo Imarui',
			'fotos' => $this->getFotos(),
			'contato' => array(
				'Junior Isidóro' => '(48) 99973 1988',
			),
			'horarios_treino' => array(
				'Terças' => array('hora' => '19h30 - 20h30', 'instrutor' => 'Junior Isidóro'),
				'Quinta' => array('hora' => '19h30 - 20h30', 'instrutor' => 'Junior Isidóro'),
				'Sábado' => array('hora' => '19h30 - 20h30', 'instrutor' => 'Junior Isidóro'),
			),
		);

		$this->load->view('header', $data);
		$this->load->view('imarui_dojo');
		$this->load->view('footer');
	}
	
	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/imarui/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/imarui/fotos/'.$foto;
		}
		return $fotos;
	}
}