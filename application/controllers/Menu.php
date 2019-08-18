<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
	{
		parent::__construct();
        $this->load->model('Pemilik_model');
        is_logged_in();
        

        
    }
    
    public function index()
    {

        $data['pemilik'] = $this->db->get_where('pemilik', ['n_name' => $this->session->userdata('name')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {

            $data['judul'] = 'Manajemen Menu';
            $data['label'] = 'Tabel Manajemen Menu';
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/user_footer');
        } else {

            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu baru berhasil ditambahkan!</div>');
            redirect('menu');
        }
    }

    public function submenu()
    {
        $data['pemilik'] = $this->db->get_where('pemilik', ['n_name' => $this->session->userdata('name')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Judul', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');


        if ($this->form_validation->run() == false) {

            $data['judul'] = 'Manajemen Sub Menu';
            $data['label'] = 'Tabel Manajemen Sub Menu';
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/user_footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];

            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sub Menu baru berhasil ditambahkan!</div>');
            redirect('menu/submenu');
        }
    }

    public function hapusMenu($id)
	{
        $this->Pemilik_model->hapusMenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu baru berhasil dihapus!</div>');
		redirect('menu');
    }
    
    public function hapusSubMenu($id)
	{
        $this->Pemilik_model->hapusSubMenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">SubMenu baru berhasil dihapus!</div>');
		redirect('menu/submenu');
	}
}
