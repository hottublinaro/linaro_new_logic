<?php class Welcome_model extends CI_Model
{
    public function check_status_setting()
    {
        $status = 0;
        $machine = $this->db->get('machine')->result();
        if (count($machine) == 0) {
            $status = 1;
        }
        $machine_option = $this->db->get('machine_option')->result();
        if (count($machine_option) == 0) {
            $status = 2;
        }
        return $status;
    }
    public function set_machine($machine_name, $machine_code)
    {
        $ma = $this->db->get('machine')->result();
        if (count($ma) > 0) {
            $this->db->where('machine_id', 1)->update('machine', array(
                'machine_name' => $machine_name,
                'machine_code' => $machine_code
            ));
        } else {
            $this->db->insert('machine', array(
                'machine_name' => $machine_name,
                'machine_code' => $machine_code
            ));
        }
    }
    public function save_machine_selection($data)
    {
        $data = $this->db->get('machine_option')->result();
        if (count($data) > 0) {
            $this->db->where('mo_id', 1)->update('machine_option', $data);
        } else {
            $this->db->insert('machine_option', $data);
        }
    }
}
