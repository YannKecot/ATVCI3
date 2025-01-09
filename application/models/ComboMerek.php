<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ComboMerek extends CI_Model
{
    public function get_merek_atv()
    {
        return $this->db->get('atv_merek')->result_array(); // Mengambil semua data merek dari tabel atv_merek
    }
}

?>
