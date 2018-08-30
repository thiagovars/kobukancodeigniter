<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Icaradojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data = array(
			'endereco' => 'R. António Jesuino Figueira - Tereza Cristina Içara - SC',
			'title' => 'Dojo Içara',
			'title_treino_aikido' => '<h2>Horários para treino <strong>Aikido</strong></h2>',
			'config_horarios_md' => 'col-md-8',
			'fotos' => get_fotos('icara/fotos'),
			'contato' => array(
				'Robson Lee' => '(48) 99652 7723',
			),
			'horarios_treino' => array(
				'Terças' => array('hora' => '19h30 - 21h', 'instrutor' => 'Robson Lee'),
				'Quintas' => array('hora' => '19h30 - 21h', 'instrutor' => 'Robson Lee')
			),
			'responsaveis' => array(
				'Robson Lee' => array(
					'foto' => '/img/team/robson.jpg',
					'short_name' => 'Robson',
					'graduation' => 'Nidan (2º)',
				),
			),
		);

		$this->load->view('header', $data);
		$this->load->view('view_dojo');
		$this->load->view('footer');
	}
}