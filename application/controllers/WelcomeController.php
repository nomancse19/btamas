<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class WelcomeController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
