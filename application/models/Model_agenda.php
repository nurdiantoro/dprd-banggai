<?php

class Model_agenda extends CI_Model
{
    public function readAll()
    {
        $this->db->order_by('tanggal_mulai', 'DESC');
        $query = $this->db->get('agenda');
        return $query->result();
    }
    public function read($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('agenda');
        return $query->result();
    }
    public function tambah($data)
    {
        $this->db->insert('agenda', $data);
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('agenda', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('agenda', array('id' => $id));
    }
}
