<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class _07_kk_model extends CI_Model
{

    public $table = 't07_kk';
    public $id = 'idkk';
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
        $this->db->where($this->table.'.'.$this->id, $id);
        $this->db->select($this->table.'.*');
        $this->db->select('t06_penduduk.nama as PendudukNama');
        $this->db->select('t45_desa.nama as KelurahanNama');
        $this->db->select('t44_kecamatan.nama as KecamatanNama');
        $this->db->select('t43_kabupaten.nama as KabupatenNama');
        $this->db->select('t42_provinsi.nama as ProvinsiNama');
        $this->db->from($this->table);
        $this->db->join('t06_penduduk', 't06_penduduk.idpenduduk = '.$this->table.'.Nama');
        $this->db->join('t45_desa', 't45_desa.id = '.$this->table.'.Kelurahan');
        $this->db->join('t44_kecamatan', 't44_kecamatan.id = '.$this->table.'.Kecamatan');
        $this->db->join('t43_kabupaten', 't43_kabupaten.id = '.$this->table.'.Kabupaten');
        $this->db->join('t42_provinsi', 't42_provinsi.id = '.$this->table.'.Provinsi'); // echo $this->db->get_compiled_select();
        return $this->db->get()->row();
    }

    // get total rows
    function total_rows($q = NULL) {
        $this->db->or_like('Nomor', $q);
    	$this->db->or_like('t06_penduduk.Nama', $q);
    	$this->db->or_like('Alamat', $q);
    	$this->db->or_like('RT', $q);
    	$this->db->or_like('RW', $q);
    	$this->db->or_like('t45_desa.nama', $q);
    	$this->db->or_like('t44_kecamatan.nama', $q);
    	$this->db->or_like('t43_kabupaten.nama', $q);
    	$this->db->or_like('t42_provinsi.nama', $q);
    	$this->db->or_like('KodePos', $q);
    	$this->db->or_like('Tanggal', $q);
        $this->db->select($this->table.'.*');
        $this->db->select('t06_penduduk.nama as PendudukNama');
        $this->db->select('t45_desa.nama as KelurahanNama');
        $this->db->select('t44_kecamatan.nama as KecamatanNama');
        $this->db->select('t43_kabupaten.nama as KabupatenNama');
        $this->db->select('t42_provinsi.nama as ProvinsiNama');
        $this->db->from($this->table);
        $this->db->join('t06_penduduk', 't06_penduduk.idpenduduk = '.$this->table.'.Nama');
        $this->db->join('t45_desa', 't45_desa.id = '.$this->table.'.Kelurahan');
        $this->db->join('t44_kecamatan', 't44_kecamatan.id = '.$this->table.'.Kecamatan');
        $this->db->join('t43_kabupaten', 't43_kabupaten.id = '.$this->table.'.Kabupaten');
        $this->db->join('t42_provinsi', 't42_provinsi.id = '.$this->table.'.Provinsi'); // echo $this->db->get_compiled_select();
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
    	$this->db->or_like('Nomor', $q);
    	$this->db->or_like('t06_penduduk.Nama', $q);
    	$this->db->or_like('Alamat', $q);
    	$this->db->or_like('RT', $q);
    	$this->db->or_like('RW', $q);
    	$this->db->or_like('t45_desa.nama', $q);
    	$this->db->or_like('t44_kecamatan.nama', $q);
    	$this->db->or_like('t43_kabupaten.nama', $q);
    	$this->db->or_like('t42_provinsi.nama', $q);
    	$this->db->or_like('KodePos', $q);
    	$this->db->or_like('Tanggal', $q);
    	$this->db->limit($limit, $start);
        $this->db->select($this->table.'.*');
        $this->db->select('t06_penduduk.nama as PendudukNama');
        $this->db->select('t45_desa.nama as KelurahanNama');
        $this->db->select('t44_kecamatan.nama as KecamatanNama');
        $this->db->select('t43_kabupaten.nama as KabupatenNama');
        $this->db->select('t42_provinsi.nama as ProvinsiNama');
        $this->db->from($this->table);
        $this->db->join('t06_penduduk', 't06_penduduk.idpenduduk = '.$this->table.'.Nama');
        $this->db->join('t45_desa', 't45_desa.id = '.$this->table.'.Kelurahan');
        $this->db->join('t44_kecamatan', 't44_kecamatan.id = '.$this->table.'.Kecamatan');
        $this->db->join('t43_kabupaten', 't43_kabupaten.id = '.$this->table.'.Kabupaten');
        $this->db->join('t42_provinsi', 't42_provinsi.id = '.$this->table.'.Provinsi');
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

    // untuk modul pindahan
    function getData($q)
    {
        $q = "
            select
                a.idkk
                , a.Nomor
                , b.Nama as pendudukNama
            from
                t07_kk a
                join t06_penduduk b on a.Nama = b.idpenduduk
            where
                a.Nomor like '%".$q."%'
                or b.Nama like '%".$q."%'
        ";
    	// $this->db->like('Nomor', $q);
        // $this->db->or_like('t06_penduduk.Nama', $q);
        // $this->db->select($this->table.'.*');
        // $this->db->from($this->table);
        // $this->db->join('t06_penduduk', 't06_penduduk.idpenduduk = ' . $this->table.'.Nama');
        // return $this->db->get($this->table)->result();
        return $this->db->query($q)->result();
    }

}

/* End of file _07_kk_model.php */
/* Location: ./application/models/_07_kk_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-03-15 23:19:57 */
/* http://harviacode.com */
