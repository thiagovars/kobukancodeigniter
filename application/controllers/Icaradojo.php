<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Icaradojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');

		$data['endereco'] = 'R. António Jesuino Figueira - Tereza Cristina Içara - SC';
		$data['title'] = 'Dojo Içara | '.$data['endereco'];

		for ($i=1; $i <= 22; $i++) { 
			$data['fotos'][] = 'icara'.$i.'.jpg';
		}
									
		$this->load->view('header', $data);
		$this->load->view('icara_dojo', $data);
		$this->load->view('footer');
	}
}