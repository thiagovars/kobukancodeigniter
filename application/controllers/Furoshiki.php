<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Furoshiki extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'title' => 'Furoshiki | Embrulho Tradicional Japonês',
			'fotos' => $this->getFotos(),
		);

		$this->load->view('header', $data);
		$this->load->view('furoshiki');
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/furoshiki/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/furoshiki/fotos/'.$foto;
		}
		return $fotos;
	}
}