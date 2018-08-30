<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portoalegredojo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'R. Joaquim Silveira, 466 - Porto Alegre - RS',
			'title' => 'Dojo Porto Alegre',
			'title_treino_aikido' => '<h2>Horários para treino <strong>Aikido</strong></h2>',
			'config_horarios_md' => 'col-md-8',
			'fotos' => get_fotos('portoalegre/fotos'),
			'contato' => array(
				'Mathaeus Silveira' => '(51) 99147 8021',
			),
			'horarios_treino' => array(
				'Terças'  => array('hora' => '19h30 - 20h30', 'instrutor' => 'Mathaeus Silveira'),
				'Quintas' => array('hora' => '19h30 - 20h30', 'instrutor' => 'Mathaeus Silveira'),
				'Sábado'  => array('hora' => '10h00 - 12h00', 'instrutor' => 'Mathaeus Silveira'),
			),
			'responsaveis' => array(
				'Mathaeus Silveira' => array(
					'foto' => '/img/team/mathaeus_aikido.jpg',
					'short_name' => 'Mathaeus',
					'graduation' => 'Nidan (2º Dan)',
				),
			),
		);

		$this->load->view('header', $data);
		$this->load->view('view_dojo');
		$this->load->view('footer');
	}
}