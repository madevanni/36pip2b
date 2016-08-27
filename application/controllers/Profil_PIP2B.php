<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_PIP2B extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('News_model');
        $this->load->helper(array('url', 'html'));
    }

    function Lokasi() {
        $this->data['Relative'] = '../';
        $this->data['template'] = 'magazine';
        $this->data['content']['title'] = 'Lokasi';
        $this->data['content']['pages'] = 'lokasi';

        $this->load->view('index', $this->data);
    }

    function Tentang_pip2b() {
        $this->data['Relative'] = '../';
        $this->data['template'] = 'magazine';
        $this->data['content']['title'] = 'Tentang PIP2B';
        $this->data['content']['pages'] = 'tentang_pip2b';

        $this->load->view('index', $this->data);
    }

    function Struktur_organisasi() {
        $this->data['Relative'] = '../';
        $this->data['template'] = 'magazine';
        $this->data['content']['title'] = 'Struktur Organisasi';
        $this->data['content']['pages'] = 'struktur_organisasi';

        $this->load->view('index', $this->data);
    }

    function Visi_misi() {
        $this->data['Relative'] = '../';
        $this->data['template'] = 'magazine';
        $this->data['content']['title'] = 'Visi & Misi';
        $this->data['content']['pages'] = 'visi_misi';

        $this->load->view('index', $this->data);
    }

    function Kegiatan_pip2b() {
        $this->data['Relative'] = '../';
        $this->data['template'] = 'magazine';
        $this->data['content']['title'] = 'Kegiatan PIP2B';
        $this->data['content']['pages'] = 'kegiatan_pip2b';

        $this->load->view('index', $this->data);
    }

}

?>