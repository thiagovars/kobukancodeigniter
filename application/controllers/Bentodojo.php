<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bentodojo extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		
		$data = array(
			'endereco' => 'Rua Pernambuco, 281, centro - Bento Gonçalves - RS',
			'title' => 'Dojo Bento Gonçalves | Rua Pernambuco, 281, centro - Bento Gonçalves - RS',
			'fotos' => $this->getFotos(),
		);

		$this->load->view('header', $data);
		$this->load->view('bento_dojo', $data);
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/bento/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/bento/fotos/'.$foto;
		}
		return $fotos;
	}
}