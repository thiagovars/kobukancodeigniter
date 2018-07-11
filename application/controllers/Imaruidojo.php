<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imaruidojo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'endereco' => 'SC-437, SC, 88770-000, Brazil',
			'title' => 'Dojo Imarui',
			'fotos' => $this->getFotos(),
		);

		$this->load->view('header', $data);
		$this->load->view('imarui_dojo', $data);
		$this->load->view('footer');
	}
	
	private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/imarui/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/imarui/fotos/'.$foto;
		}
		return $fotos;
	}
}