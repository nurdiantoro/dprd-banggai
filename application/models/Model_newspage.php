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
    public function readNews($id, $idberita)
    {
        $this->db->where('newspage.id', $id);
        $this->db->from('newspage');
        $this->db->join('news', 'newspage.' . $idberita . ' = news.id');
        $query = $this->db->get();
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
