<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StateWise extends CI_Controller {

	public function index()
	{
		$this->getData();
		
	}
	public function getData(){

			//checking connection with @fopen
			if ( @fopen("https://api.covid19india.org/data.json", "r") ) 
			{
			  $data=file_get_contents('https://api.covid19india.org/data.json');
		$coronalive['corona']=json_decode($data,true);
		$this->load->view('home',$coronalive);
		
			} 
			else 
			{
			  print "
			  <div >
			  	<h2>You seem to be offline. 🤔<h2>
			  	<h3>Please check your internet connection.</h3>
			  <br>
			  developed by Jahid Momin &copy 2020
			  </div>
			  ";  
			} 	
	}
}
