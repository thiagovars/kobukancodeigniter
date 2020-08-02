<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Garopabadojo extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'Estrada Geral do Ouvidor 202 - sala 3, Campo Duna, Garopaba - SC',
			'title' => 'Dojo Garopaba',
			'title_treino_alternativo' => '<h2>Horários para treino <h3 class="shorter"><strong>Kids</strong></h3></h2>',
			'title_treino_aikido' => '<h2>Horários para treino <h3 class="shorter"><strong>Adulto</strong></h3></h2>',
			'config_horarios_md' => 'col-md-4',
			'fotos' => get_fotos('garopaba/fotos'),
			'contato' => array(
				'Rafael Pereira' => '(48) 99927 7509',
			),
			'horarios_alternativos' => array(
				'Terças'  => array('hora' => '18h - 19h', 'instrutor' => 'Rafael Pereira'),
				'Quintas' => array('hora' => '18h - 19h', 'instrutor' => 'Rafael Pereira'),
			),
			'horarios_treino' => array(
				'Terças'  => array('hora' => '19h - 20h20', 'instrutor' => 'Rafael Pereira'),
				'Quintas' => array('hora' => '19h - 20h20', 'instrutor' => 'Rafael Pereira'),
			),
			'responsaveis' => array(
				'Rafael Pereira Leiria' => array(
					'foto' => '/img/team/rafael.jpg',
					'short_name' => 'Rafael',
					'graduation' => 'Nidan (2º Dan)',
				),
			),
            'instrutores' => array(
                'Leticia Barcelos' => array(
                 'foto' => '/img/garopaba/leticia-barcelos.jpg',
                 'short_name' => 'Leticia',
                 'graduation' => 'Shodan (1º Dan)',
                ),
            ),
		);

		$this->load->view('header', $data);
		$this->load->view('view_dojo', $data);
		$this->load->view('footer');
	}
}