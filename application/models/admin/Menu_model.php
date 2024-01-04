<?php class Menu_model extends CI_Model{
    public function get_options(){
        return $this->db->get('machine_option')->result();
    }
}
