<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Face extends CI_Controller {

	public function index() 
	{
		$data = array('title' => 'Kobukan - Escola de budô',
			'slides' => array(
				'/img/slides/geral.jpg',
				'/img/slides/capa.jpg',
				'/img/slides/kawai-sensei2.jpg',
			),
		);
		$this->load->view('face', $data);
	}

}