<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class _30_mutasi_model extends CI_Model
{

    public $table = 't30_mutasi';
    public $id = 'idmutasi';
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

    // get data by id for update mutasi
    function get_by_id_update($id)
    {
        $this->db->where($this->id, $id);
        $this->db->select($this->table.'.*');
        $this->db->select('t07_kk.Nomor');
        $this->db->select('t06_penduduk.Nama as pendudukNama');
        $this->db->from($this->table);
        $this->db->join('t07_kk', 't07_kk.idkk = '.$this->table.'.idkk');
        $this->db->join('t06_penduduk', 't06_penduduk.idpenduduk = t07_kk.Nama');
        // return $this->db->get($this->table)->row();
        return $this->db->get()->row();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where('idalamat', $id);
        return $this->db->get('t35_alamat')->row();
        // $q =
        //     "
        //     select
        //     	a.*
        //         , b.idmutasi
        //         , b.tanggal
        //         , b.Jenis
        //         , c.Nomor
        //         , d.Nama
        //     from
        //     	t35_alamat a
        //         join t30_mutasi b on a.idalamat = b.idalamat
        //         join t07_kk c on b.idkk = c.idkk
        //         join t06_penduduk d on c.Nama = d.idpenduduk
        //     where
        //     	a.idalamat = 1
        //     order by
        //     	b.created_at
        //     ";
        // return $this->db->query($q)->row();
    }

    // get total rows
    function total_rows($q = NULL) {
    	$this->db->from('t35_alamat');
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        // $this->db->order_by($this->id, $this->order);
        // $this->db->like('idmutasi', $q);
    	// $this->db->or_like('idalamat', $q);
    	// $this->db->or_like('tanggal', $q);
    	// $this->db->or_like('Jenis', $q);
    	// $this->db->or_like('idkk', $q);
    	// $this->db->or_like('idusers', $q);
    	// $this->db->or_like('created_at', $q);
    	// $this->db->or_like('updated_at', $q);
        // $this->db->select();
        $q =
            "
            select
            	a.idalamat
                , a.Alamat
                , case when b.Jenis = 'MASUK' then 'Terisi' else 'Kosong' end as Status
                , b.idmutasi
                , b.Nomor
                , b.Nama
            from
            	t35_alamat a
                left join
            		(
                    select
                    	idmutasi
                        , idalamat
                        , a.tanggal
                        , Jenis
                        , a.idkk
                        , b.Nomor
                        , c.Nama
                    from
                    	t30_mutasi a
                        join t07_kk b on a.idkk = b.idkk
                        join t06_penduduk c on b.Nama = c.idpenduduk
                    where
                    	Jenis = 'MASUK'
                        and a.created_at = (select max(created_at) from t30_mutasi group by idalamat having idalamat = a.idalamat)
                    ) b on a.idalamat = b.idalamat
            limit ".$limit." offset ".$start."
            ";
    	// $this->db->limit($limit, $start);
        // echo $q;
        return $this->db->query($q)->result();
        // return $this->db->get($this->table)->result();
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

    function getLaporanData($Jenis)
    {
        if ($Jenis == 'SAATINI') {
            $q =
                "
                select
                    a.idalamat
                    , a.Alamat
                    , b.tanggal
                    , 'MENEMPATI' as Jenis
                    , b.Nomor
                    , b.Nama as pendudukNama
                from
                    t35_alamat a
                    join
                        (
                        select
                            idmutasi
                            , idalamat
                            , a.tanggal
                            , Jenis
                            , a.idkk
                            , b.Nomor
                            , c.Nama
                        from
                            t30_mutasi a
                            join t07_kk b on a.idkk = b.idkk
                            join t06_penduduk c on b.Nama = c.idpenduduk
                        where
                            Jenis = 'MASUK'
                            and a.created_at = (select max(created_at) from t30_mutasi group by idalamat having idalamat = a.idalamat)
                        ) b on a.idalamat = b.idalamat
                ";
            // echo $q;
            return $this->db->query($q)->result();
        } else {
            $this->db->where('Jenis', $Jenis);
            $this->db->order_by($this->table.'.idalamat asc, '.$this->table.'.tanggal asc, '.$this->table.'.created_at asc');
            $this->db->select($this->table.'.*');
            $this->db->select('t07_kk.Nomor');
            $this->db->select('t06_penduduk.Nama as pendudukNama');
            $this->db->select('t35_alamat.Alamat');
            $this->db->from($this->table);
            $this->db->join('t07_kk', 't07_kk.idkk = '.$this->table.'.idkk');
            $this->db->join('t06_penduduk', 't06_penduduk.idpenduduk = t07_kk.Nama');
            $this->db->join('t35_alamat', 't35_alamat.idalamat = '.$this->table.'.idalamat');
            return $this->db->get()->result();
        }

    }

}

/* End of file _30_mutasi_model.php */
/* Location: ./application/models/_30_mutasi_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-03-19 10:55:53 */
/* http://harviacode.com */
