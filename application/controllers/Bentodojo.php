<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bentodojo extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		
		$data = array(
			'endereco' => 'R. Pernambuco, 281, centro - Bento Gonçalves - RS',
			'title' => 'Dojo Bento Gonçalves',
			'config_horarios_md' => 'col-md-8',
			'title_treino_aikido' => '<h2 class="shorter">Horários para treino <strong>Aikido</strong></h2>',
			'fotos' => get_fotos('bento/fotos'),
			'contato' => array(
				'José Aquini' => '(54) 9962 5249',
			),
			'horarios_treino' => array(
				'Terças' => array('hora' => '20h00 - 21h00', 'instrutor' => 'José Aquini'),
				'Quintas' => array('hora' => '20h00 - 21h00', 'instrutor' => 'José Aquini'),
			),
			'responsaveis' => array(
				'José Paulo Aquini Camargo' => array(
					'foto' => '/img/team/ze.jpg',
					'short_name' => 'José Aquini',
					'graduation' => 'Shodan (1º Dan)'
				),
			),
		);

		$this->load->view('header', $data);
		$this->load->view('view_dojo');
		$this->load->view('footer');
	}
}