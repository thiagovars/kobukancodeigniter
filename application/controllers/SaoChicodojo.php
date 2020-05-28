<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaoChicodojo extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'Estrada da Boa esperança 5849',
			'title' => 'Dojo São Francisco de Paula (Grupo de Estudos)',
			'fotos' => get_fotos('SaoChico/fotos'),
			'title_treino_aikido' => '',
			'config_horarios_md' => 'col-md-8',
			'contato' => array(
				'Franco de Marsilac' => '(54) 99850-0333',
			),
			'horarios_treino' => array(
				'Sábado' => array('hora' => '10h', 'instrutor' => 'Tiago'),
				'Domingo' => array('hora' => '10h', 'instrutor' => 'Tiago'),
			),
            'responsaveis' => array(
                'Tiago Fritsch' => array(
                    'foto' => '/img/SaoChico/tiago.jpg',
                    'short_name' => 'Tiago',
                    'graduation' => 'Shodan (1º Dan)',
                ),
            ),
            'instrutores' => array(
                'Franco de Marsilac' => array(
                    'foto' => '/img/SaoChico/franco.jpg',
                    'short_name' => 'Franco',
                    'graduation' => '4º kyu (Faixa Roxa)',
                ),
            ),
		);

		$this->load->view('header', $data);
		$this->load->view('view_dojo');
		$this->load->view('footer');
	}
}