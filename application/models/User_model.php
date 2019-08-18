<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function getTabel()
    {
        $query = "SELECT `biro_url`.*, `web_tipe`.`tipe_id`, `pemilik`.`nama`
                  FROM `biro_url` 
                  JOIN `web_tipe` ON `biro_url`.`tipe` = `web_tipe`.`id`
                  JOIN `pemilik` ON `biro_url`.`pemilik_id` = `pemilik`.`id`
        ";

        return $this->db->query($query)->result_array();
    }
}
