<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function index(){
		$params['title'] = 'Angular CRUD';

		$this->load->view('crud/home', $params);
	}

	public function table(){
		$params['title'] = 'Data Table';
		$this->load->view('crud/table', $params);
	}

	public function add(){
		$params['title'] = 'Add Data';
		$this->load->view('crud/add', $params);
	}
}
