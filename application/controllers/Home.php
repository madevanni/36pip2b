<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model(array('News_model', 'Gallery_model'));
        $this->load->library(array('ion_auth', 'form_validation'));
        $this->load->helper(array('form', 'url', 'language', 'html', 'file'));
    }

    public function index() {

        $this->data['Relative'] = '';
        $this->data['template'] = 'magazine';
        $this->data['content']['Styles'] = array(
            '<link rel="stylesheet" href="assets/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />'
        );
        $this->data['content']['Scripts'] = array(
            '<script type="text/javascript" src="assets/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>',
            '<script type="text/javascript" src="assets/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>',
            '<script type="text/javascript">
                $(document).ready(function() {
                    $("#fancybox").fancybox({
                        openEffect	: "elastic",
                        closeEffect	: "elastic",

                        helpers : {
                                title : {
                                        type : "inside"
                                }
                        }
                    });
                });
            </script>'
        );
        $this->data['content']['title'] = 'Pusat Informasi Pengembangan Permukiman dan Bangunan';
        $this->data['content']['pages'] = 'Home';

        $this->data['content']['news'] = $this->News_model->all();
        $this->data['content']['images'] = $this->Gallery_model->all();

        $this->load->view('index', $this->data);
    }

}
