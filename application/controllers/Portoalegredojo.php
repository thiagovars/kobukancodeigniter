<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portoalegredojo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			$data['endereco'] = 'Rua Joaquim Silveira, 466 - Porto Alegre - RS',
			$data['title'] = 'Dojo Porto Alegre',
			'fotos' => $this->getFotos(),
		);

		$this->load->view('header', $data);
		$this->load->view('portoalegre_dojo', $data);
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/portoalegre/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/portoalegre/fotos/'.$foto;
		}
		return $fotos;
	}
}