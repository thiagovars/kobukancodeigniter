<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fengshui extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Fengshui | vento e água';
		$ignore = array();
		for ($i=1; $i <= 6; $i++) { 
			if (in_array($i, $ignore)) {
				continue;
			}
			$data['fotos'][] = 'images'.$i.'.jpg';
		}
		$this->load->view('header', $data);
		$this->load->view('fengshui');
		$this->load->view('footer');
	}
}