<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petropolisdojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Dojo Nova Petrópolis | Rua Frederico Michaelsen, 443 - Centro - Nova Petrópolis / RS';

		for ($i=1; $i <= 1; $i++) { 
			$data['fotos'][] = 'petropolis'.$i.'.jpg';
		}
									
		$this->load->view('header', $data);
		$this->load->view('petropolis_dojo');
		$this->load->view('footer');
	}
}