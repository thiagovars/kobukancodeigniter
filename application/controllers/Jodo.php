<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jodo extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'title' => 'Jodo | A arma da paz',
			'fotos' => get_fotos('jodo/fotos'),
		);

		$this->load->view('header', $data);
		$this->load->view('jodo');
		$this->load->view('footer');
	}
}