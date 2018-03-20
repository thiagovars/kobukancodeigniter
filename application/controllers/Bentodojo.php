<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bentodojo extends CI_Controller {

	public function index() {
		// $this->load->library('javascript/jquery');
		$this->load->helper('url');
		
		$data['endereco'] = 'Rua Guerino Franzolosso, 111 - Bento Gonçalves - RS';
		$data['title'] = 'Dojo Bento Gonçalves | '.$data['endereco'];

		$this->load->view('header', $data);
		$this->load->view('bento_dojo', $data);
		$this->load->view('footer');
	}
}