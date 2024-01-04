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
    public function check_authen_close_program($userlogin, $password)
    {
        $user = $this->db->select('*')->from('administrator')->where('admin_userlogin', $userlogin)->get()->result();
        if (count($user) > 0) {
            $password =  $this->db->select('*')->from('administrator')->where('admin_password', sha1($password))->get()->result();
            if ($password > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
