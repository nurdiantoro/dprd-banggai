<?php

class Model_user extends CI_Model
{
    public function readAll()
    {
        $this->db->order_by('user_name', 'DESC');
        $query = $this->db->get('tbl_user');
        return $query->result();
    }
    public function read($id)
    {
        $this->db->where('user_id', $id);
        $query = $this->db->get('tbl_user');
        return $query->result();
    }
    public function tambah($data)
    {
        $this->db->insert('tbl_user', $data);
    }

    public function edit($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('tbl_user', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('tbl_user', array('user_id' => $id));
    }
}
