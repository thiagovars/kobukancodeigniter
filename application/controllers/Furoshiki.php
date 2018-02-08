<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Furoshiki extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Furoshiki | Embrulho Tradicional Japonês';
		for ($i=1; $i <= 4; $i++) { 
			$data['fotos'][] = 'furoshiki'.$i.'.jpg';
		}
		$this->load->view('header', $data);
		$this->load->view('furoshiki');
		$this->load->view('footer');
	}
}