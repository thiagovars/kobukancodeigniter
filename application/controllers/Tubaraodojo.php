<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tubaraodojo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'R. Prudente de Moraes 352 - Tubarão - SC',
			'title' => 'Dojo Tubarão',
			'title_treino_aikido' => '<h2>Horários para treino <strong>Aikido</strong></h2>',
			'config_horarios_md' => 'col-md-8',
			'fotos' => $this->getFotos(),
			'contato' => array(
				'Fabrício Benedet' => '(48) 99986 0065',
			),
			'horarios_treino' => array(
				'Terças' => array('hora' => '19h30 - 21h30', 'instrutor' => 'Fabrício Benedet'),
				'Quintas' => array('hora' => '19h30 - 21h30', 'instrutor' => 'Hayalon'),
			),
			'responsaveis' => array(
				'Fabrício Benedet' => array(
					'foto'       => '/img/team/fabricio.jpg',
					'short_name' => 'Fabrício',
					'graduation' => 'Sandan (3º Dan)',
				),
				'Hayalan' => array(
					'foto'       => '/img/team/hayalon.jpg',
					'short_name' => 'Hayalan',
					'graduation' => '2º kyu (Faixa Azul)',
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
		$map = directory_map('./img/tubarao/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/tubarao/fotos/'.$foto;
		}
		return $fotos;
	}
}