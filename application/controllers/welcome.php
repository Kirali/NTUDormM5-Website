<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$user = 'Oops'; //

		$data['user'] = $user;
		$this->load->view('welcome_message',$data);
	}
	public function show(){
		echo "<h1> Hello World</h1>";
	}
	public function ajaxTest(){
		$user = $this->input->post('password');
		$response = array();
		$response['text'] = 'Hello, '.$user;
		echo ($response['text']);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
