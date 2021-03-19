<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class _08_tamu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('_08_tamu_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . '_08_tamu?q=' . urlencode($q);
            $config['first_url'] = base_url() . '_08_tamu?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . '_08_tamu';
            $config['first_url'] = base_url() . '_08_tamu';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->_08_tamu_model->total_rows($q);
        $_08_tamu = $this->_08_tamu_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            '_08_tamu_data' => $_08_tamu,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        // $this->load->view('_08_tamu/t08_tamu_list', $data);
        $data['_view'] = '_08_tamu/t08_tamu_list';
        $data['_caption'] = 'Tamu';
        $this->load->view('_00_dashboard/_00_dashboard_view', $data);
    }

    public function read($id)
    {
        $row = $this->_08_tamu_model->get_by_id($id);
        if ($row) {
            $data = array(
        		'idtamu' => $row->idtamu,
        		'NIK' => $row->NIK,
        		'Nama' => $row->Nama,
        		'TempatLahir' => $row->TempatLahir,
        		'TanggalLahir' => $row->TanggalLahir,
        		'JenisKelamin' => $row->JenisKelamin,
        		'GolonganDarah' => $row->GolonganDarah,
        		'Alamat' => $row->Alamat,
        		'RT' => $row->RT,
        		'RW' => $row->RW,
        		'Kelurahan' => $row->Kelurahan,
        		'Kecamatan' => $row->Kecamatan,
        		'Kabupaten' => $row->Kabupaten,
        		'Provinsi' => $row->Provinsi,
        		'Agama' => $row->Agama,
        		'StatusKawin' => $row->StatusKawin,
        		'Pekerjaan' => $row->Pekerjaan,
        		'WargaNegara' => $row->WargaNegara,
        		'BerlakuHingga' => $row->BerlakuHingga,
                'TempatLahirNama' => $row->TempatLahirNama,
                'agamaNama' => $row->agamaNama,
                'pekerjaanNama' => $row->pekerjaanNama,
                'statusNama' => $row->statusNama,
                'wargaNegaraNama' => $row->wargaNegaraNama,
                'KelurahanNama' => $row->KelurahanNama,
                'KecamatanNama' => $row->KecamatanNama,
                'KabupatenNama' => $row->KabupatenNama,
                'ProvinsiNama' => $row->ProvinsiNama,
        		// 'iduser' => $row->iduser,
        		// 'created_at' => $row->created_at,
        		// 'updated_at' => $row->updated_at,
            );

            // $this->load->view('_08_tamu/t08_tamu_read', $data);
            $data['_view'] = '_08_tamu/t08_tamu_read';
            $data['_caption'] = 'Tamu';
            $this->load->view('_00_dashboard/_00_dashboard_view', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('_08_tamu'));
        }
    }

    public function create()
    {
        $this->load->model('_41_agama/_41_agama_model');
        $agama = $this->_41_agama_model->get_all();
        $this->load->model('_38_status/_38_status_model');
        $status = $this->_38_status_model->get_all();
        $this->load->model('_39_pekerjaan/_39_pekerjaan_model');
        $pekerjaan = $this->_39_pekerjaan_model->get_all();
        $this->load->model('_36_warganegara/_36_warganegara_model');
        $warganegara = $this->_36_warganegara_model->get_all();

        $data = array(
            'button' => 'Create',
            'action' => site_url('_08_tamu/create_action'),
    	    'idtamu' => set_value('idtamu'),
    	    'NIK' => set_value('NIK'),
    	    'Nama' => set_value('Nama'),
    	    'TempatLahir' => set_value('TempatLahir'),
    	    'TanggalLahir' => set_value('TanggalLahir'),
    	    'JenisKelamin' => set_value('JenisKelamin'),
    	    'GolonganDarah' => set_value('GolonganDarah'),
    	    'Alamat' => set_value('Alamat'),
    	    'RT' => set_value('RT'),
    	    'RW' => set_value('RW'),
    	    'Kelurahan' => set_value('Kelurahan'),
    	    'Kecamatan' => set_value('Kecamatan'),
    	    'Kabupaten' => set_value('Kabupaten'),
    	    'Provinsi' => set_value('Provinsi'),
    	    'Agama' => set_value('Agama'),
    	    'StatusKawin' => set_value('StatusKawin'),
    	    'Pekerjaan' => set_value('Pekerjaan'),
    	    'WargaNegara' => set_value('WargaNegara'),
    	    'BerlakuHingga' => set_value('BerlakuHingga'),
    	    // 'iduser' => set_value('iduser'),
    	    // 'created_at' => set_value('created_at'),
    	    // 'updated_at' => set_value('updated_at'),
            'agamaData' => $agama,
            'statusData' => $status,
            'pekerjaanData' => $pekerjaan,
            'warganegaraData' => $warganegara,
        );

        // $this->load->view('_08_tamu/t08_tamu_form', $data);
        $data['_view'] = '_08_tamu/t08_tamu_form';
        $data['_caption'] = 'Tamu';
        $this->load->view('_00_dashboard/_00_dashboard_view', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
        		'NIK' => $this->input->post('NIK',TRUE),
        		'Nama' => $this->input->post('Nama',TRUE),
        		'TempatLahir' => $this->input->post('TempatLahir',TRUE),
                'TanggalLahir' => date('Y-m-d', strtotime(str_replace('/', '-', $this->input->post('TanggalLahir',TRUE)))),
        		'JenisKelamin' => $this->input->post('JenisKelamin',TRUE),
        		'GolonganDarah' => $this->input->post('GolonganDarah',TRUE),
        		'Alamat' => $this->input->post('Alamat',TRUE),
        		'RT' => $this->input->post('RT',TRUE),
        		'RW' => $this->input->post('RW',TRUE),
        		'Kelurahan' => $this->input->post('Kelurahan',TRUE),
        		'Kecamatan' => $this->input->post('Kecamatan',TRUE),
        		'Kabupaten' => $this->input->post('Kabupaten',TRUE),
        		'Provinsi' => $this->input->post('Provinsi',TRUE),
        		'Agama' => $this->input->post('Agama',TRUE),
        		'StatusKawin' => $this->input->post('StatusKawin',TRUE),
        		'Pekerjaan' => $this->input->post('Pekerjaan',TRUE),
        		'WargaNegara' => $this->input->post('WargaNegara',TRUE),
                'BerlakuHingga' => date('Y-m-d', strtotime(str_replace('/', '-', $this->input->post('BerlakuHingga',TRUE)))),
                'idusers' => $this->session->userdata('user_id'),
            );

            $this->_08_tamu_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('_08_tamu'));
        }
    }

    public function update($id)
    {
        $row = $this->_08_tamu_model->get_by_id($id);

        if ($row) {

            $this->load->model('_45_desa/_45_desa_model');
            $this->load->model('_44_kecamatan/_44_kecamatan_model');
            $this->load->model('_43_kabupaten/_43_kabupaten_model');
            $this->load->model('_42_provinsi/_42_provinsi_model');

            $this->load->model('_41_agama/_41_agama_model');
            $agama = $this->_41_agama_model->get_all();
            $this->load->model('_38_status/_38_status_model');
            $status = $this->_38_status_model->get_all();
            $this->load->model('_39_pekerjaan/_39_pekerjaan_model');
            $pekerjaan = $this->_39_pekerjaan_model->get_all();
            $this->load->model('_36_warganegara/_36_warganegara_model');
            $warganegara = $this->_36_warganegara_model->get_all();

            $data = array(
                'button' => 'Update',
                'action' => site_url('_08_tamu/update_action'),
        		'idtamu' => set_value('idtamu', $row->idtamu),
        		'NIK' => set_value('NIK', $row->NIK),
        		'Nama' => set_value('Nama', $row->Nama),
        		'TempatLahir' => set_value('TempatLahir', $row->TempatLahir),
        		'TanggalLahir' => set_value('TanggalLahir', date_format(date_create($row->TanggalLahir), 'd-m-Y')),
        		'JenisKelamin' => set_value('JenisKelamin', $row->JenisKelamin),
        		'GolonganDarah' => set_value('GolonganDarah', $row->GolonganDarah),
        		'Alamat' => set_value('Alamat', $row->Alamat),
        		'RT' => set_value('RT', $row->RT),
        		'RW' => set_value('RW', $row->RW),
        		'Kelurahan' => set_value('Kelurahan', $row->Kelurahan),
        		'Kecamatan' => set_value('Kecamatan', $row->Kecamatan),
        		'Kabupaten' => set_value('Kabupaten', $row->Kabupaten),
        		'Provinsi' => set_value('Provinsi', $row->Provinsi),
        		'Agama' => set_value('Agama', $row->Agama),
        		'StatusKawin' => set_value('StatusKawin', $row->StatusKawin),
        		'Pekerjaan' => set_value('Pekerjaan', $row->Pekerjaan),
        		'WargaNegara' => set_value('WargaNegara', $row->WargaNegara),
                'BerlakuHingga' => set_value('BerlakuHingga', date_format(date_create($row->BerlakuHingga), 'd-m-Y')),
                'agamaData' => $agama,
                'statusData' => $status,
                'pekerjaanData' => $pekerjaan,
                'warganegaraData' => $warganegara,
                'TempatLahirNama' => $this->_43_kabupaten_model->get_by_id($row->TempatLahir)->nama,
                'KelurahanNama' => $this->_45_desa_model->get_by_id($row->Kelurahan)->nama,
                'KecamatanNama' => $this->_44_kecamatan_model->get_by_id($row->Kecamatan)->nama,
                'KabupatenNama' => $this->_43_kabupaten_model->get_by_id($row->Kabupaten)->nama,
                'ProvinsiNama' => $this->_42_provinsi_model->get_by_id($row->Provinsi)->nama,
            );

            // $this->load->view('_08_tamu/t08_tamu_form', $data);
            $data['_view'] = '_08_tamu/t08_tamu_form';
            $data['_caption'] = 'Tamu';
            $this->load->view('_00_dashboard/_00_dashboard_view', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('_08_tamu'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idtamu', TRUE));
        } else {
            $data = array(
        		'NIK' => $this->input->post('NIK',TRUE),
        		'Nama' => $this->input->post('Nama',TRUE),
        		'TempatLahir' => $this->input->post('TempatLahir',TRUE),
        		'TanggalLahir' => date('Y-m-d', strtotime(str_replace('/', '-', $this->input->post('TanggalLahir',TRUE)))),
        		'JenisKelamin' => $this->input->post('JenisKelamin',TRUE),
        		'GolonganDarah' => $this->input->post('GolonganDarah',TRUE),
        		'Alamat' => $this->input->post('Alamat',TRUE),
        		'RT' => $this->input->post('RT',TRUE),
        		'RW' => $this->input->post('RW',TRUE),
        		'Kelurahan' => $this->input->post('Kelurahan',TRUE),
        		'Kecamatan' => $this->input->post('Kecamatan',TRUE),
        		'Kabupaten' => $this->input->post('Kabupaten',TRUE),
        		'Provinsi' => $this->input->post('Provinsi',TRUE),
        		'Agama' => $this->input->post('Agama',TRUE),
        		'StatusKawin' => $this->input->post('StatusKawin',TRUE),
        		'Pekerjaan' => $this->input->post('Pekerjaan',TRUE),
        		'WargaNegara' => $this->input->post('WargaNegara',TRUE),
                'BerlakuHingga' => date('Y-m-d', strtotime(str_replace('/', '-', $this->input->post('BerlakuHingga',TRUE)))),
                'idusers' => $this->session->userdata('user_id'),
            );

            $this->_08_tamu_model->update($this->input->post('idtamu', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('_08_tamu'));
        }
    }

    public function delete($id)
    {
        $row = $this->_08_tamu_model->get_by_id($id);

        if ($row) {
            $this->_08_tamu_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('_08_tamu'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('_08_tamu'));
        }
    }

    public function _rules()
    {
    	$this->form_validation->set_rules('NIK', 'nik', 'trim|required');
    	$this->form_validation->set_rules('Nama', 'nama', 'trim|required');
    	$this->form_validation->set_rules('TempatLahir', 'tempatlahir', 'trim|required');
    	$this->form_validation->set_rules('TanggalLahir', 'tanggallahir', 'trim|required');
    	$this->form_validation->set_rules('JenisKelamin', 'jeniskelamin', 'trim|required');
    	$this->form_validation->set_rules('GolonganDarah', 'golongandarah', 'trim|required');
    	$this->form_validation->set_rules('Alamat', 'alamat', 'trim|required');
    	$this->form_validation->set_rules('RT', 'rt', 'trim|required');
    	$this->form_validation->set_rules('RW', 'rw', 'trim|required');
    	$this->form_validation->set_rules('Kelurahan', 'kelurahan', 'trim|required');
    	$this->form_validation->set_rules('Kecamatan', 'kecamatan', 'trim|required');
    	$this->form_validation->set_rules('Kabupaten', 'kabupaten', 'trim|required');
    	$this->form_validation->set_rules('Provinsi', 'provinsi', 'trim|required');
    	$this->form_validation->set_rules('Agama', 'agama', 'trim|required');
    	$this->form_validation->set_rules('StatusKawin', 'statuskawin', 'trim|required');
    	$this->form_validation->set_rules('Pekerjaan', 'pekerjaan', 'trim|required');
    	$this->form_validation->set_rules('WargaNegara', 'warganegara', 'trim|required');
    	$this->form_validation->set_rules('BerlakuHingga', 'berlakuhingga', 'trim|required');

    	$this->form_validation->set_rules('idtamu', 'idtamu', 'trim');
    	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "t08_tamu.xls";
        $judul = "t08_tamu";
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
    	xlsWriteLabel($tablehead, $kolomhead++, "NIK");
    	xlsWriteLabel($tablehead, $kolomhead++, "Nama");
    	xlsWriteLabel($tablehead, $kolomhead++, "TempatLahir");
    	xlsWriteLabel($tablehead, $kolomhead++, "TanggalLahir");
    	xlsWriteLabel($tablehead, $kolomhead++, "JenisKelamin");
    	xlsWriteLabel($tablehead, $kolomhead++, "GolonganDarah");
    	xlsWriteLabel($tablehead, $kolomhead++, "Alamat");
    	xlsWriteLabel($tablehead, $kolomhead++, "RT");
    	xlsWriteLabel($tablehead, $kolomhead++, "RW");
    	xlsWriteLabel($tablehead, $kolomhead++, "Kelurahan");
    	xlsWriteLabel($tablehead, $kolomhead++, "Kecamatan");
    	xlsWriteLabel($tablehead, $kolomhead++, "Kabupaten");
    	xlsWriteLabel($tablehead, $kolomhead++, "Provinsi");
    	xlsWriteLabel($tablehead, $kolomhead++, "Agama");
    	xlsWriteLabel($tablehead, $kolomhead++, "StatusKawin");
    	xlsWriteLabel($tablehead, $kolomhead++, "Pekerjaan");
    	xlsWriteLabel($tablehead, $kolomhead++, "WargaNegara");
    	xlsWriteLabel($tablehead, $kolomhead++, "BerlakuHingga");
    	xlsWriteLabel($tablehead, $kolomhead++, "Iduser");
    	xlsWriteLabel($tablehead, $kolomhead++, "Created At");
    	xlsWriteLabel($tablehead, $kolomhead++, "Updated At");

    	foreach ($this->_08_tamu_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->NIK);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->Nama);
    	    xlsWriteNumber($tablebody, $kolombody++, $data->TempatLahir);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->TanggalLahir);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->JenisKelamin);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->GolonganDarah);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->Alamat);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->RT);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->RW);
    	    xlsWriteNumber($tablebody, $kolombody++, $data->Kelurahan);
    	    xlsWriteNumber($tablebody, $kolombody++, $data->Kecamatan);
    	    xlsWriteNumber($tablebody, $kolombody++, $data->Kabupaten);
    	    xlsWriteNumber($tablebody, $kolombody++, $data->Provinsi);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->Agama);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->StatusKawin);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->Pekerjaan);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->WargaNegara);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->BerlakuHingga);
    	    xlsWriteNumber($tablebody, $kolombody++, $data->iduser);
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
        header("Content-Disposition: attachment;Filename=t08_tamu.doc");

        $data = array(
            't08_tamu_data' => $this->_08_tamu_model->get_all(),
            'start' => 0
            );

        $this->load->view('_08_tamu/t08_tamu_doc',$data);
    }

}

/* End of file _08_tamu.php */
/* Location: ./application/controllers/_08_tamu.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-03-17 18:04:52 */
/* http://harviacode.com */
