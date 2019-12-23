<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shakuhachi extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'title' => 'Shakuhachi | A Faluta Zen Japonesa',
			'fotos' => get_fotos('shakuhachi/fotos'),
		);

		$this->load->view('header', $data);
		$this->load->view('shakuhachi');
		$this->load->view('footer');
	}
}