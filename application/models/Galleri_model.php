<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galleri_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function all() {
        $result = $this->db->get('image');
        return $result;
    }

    public function find($id) {
        $row = $this->db->where('id', $id)->limit(1)->get('image');
        return $row;
    }

    public function create($data) {
        try {
            $this->db->insert('image', $data);
            return true;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function update($id, $data) {
        try {
            $this->db->where('id', $id)->limit(1)->update('image', $data);
            return true;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function delete($id) {
        try {
            $this->db->where('id', $id)->delete('image');
            return true;
        }

        //catch exception
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}
