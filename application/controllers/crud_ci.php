<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_ci extends CI_Controller {

    public function __construct() {
        parent::__construct();

        //cargamos la base de datos por defecto
        $this->load->database('default');
        //cargamos el helper url y el helper form
        //$this->load->helper(array('url','form'));
        //cargamos la librería form_validation
        //$this->load->library(array('form_validation'));
        //cargamos el modelo crud_model
    }

    public function index() {
        header('Location: http://localhost/codeigniter/index.php/crud_ci/home');
    }

    function home() {
        $this->load->model('crud_model');
        $data = array('page_title' => 'Countries',
            'users' => $this->crud_model->get_users());
        $this->load->view('crud_ci', $data);
    }

    public function delete_user() {
        //comprobamos si es una petición ajax y existe la variable post id
        if ($this->input->post('id')) {
            $this->load->model('crud_model');
            $id = $this->input->post('id');
            $this->crud_model->delete_user($id);
        }
    }

    public function multi_user() {
        //comprobamos si es una petición ajax

        $id = $this->input->post('id');
        $nombre = $this->input->post('nombre');
        $Population = $this->input->post('Population');

        $this->load->model('crud_model');
        $this->crud_model->edit_user($id, $nombre, $Population);
    }

    public function insert() {
       
        $nombre = $this->input->post('nombre');
        $Population = $this->input->post('Population');
       
        $this->load->model('crud_model');
        $this->crud_model->new_user($nombre,$Population);
    }

}
