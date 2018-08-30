<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petropolisdojo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'R. Frederico Michaelsen, 443 - Centro - Nova Petrópolis - RS',
			'title' => 'Dojo Nova Petrópolis',
			'title_treino_aikido' => '<h2>Horários para treino <strong>Aikido</strong></h2>',
			'config_horarios_md' => 'col-md-4',
			'foto_fachada' => '/img/petropolis/fachada.jpg',
			'fotos' => get_fotos('petropolis/fotos'),
			'contato' => array(
				'Rodrigo Sfredo' => '(54) 98133 4651',
			),
			'horarios_treino' => array(
				'Segundas' => array('hora' => '18h - 19h', 'instrutor' => 'Rodrigo Sfredo'),
				'Quartas'  => array('hora' => '18h - 19h', 'instrutor' => 'Rodrigo Sfredo'),
			),
			'responsaveis' => array(
				'Rodrigo Sfredo' => array(
					'foto' => '/img/team/sfredo.jpg',
					'short_name' => 'Sfredo',
					'graduation' => 'Ikkyu (Faixa Marrom)',
				),
			),
		);

		$this->load->view('header', $data);
		$this->load->view('view_dojo');
		$this->load->view('footer');
	}
}