<?php

class Model_about extends CI_Model
{
    public function readAll()
    {
        $query = $this->db->get('about');
        return $query->result();
    }
    public function read($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('about');
        return $query->result();
    }
    public function tambah($data)
    {
        $this->db->insert('about', $data);
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('about', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('about', array('id' => $id));
    }
}
