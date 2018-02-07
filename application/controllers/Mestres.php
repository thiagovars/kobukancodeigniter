<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mestres extends CI_Controller {

	public function index() 
	{
		$this->load->helper('url');
		$data = array("title" => "Mestres | O'Sensei e Kawai sensei");
		$this->load->view('header', $data);
		$this->load->view('mestres');
		$this->load->view('footer');
	}
}