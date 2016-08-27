<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('News_model');
        $this->load->library(array('ion_auth', 'form_validation'));
        $this->load->helper(array('form', 'url', 'language', 'html', 'file', 'date'));
        $this->load->database();

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
    }

    function delete($id) {
        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
            redirect('news/manage_news', 'refresh');
        }
        
        $news = $this->News_model->find($id)->row();
        
        if ($this->News_model->delete($id)) {
            $this->session->set_flashdata('message', 'News <b>'.$news->news_title.'</b> has been deleted.');
            redirect('news/manage_news');
        } else {
            $this->session->set_flashdata('message', 'Delete failed.');
            redirect('news/manage_news');
        }
    }

    function edit($id) {
        $this->data['template'] = 'sbadmin';
        $this->data['content']['Relative'] = '../../';
        $this->data['content']['title'] = 'Edit News';
        $this->data['content']['pages'] = 'news/edit_news';
        $this->data['content']['Scripts'] = array(
            '<script type="text/javascript" src="../../assets/tinymce/tinymce.min.js"></script>',
            '<script type="text/javascript">tinymce.init({
                selector: "textarea",
                plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste code"
                ],
                toolbar:
                    "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
                content_css: ["../../assets/tinymce/codepen.min.css"]
            });</script>          '
        );

        $rules = [
            [
                'field' => 'news_title',
                'label' => 'News title',
                'rules' => 'required'
            ],
            [
                'field' => 'news_content',
                'label' => 'News content',
                'rules' => 'required'
            ]
        ];

        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
            redirect('news/manage_news', 'refresh');
        }

        $this->form_validation->set_rules($rules);
        $news = $this->News_model->find($id)->row();

        if ($this->form_validation->run() == FALSE) {
            $this->data['content']['news'] = $news;

            $this->load->view('index', $this->data);
        } else {
            $newsItem['news_title'] = $this->input->post('news_title');
            $newsItem['news_content'] = $this->input->post('news_content');
            $newsItem['news_user_id'] = $this->ion_auth->get_user_id();

            $this->News_model->update($id, $newsItem);
            $this->session->set_flashdata('message', 'News <b>'.$newsItem['news_title'].'</b> has been updated.');
            redirect('news/manage_news');
        }
    }

    function index() {
        $this->data['cssRelative'] = '';
        $this->data['template'] = 'magazine';
        $this->data['content']['title'] = 'News';
        $this->data['content']['pages'] = 'news';
        
        $this->data['content']['news'] = $this->News_model->all();

        $this->load->view('index', $this->data);
    }

    function Manage_news() {
        $this->data['template'] = 'sbadmin';
        $this->data['content']['Relative'] = '../';
        $this->data['content']['Scripts'] = array(
            '<script type="text/javascript" src="../assets/tinymce/tinymce.min.js"></script>',
            '<script type="text/javascript">tinymce.init({
                selector: "textarea",
                plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste code"
                ],
                toolbar:
                    "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
                content_css: ["../assets/tinymce/codepen.min.css"]
            });</script>          '
        );
        $this->data['content']['title'] = 'Manage News';
        $this->data['content']['pages'] = 'news/manage_news';

        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('administrator/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { // remove this elseif if you want to enable this for non-admins
            // redirect them to the home page because they must be an administrator to view this
            return show_error('You must be an administrator to view this page.');
        } else {
            $this->data['content']['news'] = $this->News_model->all();
            $this->data['content']['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            $this->load->view('index', $this->data);
        }
    }

    function Publish() {
        $this->data['template'] = 'sbadmin';
        $this->data['content']['Relative'] = '../';
        $this->data['content']['Scripts'] = array(
            '<script type="text/javascript" src="../assets/tinymce/tinymce.min.js"></script>',
            '<script type="text/javascript">tinymce.init({
                selector: "textarea",
                plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste code"
                ],
                toolbar:
                    "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
                content_css: ["../assets/tinymce/codepen.min.css"]
            });</script>          '
        );
        $this->data['content']['title'] = 'Publish news';
        $this->data['content']['pages'] = 'news/publish';

        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
            redirect('administrator', 'refresh');
        }

        $rules = [
            [
                'field' => 'news_title',
                'label' => 'News title',
                'rules' => 'required'
            ],
            [
                'field' => 'news_content',
                'label' => 'News content',
                'rules' => 'required'
            ]
        ];

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == TRUE) {
            $news = array(
                'news_title' => $this->input->post('news_title'),
                'news_content' => $this->input->post('news_content'),
                'news_user_id' => $this->ion_auth->get_user_id()
            );
        }

        if ($this->form_validation->run() == TRUE && $this->News_model->create($news)) {
            $this->session->set_flashdata('message', 'News <b>'.$news['news_title'].'</b> has been published!');
            redirect('news/manage_news', 'refresh');
        } else {
            // set the flash data error message if there is one
            $this->data['content']['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            $this->data['news_title'] = array(
                'name' => 'news_title',
                'id' => 'news_title',
                'type' => 'text',
                'value' => $this->form_validation->set_value('news_title'),
            );

            $this->data['news_content'] = array(
                'name' => 'news_content',
                'id' => 'news_content',
                'type' => 'textarea',
                'value' => $this->form_validation->set_value('news_content'),
            );
        }

        $this->load->view('index', $this->data);
    }
    
    function view($id) {
        $this->data['Relative'] = '../../';
        $this->data['template'] = 'magazine';
        $this->data['content']['title'] = 'News';
        $this->data['content']['pages'] = 'news/view_news';
        
        $this->data['content']['news'] = $this->News_model->find($id)->row();

        $this->load->view('index', $this->data);
    }

}

?>