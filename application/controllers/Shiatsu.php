<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shiatsu extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Shiatsu | A Saúde na ponta dos dedos';
		for ($i=1; $i <= 6; $i++) {
			$data['fotos'][] = 'shiatsu'.$i.'.jpg';
		}
		$this->load->view('header', $data);
		$this->load->view('shiatsu');
		$this->load->view('footer');
	}
}