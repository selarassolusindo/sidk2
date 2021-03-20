<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class _31_inap extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('_31_inap_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . '_31_inap?q=' . urlencode($q);
            $config['first_url'] = base_url() . '_31_inap?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . '_31_inap';
            $config['first_url'] = base_url() . '_31_inap';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->_31_inap_model->total_rows($q);
        $_31_inap = $this->_31_inap_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            '_31_inap_data' => $_31_inap,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        // $this->load->view('_31_inap/t31_inap_list', $data);
        $data['_view'] = '_31_inap/t31_inap_list';
        $data['_caption'] = 'TAMU MENGINAP';
        $this->load->view('_00_dashboard/_00_dashboard_view', $data);
    }

    public function read($id)
    {
        $row = $this->_31_inap_model->get_by_id($id);
        if ($row) {
            $data = array(
        		'idinap' => $row->idinap,
        		'Tamu' => $row->Tamu,
        		'Alamat' => $row->Alamat,
        		'MulaiTanggal' => $row->MulaiTanggal,
        		'SampaiTanggal' => $row->SampaiTanggal,
        		'Keperluan' => $row->Keperluan,
        		// 'idusers' => $row->idusers,
        		// 'created_at' => $row->created_at,
        		// 'updated_at' => $row->updated_at,
                'AlamatNama' => $row->AlamatNama,
                'TamuNama' => $row->TamuNama,
    	    );
            // $this->load->view('_31_inap/t31_inap_read', $data);
            $data['_view'] = '_31_inap/t31_inap_read';
            $data['_caption'] = 'TAMU MENGINAP';
            $this->load->view('_00_dashboard/_00_dashboard_view', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('_31_inap'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('_31_inap/create_action'),
    	    'idinap' => set_value('idinap'),
    	    'Tamu' => set_value('Tamu'),
    	    'Alamat' => set_value('Alamat'),
    	    'MulaiTanggal' => set_value('MulaiTanggal'),
    	    'SampaiTanggal' => set_value('SampaiTanggal'),
    	    'Keperluan' => set_value('Keperluan'),
    	    // 'idusers' => set_value('idusers'),
    	    // 'created_at' => set_value('created_at'),
    	    // 'updated_at' => set_value('updated_at'),
    	);
        // $this->load->view('_31_inap/t31_inap_form', $data);
        $data['_view'] = '_31_inap/t31_inap_form';
        $data['_caption'] = 'TAMU MENGINAP';
        $this->load->view('_00_dashboard/_00_dashboard_view', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
        		'Tamu' => $this->input->post('Tamu',TRUE),
        		'Alamat' => $this->input->post('Alamat',TRUE),
        		// 'MulaiTanggal' => $this->input->post('MulaiTanggal',TRUE),
                'MulaiTanggal' => date('Y-m-d', strtotime(str_replace('/', '-', $this->input->post('MulaiTanggal',TRUE)))),
        		// 'SampaiTanggal' => $this->input->post('SampaiTanggal',TRUE),
                'SampaiTanggal' => date('Y-m-d', strtotime(str_replace('/', '-', $this->input->post('SampaiTanggal',TRUE)))),
        		'Keperluan' => $this->input->post('Keperluan',TRUE),
        		'idusers' => $this->session->userdata('user_id'),
        		// 'created_at' => $this->input->post('created_at',TRUE),
        		// 'updated_at' => $this->input->post('updated_at',TRUE),
    	    );

            $this->_31_inap_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('_31_inap'));
        }
    }

    public function update($id)
    {
        $row = $this->_31_inap_model->get_by_id($id);

        if ($row) {

            $this->load->model('_08_tamu/_08_tamu_model');
            $this->load->model('_35_alamat/_35_alamat_model');

            $data = array(
                'button' => 'Update',
                'action' => site_url('_31_inap/update_action'),
        		'idinap' => set_value('idinap', $row->idinap),
        		'Tamu' => set_value('Tamu', $row->Tamu),
        		'Alamat' => set_value('Alamat', $row->Alamat),
        		// 'MulaiTanggal' => set_value('MulaiTanggal', $row->MulaiTanggal),
        		// 'SampaiTanggal' => set_value('SampaiTanggal', $row->SampaiTanggal),
                'MulaiTanggal' => set_value('MulaiTanggal', date_format(date_create($row->MulaiTanggal), 'd-m-Y')),
                'SampaiTanggal' => set_value('SampaiTanggal', date_format(date_create($row->SampaiTanggal), 'd-m-Y')),
        		'Keperluan' => set_value('Keperluan', $row->Keperluan),
        		// 'idusers' => set_value('idusers', $row->idusers),
        		// 'created_at' => set_value('created_at', $row->created_at),
        		// 'updated_at' => set_value('updated_at', $row->updated_at),
                'tamuNama' => $this->_08_tamu_model->get_by_id($row->Tamu)->Nama,
                'alamatNama' => $this->_08_tamu_model->get_by_id($row->Alamat)->Alamat,
    	    );
            // $this->load->view('_31_inap/t31_inap_form', $data);
            $data['_view'] = '_31_inap/t31_inap_form';
            $data['_caption'] = 'TAMU MENGINAP';
            $this->load->view('_00_dashboard/_00_dashboard_view', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('_31_inap'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idinap', TRUE));
        } else {
            $data = array(
        		'Tamu' => $this->input->post('Tamu',TRUE),
        		'Alamat' => $this->input->post('Alamat',TRUE),
        		// 'MulaiTanggal' => $this->input->post('MulaiTanggal',TRUE),
                'MulaiTanggal' => date('Y-m-d', strtotime(str_replace('/', '-', $this->input->post('MulaiTanggal',TRUE)))),
        		// 'SampaiTanggal' => $this->input->post('SampaiTanggal',TRUE),
                'SampaiTanggal' => date('Y-m-d', strtotime(str_replace('/', '-', $this->input->post('SampaiTanggal',TRUE)))),
        		'Keperluan' => $this->input->post('Keperluan',TRUE),
        		'idusers' => $this->session->userdata('user_id'),
        		// 'created_at' => $this->input->post('created_at',TRUE),
        		// 'updated_at' => $this->input->post('updated_at',TRUE),
    	    );

            $this->_31_inap_model->update($this->input->post('idinap', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('_31_inap'));
        }
    }

    public function delete($id)
    {
        $row = $this->_31_inap_model->get_by_id($id);

        if ($row) {
            $this->_31_inap_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('_31_inap'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('_31_inap'));
        }
    }

    public function _rules()
    {
    	$this->form_validation->set_rules('Tamu', 'tamu', 'trim|required');
    	$this->form_validation->set_rules('Alamat', 'alamat', 'trim|required');
    	$this->form_validation->set_rules('MulaiTanggal', 'mulaitanggal', 'trim|required');
    	$this->form_validation->set_rules('SampaiTanggal', 'sampaitanggal', 'trim|required');
    	$this->form_validation->set_rules('Keperluan', 'keperluan', 'trim|required');
    	// $this->form_validation->set_rules('idusers', 'idusers', 'trim|required');
    	// $this->form_validation->set_rules('created_at', 'created at', 'trim|required');
    	// $this->form_validation->set_rules('updated_at', 'updated at', 'trim|required');

    	$this->form_validation->set_rules('idinap', 'idinap', 'trim');
    	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "t31_inap.xls";
        $judul = "t31_inap";
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
    	xlsWriteLabel($tablehead, $kolomhead++, "Tamu");
    	xlsWriteLabel($tablehead, $kolomhead++, "Alamat");
    	xlsWriteLabel($tablehead, $kolomhead++, "MulaiTanggal");
    	xlsWriteLabel($tablehead, $kolomhead++, "SampaiTanggal");
    	xlsWriteLabel($tablehead, $kolomhead++, "Keperluan");
    	xlsWriteLabel($tablehead, $kolomhead++, "Idusers");
    	xlsWriteLabel($tablehead, $kolomhead++, "Created At");
    	xlsWriteLabel($tablehead, $kolomhead++, "Updated At");

    	foreach ($this->_31_inap_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
    	    xlsWriteNumber($tablebody, $kolombody++, $data->Tamu);
    	    xlsWriteNumber($tablebody, $kolombody++, $data->Alamat);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->MulaiTanggal);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->SampaiTanggal);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->Keperluan);
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
        header("Content-Disposition: attachment;Filename=t31_inap.doc");

        $data = array(
            't31_inap_data' => $this->_31_inap_model->get_all(),
            'start' => 0
        );

        $this->load->view('_31_inap/t31_inap_doc',$data);
    }

    public function laporan()
    {
        $dataTamu = $this->_31_inap_model->getLaporanData();
        $data = array(
            'dataTamu' => $dataTamu,
        );
        $data['_view'] = '_31_inap/t31_inap_laporan';
        $data['_caption'] = 'Laporan Data Tamu';
        $this->load->view('_00_dashboard/_00_dashboard_view', $data);
    }

}

/* End of file _31_inap.php */
/* Location: ./application/controllers/_31_inap.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-03-20 22:59:48 */
/* http://harviacode.com */
