<?php

class Model_contact extends CI_Model
{
    public function readAll()
    {
        $query = $this->db->get('contact');
        return $query->result();
    }
    public function read($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('contact');
        return $query->result();
    }
    public function tambah($data)
    {
        $this->db->insert('contact', $data);
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('contact', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('contact', array('id' => $id));
    }
}
