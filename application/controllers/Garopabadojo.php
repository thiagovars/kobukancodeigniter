<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Garopabadojo extends CI_Controller {

	public function index() {
		$this->load->helper('url');

		$data['endereco'] = 'Estrada Geral do Ouvidor 90, Campo Duna, Garopaba - SC';
		$data['title'] = 'Dojo Garopaba | '.$data['endereco'];

		$ignore = array(5, 8, 13, 14);
		for ($i=1; $i <= 14; $i++) { 
			if (in_array($i, $ignore)) {
				continue;
			}
			$data['fotos'][] = 'garopaba'.$i.'.jpg';
		}
									
		$this->load->view('header', $data);
		$this->load->view('garopaba_dojo', $data);
		$this->load->view('footer');
	}
}