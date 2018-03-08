<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portoalegredojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['endereco'] = 'Rua Joaquim Silveira, 466 - Porto Alegre - RS';
		$data['title'] = 'Dojo Porto Alegre | '.$data['endereco'];

		for ($i=1; $i <= 17; $i++) { 
			$data['fotos'][] = 'portoalegre'.$i.'.jpg';
		}
									
		$this->load->view('header', $data);
		$this->load->view('portoalegre_dojo', $data);
		$this->load->view('footer');
	}
}