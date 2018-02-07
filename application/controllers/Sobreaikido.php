<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobreaikido extends CI_Controller {

	public function index() 
	{
		$data = array('title' => 'Aikido | A história da arte');
		$this->load->view('header', $data);
		$this->load->view('aikido');
		$this->load->view('footer', $data);
	}

}