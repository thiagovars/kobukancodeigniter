<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Farroupilhadojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Dojo Farroupilha | R. Pinheiro Machado, 152 - Farroupilha / RS';
		for ($i=0; $i < 7; $i++) { 
			$data['fotos'][] = 'farroupilha'.$i.'.jpg';
		}
		$this->load->view('header', $data);
		$this->load->view('farroupilha_dojo');
		$this->load->view('footer');
	}
}