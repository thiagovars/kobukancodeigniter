<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

	public function index() {
		$this->load->helper('url');
		$this->load->helper('form');
		$data['title'] = "Contato | Kobukan - escola de budo";

		// $this->load->view('header', $data);
		$this->load->view('contato', $data);
		$this->load->view('footer');
	}

	public function enviar() {
		if (!empty($_REQUEST)) {
			return 'sem dados para enviar';
		}
		$this->load->helper('email');

		return send_mail($_REQUEST['name'], $_REQUEST['subject'], $_REQUEST['message']);
		/* REMOVER DEPOIS DE SABER - PEDRO SILVEIRA */
		echo "<pre>";
		print('dados do post');
		print('$_REQUEST');
		echo "</pre>";
		/* REMOVER DEPOIS DE SABER - PEDRO SILVEIRA */
	}
}