<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Face extends CI_Controller {

	public function index() 
	{
		$data = array('title' => 'Kobukan - Escola de budô',
			'slides' => array(
				'/img/slides/geral2.jpg',
				'/img/slides/capa.jpg',
				'/img/slides/slide2.jpg',
				'/img/slides/kawai-sensei2.jpg',
			),
			'pathMenu' => array(
				'localhost/kobukan/assets/menu.php'
			),
		);
		$this->load->view('header', $data);
		$this->load->view('face', $data);
	}

}