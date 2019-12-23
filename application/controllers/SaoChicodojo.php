<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saochicodojo extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'Av. Júlio de Castilhos, 1363 - Centro',
			'title' => 'Dojo São Francisco de Paula',
			'fotos' => get_fotos('saochico/fotos'),
			'title_treino_aikido' => '',
			'config_horarios_md' => 'col-md-8',
			'contato' => array(
				'' => '',
			),
			'horarios_treino' => array(
				'' => array('hora' => '', 'instrutor' => ''),
				'' => array('hora' => '', 'instrutor' => ''),
			),
			'responsaveis' => array(
				// 'Fabrício Benedet' => array(
				// 	'foto'       => '/img/team/fabricio.jpg',
				// 	'short_name' => 'Fabrício',
				// 	'graduation' => 'Sandan (3º Dan)',
				// ),
				// 'Hayalon Oliveira' => array(
				// 	'foto'       => '/img/team/hayalon.jpg',
				// 	'short_name' => 'Hayalon',
				// 	'graduation' => '2º kyu (Faixa Azul)',
				// ),
			),
		);

		$this->load->view('header', $data);
		$this->load->view('view_dojo');
		$this->load->view('footer');
	}
}