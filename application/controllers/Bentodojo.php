<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bentodojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data = array('title' => 'Dojo Bento Gonçalves | Rua Guerino Franzolosso, 111 - Bento Gonçalves - RS');
		$this->load->view('header', $data);
		$this->load->view('bento_dojo');
		$this->load->view('footer');
	}
}