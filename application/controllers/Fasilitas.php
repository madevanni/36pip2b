<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('News_model');
        $this->load->helper(array('url', 'html'));
    }

    function Peralatan() {
        $this->data['Relative'] = '../';
        $this->data['template'] = 'magazine';
        $this->data['content']['title'] = 'Peralatan';
        $this->data['content']['pages'] = 'peralatan';

        $this->load->view('index', $this->data);
    }
    
    function Ruangan() {
        $this->data['Relative'] = '../';
        $this->data['template'] = 'magazine';
        $this->data['content']['title'] = 'Ruangan';
        $this->data['content']['pages'] = 'ruangan';

        $this->load->view('index', $this->data);
    }

}

?>