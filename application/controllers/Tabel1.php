<?php

class Tabel1 extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pemilik_model');
    }

    public function index()
    {
        $data['html'] = '';
        $data['judul'] = 'Table WebApp';
        $data['tabel'] = 'WebApp';
        $data['biro_url'] = $this->Pemilik_model->getAllWebsite(2);
        foreach($data['biro_url'] as $brl => $row){
            $data['biro_url'][$brl]['nama'] = $this->Pemilik_model->get_pemilik($row['pemilik_id']);
        }
        
        $this->load->view('templates/header', $data);
        $this->load->view('tabel/index', $data );
        $this->load->view('templates/footer');
    }
}