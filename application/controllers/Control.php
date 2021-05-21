<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

	public function index()
	{
        $this->load->model('home');
        $this->home->index();

        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
		$this->load->view('Home');
        $this->load->view('includes/footer');
	}
    public function AboutUs()
	{
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
		$this->load->view('AboutUs');
        $this->load->view('includes/footer');
	}
    public function ContactUs()
	{
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
		$this->load->view('ContactUs');
        $this->load->view('includes/footer');
	}
}

