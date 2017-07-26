<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$data['page_title'] = ' Test - CodeIgniter!';
		$this->load->view('Test',$data);
	}
}
