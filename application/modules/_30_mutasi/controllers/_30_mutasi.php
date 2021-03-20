<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class _30_mutasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('_30_mutasi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . '_30_mutasi?q=' . urlencode($q);
            $config['first_url'] = base_url() . '_30_mutasi?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . '_30_mutasi';
            $config['first_url'] = base_url() . '_30_mutasi';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->_30_mutasi_model->total_rows($q);
        $_30_mutasi = $this->_30_mutasi_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            '_30_mutasi_data' => $_30_mutasi,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        // $this->load->view('_30_mutasi/t30_mutasi_list', $data);
        $data['_view'] = '_30_mutasi/t30_mutasi_list';
        $data['_caption'] = 'Data Alamat';
        $this->load->view('_00_dashboard/_00_dashboard_view', $data);
    }

    public function read($id)
    {
        $row = $this->_30_mutasi_model->get_by_id($id);
        if ($row) {
            $data = array(
                'idalamat' => $row->idalamat,
                'Alamat' => $row->Alamat,
        		// 'idmutasi' => $row->idmutasi,
        		// 'tanggal' => $row->tanggal,
        		// 'Jenis' => $row->Jenis,
                // 'Nomor' => $row->Nomor,
                // 'Nama' => $row->Nama,
        		// 'idkk' => $row->idkk,
        		// 'idusers' => $row->idusers,
        		// 'created_at' => $row->created_at,
        		// 'updated_at' => $row->updated_at,
    	    );

            /**
             * ambil data dari tabel detail
             */
            $q =
                "
                select
                    a.*
                    , b.idmutasi
                    , b.tanggal
                    , b.Jenis
                    , c.Nomor
                    , d.Nama
                from
                    t35_alamat a
                    join t30_mutasi b on a.idalamat = b.idalamat
                    join t07_kk c on b.idkk = c.idkk
                    join t06_penduduk d on c.Nama = d.idpenduduk
                where
                    a.idalamat = 1
                order by
                    b.created_at
                ";
            // $data['detail'] = $this->db->query($q)->result();
            $data['detail'] = $this->db
                ->where('a.idalamat', $id)
                ->select('a.*')
                ->select('b.idmutasi, b.tanggal, b.Jenis')
                ->select('c.Nomor')
                ->select('d.Nama')
                ->from('t35_alamat a')
                ->join('t30_mutasi b', 'a.idalamat = b.idalamat')
                ->join('t07_kk c', 'b.idkk = c.idkk')
                ->join('t06_penduduk d', 'c.Nama = d.idpenduduk')
                ->order_by('b.created_at', 'asc')
                ->get()->result();

            // $this->load->view('_30_mutasi/t30_mutasi_read', $data);
            $data['_view'] = '_30_mutasi/t30_mutasi_read';
            $data['_caption'] = 'Pindahan';
            $this->load->view('_00_dashboard/_00_dashboard_view', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('_30_mutasi'));
        }
    }

    public function create($id)
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('_30_mutasi/create_action'),
    	    'idmutasi' => set_value('idmutasi'),
    	    'idalamat' => set_value('idalamat', $id),
    	    'tanggal' => set_value('tanggal'),
    	    'Jenis' => set_value('Jenis'),
    	    'idkk' => set_value('idkk'),
    	    // 'idusers' => set_value('idusers'),
    	    // 'created_at' => set_value('created_at'),
    	    // 'updated_at' => set_value('updated_at'),
    	);
        // $this->load->view('_30_mutasi/t30_mutasi_form', $data);
        $data['_view'] = '_30_mutasi/t30_mutasi_form';
        $data['_caption'] = 'Pindahan';
        $this->load->view('_00_dashboard/_00_dashboard_view', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
        		'idalamat' => $this->input->post('idalamat',TRUE),
                'tanggal' => date('Y-m-d', strtotime(str_replace('/', '-', $this->input->post('tanggal',TRUE)))),
        		'Jenis' => $this->input->post('Jenis',TRUE),
        		'idkk' => $this->input->post('idkk',TRUE),
                'idusers' => $this->session->userdata('user_id'),
        		// 'idusers' => $this->input->post('idusers',TRUE),
        		// 'created_at' => $this->input->post('created_at',TRUE),
        		// 'updated_at' => $this->input->post('updated_at',TRUE),
    	    );

            $this->_30_mutasi_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('_30_mutasi/read/'.$this->input->post('idalamat',TRUE)));
        }
    }

    public function update($id)
    {
        $row = $this->_30_mutasi_model->get_by_id_update($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('_30_mutasi/update_action'),
        		'idmutasi' => set_value('idmutasi', $row->idmutasi),
        		'idalamat' => set_value('idalamat', $row->idalamat),
                'tanggal' => set_value('tanggal', date_format(date_create($row->tanggal), 'd-m-Y')),
        		'Jenis' => set_value('Jenis', $row->Jenis),
        		'idkk' => set_value('idkk', $row->idkk),
                'Nomor' => set_value('Nomor', $row->Nomor),
                'pendudukNama' => set_value('pendudukNama', $row->pendudukNama),
        		// 'idusers' => set_value('idusers', $row->idusers),
        		// 'created_at' => set_value('created_at', $row->created_at),
        		// 'updated_at' => set_value('updated_at', $row->updated_at),
    	    );
            // $this->load->view('_30_mutasi/t30_mutasi_form', $data);
            $data['_view'] = '_30_mutasi/t30_mutasi_form';
            $data['_caption'] = 'Pindahan';
            $this->load->view('_00_dashboard/_00_dashboard_view', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('_30_mutasi'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idmutasi', TRUE));
        } else {
            $data = array(
        		'idalamat' => $this->input->post('idalamat',TRUE),
                'tanggal' => date('Y-m-d', strtotime(str_replace('/', '-', $this->input->post('tanggal',TRUE)))),
        		'Jenis' => $this->input->post('Jenis',TRUE),
        		'idkk' => $this->input->post('idkk',TRUE),
                'idusers' => $this->session->userdata('user_id'),
        		// 'idusers' => $this->input->post('idusers',TRUE),
        		// 'created_at' => $this->input->post('created_at',TRUE),
        		// 'updated_at' => $this->input->post('updated_at',TRUE),
    	    );

            $this->_30_mutasi_model->update($this->input->post('idmutasi', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('_30_mutasi/read/'.$this->input->post('idalamat',TRUE)));
        }
    }

    public function delete($id, $idalamat)
    {
        $row = $this->_30_mutasi_model->get_by_id_update($id);

        if ($row) {
            $this->_30_mutasi_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('_30_mutasi/read/'.$idalamat));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('_30_mutasi/read/'.$idalamat));
        }
    }

    public function _rules()
    {
    	$this->form_validation->set_rules('idalamat', 'idalamat', 'trim|required');
    	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
    	$this->form_validation->set_rules('Jenis', 'jenis', 'trim|required');
    	$this->form_validation->set_rules('idkk', 'idkk', 'trim|required');
    	// $this->form_validation->set_rules('idusers', 'idusers', 'trim|required');
    	// $this->form_validation->set_rules('created_at', 'created at', 'trim|required');
    	// $this->form_validation->set_rules('updated_at', 'updated at', 'trim|required');

    	$this->form_validation->set_rules('idmutasi', 'idmutasi', 'trim');
    	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "t30_mutasi.xls";
        $judul = "t30_mutasi";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
    	xlsWriteLabel($tablehead, $kolomhead++, "Idalamat");
    	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal");
    	xlsWriteLabel($tablehead, $kolomhead++, "Jenis");
    	xlsWriteLabel($tablehead, $kolomhead++, "Idkk");
    	xlsWriteLabel($tablehead, $kolomhead++, "Idusers");
    	xlsWriteLabel($tablehead, $kolomhead++, "Created At");
    	xlsWriteLabel($tablehead, $kolomhead++, "Updated At");

    	foreach ($this->_30_mutasi_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
    	    xlsWriteNumber($tablebody, $kolombody++, $data->idalamat);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->tanggal);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->Jenis);
    	    xlsWriteNumber($tablebody, $kolombody++, $data->idkk);
    	    xlsWriteNumber($tablebody, $kolombody++, $data->idusers);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->created_at);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->updated_at);

    	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=t30_mutasi.doc");

        $data = array(
            't30_mutasi_data' => $this->_30_mutasi_model->get_all(),
            'start' => 0
        );

        $this->load->view('_30_mutasi/t30_mutasi_doc',$data);
    }

    public function laporan()
    {
        $mutasiMasuk = $this->_30_mutasi_model->getLaporanData('MASUK');
        $mutasiKeluar = $this->_30_mutasi_model->getLaporanData('KELUAR');
        $mutasiSaatini = $this->_30_mutasi_model->getLaporanData('SAATINI');
        $data = array(
            'mutasiMasuk' => $mutasiMasuk,
            'mutasiKeluar' => $mutasiKeluar,
            'mutasiSaatini' => $mutasiSaatini,
        );
        $data['_view'] = '_30_mutasi/t30_mutasi_laporan';
        // $data['_view'] = '_00_dashboard_list';
        $data['_caption'] = 'Laporan Data Warga';
        $this->load->view('_00_dashboard/_00_dashboard_view', $data);
    }

}

/* End of file _30_mutasi.php */
/* Location: ./application/controllers/_30_mutasi.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-03-19 10:55:53 */
/* http://harviacode.com */
