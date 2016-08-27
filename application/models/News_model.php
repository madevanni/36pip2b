<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function all() {
        $result = $this->db->order_by('news_timestamp', 'DESC')->get('news');
        return $result;
    }

    public function create($data) {
        try {
            $this->db->insert('news', $data);
            return true;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function find($id) {
        $row = $this->db->where('id', $id)->limit(1)->get('news');
        return $row;
    }

    public function get_headline() {
        $result = $this->db->order_by('news_timestamp', 'DESC')->limit(5)->get('news');
        return $result;
    }

    public function update($id, $data) {
        try {
            $this->db->where('id', $id)->limit(1)->update('news', $data);
            return true;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function delete($id) {
        try {
            $this->db->where('id', $id)->delete('news');
            return true;
        }

        //catch exception
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}
