<?php

class Model_gallery extends CI_Model
{
    public function readAll()
    {
        $query = $this->db->get('gallery');
        return $query->result();
    }
    public function read($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('gallery');
        return $query->result();
    }
    public function readCount()
    {
        $query = $this->db->get('gallery');
        return $query->num_rows();
    }
    public function readLimit($limit, $start)
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('gallery', $limit, $start);
        return $query->result();
    }
    public function tambah($data)
    {
        $this->db->insert('gallery', $data);
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('gallery', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('gallery', array('id' => $id));
    }
}
