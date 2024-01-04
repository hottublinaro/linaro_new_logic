<?php class Analysing_model extends CI_Model
{
    public function get_setting()
    {
        return $this->db->select('*')->from('setting')->get()->result();
    }
}
