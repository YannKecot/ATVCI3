<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atvmerek extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Atv_model_merek');
		$this->load->model('mvalidasi');
		$this->mvalidasi->validasiakun();

       

    }

    public function index()
    {
        $data['konten'] = $this->load->view('merek_view', '', TRUE);
        $data['table'] = $this->load->view('merek_table', ['data_atv' => $this->Atv_model_merek->get_all()], TRUE);

        $this->load->view('dashboard', $data);
    }

    public function create()
    {
        $data = [
			
            'nama_merek' => $this->input->post('nama_merek'),
            'keterangan' => $this->input->post('Keterangan'),
        ];

        $this->Atv_model_merek->insert($data);
        redirect('atvmerek');
    }

    public function delete($id_merek)
    {
        $this->Atv_model_merek->delete($id_merek);
        redirect('atvmerek');
    }

    public function edit($id_merek)
    {
        $data['atv_merek'] = $this->Atv_model_merek->get_by_id($id_merek);
        $this->load->view('Atv_edit_merek', $data);
    }

    public function update($id_merek)
    {
        $data = [
            'id_merek' => $this->input->post('id_merek'),
            'nama_merek' => $this->input->post('nama_merek'),
            'keterangan' => $this->input->post('Keterangan'),
        ];

        $this->Atv_model_merek->update($id_merek, $data);
        redirect('atvmerek');
    }
}
