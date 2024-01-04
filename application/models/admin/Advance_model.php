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
                'setting_basse' => number_format($number_set, 2)
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
    public function update_status_online($status)
    {
        $this->db->where('setting_id', 1)->update('setting', array(
            'online_status' => $status
        ));
    }
    public function get_machinecode()
    {
        $data = $this->db->get('machine')->result();
        return $data[0]->machine_code;
    }
    public function update_type_calibrate_pression($type_calibrate)
    {
        $this->db->where('setting_id', 1)->update('setting', array(
            'pressure_type' => $type_calibrate
        ));
    }
    public function update_value_calibrate_pression($calibrate_temp)
    {
        $this->db->where('setting_id', 1)->update('setting', array(
            'pressure_calibrate' => $calibrate_temp
        ));
    }
    public function check_permission($user, $password)
    {
        $data = $this->db->select('*')->from('administrator')->where('admin_userlogin', $user)->where('admin_password', sha1($password))
            ->get()->result();
        if (count($data) > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function change_user_password($user, $password)
    {
        $this->db->where('admin_id', 1)->update('administrator', array(
            'admin_userlogin' => $user,
            'admin_password' => sha1($password)
        ));
    }
    public function save_time_heatpump($heapump_start_time, $heapump_end_time)
    {
        $checking = $this->db->select('*')->from('heatpump')->get()->result();
        if (count($checking) > 0) {
            $this->db->where('heatpump_id', 1)->update('heatpump', array(
                'heatpump_start' => $heapump_start_time,
                'heatpump_end' => $heapump_end_time
            ));
        } else {
            $this->db->insert('heatpump', array(
                'heatpump_start' => $heapump_start_time,
                'heatpump_end' => $heapump_end_time
            ));
        }
    }
    public function get_heatpump()
    {
        return $this->db->get('heatpump')->result();
    }
    public  function get_option_heatpump()
    {
        return $this->db->select('*')->from('machine_option')->get()->result();
    }
    public function setting_night_time($data)
    {
        $checking = $this->db->select('*')->from('night_time')->get()->result();
        if (count($checking) > 0) {
            $this->db->where('night_time_id', 1)->update('night_time', $data);
        } else {
            $this->db->insert('night_time', $data);
        }
    }
    public function get_night_time_setting()
    {
       return $this->db->select('*')->from('night_time')->where('night_time_id', 1)->get()->result();
    }
}
