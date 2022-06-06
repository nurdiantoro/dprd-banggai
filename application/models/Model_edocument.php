<?php

class Model_edocument extends CI_Model
{
    public function readAll()
    {
        $this->db->order_by('tanggal', 'DESC');
        $query = $this->db->get('edocument');
        return $query->result();
    }
    public function read($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('edocument');
        return $query->result();
    }
    public function readPage($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('edocumentpage');
        return $query->result();
    }
    public function tambah($data)
    {
        $this->db->insert('edocument', $data);
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('edocument', $data);
    }
    public function editPage($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('edocumentpage', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('edocument', array('id' => $id));
    }
}
