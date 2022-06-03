<?php

class Model_contactpesan extends CI_Model
{
    public function readAll()
    {
        $query = $this->db->get('contactpesan');
        return $query->result();
    }
    public function read($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('contactpesan');
        return $query->result();
    }
    public function tambah($data)
    {
        $this->db->insert('contactpesan', $data);
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('contactpesan', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('contactpesan', array('id' => $id));
    }
}
