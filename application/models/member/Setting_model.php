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
}
