<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
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

    public function getRole()
    {
        $query = "SELECT `pemilik`.*, `user_role`.`role`
                  FROM `pemilik` 
                  JOIN `user_role` ON `pemilik`.`role_id` = `user_role`.`id`
        ";

        return $this->db->query($query)->result_array();
    }

    public function getName()
    {
        $query = "SELECT `biro_url`.*,`pemilik`.`nama`
                  FROM `biro_url` 
                  JOIN `pemilik` ON `biro_url`.`pemilik_id` = `pemilik`.`id`
        ";

        return $this->db->query($query)->row_array();
    }
}
