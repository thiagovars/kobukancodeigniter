<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saochicodojo extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'Instituto Arca Verde',
			'title' => 'Dojo São Francisco de Paula',
			'fotos' => get_fotos('saochico/fotos'),
			'title_treino_aikido' => '',
			'config_horarios_md' => 'col-md-8',
			'contato' => array(
				'' => '',
			),
			'horarios_treino' => array(
				'Sábado' => array('hora' => '10h', 'instrutor' => 'Thiago'),
				'Domingo' => array('hora' => '10h', 'instrutor' => 'Thiago'),
			),
            'responsaveis' => array(
                'Thiago' => array(
                 'foto' => '/img/team/eduardo.jpg',
                 'short_name' => 'Thiago',
                 'graduation' => '',
                ),
            ),
            'instrutores' => array(
                'Franco de Marsilac' => array(
                 'foto' => '/img/team/eduardo.jpg',
                 'short_name' => 'Franco',
                 'graduation' => '',
                ),
            ),
		);

		$this->load->view('header', $data);
		$this->load->view('view_dojo');
		$this->load->view('footer');
	}
}