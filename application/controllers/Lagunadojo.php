<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lagunadojo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'R. Getúlio Vargas, 57, Laguna - SC',
			'title' => 'Dojo Laguna',
			'title_treino_aikido' => '<h2>Horários para treino <strong>Aikido</strong></h2>',
			'config_horarios_md' => 'col-md-8',
			'fotos' => get_fotos('laguna/fotos'),
			'contato' => array(
				'Carlos Machado' => '(48) 98426 3043',
			),
			'horarios_treino' => array(
				'Segundas' => array('hora' => '19h - 20h30', 'instrutor' => 'Carlos Machado'),
				'Quartas'  => array('hora' => '19h - 20h30', 'instrutor' => 'Carlos Machado'),
				'Sexta'    => array('hora' => '19h - 20h30', 'instrutor' => 'Juliano Machado / Carlos Machado'),
				'Sábado'   => array('hora' => '16h - 17h30', 'instrutor' => 'Juliano Machado / Carlos Machado'),
			),
			'responsaveis' => array(
				'Eduardo Correa' => array(
					'foto' => '/img/team/eduardo.jpg',
					'short_name' => 'Eduardo',
					'graduation' => 'Shodan (4º Dan)',
				),
				'Carlos Machado' => array(
					'foto' => '/img/team/carlosMachado.jpg',
					'short_name' => 'Carlos Machado',
					'graduation' => 'Ikkyu (Faixa Marrom)',
				),
			),
		);

		$this->load->view('header', $data);
		$this->load->view('view_dojo');
		$this->load->view('footer');
	}
}