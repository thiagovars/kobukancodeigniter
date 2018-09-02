<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chado extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'title' => 'Chadô | A Cerimônia do Chá',
			'fotos' => get_fotos('chanoyu/fotos'),
		);
		
		$this->load->view('header', $data);
		$this->load->view('chanoyu');
		$this->load->view('footer');
	}
}