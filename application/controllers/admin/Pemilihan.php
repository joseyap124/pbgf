<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pemilihan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pemilihan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["pemilihan"] = $this->pemilihan_model->getAll();
        $this->load->view("admin/pemilihan/list", $data);
    }

    public function add()
    {
        $pemilihan = $this->pemilihan_model;
        $validation = $this->form_validation;
        $validation->set_rules($pemilihan->rules());

        if ($validation->run()) {
            $pemilihan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/pemilihan/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/pemilihan');
       
        $pemilihan = $this->pemilihan_model;
        $validation = $this->form_validation;
        $validation->set_rules($pemilihan->rules());

        if ($validation->run()) {
            $pemilihan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["pemilihan"] = $pemilihan->getById($id);
        if (!$data["pemilihan"]) show_404();
        
        $this->load->view("admin/pemilihan/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->pemilihan_model->delete($id)) {
            redirect(site_url('admin/pemilihan'));
        }
    }
}