<?php

class Model_easpirasi extends CI_Model
{
    public function readAll()
    {
        $query = $this->db->get('easpirasi');
        return $query->result();
    }
    public function read($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('easpirasi');
        return $query->result();
    }
    public function tambah($data)
    {
        $this->db->insert('easpirasi', $data);
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('easpirasi', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('easpirasi', array('id' => $id));
    }
}
