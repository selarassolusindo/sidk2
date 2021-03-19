<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class _08_tamu_model extends CI_Model
{

    public $table = 't08_tamu';
    public $id = 'idtamu';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        // $this->db->where($this->id, $id);
        // return $this->db->get($this->table)->row();
        $this->db->where($this->id, $id);
        $this->db->select($this->table . '.*');
        $this->db->select('t43_kabupaten.nama as TempatLahirNama');
        $this->db->select('t41_agama.Agama as agamaNama');
        $this->db->select('t39_pekerjaan.Pekerjaan as pekerjaanNama');
        $this->db->select('t38_status.Status as statusNama');
        $this->db->select('t36_warganegara.WargaNegara as wargaNegaraNama');
        $this->db->select('t45_desa.nama as KelurahanNama');
        $this->db->select('t44_kecamatan.nama as KecamatanNama');
        $this->db->select('t43_kabupaten2.nama as KabupatenNama');
        $this->db->select('t42_provinsi.nama as ProvinsiNama');
        $this->db->from($this->table);
        $this->db->join('t43_kabupaten', 't43_kabupaten.id = '.$this->table.'.TempatLahir');
        $this->db->join('t41_agama', 't41_agama.idagama = '.$this->table.'.Agama');
        $this->db->join('t39_pekerjaan', 't39_pekerjaan.idpekerjaan = '.$this->table.'.Pekerjaan');
        $this->db->join('t38_status', 't38_status.idstatus = '.$this->table.'.StatusKawin');
        $this->db->join('t36_warganegara', 't36_warganegara.idwarganegara = '.$this->table.'.WargaNegara');
        $this->db->join('t45_desa', 't45_desa.id = '.$this->table.'.Kelurahan');
        $this->db->join('t44_kecamatan', 't44_kecamatan.id = '.$this->table.'.Kecamatan');
        $this->db->join('t43_kabupaten as t43_kabupaten2 ', 't43_kabupaten2.id = '.$this->table.'.Kabupaten');
        $this->db->join('t42_provinsi', 't42_provinsi.id = '.$this->table.'.Provinsi'); // echo $this->db->get_compiled_select();
        return $this->db->get()->row();
    }

    // get total rows
    function total_rows($q = NULL) {
        // $this->db->like('idtamu', $q);
    	$this->db->or_like('NIK', $q);
    	$this->db->or_like($this->table.'.Nama', $q);
    	$this->db->or_like('TempatLahir', $q);
    	$this->db->or_like('TanggalLahir', $q);
    	$this->db->or_like('JenisKelamin', $q);
    	$this->db->or_like('GolonganDarah', $q);
    	$this->db->or_like('Alamat', $q);
    	$this->db->or_like('RT', $q);
    	$this->db->or_like('RW', $q);
    	$this->db->or_like('Kelurahan', $q);
    	$this->db->or_like('Kecamatan', $q);
    	$this->db->or_like('Kabupaten', $q);
    	$this->db->or_like('Provinsi', $q);
    	$this->db->or_like('Agama', $q);
    	$this->db->or_like('StatusKawin', $q);
    	$this->db->or_like('Pekerjaan', $q);
    	$this->db->or_like('WargaNegara', $q);
    	$this->db->or_like('BerlakuHingga', $q);
    	// $this->db->or_like('iduser', $q);
    	// $this->db->or_like('created_at', $q);
    	// $this->db->or_like('updated_at', $q);
        $this->db->select($this->table . '.*, t43_kabupaten.nama as kabupatenNama');
    	$this->db->from($this->table);
        $this->db->join('t43_kabupaten', 't43_kabupaten.id = '.$this->table.'.TempatLahir'); // echo $this->db->get_compiled_select();
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        // $this->db->like('idtamu', $q);
    	$this->db->or_like('NIK', $q);
    	$this->db->or_like($this->table.'.Nama', $q);
    	$this->db->or_like('TempatLahir', $q);
    	$this->db->or_like('TanggalLahir', $q);
    	$this->db->or_like('JenisKelamin', $q);
    	$this->db->or_like('GolonganDarah', $q);
    	$this->db->or_like('Alamat', $q);
    	$this->db->or_like('RT', $q);
    	$this->db->or_like('RW', $q);
    	$this->db->or_like('Kelurahan', $q);
    	$this->db->or_like('Kecamatan', $q);
    	$this->db->or_like('Kabupaten', $q);
    	$this->db->or_like('Provinsi', $q);
    	$this->db->or_like('Agama', $q);
    	$this->db->or_like('StatusKawin', $q);
    	$this->db->or_like('Pekerjaan', $q);
    	$this->db->or_like('WargaNegara', $q);
    	$this->db->or_like('BerlakuHingga', $q);
    	// $this->db->or_like('iduser', $q);
    	// $this->db->or_like('created_at', $q);
    	// $this->db->or_like('updated_at', $q);
    	$this->db->limit($limit, $start);
        $this->db->select($this->table . '.*, t43_kabupaten.nama as kabupatenNama');
        $this->db->from($this->table);
        $this->db->join('t43_kabupaten', 't43_kabupaten.id = '.$this->table.'.TempatLahir');
        return $this->db->get()->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file _08_tamu_model.php */
/* Location: ./application/models/_08_tamu_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-03-17 18:04:52 */
/* http://harviacode.com */
