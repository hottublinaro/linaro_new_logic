<?php class Clear_table_model extends CI_Model
{
    public function close_online()
    {
        $this->db->where('setting_id', 1)->update('setting', array(
            'online_status' => 0
        ));
    }
    public function set_ph_orp()
    {
        $this->db->where('substance_id', 1)->update('substance', array(
            'ph_set' => 7.3,
            'ph_lower' => 7.25,
            'ph_inj' => 1,
            'ph_freq' => 10,
            'orp_set' => 650,
            'orp_lower' => 600,
            'orp_inj' => 3,
            'orp_freq' => 10,
            'apf_inj' => 1,
            'apf_freq' => 10
        ));
    }
    public function clear_backwash()
    {
        $this->db->where('backwash_id', 1)->update('backwash', array(
            'backwash_state_1' => "",
            'backwash_start_1' => "00:00:00",
            'backwash_end_1' => "00:00:00",
            'backwash_status_1' => 0,
            'backwash_state_2' => "",
            'backwash_start_2' => "00:00:00",
            'backwash_end_2' => "00:00:00",
            'backwash_status_2' => 0,
            'backwash_state_3' => "",
            'backwash_start_3' => "00:00:00",
            'backwash_end_3' => "00:00:00",
            'backwash_status_3' => 0,
            'backwash_state_4' => "",
            'backwash_start_4' => "00:00:00",
            'backwash_end_4' => "00:00:00",
            'backwash_status_4' => 0
        ));
    }
}
