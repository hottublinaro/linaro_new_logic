<?php class Rest_api_model extends CI_Model
{
    public function get_setting_mode()
    {
        return $this->db->get('setting_mode')->result();
    }
    public function get_ph()
    {
        return $this->db->select('*')->from('ph')->get()->result();
    }
    public function get_orp()
    {
        return $this->db->select('*')->from('orp')->get()->result();
    }
    public function get_apf()
    {
        return $this->db->select('*')->from('apf')->get()->result();
    }
    public function get_chlorine()
    {
        return $this->db->select('*')->from('chlorine')->get()->result();
    }
    public function get_filtration_time()
    {
        return $this->db->select('*')->from('filtration_time')
            ->get()->result();
    }
    public function get_data_setting()
    {
        return $this->db->get('setting')->result();
    }
    public function get_besgo()
    {
        return $this->db->get('backwash')->result();
    }
    public function get_besgo_setting()
    {
        return $this->db->select('backwash_mode,backwash_time')->from('backwash')->get()->result();
    }
    public function get_substance()
    {
        return $this->db->get('substance')->result();
    }
    public function get_filtration_data_time()
    {
        return $this->db->get('filtration_time')->result();
    }
    public function get_machine_option()
    {
        return $this->db->select('*')->from('machine_option')->get()->result();
    }
    public function get_heatpump()
    {
        return $this->db->select('*')->from('heatpump')->get()->result();
    }
    public function get_setting_night_time()
    {
        return $this->db->select('*')->from('night_time')->where('night_time_id', 1)->get()->result();
    }
}
