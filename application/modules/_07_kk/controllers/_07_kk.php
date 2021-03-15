<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class _07_kk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('_07_kk_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . '_07_kk/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . '_07_kk/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . '_07_kk/index.html';
            $config['first_url'] = base_url() . '_07_kk/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->_07_kk_model->total_rows($q);
        $_07_kk = $this->_07_kk_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            '_07_kk_data' => $_07_kk,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        // $this->load->view('_07_kk/t07_kk_list', $data);
        $data['_view'] = '_07_kk/t07_kk_list';
        $data['_caption'] = 'Kartu Keluarga';
        $this->load->view('_00_dashboard/_00_dashboard_view', $data);
    }

    public function read($id)
    {
        $row = $this->_07_kk_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idkk' => $row->idkk,
		'Nomor' => $row->Nomor,
		'Nama' => $row->Nama,
		'Alamat' => $row->Alamat,
		'RT' => $row->RT,
		'RW' => $row->RW,
		'Kelurahan' => $row->Kelurahan,
		'Kecamatan' => $row->Kecamatan,
		'Kabupaten' => $row->Kabupaten,
		'Provinsi' => $row->Provinsi,
		'KodePos' => $row->KodePos,
		'Tanggal' => $row->Tanggal,
		'idusers' => $row->idusers,
		'created_at' => $row->created_at,
		'updated_at' => $row->updated_at,
	    );
            // $this->load->view('_07_kk/t07_kk_read', $data);
            $data['_view'] = '_07_kk/t07_kk_read';
            $data['_caption'] = 'Kartu Keluarga';
            $this->load->view('_00_dashboard/_00_dashboard_view', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('_07_kk'));
        }
    }

    public function create()
    {
        $this->load->model('_06_penduduk/_06_penduduk_model');
        $penduduk = $this->_06_penduduk_model->get_all();
        $data = array(
            'button' => 'Create',
            'action' => site_url('_07_kk/create_action'),
    	    'idkk' => set_value('idkk'),
    	    'Nomor' => set_value('Nomor'),
    	    'Nama' => set_value('Nama'),
    	    'Alamat' => set_value('Alamat'),
    	    'RT' => set_value('RT'),
    	    'RW' => set_value('RW'),
    	    'Kelurahan' => set_value('Kelurahan'),
    	    'Kecamatan' => set_value('Kecamatan'),
    	    'Kabupaten' => set_value('Kabupaten'),
    	    'Provinsi' => set_value('Provinsi'),
    	    'KodePos' => set_value('KodePos'),
    	    'Tanggal' => set_value('Tanggal'),
    	    // 'idusers' => set_value('idusers'),
    	    // 'created_at' => set_value('created_at'),
    	    // 'updated_at' => set_value('updated_at'),
            'pendudukData' => $penduduk,
            );
        // $this->load->view('_07_kk/t07_kk_form', $data);
        $data['_view'] = '_07_kk/t07_kk_form';
        $data['_caption'] = 'Kartu Keluarga';
        $this->load->view('_00_dashboard/_00_dashboard_view', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'Nomor' => $this->input->post('Nomor',TRUE),
		'Nama' => $this->input->post('Nama',TRUE),
		'Alamat' => $this->input->post('Alamat',TRUE),
		'RT' => $this->input->post('RT',TRUE),
		'RW' => $this->input->post('RW',TRUE),
		'Kelurahan' => $this->input->post('Kelurahan',TRUE),
		'Kecamatan' => $this->input->post('Kecamatan',TRUE),
		'Kabupaten' => $this->input->post('Kabupaten',TRUE),
		'Provinsi' => $this->input->post('Provinsi',TRUE),
		'KodePos' => $this->input->post('KodePos',TRUE),
		'Tanggal' => $this->input->post('Tanggal',TRUE),
        'idusers' => $this->session->userdata('user_id'),
		// 'created_at' => $this->input->post('created_at',TRUE),
		// 'updated_at' => $this->input->post('updated_at',TRUE),
	    );

            $this->_07_kk_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('_07_kk'));
        }
    }

    public function update($id)
    {
        $row = $this->_07_kk_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('_07_kk/update_action'),
		'idkk' => set_value('idkk', $row->idkk),
		'Nomor' => set_value('Nomor', $row->Nomor),
		'Nama' => set_value('Nama', $row->Nama),
		'Alamat' => set_value('Alamat', $row->Alamat),
		'RT' => set_value('RT', $row->RT),
		'RW' => set_value('RW', $row->RW),
		'Kelurahan' => set_value('Kelurahan', $row->Kelurahan),
		'Kecamatan' => set_value('Kecamatan', $row->Kecamatan),
		'Kabupaten' => set_value('Kabupaten', $row->Kabupaten),
		'Provinsi' => set_value('Provinsi', $row->Provinsi),
		'KodePos' => set_value('KodePos', $row->KodePos),
		'Tanggal' => set_value('Tanggal', $row->Tanggal),
		// 'idusers' => set_value('idusers', $row->idusers),
		// 'created_at' => set_value('created_at', $row->created_at),
		// 'updated_at' => set_value('updated_at', $row->updated_at),
	    );
            // $this->load->view('_07_kk/t07_kk_form', $data);
            $data['_view'] = '_07_kk/t07_kk_form';
            $data['_caption'] = 'Kartu Keluarga';
            $this->load->view('_00_dashboard/_00_dashboard_view', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('_07_kk'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idkk', TRUE));
        } else {
            $data = array(
		'Nomor' => $this->input->post('Nomor',TRUE),
		'Nama' => $this->input->post('Nama',TRUE),
		'Alamat' => $this->input->post('Alamat',TRUE),
		'RT' => $this->input->post('RT',TRUE),
		'RW' => $this->input->post('RW',TRUE),
		'Kelurahan' => $this->input->post('Kelurahan',TRUE),
		'Kecamatan' => $this->input->post('Kecamatan',TRUE),
		'Kabupaten' => $this->input->post('Kabupaten',TRUE),
		'Provinsi' => $this->input->post('Provinsi',TRUE),
		'KodePos' => $this->input->post('KodePos',TRUE),
		'Tanggal' => $this->input->post('Tanggal',TRUE),
		'idusers' => $this->session->userdata('user_id'),
		// 'created_at' => $this->input->post('created_at',TRUE),
		// 'updated_at' => $this->input->post('updated_at',TRUE),
	    );

            $this->_07_kk_model->update($this->input->post('idkk', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('_07_kk'));
        }
    }

    public function delete($id)
    {
        $row = $this->_07_kk_model->get_by_id($id);

        if ($row) {
            $this->_07_kk_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('_07_kk'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('_07_kk'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('Nomor', 'nomor', 'trim|required');
	$this->form_validation->set_rules('Nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('Alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('RT', 'rt', 'trim|required');
	$this->form_validation->set_rules('RW', 'rw', 'trim|required');
	$this->form_validation->set_rules('Kelurahan', 'kelurahan', 'trim|required');
	$this->form_validation->set_rules('Kecamatan', 'kecamatan', 'trim|required');
	$this->form_validation->set_rules('Kabupaten', 'kabupaten', 'trim|required');
	$this->form_validation->set_rules('Provinsi', 'provinsi', 'trim|required');
	$this->form_validation->set_rules('KodePos', 'kodepos', 'trim|required');
	$this->form_validation->set_rules('Tanggal', 'tanggal', 'trim|required');
	$this->form_validation->set_rules('idusers', 'idusers', 'trim|required');
	$this->form_validation->set_rules('created_at', 'created at', 'trim|required');
	$this->form_validation->set_rules('updated_at', 'updated at', 'trim|required');

	$this->form_validation->set_rules('idkk', 'idkk', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "t07_kk.xls";
        $judul = "t07_kk";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nomor");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama");
	xlsWriteLabel($tablehead, $kolomhead++, "Alamat");
	xlsWriteLabel($tablehead, $kolomhead++, "RT");
	xlsWriteLabel($tablehead, $kolomhead++, "RW");
	xlsWriteLabel($tablehead, $kolomhead++, "Kelurahan");
	xlsWriteLabel($tablehead, $kolomhead++, "Kecamatan");
	xlsWriteLabel($tablehead, $kolomhead++, "Kabupaten");
	xlsWriteLabel($tablehead, $kolomhead++, "Provinsi");
	xlsWriteLabel($tablehead, $kolomhead++, "KodePos");
	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal");
	xlsWriteLabel($tablehead, $kolomhead++, "Idusers");
	xlsWriteLabel($tablehead, $kolomhead++, "Created At");
	xlsWriteLabel($tablehead, $kolomhead++, "Updated At");

	foreach ($this->_07_kk_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Nomor);
	    xlsWriteNumber($tablebody, $kolombody++, $data->Nama);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Alamat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->RT);
	    xlsWriteLabel($tablebody, $kolombody++, $data->RW);
	    xlsWriteNumber($tablebody, $kolombody++, $data->Kelurahan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->Kecamatan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->Kabupaten);
	    xlsWriteNumber($tablebody, $kolombody++, $data->Provinsi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->KodePos);
	    xlsWriteLabel($tablebody, $kolombody++, $data->Tanggal);
	    xlsWriteLabel($tablebody, $kolombody++, $data->idusers);
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
        header("Content-Disposition: attachment;Filename=t07_kk.doc");

        $data = array(
            't07_kk_data' => $this->_07_kk_model->get_all(),
            'start' => 0
        );

        $this->load->view('_07_kk/t07_kk_doc',$data);
    }

}

/* End of file _07_kk.php */
/* Location: ./application/controllers/_07_kk.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-03-15 23:19:56 */
/* http://harviacode.com */