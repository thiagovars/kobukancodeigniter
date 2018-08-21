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
			'fotos' => $this->getFotos(),
			'contato' => array(
				'Juliano Alves' => '(54) 99656 3021',
			),
			'horarios_treino' => array(
				'Segundas' => array('hora' => '20h00 - 21h00', 'instrutor' => 'Juliano Alves'),
				'Quartas'  => array('hora' => '20h00 - 21h00', 'instrutor' => 'Juliano Alves'),
			),
			'responsaveis' => array(
				'Juliano Alves' => array(
					'foto' => '/img/team/juliano.jpg',
					'short_name' => 'Juliano',
					'graduation' => 'Shodan (1º Dan)',
				),
			),
			
		);
		
		$this->load->view('header', $data);
		$this->load->view('view_dojo', $data);
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/farroupilha/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/farroupilha/fotos/'.$foto;
		}
		return $fotos;
	}
}