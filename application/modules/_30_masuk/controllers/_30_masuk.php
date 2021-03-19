<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class _30_masuk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('_30_masuk_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . '_30_masuk?q=' . urlencode($q);
            $config['first_url'] = base_url() . '_30_masuk?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . '_30_masuk';
            $config['first_url'] = base_url() . '_30_masuk';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->_30_masuk_model->total_rows($q);
        $_30_masuk = $this->_30_masuk_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            '_30_masuk_data' => $_30_masuk,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        // $this->load->view('_30_masuk/t30_masuk_list', $data);
        $data['_view'] = '_30_masuk/t30_masuk_list';
        $data['_caption'] = 'Pindahan Masuk';
        $this->load->view('_00_dashboard/_00_dashboard_view', $data);
    }

    public function read($id)
    {
        $row = $this->_30_masuk_model->get_by_id($id);
        if ($row) {
            $data = array(
        		'idmasuk' => $row->idmasuk,
        		'NomorKK' => $row->NomorKK,
        		'Tanggal' => $row->Tanggal,
        		'idusers' => $row->idusers,
        		'created_at' => $row->created_at,
        		'updated_at' => $row->updated_at,
    	    );
            // $this->load->view('_30_masuk/t30_masuk_read', $data);
            $data['_view'] = '_30_masuk/t30_masuk_read';
            $data['_caption'] = 'Pindahan Masuk';
            $this->load->view('_00_dashboard/_00_dashboard_view', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('_30_masuk'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('_30_masuk/create_action'),
    	    'idmasuk' => set_value('idmasuk'),
    	    'NomorKK' => set_value('NomorKK'),
    	    'Tanggal' => set_value('Tanggal'),
    	    'idusers' => set_value('idusers'),
    	    'created_at' => set_value('created_at'),
    	    'updated_at' => set_value('updated_at'),
    	);
        // $this->load->view('_30_masuk/t30_masuk_form', $data);
        $data['_view'] = '_30_masuk/t30_masuk_form';
        $data['_caption'] = 'Pindahan Masuk';
        $this->load->view('_00_dashboard/_00_dashboard_view', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
        		'NomorKK' => $this->input->post('NomorKK',TRUE),
        		'Tanggal' => $this->input->post('Tanggal',TRUE),
        		'idusers' => $this->input->post('idusers',TRUE),
        		'created_at' => $this->input->post('created_at',TRUE),
        		'updated_at' => $this->input->post('updated_at',TRUE),
    	    );

            $this->_30_masuk_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('_30_masuk'));
        }
    }

    public function update($id)
    {
        $row = $this->_30_masuk_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('_30_masuk/update_action'),
        		'idmasuk' => set_value('idmasuk', $row->idmasuk),
        		'NomorKK' => set_value('NomorKK', $row->NomorKK),
        		'Tanggal' => set_value('Tanggal', $row->Tanggal),
        		'idusers' => set_value('idusers', $row->idusers),
        		'created_at' => set_value('created_at', $row->created_at),
        		'updated_at' => set_value('updated_at', $row->updated_at),
    	    );
            // $this->load->view('_30_masuk/t30_masuk_form', $data);
            $data['_view'] = '_30_masuk/t30_masuk_form';
            $data['_caption'] = 'Pindahan Masuk';
            $this->load->view('_00_dashboard/_00_dashboard_view', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('_30_masuk'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idmasuk', TRUE));
        } else {
            $data = array(
        		'NomorKK' => $this->input->post('NomorKK',TRUE),
        		'Tanggal' => $this->input->post('Tanggal',TRUE),
        		'idusers' => $this->input->post('idusers',TRUE),
        		'created_at' => $this->input->post('created_at',TRUE),
        		'updated_at' => $this->input->post('updated_at',TRUE),
    	    );

            $this->_30_masuk_model->update($this->input->post('idmasuk', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('_30_masuk'));
        }
    }

    public function delete($id)
    {
        $row = $this->_30_masuk_model->get_by_id($id);

        if ($row) {
            $this->_30_masuk_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('_30_masuk'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('_30_masuk'));
        }
    }

    public function _rules()
    {
    	$this->form_validation->set_rules('NomorKK', 'nomorkk', 'trim|required');
    	$this->form_validation->set_rules('Tanggal', 'tanggal', 'trim|required');
    	$this->form_validation->set_rules('idusers', 'idusers', 'trim|required');
    	$this->form_validation->set_rules('created_at', 'created at', 'trim|required');
    	$this->form_validation->set_rules('updated_at', 'updated at', 'trim|required');

    	$this->form_validation->set_rules('idmasuk', 'idmasuk', 'trim');
    	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "t30_masuk.xls";
        $judul = "t30_masuk";
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
    	xlsWriteLabel($tablehead, $kolomhead++, "NomorKK");
    	xlsWriteLabel($tablehead, $kolomhead++, "Tanggal");
    	xlsWriteLabel($tablehead, $kolomhead++, "Idusers");
    	xlsWriteLabel($tablehead, $kolomhead++, "Created At");
    	xlsWriteLabel($tablehead, $kolomhead++, "Updated At");

    	foreach ($this->_30_masuk_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
    	    xlsWriteNumber($tablebody, $kolombody++, $data->NomorKK);
    	    xlsWriteNumber($tablebody, $kolombody++, $data->Tanggal);
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
        header("Content-Disposition: attachment;Filename=t30_masuk.doc");

        $data = array(
            't30_masuk_data' => $this->_30_masuk_model->get_all(),
            'start' => 0
        );

        $this->load->view('_30_masuk/t30_masuk_doc',$data);
    }

}

/* End of file _30_masuk.php */
/* Location: ./application/controllers/_30_masuk.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-03-19 01:03:29 */
/* http://harviacode.com */
