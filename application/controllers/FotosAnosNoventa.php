<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FotosAnosNoventa extends CI_Controller {

    public function index()
    {
        $this->load->helper('url');
        $data = array(
            'title' => 'História em Fotos Anos 90'
        );
        for ($i=0; $i <= 62; $i++) { 
            $data['fotos'][] = '/img/Anos90/'.str_pad($i, 2, '0', STR_PAD_LEFT).'.jpg';
        }
        
        $this->load->view('header', $data);
        $this->load->view('fotosacademiacentralanos90', $data);
        $this->load->view('footer', $data);
    }
}
/* End of file FotosAnosNoventa.php */