<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jodo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Jodo | A arma da paz';

		$ignore = array(31); 
		for ($i=1; $i <= 40; $i++) {
			if (in_array($i, $ignore)) {
				continue;
			}
			$data['fotos'][] = '/img/jodo/jodo'.$i.'.jpg';
		}
									
		$this->load->view('header', $data);
		$this->load->view('jodo');
		$this->load->view('footer');
	}
}