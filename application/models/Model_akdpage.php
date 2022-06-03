<?php

class Model_akdpage extends CI_Model
{
    public function readAll()
    {
        $query = $this->db->get('akdpage');
        return $query->result();
    }
    public function read($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('akdpage');
        return $query->result();
    }
    public function tambah($data)
    {
        $this->db->insert('akdpage', $data);
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('akdpage', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('akdpage', array('id' => $id));
    }
}
