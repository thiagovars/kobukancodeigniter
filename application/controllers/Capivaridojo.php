<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Capivaridojo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'R. João Goulart, 610, centro - Capivari de Baixo - SC',
			'title' => 'Dojo Capivari de baixo',
			'fotos' => get_fotos('capivari/fotos'),
			'config_horarios_md' => 'col-md-4',
			'title_treino_aikido' => '<h2>Horarios para Treino <strong>Aikido</strong></h2>',
			'contato' => array(
				'Samuel S. Medeiros' => '(48) 99129 2803',
			),
			'horarios_treino' => array(
				'Terças'  => array('hora' => '20h00 - 21h30', 'instrutor' => 'Samuel S. Medeiros'),
				'Quintas' => array('hora' => '20h00 - 21h30', 'instrutor' => 'Samuel S. Medeiros'),
				'Sabado'  => array('hora' => '18h30', 'instrutor' => 'Samuel S. Medeiros'),
			),
			'foto_fachada' => '/img/capivari/fachada.jpg',
			'responsaveis' => array(
				'Samuel de Souza Medeiros' => array(
					'foto' => '/img/team/samuel.jpg',
					'short_name' => 'Samuel',
					'graduation' => 'Nidan (2º Dan)'
				),
			),
		);
		
		$this->load->view('header', $data);
		$this->load->view('view_dojo', $data);
		$this->load->view('footer');
	}
}