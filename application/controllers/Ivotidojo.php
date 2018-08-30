<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ivotidojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data = array(
			'endereco' => 'Av. Capivara, 126 - Harmonia - RS',
			'title' => 'Dojo Ivoti',
			'title_treino_aikido' => '<h2>Horários para treino <strong>Aikido</strong></h2>',
			'config_horarios_md' => 'col-md-8',
			'fotos' => get_fotos('ivoti/fotos'),
			'contato' => array(
				'Manoel Valim' => '(51) 8289 1676',
			),
			'horarios_treino' => array(
				'Segunda' => array('hora' => '19h15 - 21h15', 'instrutor' => 'Manuel Valim'),
				'Sexta'   => array('hora' => '19h15 - 21h15', 'instrutor' => 'Manuel Valim'),
				'Sábado'  => array('hora' => '10h', 'instrutor' => 'Manuel Valim'),
			),
			'dojo_parceiro' => array(
				'title' => '<p class="tall">A Mileniumm arts é um dojo parceiro da <strong>Kobukan</strong></p>',
				'logo' => '/img/ivoti/logo.png',
			),
			'responsaveis' => array(
				'Manoel Valim' => array(
					'foto' => '/img/team/valim.jpg',
					'short_name' => 'Valim',
					'graduation' => 'Nidan (2º)',
				),
			),
		);

		$this->load->view('header', $data);
		$this->load->view('view_dojo');
		$this->load->view('footer');
	}
}