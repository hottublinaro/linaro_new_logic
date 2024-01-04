<?php class Setting_model extends CI_Model
{
    public function setting_mode()
    {
        return $this->db->select('*')->from('setting_mode')->get()->result();
    }
    public function update_setting($set, $field)
    {
        $this->db->where('sm_id', 1)->update('setting_mode', array(
            $field => $set
        ));
    }
    public function get_online_setting()
    {
        return $this->db->select('*')->from('setting')->get()->result();
    }
    public function get_machine_code()
    {
        return $this->db->select('machine_code')->from('machine')->get()->result();
    }
    public function get_machine_option()
    {
        return $this->db->select('*')->from('machine_option')->get()->result();
    }
    public function update_status_type($type_calibrate)
    {
        $this->db->where('setting_id', 1)->update('setting', array(
            'temp_type' => $type_calibrate
        ));
    }
    public function update_value_calibrate($calibrate_temp)
    {
        $this->db->where('setting_id', 1)->update('setting', array(
            'temp_calibrate' => $calibrate_temp
        ));
    }
}
