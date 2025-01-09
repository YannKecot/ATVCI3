<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class atv_model_merek extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('atv_merek')->result_array();
    }

    public function insert($data)
    {
        return $this->db->insert('atv_merek', $data);
    }

    public function get_by_id($id_merek)
    {
        return $this->db->get_where('atv_merek', ['id_merek' => $id_merek])->row_array();
    }

    public function update($id_merek, $data)
    {
        return $this->db->update('atv_merek', $data, ['id_merek' => $id_merek]);
    }

    public function delete($id_merek)
    {
        return $this->db->delete('atv_merek', ['id_merek' => $id_merek]);
    }
}
