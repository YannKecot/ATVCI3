<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pemesan_model extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('pemesan')->result_array();
    }

    public function insert($data)
    {
        return $this->db->insert('pemesan', $data);
    }

    public function get_by_id($id_pemesan)
    {
        return $this->db->get_where('pemesan', ['id_pemesan' => $id_pemesan])->row_array();
    }

    public function update($id_pemesan, $data)
    {
        return $this->db->update('pemesan', $data, ['id_pemesan' => $id_pemesan]);
    }

    public function delete($id_pemesan)
    {
        return $this->db->delete('pemesan', ['id_pemesan' => $id_pemesan]);
    }
}
