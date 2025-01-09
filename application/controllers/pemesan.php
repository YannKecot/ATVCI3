<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pemesan extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pemesan_model');
		$this->load->model('mvalidasi');
		$this->mvalidasi->validasiakun();

       

    }

    public function index()
    {
        $data['konten'] = $this->load->view('pemesan_view', '', TRUE);
        
        $data['table'] = $this->load->view('pemesan_table', ['data_atv' => $this->pemesan_model->get_all()], TRUE);

        $this->load->view('dashboard', $data);
    }

    public function create()
    {
        $data = [
			
            'nama' => $this->input->post('nama'),
            'nomor_telp' => $this->input->post('nomor_telp'),
            'alamat' => $this->input->post('alamat'),
        ];

        $this->pemesan_model->insert($data);
        redirect('pemesan');
    }

    public function delete($id_pemesan)
    {
        $this->pemesan_model->delete($id_pemesan);
        redirect('pemesan');
    }

    public function edit($id_pemesan)
    {
        $data['pemesan'] = $this->pemesan_model->get_by_id($id_pemesan);
        $this->load->view('edit_pemesan', $data);
    }

    public function update($id_pemesan)
    {
        $data = [
            'id_pemesan' => $this->input->post('id_pemesan'),
            'nama' => $this->input->post('nama'),
            'nomor_telp' => $this->input->post('nomor_telp'),
            'alamat' => $this->input->post('alamat'),
        ];

        $this->pemesan_model->update($id_pemesan, $data);
        redirect('pemesan');
    }
}
