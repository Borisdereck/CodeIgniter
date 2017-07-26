<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Crud_model extends CI_MODEL {

    public function __construct() {
        parent::__construct();
    }

    //obtenemos los usuarios
    public function get_users() {
        $sql = "SELECT * FROM city LIMIT 7";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function delete_user($id) {

        $this->db->where('id', $id);
        return $this->db->delete('city');
    }

    public function edit_user($id, $nombre, $Populate) {

        $data = array(
            'id' => $id,
            'name' => $nombre,
            'population' => $Populate
        );
        $this->db->where('id', $id);
        $this->db->update('city', $data);
    }

    public function new_user($nombre, $population) {        
        $data = array(
            'Name' => $nombre,            
            'Population' => $population
        );
        $this->db->insert('city', $data);
    }

}
