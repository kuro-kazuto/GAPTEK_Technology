<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function about()
	{
		$this->load->view('about.php');
	}

	public function help()
	{
		$this->load->view('help.php');
	}

	public function home()
	{
		$this->load->view('home.php');
	}
}
