<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vacariadojo extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'Rua Otávio Roxo 486, Bairro Planalto - Vacaria - RS',
			'title' => 'Dojo Vacaria (Grupo de Estudos)',
			'title_treino_aikido' => '<h2>Horarios para treino <strong>Aikido</strong></h2>',
			'config_horarios_md' => 'col-md-8',
			'fotos' => get_fotos('vacaria/fotos'),
			'contato' => array(
				'Rafael' => '(54) 99926-5329',
                // 'Rafael' => 'kobukanvacaria@outlook.com',
			),
			'horarios_treino' => array(
				'Terça'  => array('hora' => '20h00 - 21h00', 'instrutor' => 'Rafael'),
				'Quinta' => array('hora' => '20h00 - 21h00', 'instrutor' => 'Rafael'),
			),
			'responsaveis' => array(
				'Eduardo Sensei' => array(
					'foto' => '/img/team/eduardo.jpg',
					'short_name' => 'Eduardo',
					'graduation' => 'Yon Dan (4º Dan)',
				),
			),
            'instrutores' => array(
                'Rafael Branco' => array(
                 'foto' => '/img/vacaria/rafael.jpg',
                 'short_name' => 'Rafael',
                 'graduation' => '4º Kyu (Faixa Roxa)',
                ),
                'Margila Agostini' => array(
                 'foto' => '/img/vacaria/marjila.jpg',
                 'short_name' => 'Margila',
                 'graduation' => '5º Kyu (Faixa Amarela)',
                ),
            ),
		);

		$this->load->view('header', $data);
		$this->load->view('view_dojo', $data);
		$this->load->view('footer');
	}
}