<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class _06_penduduk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('_06_penduduk_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . '_06_penduduk?q=' . urlencode($q);
            $config['first_url'] = base_url() . '_06_penduduk?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . '_06_penduduk';
            $config['first_url'] = base_url() . '_06_penduduk';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->_06_penduduk_model->total_rows($q);
        $_06_penduduk = $this->_06_penduduk_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            '_06_penduduk_data' => $_06_penduduk,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        // $this->load->view('_06_penduduk/t06_penduduk_list', $data);
        $data['_view'] = '_06_penduduk/t06_penduduk_list';
        $data['_caption'] = 'Penduduk';
        $this->load->view('_00_dashboard/_00_dashboard_view', $data);
    }

    public function read($id)
    {
        $row = $this->_06_penduduk_model->get_by_id($id);
        if ($row) {
            $data = array(
        		'idpenduduk' => $row->idpenduduk,
        		'NoUrut' => $row->NoUrut,
        		'Nama' => $row->Nama,
        		'NIK' => $row->NIK,
        		'JenisKelamin' => $row->JenisKelamin,
        		'TempatLahir' => $row->TempatLahir,
        		'TanggalLahir' => $row->TanggalLahir,
        		'Agama' => $row->Agama,
        		'Pendidikan' => $row->Pendidikan,
        		'Pekerjaan' => $row->Pekerjaan,
        		'StatusKawin' => $row->StatusKawin,
        		'HubunganKeluarga' => $row->HubunganKeluarga,
        		'WargaNegara' => $row->WargaNegara,
        		'NoPaspor' => $row->NoPaspor,
        		'NoKitasKitap' => $row->NoKitasKitap,
        		'NamaAyah' => $row->NamaAyah,
        		'NamaIbu' => $row->NamaIbu,
        		'idinduk' => $row->idinduk,
        		'idkk' => $row->idkk,
        		'iduser' => $row->iduser,
        		'created_at' => $row->created_at,
        		'updated_at' => $row->updated_at,
                'kabupatenNama' => $row->kabupatenNama,
                'agamaNama' => $row->agamaNama,
                'pendidikanNama' => $row->pendidikanNama,
                'pekerjaanNama' => $row->pekerjaanNama,
                'statusNama' => $row->statusNama,
                'hubunganNama' => $row->hubunganNama,
                'wargaNegaraNama' => $row->wargaNegaraNama,
                );
            // $this->load->view('_06_penduduk/t06_penduduk_read', $data);
            $data['_view'] = '_06_penduduk/t06_penduduk_read';
            $data['_caption'] = 'Penduduk';
            $this->load->view('_00_dashboard/_00_dashboard_view', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('_06_penduduk'));
        }
    }

    public function create()
    {
        $this->load->model('_43_kabupaten/_43_kabupaten_model');
        $kabupaten = $this->_43_kabupaten_model->get_all();
        $this->load->model('_41_agama/_41_agama_model');
        $agama = $this->_41_agama_model->get_all();
        $this->load->model('_40_pendidikan/_40_pendidikan_model');
        $pendidikan = $this->_40_pendidikan_model->get_all();
        $this->load->model('_39_pekerjaan/_39_pekerjaan_model');
        $pekerjaan = $this->_39_pekerjaan_model->get_all();
        $this->load->model('_38_status/_38_status_model');
        $status = $this->_38_status_model->get_all();
        $this->load->model('_37_hubungan/_37_hubungan_model');
        $hubungan = $this->_37_hubungan_model->get_all();
        $this->load->model('_36_warganegara/_36_warganegara_model');
        $warganegara = $this->_36_warganegara_model->get_all();
        $data = array(
            'button' => 'Create',
            'action' => site_url('_06_penduduk/create_action'),
    	    'idpenduduk' => set_value('idpenduduk'),
    	    'NoUrut' => set_value('NoUrut'),
    	    'Nama' => set_value('Nama'),
    	    'NIK' => set_value('NIK'),
    	    'JenisKelamin' => set_value('JenisKelamin'),
    	    'TempatLahir' => set_value('TempatLahir'),
    	    'TanggalLahir' => set_value('TanggalLahir'),
    	    'Agama' => set_value('Agama'),
    	    'Pendidikan' => set_value('Pendidikan'),
    	    'Pekerjaan' => set_value('Pekerjaan'),
    	    'StatusKawin' => set_value('StatusKawin'),
    	    'HubunganKeluarga' => set_value('HubunganKeluarga'),
    	    'WargaNegara' => set_value('WargaNegara'),
    	    'NoPaspor' => set_value('NoPaspor'),
    	    'NoKitasKitap' => set_value('NoKitasKitap'),
    	    'NamaAyah' => set_value('NamaAyah'),
    	    'NamaIbu' => set_value('NamaIbu'),
    	    // 'idinduk' => set_value('idinduk'),
    	    // 'idkk' => set_value('idkk'),
    	    // 'iduser' => set_value('iduser'),
    	    // 'created_at' => set_value('created_at'),
    	    // 'updated_at' => set_value('updated_at'),
            'agamaData' => $agama,
            'pendidikanData' => $pendidikan,
            'pekerjaanData' => $pekerjaan,
            'statusData' => $status,
            'hubunganData' => $hubungan,
            'warganegaraData' => $warganegara,
            'kabupatenData' => $kabupaten,
            );
        // $this->load->view('_06_penduduk/t06_penduduk_form', $data);
        $data['_view'] = '_06_penduduk/t06_penduduk_form';
        $data['_caption'] = 'Penduduk';
        $this->load->view('_00_dashboard/_00_dashboard_view', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
        		'NoUrut' => $this->input->post('NoUrut',TRUE),
        		'Nama' => $this->input->post('Nama',TRUE),
        		'NIK' => $this->input->post('NIK',TRUE),
        		'JenisKelamin' => $this->input->post('JenisKelamin',TRUE),
        		'TempatLahir' => $this->input->post('TempatLahir',TRUE),
        		// 'TanggalLahir' => $this->input->post('TanggalLahir',TRUE),
                // 'TglCSheet' => date('Y-m-d', strtotime(str_replace('/', '-', $this->input->post('TglCSheet', true)))),
                'TanggalLahir' => date('Y-m-d', strtotime(str_replace('/', '-', $this->input->post('TanggalLahir',TRUE)))),
        		'Agama' => $this->input->post('Agama',TRUE),
        		'Pendidikan' => $this->input->post('Pendidikan',TRUE),
        		'Pekerjaan' => $this->input->post('Pekerjaan',TRUE),
        		'StatusKawin' => $this->input->post('StatusKawin',TRUE),
        		'HubunganKeluarga' => $this->input->post('HubunganKeluarga',TRUE),
        		'WargaNegara' => $this->input->post('WargaNegara',TRUE),
        		'NoPaspor' => $this->input->post('NoPaspor',TRUE),
        		'NoKitasKitap' => $this->input->post('NoKitasKitap',TRUE),
        		'NamaAyah' => $this->input->post('NamaAyah',TRUE),
        		'NamaIbu' => $this->input->post('NamaIbu',TRUE),
        		// 'idinduk' => $this->input->post('idinduk',TRUE),
        		// 'idkk' => $this->input->post('idkk',TRUE),
        		'iduser' => $this->session->userdata('user_id'),
        		// 'created_at' => $this->input->post('created_at',TRUE),
        		// 'updated_at' => $this->input->post('updated_at',TRUE),
        	    );

            $this->_06_penduduk_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('_06_penduduk'));
        }
    }

    public function update($id)
    {
        $row = $this->_06_penduduk_model->get_by_id($id);

        if ($row) {
            $this->load->model('_43_kabupaten/_43_kabupaten_model');
            $kabupaten = $this->_43_kabupaten_model->get_all();
            $this->load->model('_41_agama/_41_agama_model');
            $agama = $this->_41_agama_model->get_all();
            $this->load->model('_40_pendidikan/_40_pendidikan_model');
            $pendidikan = $this->_40_pendidikan_model->get_all();
            $this->load->model('_39_pekerjaan/_39_pekerjaan_model');
            $pekerjaan = $this->_39_pekerjaan_model->get_all();
            $this->load->model('_38_status/_38_status_model');
            $status = $this->_38_status_model->get_all();
            $this->load->model('_37_hubungan/_37_hubungan_model');
            $hubungan = $this->_37_hubungan_model->get_all();
            $this->load->model('_36_warganegara/_36_warganegara_model');
            $warganegara = $this->_36_warganegara_model->get_all();
            $data = array(
                'button' => 'Update',
                'action' => site_url('_06_penduduk/update_action'),
        		'idpenduduk' => set_value('idpenduduk', $row->idpenduduk),
        		'NoUrut' => set_value('NoUrut', $row->NoUrut),
        		'Nama' => set_value('Nama', $row->Nama),
        		'NIK' => set_value('NIK', $row->NIK),
        		'JenisKelamin' => set_value('JenisKelamin', $row->JenisKelamin),
        		'TempatLahir' => set_value('TempatLahir', $row->TempatLahir),
        		// 'TanggalLahir' => set_value('TanggalLahir', $row->TanggalLahir),
                // 'TglCSheet' => set_value('TglCSheet', date_format(date_create($row->TglCSheet), 'd-m-Y')),
                'TanggalLahir' => set_value('TanggalLahir', date_format(date_create($row->TanggalLahir), 'd-m-Y')),
        		'Agama' => set_value('Agama', $row->Agama),
        		'Pendidikan' => set_value('Pendidikan', $row->Pendidikan),
        		'Pekerjaan' => set_value('Pekerjaan', $row->Pekerjaan),
        		'StatusKawin' => set_value('StatusKawin', $row->StatusKawin),
        		'HubunganKeluarga' => set_value('HubunganKeluarga', $row->HubunganKeluarga),
        		'WargaNegara' => set_value('WargaNegara', $row->WargaNegara),
        		'NoPaspor' => set_value('NoPaspor', $row->NoPaspor),
        		'NoKitasKitap' => set_value('NoKitasKitap', $row->NoKitasKitap),
        		'NamaAyah' => set_value('NamaAyah', $row->NamaAyah),
        		'NamaIbu' => set_value('NamaIbu', $row->NamaIbu),
        		// 'idinduk' => set_value('idinduk', $row->idinduk),
        		// 'idkk' => set_value('idkk', $row->idkk),
        		// 'iduser' => set_value('iduser', $row->iduser),
        		// 'created_at' => set_value('created_at', $row->created_at),
        		// 'updated_at' => set_value('updated_at', $row->updated_at),
                'agamaData' => $agama,
                'pendidikanData' => $pendidikan,
                'pekerjaanData' => $pekerjaan,
                'statusData' => $status,
                'hubunganData' => $hubungan,
                'warganegaraData' => $warganegara,
                'kabupatenData' => $kabupaten,
        	    );
            // $this->load->view('_06_penduduk/t06_penduduk_form', $data);
            $data['_view'] = '_06_penduduk/t06_penduduk_form';
            $data['_caption'] = 'Penduduk';
            $this->load->view('_00_dashboard/_00_dashboard_view', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('_06_penduduk'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idpenduduk', TRUE));
        } else {
            $data = array(
        		'NoUrut' => $this->input->post('NoUrut',TRUE),
        		'Nama' => $this->input->post('Nama',TRUE),
        		'NIK' => $this->input->post('NIK',TRUE),
        		'JenisKelamin' => $this->input->post('JenisKelamin',TRUE),
        		'TempatLahir' => $this->input->post('TempatLahir',TRUE),
        		// 'TanggalLahir' => $this->input->post('TanggalLahir',TRUE),
                'TanggalLahir' => date('Y-m-d', strtotime(str_replace('/', '-', $this->input->post('TanggalLahir',TRUE)))),
        		'Agama' => $this->input->post('Agama',TRUE),
        		'Pendidikan' => $this->input->post('Pendidikan',TRUE),
        		'Pekerjaan' => $this->input->post('Pekerjaan',TRUE),
        		'StatusKawin' => $this->input->post('StatusKawin',TRUE),
        		'HubunganKeluarga' => $this->input->post('HubunganKeluarga',TRUE),
        		'WargaNegara' => $this->input->post('WargaNegara',TRUE),
        		'NoPaspor' => $this->input->post('NoPaspor',TRUE),
        		'NoKitasKitap' => $this->input->post('NoKitasKitap',TRUE),
        		'NamaAyah' => $this->input->post('NamaAyah',TRUE),
        		'NamaIbu' => $this->input->post('NamaIbu',TRUE),
        		// 'idinduk' => $this->input->post('idinduk',TRUE),
        		// 'idkk' => $this->input->post('idkk',TRUE),
                'iduser' => $this->session->userdata('user_id'),
        		// 'created_at' => $this->input->post('created_at',TRUE),
        		// 'updated_at' => $this->input->post('updated_at',TRUE),
        	    );

            $this->_06_penduduk_model->update($this->input->post('idpenduduk', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('_06_penduduk'));
        }
    }

    public function delete($id)
    {
        $row = $this->_06_penduduk_model->get_by_id($id);

        if ($row) {
            $this->_06_penduduk_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('_06_penduduk'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('_06_penduduk'));
        }
    }

    public function _rules()
    {
    	$this->form_validation->set_rules('NoUrut', 'nourut', 'trim|required');
    	$this->form_validation->set_rules('Nama', 'nama', 'trim|required');
    	$this->form_validation->set_rules('NIK', 'nik', 'trim|required');
    	$this->form_validation->set_rules('JenisKelamin', 'jeniskelamin', 'trim|required');
    	$this->form_validation->set_rules('TempatLahir', 'tempatlahir', 'trim|required');
    	$this->form_validation->set_rules('TanggalLahir', 'tanggallahir', 'trim|required');
    	$this->form_validation->set_rules('Agama', 'agama', 'trim|required');
    	$this->form_validation->set_rules('Pendidikan', 'pendidikan', 'trim|required');
    	$this->form_validation->set_rules('Pekerjaan', 'pekerjaan', 'trim|required');
    	$this->form_validation->set_rules('StatusKawin', 'statuskawin', 'trim|required');
    	$this->form_validation->set_rules('HubunganKeluarga', 'hubungankeluarga', 'trim|required');
    	$this->form_validation->set_rules('WargaNegara', 'warganegara', 'trim|required');
    	$this->form_validation->set_rules('NoPaspor', 'nopaspor', 'trim|required');
    	$this->form_validation->set_rules('NoKitasKitap', 'nokitaskitap', 'trim|required');
    	$this->form_validation->set_rules('NamaAyah', 'namaayah', 'trim|required');
    	$this->form_validation->set_rules('NamaIbu', 'namaibu', 'trim|required');
    	// $this->form_validation->set_rules('idinduk', 'idinduk', 'trim|required');
    	// $this->form_validation->set_rules('idkk', 'idkk', 'trim|required');
    	// $this->form_validation->set_rules('iduser', 'iduser', 'trim|required');
    	// $this->form_validation->set_rules('created_at', 'created at', 'trim|required');
    	// $this->form_validation->set_rules('updated_at', 'updated at', 'trim|required');

    	$this->form_validation->set_rules('idpenduduk', 'idpenduduk', 'trim');
    	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "t06_penduduk.xls";
        $judul = "t06_penduduk";
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
    	xlsWriteLabel($tablehead, $kolomhead++, "NoUrut");
    	xlsWriteLabel($tablehead, $kolomhead++, "Nama");
    	xlsWriteLabel($tablehead, $kolomhead++, "NIK");
    	xlsWriteLabel($tablehead, $kolomhead++, "JenisKelamin");
    	xlsWriteLabel($tablehead, $kolomhead++, "TempatLahir");
    	xlsWriteLabel($tablehead, $kolomhead++, "TanggalLahir");
    	xlsWriteLabel($tablehead, $kolomhead++, "Agama");
    	xlsWriteLabel($tablehead, $kolomhead++, "Pendidikan");
    	xlsWriteLabel($tablehead, $kolomhead++, "Pekerjaan");
    	xlsWriteLabel($tablehead, $kolomhead++, "StatusKawin");
    	xlsWriteLabel($tablehead, $kolomhead++, "HubunganKeluarga");
    	xlsWriteLabel($tablehead, $kolomhead++, "WargaNegara");
    	xlsWriteLabel($tablehead, $kolomhead++, "NoPaspor");
    	xlsWriteLabel($tablehead, $kolomhead++, "NoKitasKitap");
    	xlsWriteLabel($tablehead, $kolomhead++, "NamaAyah");
    	xlsWriteLabel($tablehead, $kolomhead++, "NamaIbu");
    	xlsWriteLabel($tablehead, $kolomhead++, "Idinduk");
    	xlsWriteLabel($tablehead, $kolomhead++, "Idkk");
    	xlsWriteLabel($tablehead, $kolomhead++, "Iduser");
    	xlsWriteLabel($tablehead, $kolomhead++, "Created At");
    	xlsWriteLabel($tablehead, $kolomhead++, "Updated At");

    	foreach ($this->_06_penduduk_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->NoUrut);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->Nama);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->NIK);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->JenisKelamin);
    	    xlsWriteNumber($tablebody, $kolombody++, $data->TempatLahir);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->TanggalLahir);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->Agama);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->Pendidikan);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->Pekerjaan);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->StatusKawin);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->HubunganKeluarga);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->WargaNegara);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->NoPaspor);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->NoKitasKitap);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->NamaAyah);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->NamaIbu);
    	    xlsWriteNumber($tablebody, $kolombody++, $data->idinduk);
    	    xlsWriteNumber($tablebody, $kolombody++, $data->idkk);
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
        header("Content-Disposition: attachment;Filename=t06_penduduk.doc");

        $data = array(
            't06_penduduk_data' => $this->_06_penduduk_model->get_all(),
            'start' => 0
            );

        $this->load->view('_06_penduduk/t06_penduduk_doc',$data);
    }

}

/* End of file _06_penduduk.php */
/* Location: ./application/controllers/_06_penduduk.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-03-15 16:59:40 */
/* http://harviacode.com */
