<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jodo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'title' => 'Jodo | A arma da paz',
			'fotos' => $this->getFotos(),
		);

		$this->load->view('header', $data);
		$this->load->view('jodo');
		$this->load->view('footer');
	}

	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/jodo/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/jodo/fotos/'.$foto;
		}
		return $fotos;
	}
}