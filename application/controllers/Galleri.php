<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galleri extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Galleri_model');
        $this->load->helper(['url', 'html', 'form']);
        $this->load->database();
        $this->load->library(['form_validation', 'session']);
    }

    public function index() {
        $data = [
            'images' => $this->Galleri_model->all()
        ];
        $this->load->view('galleri/index', $data);
    }

    public function add() {
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
            $this->load->view('galleri/add_image');
        } else {

            /* Start Uploading File */
            $config = [
                'upload_path' => './uploads/',
                'allowed_types' => 'gif|jpg|png',
                'max_size' => 100,
                'max_width' => 1024,
                'max_height' => 768
            ];

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload()) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('galleri/add_image', $error);
            } else {
                $file = $this->upload->data();
                //print_r($file);
                $data = [
                    'file' => 'uploads/' . $file['file_name'],
                    'caption' => set_value('caption'),
                    'description' => set_value('description')
                ];
                $this->Galleri_model->create($data);
                $this->session->set_flashdata('message', 'New image has been added..');
                redirect('galleri');
            }
        }
    }

    public function edit($id) {
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
        $image = $this->Galleri_model->find($id)->row();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('galleri/edit_image', ['image' => $image]);
        } else {
            if (isset($_FILES["userfile"]["name"])) {
                /* Start Uploading File */
                $config = [
                    'upload_path' => './uploads/',
                    'allowed_types' => 'gif|jpg|png',
                    'max_size' => 100,
                    'max_width' => 1024,
                    'max_height' => 768
                ];

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload()) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('galleri/edit_image', ['image' => $image, 'error' => $error]);
                } else {
                    $file = $this->upload->data();
                    $data['file'] = 'uploads/' . $file['file_name'];
                    unlink($image->file);
                }
            }

            $data['caption'] = set_value('caption');
            $data['description'] = set_value('description');

            $this->Galleri_model->update($id, $data);
            $this->session->set_flashdata('message', 'New image has been updated..');
            redirect('gallery');
        }
    }

    public function delete($id) {
        $this->Galleri_model->delete($id);
        $this->session->set_flashdata('message', 'Image has been deleted..');
        redirect('galleri');
    }

}
