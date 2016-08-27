<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model(array('Gallery_model', 'News_model'));
        $this->load->library(array('ion_auth', 'form_validation'));
        $this->load->helper(array('form', 'url', 'language', 'html', 'file'));

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        $this->lang->load('auth');
    }

    function index() {
        $this->data['cssRelative'] = '';
        $this->data['template'] = 'magazine';
        $this->data['content']['title'] = 'Gallery';
        $this->data['content']['pages'] = 'gallery';
        $this->data['content']['images'] = $this->Gallery_model->all();
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

        $this->load->view('index', $this->data);
    }

    function manage_images() {
        $this->data['template'] = 'sbadmin';
        $this->data['content']['Relative'] = '../';
        $this->data['content']['title'] = 'Manage images';
        $this->data['content']['pages'] = 'gallery/manage_images';

        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('administrator/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { // remove this elseif if you want to enable this for non-admins
            // redirect them to the home page because they must be an administrator to view this
            return show_error('You must be an administrator to view this page.');
        } else {
            // set the flash data error message if there is one
            // FIXME can't show message when theres no images uploaded
            $this->data['images'] = $this->Gallery_model->all();
            $this->data['content']['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            $this->load->view('index', $this->data);
        }
    }

    function upload() {
        $this->data['template'] = 'sbadmin';
        $this->data['content']['Relative'] = '../';
        $this->data['content']['title'] = 'Upload image';
        $this->data['content']['pages'] = 'gallery/upload_file';

        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('administrator/login', 'refresh');
        } elseif (!$this->ion_auth->is_admin()) { // remove this elseif if you want to enable this for non-admins
            // redirect them to the home page because they must be an administrator to view this
            return show_error('You must be an administrator to view this page.');
        } else {
            // set the flash data error message if there is one
            $this->data['content']['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            $rules = [
                [
                    'field' => 'caption',
                    'label' => 'Caption',
                    'rules' => 'required'
                ],
                [
                    'field' => 'description',
                    'label' => 'Description',
                    'rules' => 'required'
                ]
            ];

            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('index', $this->data);
            } else {
                /* Start Uploading File */
                $config = [
                    'upload_path' => './assets/usr_images/',
                    'allowed_types' => 'gif|jpg|png',
                    'max_size' => 100,
                    'max_width' => 1024,
                    'max_height' => 768,
                    'encrypt_name' => TRUE
                ];

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload()) {
                    // FIXME can't display error on max_size
                    $data['content']['message'] = array('error' => $this->upload->display_errors());

                    $this->load->view('index', $this->data);
                } else {
                    $file = $this->upload->data();
                    $img = [
                        'img_path' => 'assets/usr_images/' . $file['file_name'],
                        'img_caption' => set_value('caption'),
                        'img_desc' => set_value('description'),
                        'img_visible' => 1,
                        // FIXME can't insert user_id
                        'img_user_id' => $this->ion_auth->get_user_id()
                    ];

                    $this->Gallery_model->create($img);
                    $this->session->set_flashdata('message', 'New image has been added..');
                    redirect('gallery/manage_images');
                }
            }
        }
    }

    function edit($id) {
        $this->data['template'] = 'sbadmin';
        $this->data['content']['Relative'] = '../../';
        $this->data['content']['title'] = 'Edit image';
        $this->data['content']['pages'] = 'gallery/edit_image';

        $rules = [
            [
                'field' => 'caption',
                'label' => 'Caption',
                'rules' => 'required'
            ],
            [
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required'
            ]
        ];

        $this->form_validation->set_rules($rules);
        $image = $this->Gallery_model->find($id)->row();

        if ($this->form_validation->run() == FALSE) {
            $this->data['content']['image'] = $image;

            $this->load->view('index', $this->data);
        } else {
            if (isset($_FILES["userfile"]["name"])) {
                /* Start Uploading File */
                $config = [
                    'upload_path' => './assets/usr_images/',
                    'allowed_types' => 'gif|jpg|png',
                    'max_size' => 100,
                    'max_width' => 1024,
                    'max_height' => 768,
                    'overwrite' => TRUE,
                    'encrypt_name' => TRUE
                ];

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload()) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->data['content']['image'] = $image;
                    $this->data['content']['message'] = $error;

                    $this->load->view('index', $this->data);
                } else {
                    $file = $this->upload->data();
                    $img['img_path'] = 'assets/usr_images/' . $file['file_name'];
                    unlink($image->img_path);
                }
            }

            $img['img_caption'] = set_value('caption');
            $img['img_desc'] = set_value('description');
            $img['img_user_id'] = $this->ion_auth->get_user_id();

            $this->Gallery_model->update($id, $img);
            $this->session->set_flashdata('message', 'New image has been updated.');
            redirect('gallery/manage_images');
        }
    }

    function delete($id) {
        $path = $this->Gallery_model->get_path($id);
        if (is_readable($path) && unlink($path)) {
            $this->Gallery_model->delete($id);

            $this->session->set_flashdata('message', 'Image has been deleted..');

            redirect('gallery/manage_images');
        } else {
            $this->data['path'] = $path;
            $this->load->view('admin', $this->data);
        }
    }

}
