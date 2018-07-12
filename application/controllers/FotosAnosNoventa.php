<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FotosAnosNoventa extends CI_Controller {

    public function index()
    {
        $this->load->helper('url');
        $data = array(
            'title' => 'História em Fotos Anos 90',
            'fotos' => $this->getFotos(),
        );
        
        $this->load->view('header', $data);
        $this->load->view('fotosacademiacentralanos90');
        $this->load->view('footer', $data);
    }

    private function getFotos()
	{
		$this->load->helper('directory');
		$map = directory_map('./img/anos90/fotos/');
		$fotos = array();
		foreach($map as $foto) {
			$fotos[] = '/img/anos90/fotos/'.$foto;
		}
		return $fotos;
	}
}
/* End of file FotosAnosNoventa.php */