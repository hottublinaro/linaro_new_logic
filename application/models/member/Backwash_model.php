<?php class Backwash_model extends CI_Model
{
    public function get_backwash_infomation()
    {
        return $this->db->select('*')->from('backwash')->get()->result();
    }
    public function save_backwash_one($day_state, $start_time, $end_time)
    {
        $data = $this->db->get('backwash')->result();
        if (count($data) == 0) {
            $this->db->insert('backwash', array(
                'backwash_state_1' => json_encode(sort($day_state)),
                'backwash_start_1' => $start_time,
                'backwash_end_1' => $end_time,
                'backwash_status_1' => 1
            ));
        } else {
            $this->db->where('backwash_id', 1)->update('backwash', array(
                'backwash_state_1' => json_encode(sort($day_state)),
                'backwash_start_1' => $start_time,
                'backwash_end_1' => $end_time,
            ));
        }
    }
    public function save_backwash_two($day_state, $start_time, $end_time)
    {

        $data = $this->db->get('backwash')->result();
        if (count($data) == 0) {
            $this->db->insert('backwash', array(
                'backwash_state_2' => json_encode(sort($day_state)),
                'backwash_start_2' => $start_time,
                'backwash_end_2' => $end_time,
                'backwash_status_2' => 1
            ));
        } else {
            $this->db->where('backwash_id', 1)->update('backwash', array(
                'backwash_state_2' => json_encode(sort($day_state)),
                'backwash_start_2' => $start_time,
                'backwash_end_2' => $end_time,
                'backwash_status_2' => 1
            ));
        }
    }
    public function save_backwash_three($day_state, $start_time, $end_time)
    {
        $data = $this->db->get('backwash')->result();
        if (count($data) == 0) {
            $this->db->insert('backwash', array(
                'backwash_state_3' => json_encode(sort($day_state)),
                'backwash_start_3' => $start_time,
                'backwash_end_3' => $end_time,
                'backwash_status_3' => 1
            ));
        } else {
            $this->db->where('backwash_id', 1)->update('backwash', array(
                'backwash_state_3' => json_encode(sort($day_state)),
                'backwash_start_3' => $start_time,
                'backwash_end_3' => $end_time,
                'backwash_status_3' => 1
            ));
        }
    }
    public function save_backwash_four($day_state, $start_time, $end_time)
    {
        $data = $this->db->get('backwash')->result();
        if (count($data) == 0) {
            $this->db->insert('backwash', array(
                'backwash_state_4' => json_encode(sort($day_state)),
                'backwash_start_4' => $start_time,
                'backwash_end_4' => $end_time,
                'backwash_status_4' => 1
            ));
        } else {
            $this->db->where('backwash_id', 1)->update('backwash', array(
                'backwash_state_4' => json_encode(sort($day_state)),
                'backwash_start_4' => $start_time,
                'backwash_end_4' => $end_time,
                'backwash_status_4' => 1
            ));
        }
    }
    public function change_array_day_one($day)
    {
        if ($day != '') {
            $txt_day = '';
            $data = json_decode($day);
            foreach ($data as $item) {
                $txt_day .= 'day_1_' . $item . ',';
            }
            return $txt_day;
        } else {
            return "";
        }
    }
    public function change_array_day_two($day)
    {
        if ($day != '') {
            $txt_day = '';
            $data = json_decode($day);
            foreach ($data as $item) {
                $txt_day .= 'day_2_' . $item . ',';
            }
            return $txt_day;
        } else {
            return "";
        }
    }
    public function change_array_day_three($day)
    {
        if ($day != '') {
            $txt_day = '';
            $data = json_decode($day);
            foreach ($data as $item) {
                $txt_day .= 'day_3_' . $item . ',';
            }
            return $txt_day;
        } else {
            return "";
        }
    }
    public function change_array_day_four($day)
    {
        if ($day != '') {
            $txt_day = '';
            $data = json_decode($day);
            foreach ($data as $item) {
                $txt_day .= 'day_4_' . $item . ',';
            }
            return $txt_day;
        } else {
            return "";
        }
    }
    public function update_backwash_status($status, $state)
    {
        if ($state == 1) {
            $this->db->where('backwash_id', 1)->update('backwash', array(
                'backwash_status_1' => ($status == 1) ? 0 : 1
            ));
        }
        if ($state == 2) {
            $this->db->where('backwash_id', 1)->update('backwash', array(
                'backwash_status_2' => ($status == 1) ? 0 : 1
            ));
        }
        if ($state == 3) {
            $this->db->where('backwash_id', 1)->update('backwash', array(
                'backwash_status_3' => ($status == 1) ? 0 : 1
            ));
        }
        if ($state == 4) {
            $this->db->where('backwash_id', 1)->update('backwash', array(
                'backwash_status_4' => ($status == 1) ? 0 : 1
            ));
        }
    }
    public function update_adjust_time($time)
    {
        $this->db->where('backwash_id', 1)->update('backwash', array(
            'backwash_time' => $time
        ));
    }
    public function update_mode($status)
    {
        $this->db->where('backwash_id', 1)->update('backwash', array(
            'backwash_mode' => $status
        ));
    }
}
