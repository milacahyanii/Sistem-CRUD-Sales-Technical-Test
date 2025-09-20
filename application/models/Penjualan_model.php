<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan_model extends CI_Model {

    private $header = 'penjualan_header';
    private $detail = 'penjualan_detail';

    // Ambil semua penjualan (header)
    public function get_all()
    {
        $this->db->select("h.*, o.namaoutlet");
        $this->db->from("$this->header h");
        $this->db->join("outlet o", "o.kdoutlet = h.kdoutlet", "left");
        return $this->db->get()->result();
    }

    // Ambil header by nofaktur
    public function get_header($nofaktur)
    {
        return $this->db->get_where($this->header, ['nofaktur' => $nofaktur])->row();
    }

    // Ambil detail by nofaktur
    public function get_detail($nofaktur)
    {
        $this->db->select("d.*, b.namabarang");
        $this->db->from("$this->detail d");
        $this->db->join("barang b", "b.kdbarang = d.kode_barang", "left");
        $this->db->where('d.nofaktur', $nofaktur);
        return $this->db->get()->result();
    }

    // Insert header + detail (sederhana dulu)
    public function insert($data)
    {
        // Insert header
        $header = [
            'nofaktur'      => $data['nofaktur'],
            'tglfaktur'     => $data['tglfaktur'],
            'kdoutlet'      => $data['kdoutlet'],
            'amount'        => $data['amount'],
            'discount'      => $data['discount'],
            'ppn'           => $data['ppn'],
            'total_amount'  => $data['total_amount'],
            'created_user'  => 'admin'
        ];
        $this->db->insert($this->header, $header);

        // Insert detail (looping array barang)
        if (isset($data['items'])) {
            foreach ($data['items'] as $item) {
                $detail = [
                    'nofaktur'     => $data['nofaktur'],
                    'kode_barang'  => $item['kode_barang'],
                    'qty'          => $item['qty'],
                    'harga'        => $item['harga'],
                    'sub_total'    => $item['qty'] * $item['harga'],
                    'created_user' => 'admin'
                ];
                $this->db->insert($this->detail, $detail);
            }
        }
    }

    public function delete($nofaktur)
    {
        $this->db->where('nofaktur', $nofaktur)->delete($this->detail);
        $this->db->where('nofaktur', $nofaktur)->delete($this->header);
    }
}
