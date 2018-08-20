<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gramadodojo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'Av. Borges de Medeiros, 4770 - Floresta, Gramado - RS',
			'title' => 'Dojo Gramado ',
			'title_treino_armas' => '<h2 class="shorter">Horários para treino <h3 class="shorter"><strong>Iaido, Jodo e Naginata</strong></h3></h2>',
			'title_treino_aikido' => '<h2 class="shorter">Horários para treino <h3 class="shorter"><strong>Aikido</strong></h3></h2>',
			'config_horarios_md' => 'col-md-4',
			'fotos' => $this->getFotos(),			
			'contato' => array(
				'Jordan T. Nicloti' => '(54) 99604 1112',
			),
			'horarios_armas' => array(
				'Segundas' => array('hora' => '20h00 - 21h00', 'instrutor' => 'Jordan T. Nicloti'),
				'Quartas'  => array('hora' => '20h00 - 21h00', 'instrutor' => 'Jordan T. Nicloti'),
			),
			'horarios_treino' => array(
				'Segundas' => array('hora' => '20h00 - 21h00', 'instrutor' => 'Jordan T. Nicloti'),
				'Quartas'  => array('hora' => '20h00 - 21h00', 'instrutor' => 'Jordan T. Nicloti'),
			),
			'responsaveis' => array(
				'Jordan Teixeira Nicloti' => array(
					'foto' => '/img/team/jordan.jpg',
					'short_name' => 'Jordan',
					'graduation' => 'Shodan (1º Dan)'
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
		$map = directory_map('./img/gramado/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/gramado/fotos/'.$foto;
		}
		return $fotos;
	}
}