<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Naginata extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data = array(
			'title' => 'Naginata | Espada lança',
			'fotos' => get_fotos('naginata/fotos'),
			'responsaveis' => array(
				'Angélica Philippe' => array(
					'foto' => '/img/team/angelica.jpg',
					'short_name' => 'Angélica',
					'graduation' => '2º kyu'
				),
				'Eduardo Corrêa' => array(
					'foto' => '/img/team/eduardoNaginata.jpg',
					'short_name' => 'Eduardo',
					'graduation' => 'Ikkyu (Faixa marrom)'
				),
			),
		);

		$this->load->view('header', $data);
		$this->load->view('naginata');
		$this->load->view('footer');
	}
}