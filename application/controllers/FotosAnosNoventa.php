<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FotosAnosNoventa extends CI_Controller {

    public function index()
    {
        $this->load->helper('url');
        $data = array(
            'title' => 'História em Fotos Anos 90',
            'fotos' => get_fotos('anos90/fotos/'),
        );
        
        $this->load->view('header', $data);
        $this->load->view('fotosacademiacentralanos90');
        $this->load->view('footer', $data);
    }
}
/* End of file FotosAnosNoventa.php */