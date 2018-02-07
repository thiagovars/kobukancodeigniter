<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ivotidojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Dojo Ivoti | Rua Alberto Pasqualini, 75 - RS';

		for ($i=1; $i <= 4; $i++) { 
			$data['fotos'][] = 'ivoti'.$i.'.jpg';
		}
									
		$this->load->view('header', $data);
		$this->load->view('ivoti_dojo');
		$this->load->view('footer');
	}
}