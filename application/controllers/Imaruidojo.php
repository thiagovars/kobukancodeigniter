<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imaruidojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['endereco'] = 'SC-437, SC, 88770-000, Brazil';
		$data['title'] = 'Dojo Imarui | '.$data['endereco'];

		for ($i=1; $i <= 11; $i++) { 
			$data['fotos'][] = 'imarui'.$i.'.jpg';
		}
									
		$this->load->view('header', $data);
		$this->load->view('imarui_dojo', $data);
		$this->load->view('footer');
	}
}