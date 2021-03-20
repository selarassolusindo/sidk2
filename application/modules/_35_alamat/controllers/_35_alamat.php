<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class _35_alamat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('_35_alamat_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . '_35_alamat?q=' . urlencode($q);
            $config['first_url'] = base_url() . '_35_alamat?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . '_35_alamat';
            $config['first_url'] = base_url() . '_35_alamat';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->_35_alamat_model->total_rows($q);
        $_35_alamat = $this->_35_alamat_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            '_35_alamat_data' => $_35_alamat,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        // $this->load->view('_35_alamat/t35_alamat_list', $data);
        $data['_view'] = '_35_alamat/t35_alamat_list';
        $data['_caption'] = 'Alamat';
        $this->load->view('_00_dashboard/_00_dashboard_view', $data);
    }

    public function read($id)
    {
        $row = $this->_35_alamat_model->get_by_id($id);
        if ($row) {
            $data = array(
                'idalamat' => $row->idalamat,
                'Alamat' => $row->Alamat,
    	    );
            // $this->load->view('_35_alamat/t35_alamat_read', $data);
            $data['_view'] = '_35_alamat/t35_alamat_read';
            $data['_caption'] = 'Alamat';
            $this->load->view('_00_dashboard/_00_dashboard_view', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('_35_alamat'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('_35_alamat/create_action'),
    	    'idalamat' => set_value('idalamat'),
    	    'Alamat' => set_value('Alamat'),
    	);
        // $this->load->view('_35_alamat/t35_alamat_form', $data);
        $data['_view'] = '_35_alamat/t35_alamat_form';
        $data['_caption'] = 'Alamat';
        $this->load->view('_00_dashboard/_00_dashboard_view', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'Alamat' => $this->input->post('Alamat',TRUE),
            );

            $this->_35_alamat_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('_35_alamat'));
        }
    }

    public function update($id)
    {
        $row = $this->_35_alamat_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('_35_alamat/update_action'),
        		'idalamat' => set_value('idalamat', $row->idalamat),
        		'Alamat' => set_value('Alamat', $row->Alamat),
    	    );
            // $this->load->view('_35_alamat/t35_alamat_form', $data);
            $data['_view'] = '_35_alamat/t35_alamat_form';
            $data['_caption'] = 'Alamat';
            $this->load->view('_00_dashboard/_00_dashboard_view', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('_35_alamat'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idalamat', TRUE));
        } else {
            $data = array(
                'Alamat' => $this->input->post('Alamat',TRUE),
    	    );

            $this->_35_alamat_model->update($this->input->post('idalamat', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('_35_alamat'));
        }
    }

    public function delete($id)
    {
        $row = $this->_35_alamat_model->get_by_id($id);

        if ($row) {
            $this->_35_alamat_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('_35_alamat'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('_35_alamat'));
        }
    }

    public function _rules()
    {
    	$this->form_validation->set_rules('Alamat', 'alamat', 'trim|required');

    	$this->form_validation->set_rules('idalamat', 'idalamat', 'trim');
    	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "t35_alamat.xls";
        $judul = "t35_alamat";
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
    	xlsWriteLabel($tablehead, $kolomhead++, "Alamat");

    	foreach ($this->_35_alamat_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
    	    xlsWriteLabel($tablebody, $kolombody++, $data->Alamat);

    	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=t35_alamat.doc");

        $data = array(
            't35_alamat_data' => $this->_35_alamat_model->get_all(),
            'start' => 0
        );

        $this->load->view('_35_alamat/t35_alamat_doc',$data);
    }

    public function getData()
    {
        $result = $this->_35_alamat_model->getData($this->input->get("search"));
        if ($result) {
            $list = array();
            $key = 0;
            foreach($result as $row) {
                $list[$key]['id'] = $row->idalamat;
                $list[$key]['text'] = $row->Alamat;
                $key++;
            }
            echo json_encode($list);
        } else {
            echo "Tidak ada data";
        }
    }

}

/* End of file _35_alamat.php */
/* Location: ./application/controllers/_35_alamat.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2021-03-20 08:26:20 */
/* http://harviacode.com */
