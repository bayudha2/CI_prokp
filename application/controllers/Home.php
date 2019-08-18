<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        // $this->load->model('Home_model');
    }

    public function index()
    {

        $data['html'] = 'style="background-image:url(&quot;assets/img/ban.jpg&quot;);background-position:top;background-size:cover;"';
        $data['judul'] = 'Home Page';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }

    public function login()
    {

        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->session->userdata('role_id')) {
            redirect('user');
        }


        if ($this->form_validation->run() == false) {

            $data['html'] = '';
            $data['judul'] = 'Login Page';
            $this->load->view('templates/header', $data);
            $this->load->view('home/login');
            $this->load->view('templates/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $name = $this->input->post('name');
        $password = $this->input->post('password');
        

        $pemilik = $this->db->get_where('pemilik', ['n_name' => $name])->row_array();
        $biro = $this->db->get_where('biro_url', ['nickname' => $name])->result_array();

        if ($pemilik) {
            if ($pemilik['is_active'] == 1) {

                if (password_verify($password, $pemilik['password'])) {

                    $data = [
                        'name' => $pemilik['n_name'],
                        'role_id' => $pemilik['role_id'],
                        'nickname' => $biro['nickname']
                    ];
                    $this->session->set_userdata($data);
                    if ($pemilik['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password yang anda masukan salah!</div>');
                    redirect('home/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun anda belum Aktif!</div>');
                redirect('home/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Tidak Terdaftar!</div>');
            redirect('home/login');
        }
    }

    public function registration()
    {
        // if ($this->session->userdata('role_id')) {
        //     redirect('user');
        // }

        if ($this->session->userdata('role_id') != 1) {
            redirect('user');
        }
        $this->form_validation->set_rules('name', 'Name', 'required|trim|is_unique[pemilik.n_name]');
        $this->form_validation->set_rules('fname', 'Fname', 'required|trim|is_unique[pemilik.nama]', [
            'required' => 'harus diisi',
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]|matches[password2]', [
            'matches' => 'Password tidak Sama',
            'min_length' => 'Password terlalu pendek'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        // $this

        if ($this->form_validation->run() == false) {

            $data['html'] = '';
            $data['judul'] = 'Registration Page';
            $this->load->view('templates/header', $data);
            $this->load->view('home/registration');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'n_name' => htmlspecialchars($this->input->post('name', TRUE)),
                'nama' => htmlspecialchars($this->input->post('fname', TRUE)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 1,
                'is_active' => 1
            ];
            $this->db->insert('pemilik', $data);
            
            $data = ['nickname' => htmlspecialchars($this->input->post('name', TRUE)),];
            $this->db->insert('biro_url', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Terdaftar</div>');
            redirect('home/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('n_name');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Keluar!</div>');
        redirect('home/login');
    }

    public function blocked()
    {
        $this->load->view('home/blocked');
    }
}
