<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Face extends CI_Controller {

	public function index() 
	{
		$data = array('slides' => array(
			'/img/slides/geral.jpg',
			'/img/slides/capa.jpg',
			'/img/slides/slide2.jpg',
			'/img/slides/kawai-sensei2.jpg',
		));
		$data = array('title' => 'Kobukan - Escola de budô');
		$this->load->view('face', $data);
	}

}