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
			'fotos' => $this->getFotos(),
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
				'Juliano Machado Pinheiro' => array(
					'foto' => '/img/team/JulianoPinheiro.jpg',
					'short_name' => 'Juliano',
					'graduation' => 'Shodan (1º Dan)',
				),
				'Carlos Machado' => array(
					'foto' => '/img/team/carlosMachado.jpg',
					'short_name' => 'Carlos Machado',
					'graduation' => 'Faixa Azul (Faixa Azul)',
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
		$map = directory_map('./img/laguna/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/laguna/fotos/'.$foto;
		}
		return $fotos;
	}
}