<?php 

class Telepon_model extends CI_model {
    public function getAllTelepon()
    {
        return $this->db->get('telepon')->result_array();
    }

    public function tambahDataTelepon()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nomor" => $this->input->post('nomor', true)
        ];

        $this->db->insert('telepon', $data);
    }

    public function hapusDataTelepon($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('telepon', ['id' => $id]);
    }

    public function getTeleponById($id)
    {
        return $this->db->get_where('telepon', ['id' => $id])->row_array();
    }

    public function ubahDataTelepon()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nomor" => $this->input->post('nomor', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('telepon', $data);
    }

    public function cariDataTelepon()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('nomor', $keyword);
        return $this->db->get('telepon')->result_array();
    }
}