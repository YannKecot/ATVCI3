<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atv extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Atv_model');
        $this->load->model('mvalidasi');
        $this->mvalidasi->validasiakun();

    }

    public function index()
    {
        // Ambil data merek dari model Atv_model
        $data['merek_atv'] = $this->Atv_model->get_merek_atv();
    
        // Debugging: Tampilkan data merek_atv untuk memastikan datanya benar
        //echo '<pre>';
       // print_r($data['merek_atv']);
       // echo '</pre>';
        // Berhenti di sini untuk melihat hasil debug
        //exit;
       
            // Debugging: Tampilkan data merek_atv untuk memastikan datanya benar
           // echo '<pre>';
           // print_r($data['merek_atv']);
           // echo '</pre>';
            
     // Menangani pencarian jika ada
     $search = $this->input->get('search');  // Ambil kata kunci pencarian dari URL query

     if (!empty($search)) {
         // Jika ada pencarian, ambil data yang sesuai
         $data['data_atv'] = $this->Atv_model->search($search);  // Pastikan model 'Atv_model' memiliki fungsi 'search'
     } else {
         // Jika tidak ada pencarian, ambil semua data
         $data['data_atv'] = $this->Atv_model->get_all();
     }
        
        $data['konten'] = $this->load->view('Atv_view', $data, TRUE);
        $data['table'] = $this->load->view('Atv_table', ['data_atv' => $this->Atv_model->get_all()], TRUE);
        
        $this->load->view('dashboard', $data);
    }
    
    



    public function create()
{
    
    $data = [
        'nomor' => $this->input->post('Nomor'),
        'keterangan' => $this->input->post('Keterangan'),
        'fk_merek' => $this->input->post('fk_merek')  
    ];

    
    $this->Atv_model->insert($data);
    redirect('atv');
}


    public function delete($id)
    {
        $this->Atv_model->delete($id);
        redirect('atv');
    }

    public function edit($id)
    {
        $data['atv'] = $this->Atv_model->get_by_id($id);
        $this->load->view('Atv_edit_view', $data);
    }

    public function update($id)
    {
        $data = [
            'nomor' => $this->input->post('Nomor'),
            'keterangan' => $this->input->post('Keterangan'),
        ];

        $this->Atv_model->update($id, $data);
        redirect('atv');
    }
}
