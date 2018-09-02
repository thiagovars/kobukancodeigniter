<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bonsai extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'title' => 'Bonsai | A Natureza em Miniatura',
			'fotos' => get_fotos('bonsai/fotos'),
		);

		$this->load->view('header', $data);
		$this->load->view('bonsai');
		$this->load->view('footer');
	}
}