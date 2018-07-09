<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bentodojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		
		$data['endereco'] = 'Rua Pernambuco, 281, centro - Bento Gonçalves - RS';
		$data['title'] = 'Dojo Bento Gonçalves | '.$data['endereco'];

		$this->load->view('header', $data);
		$this->load->view('bento_dojo', $data);
		$this->load->view('footer');
	}
}