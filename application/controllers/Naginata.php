<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Naginata extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$this->load->library('Graduations');
		$data = array(
			'title' => 'Naginata | Espada lança',
			'fotos' => get_fotos('naginata/fotos'),
			'responsaveis' => array(
				'Angélica Philippe' => array(
					'foto' => '/img/team/angelica.jpg',
					'short_name' => 'Angélica',
					'graduation' => $this->graduations->getGradAngel('naginata')
				),
				'Eduardo Corrêa' => array(
					'foto' => '/img/team/eduardoNaginata.jpg',
					'short_name' => 'Eduardo',
					'graduation' => $this->graduations->getGradEduardo('naginata')
				),
			),
		);

		$this->load->view('header', $data);
		$this->load->view('naginata');
		$this->load->view('footer');
	}
}