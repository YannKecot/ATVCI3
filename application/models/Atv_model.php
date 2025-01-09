<?php
class Atv_model extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('atv')->result_array();
    }

    public function insert($data)
    {
        return $this->db->insert('atv', $data);
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('atv', ['id' => $id])->row_array();
    }

    public function update($id, $data)
    {
        return $this->db->update('atv', $data, ['id' => $id]);
    }

    public function delete($id)
    {
        return $this->db->delete('atv', ['id' => $id]);
    }

    // Fungsi baru untuk mengambil data merek ATV
    public function get_merek_atv()
    {
        return $this->db->get('atv_merek')->result_array(); // Ambil semua data merek dari tabel atv_merek
    }
    public function search($keyword)
    {
        $this->db->like('nomor', $keyword);  // Pencarian berdasarkan nomor
        $this->db->or_like('keterangan', $keyword);  // Pencarian berdasarkan keterangan
        return $this->db->get('atv')->result_array();  // Mengambil data yang cocok
    }
    

}
?>