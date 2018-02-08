<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shodo extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Shodo | A Arte da Caligrafia Japones';
		$ignore = array(20);
		for ($i=1; $i <= 25; $i++) { 
			if (in_array($i, $ignore)) {
				continue;
			} 
			$data['fotos'][] = 'shodo'.$i.'.jpg';
		}
		$this->load->view('header', $data);
		$this->load->view('shodo');
		$this->load->view('footer');
	}
}