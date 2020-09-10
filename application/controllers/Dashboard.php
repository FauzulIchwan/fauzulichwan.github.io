<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Poetry Blog';
		$this->load->view('home/templates/header.php', $data);
		$this->load->view('home/templates/navbar.php');
		$this->load->view('home/index.php');
		$this->load->view('home/templates/footer.php');
    }
}
?>