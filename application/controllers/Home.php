<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('users');
	}
	public function index()
	{
		$data['u'] = $this->users->showdata();
		$this->load->view('myhome');
		
		print_r($this->users->showdata());

	}
	public function submit()
	{
      $this->users->login();
      echo "data saved";
	}
	public function getdata()
	{
		$data['lists'] = $this->users->showdata();
		$this->load->view('userlist',$data);
	}
	public function deluser($ID)
	{
		$this->users->delete($ID);
		redirect('formcontroller/getdata','refresh');
  	
	}
	public function updateuser($ID)
	{
		$data['lists'] = $this->users->getdata($ID);
		$this->load->view('updateform',$data);

	}
	public function submitupdated($ID)
	{
		$this->users->update($ID);
		echo "data udpated";
		redirect('Home/getdata','refresh');
	}

}