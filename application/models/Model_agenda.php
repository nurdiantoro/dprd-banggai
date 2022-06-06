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
    public function readPage($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('agendapage');
        return $query->result();
    }
    public function readCount()
    {
        $query = $this->db->get('agenda');
        return $query->num_rows();
    }
    public function readLimit($limit, $start)
    {
        $this->db->order_by('tanggal_mulai', 'DESC');
        $query = $this->db->get('agenda', $limit, $start);
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
    public function editPage($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('agendapage', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('agenda', array('id' => $id));
    }
}
