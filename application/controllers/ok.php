<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Ok extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('mihelper');
    }

    public function index() {
        
        //Cargamos libreria menu
        $this->load->library('Menu',array('Inicio','Contact','Courses'));
        $data['mi_menu'] = $this->menu->construirMenu();
        //Cargando multiples vistas
        $this->load->view('Test/header');
        $this->load->view('Test/bien',$data);
    }

}
