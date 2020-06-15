<?php
class Model_siswa extends CI_Model
{
    public function getData()
    {
        return $this->db->get('sekolah');
    }

    public function addData($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function deleteData($where, $table)
    {
        $this->db->where($where)->delete($table);
    }

    public function updateData($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function getDataById($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
