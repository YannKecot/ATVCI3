<?php
	class Dashboard extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('mvalidasi');
			$this->mvalidasi->validasiakun();
		}
		
		function admin()
		{
			$this->load->view('dashboard');	
		}	    
		
		function logout()
		{
   		 $this->session->sess_destroy(); 
   		 redirect('','refresh');
		}



		
	}
?>