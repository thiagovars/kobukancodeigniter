<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sumie extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Sumi-ê | Pintura em carvão';
		$ignore = array(20);
		for ($i=1; $i <= 8; $i++) {
			$fotoNumero = str_pad($i, 3, 0, STR_PAD_LEFT);
			$data['fotos'][] = '/img/sumie/sumie'.$fotoNumero.'.jpg';
		}
		$this->load->view('header', $data);
		$this->load->view('sumie');
		$this->load->view('footer');
	}
}