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
				'Silon Oliveira' => '(48) 99868-7613',
			),
			'horarios_treino' => array(
				'Terça'    => array('hora' => '19h - 20h30', 'instrutor' => 'Silon'),
				'Sábado'   => array('hora' => '16h - 17h30', 'instrutor' => 'Silon'),
			),
			'responsaveis' => array(
                'Silon Oliveira' => array(
                 'foto' => '/img/laguna/silon-260.jpg',
                 'short_name' => 'Silon',
                 'graduation' => 'Shodan (1º Dan)',
                ),
			),
		);

		$this->load->view('header', $data);
		$this->load->view('view_dojo');
		$this->load->view('footer');
	}
}