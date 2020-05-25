<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Farroupilhadojo extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'Rua Marechal Deodoro da Fonseca, 855, Bairro Planalto - Farroupilha - RS',
			'title' => 'Dojo Farroupilha',
			'title_treino_aikido' => '<h2>Horarios para treino <strong>Aikido</strong></h2>',
			'config_horarios_md' => 'col-md-8',
			'fotos' => get_fotos('farroupilha/fotos'),
			'contato' => array(
				'Juliano Alves' => '(54) 99656 3021',
			),
			'horarios_treino' => array(
				'Segundas' => array('hora' => '20h00 - 21h00', 'instrutor' => 'Juliano Alves'),
				'Quartas'  => array('hora' => '20h00 - 21h00', 'instrutor' => 'Juliano Alves'),
			),
			'responsaveis' => array(
				'Eduardo Sensei' => array(
					'foto' => '/img/team/eduardo.jpg',
					'short_name' => 'Rafael',
					'graduation' => 'Yon Dan (4º Dan)',
				),
			),
            'instrutores' => array(
                'Rafael Branco' => array(
                 'foto' => '/img/team/eduardo.jpg',
                 'short_name' => 'Rafael',
                 'graduation' => 'Shodan (1º Dan)',
                ),                'instrutores' => array(
                'Margila Agostini' => array(
                 'foto' => '/img/team/eduardo.jpg',
                 'short_name' => 'Margila',
                 'graduation' => 'Shodan (1º Dan)',
                ),
            ),
		);

		$this->load->view('header', $data);
		$this->load->view('view_dojo', $data);
		$this->load->view('footer');
	}
}