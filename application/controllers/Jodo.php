<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jodo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$this->load->library('Graduations');
		$data = array(
			'title' => 'Jodo | A arma da paz',
			'fotos' => get_fotos('jodo/fotos'),
			'responsaveis' => array(
				'Angélica Philippe' => array(
					'foto' => '/img/team/angelica.jpg',
					'short_name' => 'Angélica',
					'graduation' => $this->graduations->getGradAngel('jodo')
				),
				'Eduardo Corrêa' => array(
					'foto' => '/img/team/eduardoJodo.jpg',
					'short_name' => 'Eduardo',
					'graduation' => $this->graduations->getGradEduardo('jodo')
				)
			)
		);

		$this->load->view('header', $data);
		$this->load->view('jodo');
		$this->load->view('footer');
	}
}