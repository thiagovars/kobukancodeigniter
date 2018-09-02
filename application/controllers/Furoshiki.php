<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Furoshiki extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array(
			'title' => 'Furoshiki | Embrulho Tradicional Japonês',
			'fotos' => get_fotos('furoshiki/fotos'),
		);

		$this->load->view('header', $data);
		$this->load->view('furoshiki');
		$this->load->view('footer');
	}
}