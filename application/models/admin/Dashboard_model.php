<?php class Dashboard_model extends CI_Model
{
    public function get_temperature()
    {
        return $this->db->select('setting_temperature')->from('setting')->get()->result();
    }
    public function update_set_temperature($temp)
    {
        $setting =  $this->db->get('setting')->result();
        if (count($setting) == 0) {
            $this->db->insert('setting', array(
                'setting_temperature' => $temp
            ));
        } else {
            $this->db->where('setting_id', 1)->update('setting', array(
                'setting_temperature' => $temp
            ));
        }
    }
}
