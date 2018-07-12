<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fengshui extends CI_Controller {

	public function index()
	 {
		$this->load->helper('url');
		$data = array(
			'title' => 'Fengshui | vento e água',
			'fotos' => $this->getFotos(),
		);

		$this->load->view('header', $data);
		$this->load->view('fengshui');
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/fengshui/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/fengshui/fotos/'.$foto;
		}
		return $fotos;
	}
}