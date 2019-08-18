<?php

class Total extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pemilik_model');
    }
    public function index()
    {

        $data['total']['pemilik'] = $this->Pemilik_model->get_pemilik_count();
        $data['total']['website'] = $this->Pemilik_model->get_count(1);
        $data['total']['app'] = $this->Pemilik_model->get_count(2);
        $data['html'] ='style="zoom:160%;"';
        $data['judul'] ='Total Page';
        $this->load->view('templates/header', $data);
        $this->load->view('total/index');
        $this->load->view('templates/footer');
        

    }
}