<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imaruidojo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'SC-437, SC, 88770-000, Brazil',
			'title' => 'Dojo Imarui',
			'title_treino_aikido' => '<h2>Horários para treino <strong>Aikido</strong></h2>',
			'config_horarios_md' => 'col-md-8',
			'fotos' => $this->getFotos(),
			'contato' => array(
				'Junior Isidóro' => '(48) 99973 1988',
			),
			'horarios_treino' => array(
				'Terças' => array('hora' => '19h30 - 20h30', 'instrutor' => 'Junior Isidóro'),
				'Quinta' => array('hora' => '19h30 - 20h30', 'instrutor' => 'Junior Isidóro'),
				'Sábado' => array('hora' => '19h30 - 20h30', 'instrutor' => 'Junior Isidóro'),
			),
			'responsaveis' => array(
				'Junior Isidóro' => array(
					'foto' => '/img/team/junior.jpg',
					'short_name' => 'Júnior',
					'graduation' => 'Nidan (2º)',
				),
			),
		);

		$this->load->view('header', $data);
		$this->load->view('view_dojo');
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