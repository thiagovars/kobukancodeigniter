<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iaido extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'title' => 'Iaido | Arte Marcial Japonesa do Desembainhar da Espada',
			'fotos' =>get_fotos('iaido/fotos'),
		);

		$this->load->view('header', $data);
		$this->load->view('iaido', $data);
		$this->load->view('footer');
	}
}