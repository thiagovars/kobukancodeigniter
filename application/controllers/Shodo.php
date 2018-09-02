<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shodo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'title' => 'Shodo | A Arte da Caligrafia Japones',
			'fotos' => get_fotos('shodo/fotos'),
		);
		
		$this->load->view('header', $data);
		$this->load->view('shodo');
		$this->load->view('footer');
	}
}