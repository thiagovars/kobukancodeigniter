<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petropolisdojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['endereco'] = 'Rua Frederico Michaelsen, 443 - Centro - Nova Petrópolis / RS';
		$data['title'] = 'Dojo Nova Petrópolis | '.$data['endereco'];

		for ($i=1; $i <= 1; $i++) { 
			$data['fotos'][] = 'petropolis'.$i.'.jpg';
		}
									
		$this->load->view('header', $data);
		$this->load->view('petropolis_dojo', $data);
		$this->load->view('footer');
	}
}