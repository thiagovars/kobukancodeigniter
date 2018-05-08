<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Garopabadojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');

		$data['endereco'] = 'Estrada Geral do Ouvidor 372, Campo Duna, Garopaba - SC';
		$data['title'] = 'Dojo Garopaba | '.$data['endereco'];

		for ($i=1; $i <= 7; $i++) { 
			$data['fotos'][] = '/img/garopaba/garopaba'.$i.'.jpg';
		}
									
		$this->load->view('header', $data);
		$this->load->view('garopaba_dojo', $data);
		$this->load->view('footer');
	}
}