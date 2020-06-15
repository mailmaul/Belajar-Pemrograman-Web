<?php

class Siswa_model extends CI_Model
{
    public function getSiswa($id = null)
    {
        if ($id === null) {
            return $this->db->get('sekolah')->result_array();
        } else {
            return $this->db->get_where('sekolah', ['id' => $id])->result_array();
        }
    }

    public function deleteSiswa($id)
    {
        $this->db->delete('sekolah', ['id' => $id]);
        return $this->db->affected_rows();
    }
}
