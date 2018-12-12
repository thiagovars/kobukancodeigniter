<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mestres extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$this->load->library('Graduations');
		$data = array(
			"title" => "Mestres | O'Sensei e Kawai sensei",
			"graduacoes" => array(
				"eduardo" => array(
					// "aikido" => $this->Graduations->getGradEduardo('aikido'),
					"iaido" => "Nidan (Faixa preta 2 Dan)",
					"jodo" => "Shodan (Faixa preta)",
					"naginata" => "Ikkyu (Faixa marrom)",
					"jiujitus" => "Shodan (Faixa preta)",
				),
			),
	);
		$this->load->view('header', $data);
		$this->load->view('mestres');
		$this->load->view('footer');
	}
}