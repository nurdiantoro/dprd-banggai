<?php

class Model_news extends CI_Model
{
    public function readAll()
    {
        $this->db->order_by('tanggal', 'DESC');
        $query = $this->db->get('news');
        return $query->result();
    }
    public function read($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('news');
        return $query->result();
    }
    public function readRandom($limit)
    {
        $this->db->order_by('rand()');
        $query = $this->db->get('news', $limit);
        return $query->result();
    }
    public function readCount()
    {
        $query = $this->db->get('news');
        return $query->num_rows();
    }
    public function readLimit($limit, $start)
    {
        $this->db->order_by('tanggal', 'DESC');
        $query = $this->db->get('news', $limit, $start);
        return $query->result();
    }
    public function tambah($data)
    {
        $this->db->insert('news', $data);
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('news', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('news', array('id' => $id));
    }
}
