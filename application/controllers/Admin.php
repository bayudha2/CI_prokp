<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->load->model('Pemilik_model');

        $this->load->library('form_validation');
    }

    public function index()
    {

        // $data['name'] = $this->db->get('pemilik')->result_array();
        $data['pemilik'] = $this->db->get_where('pemilik', ['n_name' => $this->session->userdata('name')])->row_array();

        $data['user'] = $this->db->get('user_role')->result_array();
        $this->load->model('Admin_model', 'admin');

        $data['role'] = $this->admin->getRole();

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('role_id', 'Role', 'required');

        if ($this->form_validation->run() == false) {

            $data['judul'] = 'List Users';
            $data['label'] = 'Tabel List Users';
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/user_footer');
        } else {
            $data = [
                'n_name' => $this->input->post('username'),
                'nama' => $this->input->post('name'),
                'role_id' => $this->input->post('role_id'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'is_active' => $this->input->post('is_active')
            ];

            $this->db->insert('pemilik', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User baru berhasil ditambahkan!</div>');
            redirect('admin');
        }
    }

    public function editUser($user_id)
    {
        $data['pemilik'] = $this->db->get_where('pemilik', ['n_name' => $this->session->userdata('name')])->row_array();
        $data['user'] = $this->db->get_where('pemilik', ['id' => $user_id])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('role_id', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'List Users';
            $data['label'] = 'Edit User';
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('admin/edituser', $data);
            $this->load->view('templates/user_footer');
        } else {
            $data = [
                'n_name' => $this->input->post('username'),
                'nama' => $this->input->post('name'),
                'role_id' => $this->input->post('role_id')
            ];

            $this->db->where('id', $user_id);
            $this->db->update('pemilik', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User baru berhasil diedit!</div>');
            redirect('admin/');
        }
    }

    public function role()
    {

        $data['pemilik'] = $this->db->get_where('pemilik', ['n_name' => $this->session->userdata('name')])->row_array();
        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {


            $data['role'] = $this->db->get('user_role')->result_array();

            $data['judul'] = 'Role';
            $data['label'] = 'Tabel Role';
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/user_footer');
        } else {

            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role baru berhasil ditambahkan!</div>');
            redirect('admin/role');
        }
    }

    public function editTable()
    {

        $data['pemilik'] = $this->db->get_where('pemilik', ['n_name' => $this->session->userdata('name')])->row_array();
        $this->load->model('Admin_model', 'admin');

        $data['tabel'] = $this->admin->getTabel();
        $data['tipe'] = $this->db->get('web_tipe')->result_array();
        $data['biro'] = $this->db->get('pemilik')->result_array();
        $this->form_validation->set_rules('nama_aps', 'Application', 'required');
        $this->form_validation->set_rules('urlnya', 'URL', 'required');


        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Edit Table';
            $data['label'] = 'Tabel Website dan Aplikasi';
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('admin/edit-table', $data);
            $this->load->view('templates/user_footer');
        } else {
            $data = [
                'pemilik_id' => $this->input->post('pemilik_id'),
                'tipe' => $this->input->post('tipe'),
                'nama_aps' => $this->input->post('nama_aps'),
                'urlnya' => $this->input->post('urlnya')
            ];

            $this->db->insert('biro_url', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Aplikasi baru berhasil ditambahkan!</div>');
            redirect('admin/edittable');
        }
    }

    public function editTabel($web_id)
    {
        $data['pemilik'] = $this->db->get_where('pemilik', ['n_name' => $this->session->userdata('name')])->row_array();
        $data['web'] = $this->db->get_where('biro_url', ['url_id' => $web_id])->row_array();
        $data['tipe'] = $this->db->get('web_tipe')->result_array();
        
        

        $this->form_validation->set_rules('nama_aps', 'Nama Aplikasi', 'required|trim');
        $this->form_validation->set_rules('urlnya', 'URL', 'required|trim');
        $this->form_validation->set_rules('tipe', 'Tipe', 'required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'List Users';
            $data['label'] = 'Edit URL';
            $this->load->view('templates/user_header', $data);
            $this->load->view('templates/user_sidebar', $data);
            $this->load->view('templates/user_topbar', $data);
            $this->load->view('admin/edittable', $data);
            $this->load->view('templates/user_footer');
        } else {
            $data = [
                'nama_aps' => $this->input->post('nama_aps'),
                'urlnya' => $this->input->post('urlnya'),
                'tipe' => $this->input->post('tipe')
            ];

            $this->db->where('url_id', $web_id);
            $this->db->update('biro_url', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">URL berhasil diedit!</div>');
            redirect('admin/edittable');
        }
    }


    public function roleAccess($role_id)
    {

        $data['pemilik'] = $this->db->get_where('pemilik', ['n_name' => $this->session->userdata('name')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $data['judul'] = 'Akses Role';
        $data['label'] = 'Tabel List Users';
        $this->load->view('templates/user_header', $data);
        $this->load->view('templates/user_sidebar', $data);
        $this->load->view('templates/user_topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/user_footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];


        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akses diubah!</div>');
    }

    public function hapusUser($id)
    {
        $this->Pemilik_model->hapusUser($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User berhasil dihapus!</div>');
        redirect('admin');
    }

    public function hapusRole($id)
    {
        $this->Pemilik_model->hapusRole($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role berhasil dihapus!</div>');
        redirect('admin/role');
    }

    public function hapusUrl($id)
    {
        $this->Pemilik_model->hapusUrl($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">URL berhasil dihapus!</div>');
        redirect('admin/edittable');
    }
}
