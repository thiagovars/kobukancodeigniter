<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fotos extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$data['title'] = 'Fotos | A história do dojo em fotos';
		for ($i=1; $i <= 4; $i++) { 
			$data['fotos'][] = '/img/furoshiki/furoshiki'.$i.'.jpg';
		}
		$this->load->view('header', $data);
		$this->load->view('furoshiki');
		$this->load->view('footer');
	}

	public function anos90() {
		$this->load->helper('url');
		$data['title'] = 'Fotos academia central anos 90';
		for($i = 1; $i < 65; $i++){
      $foto = str_pad($i, 2, 0, STR_PAD_LEFT);
      $data['fotos'][] = '/img/anos90/'.$foto.'.jpg';
    }
    $this->load->view('header', $data);
    $this->load->view('fotosanos90');
    $this->load->view('footer');
	}
}