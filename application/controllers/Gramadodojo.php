<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gramadodojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Dojo Gramado | Rua Tristão de oliveira, 345 - Gramado / RS';

		for ($i=1; $i <= 24; $i++) { 
			$data['fotos'][] = 'garopaba'.$i.'.jpg';
		}
									
		$this->load->view('header', $data);
		$this->load->view('gramado_dojo');
		$this->load->view('footer');
	}
}