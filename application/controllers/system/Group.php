<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group extends CI_Controller {

	public function index()
	{
		$this->load->view('index.php');
	}
}
