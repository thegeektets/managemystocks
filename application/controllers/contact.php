<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);

class contact extends CI_Controller {

	public function index()
	{

		$this->load->view('contactus') ;
	}
}