<?php

class Pemilik_model extends CI_model
{
    public function getAllPemilik()
    {
        return $this->db->get('pemilik')->result_array();
    }

    public function get_detail_by_id($id)
    {
        $this->db->where('id', $id);
        $this->db->limit(1);
        $query = $this->db->get('pemilik');
        return $query->result_array()[0];
    }

    public function get_pemilik_count()
    {
        return $this->db->get('pemilik')->num_rows();
    }
    public function get_all_website_app($id, $type)
    {
        $this->db->where('pemilik_id', $id);
        $this->db->where('tipe', $type);
        $query = $this->db->get('biro_url');
        return $query->result_array();
    }
    public function get_count($type)
    {
        $this->db->where('tipe', $type);
        return $this->db->get('biro_url')->num_rows();
    }

    public function get_website($id, $type)
    {
        $this->db->where('pemilik_id', $id);
        $this->db->where('tipe', $type);
        $query = $this->db->get('biro_url')->num_rows();
        return $query;
    }

    public function getAllWebsite($type)
    {
        $this->db->where('tipe', $type);
        return $this->db->get('biro_url')->result_array();
    }

    public function get_pemilik($id)
    {
        // $this->db->select('nama');
        $this->db->where('id', $id);
        $this->db->limit(1);
        // $this->db->where('nama', $nama);
        $query = $this->db->get('pemilik')->result_array()[0]['nama'];
        return $query;
    }

    public function hapusMenu($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user_menu');
    }
    
    public function hapusSubMenu($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user_sub_menu');
    }
    
    public function hapusUser($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pemilik');
    }
    
    public function hapusRole($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user_role');
	}
    
    public function hapusUrl($id)
	{
		$this->db->where('url_id', $id);
		$this->db->delete('biro_url');
	}
    // public function sementara()
    // {
    //     $data = array("Sekretariat Daerah", "Asisten Pemerintahan, Hukum dan Kesejahteraan Sosial", "Biro Pemerintahan dan Kerjasama", "Biro Hukum dan Hak Asasi Manusia", "Biro Pelayanan dan Pengembangan Sosial", "Asisten Perekonomian dan Pembangunan", "Biro Badan Usaha Milik Daerah dan Investasi", "Biro Perkenomoian", "Bir Pengadaan Barang/Jasa", "Asisten Administrasi", "Biro Organisasi", "Biro Hubungan Masyarakat dan Protokol", "Biro Umum", "Sekretaris Dewan Perwakilan Rakyat Daerah", "Inspektorat", "Dinas Pendidikan", "Dinas Kesehatan", "Dinas Bina Marga dan Penataan Ruang", "Dinas Sumber Daya Air", "Dinas Perumahan dan Permukiman", "Satuan Polisi Pamong Praja", "Dinas Sosial", "Dinas Pemberdayaan Perempuan, Perlindungan Anak, dan Keluarga Berencana", "Dinas Lingkungan Hidup", "Dinas Pemberdayaan Masyarakat dan Desa", "Dinas Perhubungan", "Dinas Komunikasi dan Informatika", "Dinas Koperasi dan Usaha Kecil", "Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu", "Dinas Pemuda dan Olahraga", "Dinas Perpustakaan dan Kearsipan Daerah", "Dinas Tenaga Kerja dan Transmigrasi", "Dinas Ketahanan Pangan dan Peternakan", "Dinas Pariwisata dan Kebudayaan", "Dinas Kelautan dan Perikanan", "Dinas Tanaman Pangan dan Holtikultura", "Dinas Perkebunan", "Dinas Kehutanan", "Dinas Energi dan Sumber Daya Mineral", "Dinas Perindustrian dan Perdagangan", "Dinas Kependudukan dan Pencatatan Sipil", "Badan Perencanaan Pembangunan Daerah", "Badan Kepegawaian Daerah", "Badan Pengembangan Sumber Daya Manusia", "Badan Penelitian dan Pengembangan Daerah", "Badan Pengelolaan Keuangan dan Aset Daerah", "Badan Pendapatan Daerah", "Badan Penghubung", "Badan Kesatuan Bangsa dan Politik", "Badan Penanggulangan Bencana Daerah");
    //     // // print_r($data);
    //     // print_r($data);
    //     foreach($data as $row){
    //         echo $row."<br>";
    //         $this->db->insert('pemilik', array('nama'=>$row));
    //     }
    // }
}
