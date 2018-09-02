<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sumie extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'title' => 'Sumi-ê | Pintura em carvão',
			'fotos' => get_fotos('sumie/fotos'),
		);
		$this->load->view('header', $data);
		$this->load->view('sumie');
		$this->load->view('footer');
	}
}