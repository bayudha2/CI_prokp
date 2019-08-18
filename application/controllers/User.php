<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pemilik_model');
        is_logged_in();
    }


    public function index()
    {

        $data['biro'] = $this->db->get('biro_url')->result_array();
        $data['pemilik'] = $this->db->get_where('pemilik', ['n_name' => $this->session->userdata('name')])->row_array();
        $this->load->model('User_model', 'user');

        $data['tabel'] = $this->user->getTabel();

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Tabel';
            $data['label'] = 'Tabel Website dan Aplikasi';
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('user/index', $data);
            $this->load->view('templates/user_footer');
        } else {

        }
    }

    public function edit()
    {
        $data['biro'] = $this->db->get('biro_url')->result_array();
        $data['pemilik'] = $this->db->get_where('pemilik', ['n_name' => $this->session->userdata('name')])->row_array();
        // $data['biro_url'] = $this->db->get_where('biro_url', ['url_id'=> $data['pemilik''id']])->result_array();
        $this->load->model('User_model', 'user');

        $data['tabel'] = $this->user->getTabel();

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Edit Tabel';
            $data['label'] = 'Tabel Website dan Aplikasi';
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/user_footer');
        } else {

        }
    }
    
    public function hapus($id)
    {
        $this->Pemilik_model->hapusMenu($id);
        redirect('menu');
    }
}
