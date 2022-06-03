<?php

class Model_homepage extends CI_Model
{
    public function readAll()
    {
        $query = $this->db->get('homepage');
        return $query->result();
    }
    public function read($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('homepage');
        return $query->result();
    }
    public function tambah($data)
    {
        $this->db->insert('homepage', $data);
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('homepage', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('homepage', array('id' => $id));
    }
}
