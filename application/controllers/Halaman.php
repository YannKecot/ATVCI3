<?php
	class Halaman extends CI_Controller
	{
		function index()
		{
			$this->load->view('login_view');	
		}	
		
		
		function proseslogin()
		{
			
			$Username=$this->input->post('Username');
			$Password=$this->input->post('Password');
			
			$sql="select * from tblogin where Username= ? ";
			$query=$this->db->query($sql,array($Username));
			
			if ($query->num_rows()>0)
			{
				$data=$query->row();
				if ($data->Password==$Password)
				{
					$array=array(
						'KodeLogin'=>$data->KodeLogin,
						'Username'=>$data->Username,
						'NamaLengkap'=>$data->NamaLengkap,
						'Level'=>$data->Level,
					);	
					$this->session->set_userdata($array);	
					redirect('dashboard/admin','refresh');
				}
				else
				{
					$this->session->set_flashdata('pesan','Password Salah...');
					redirect('halaman','refresh');	
				}	
			}
			else
			{
				$this->session->set_flashdata('pesan','Username dan Password Salah...');
				redirect('halaman','refresh');	
			}
			
		}
	}
	
	
	
?>