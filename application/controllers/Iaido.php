<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iaido extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$this->load->library('Graduations');
		$data = array(
			'title' => 'Iaido | Arte Marcial Japonesa do Desembainhar da Espada',
			'fotos' =>get_fotos('iaido/fotos'),
			'responsaveis' => array(
				'Mathaeus Silveira' => array(
					'foto' => '/img/team/mathaeus.jpg',
					'short_name' => 'Mathaeus',
					'graduation' => $this->graduations->getGradMathaeus('iaido')
				),
				'Eduardo Corrêa' => array(
					'foto' => '/img/team/eduardo_iaido.jpg',
					'short_name' => 'Eduardo',
					'graduation' => $this->graduations->getGradEduardo('iaido')
				),
			)
		);

		$this->load->view('header', $data);
		$this->load->view('iaido', $data);
		$this->load->view('footer');
	}
}