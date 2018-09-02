<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fengshui extends CI_Controller {

	public function index()
	 {
		$this->load->helper('url');
		$data = array(
			'title' => 'Fengshui | vento e água',
			'fotos' => get_fotos('fengshui/fotos'),
		);

		$this->load->view('header', $data);
		$this->load->view('fengshui');
		$this->load->view('footer');
	}
}