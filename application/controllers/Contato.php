<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$this->load->helper('form');
		$data['title'] = "Contato | Kobukan - escola de budo";

		$this->load->view('header', $data);
		$this->load->view('contato', $data);
		$this->load->view('footer');
	}
}