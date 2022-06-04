<?php

class Model_newspage extends CI_Model
{
    public function readAll()
    {
        $query = $this->db->get('newspage');
        return $query->result();
    }
    public function read($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('newspage');
        return $query->result();
    }
    public function tambah($data)
    {
        $this->db->insert('newspage', $data);
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('newspage', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('newspage', array('id' => $id));
    }
}
