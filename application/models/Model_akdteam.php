<?php

class Model_akdteam extends CI_Model
{
    public function readAll()
    {
        $query = $this->db->get('akdteam');
        return $query->result();
    }
    public function read($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('akdteam');
        return $query->result();
    }
    public function readKategori($kategori)
    {
        $this->db->where('kategori', $kategori);
        $query = $this->db->get('akdteam');
        return $query->result();
    }
    public function tambah($data)
    {
        $this->db->insert('akdteam', $data);
    }

    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('akdteam', $data);
    }

    public function hapus($id)
    {
        $this->db->delete('akdteam', array('id' => $id));
    }
}
