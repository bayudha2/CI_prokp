<?php

class Pemilik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pemilik_model');
    }
    public function index()
    {

        $data['html'] = '';
        $data['judul'] = 'Table Page';
        $data['tabel'] = 'Pemilik';

        $data['pemilik'] = $this->Pemilik_model->getAllPemilik();
        foreach ($data['pemilik'] as $key => $row) {
            $data['pemilik'][$key]['jmlh_web'] = $this->Pemilik_model->get_website($row['id'], 1);
            $data['pemilik'][$key]['jmlh_app'] = $this->Pemilik_model->get_website($row['id'], 2);
        }
        // print_r($data['pemilik']);
        $this->load->view('templates/header', $data);
        $this->load->view('pemilik/index', $data);
        $this->load->view('templates/footer');
    }

    public function lihat_detail($id)
    {

        $data['html'] = '';
        $data['judul'] = 'Detail Page';

        $data['pemilik'] = $this->Pemilik_model->get_detail_by_id($id);
        $data['website'] = $this->Pemilik_model->get_all_website_app($id, 1);
        $data['app'] = $this->Pemilik_model->get_all_website_app($id, 2);
        $this->load->view('templates/header', $data);
        $this->load->view('pemilik/detail', $data);
        $this->load->view('templates/footer1');
    }
    // public function test(Type $var = null)
    // {
    //     $this->Pemilik_model->sementara();
    // }

    
}
