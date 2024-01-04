<?php class Advance_model extends CI_Model
{
    public function get_setting()
    {
        return $this->db->get('setting')->result();
    }
    public function update_setting($number_set, $field)
    {
        if ($field == 'aeau') {
            $this->db->where('setting_id', 1)->update('setting', array(
                'setting_aeau' => $number_set
            ));
        }
        if ($field == 'eau') {
            $this->db->where('setting_id', 1)->update('setting', array(
                'setting_eau' => $number_set
            ));
        }

        if ($field == 'systeme') {
            $this->db->where('setting_id', 1)->update('setting', array(
                'setting_systeme' => $number_set
            ));
        }

        if ($field == 'temp') {
            $this->db->where('setting_id', 1)->update('setting', array(
                'setting_temp_deff' => $number_set
            ));
        }

        if ($field == 'basse') {
            $this->db->where('setting_id', 1)->update('setting', array(
                'setting_basse' => $number_set
            ));
        }

        if ($field == 'haute') {
            $this->db->where('setting_id', 1)->update('setting', array(
                'setting_haute' => $number_set
            ));
        }
        if ($field == 'tentative') {
            $this->db->where('setting_id', 1)->update('setting', array(
                'setting_tentative' => $number_set
            ));
        }
        if ($field == 'frequence') {
            $this->db->where('setting_id', 1)->update('setting', array(
                'setting_frequence' => $number_set
            ));
        }
    }
}
