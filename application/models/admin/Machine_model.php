<?php class Machine_model extends CI_Model
{
    public function get_machine()
    {
        return $this->db->select('*')->from('machine')->get()->result();
    }
    public function update_machine($data)
    {
        $this->db->where('machine_id', 1)->update('machine', $data);
    }
    public function get_selection()
    {
        return $this->db->select('*')->from('machine_option')->get()->result();
    }
    public function update_selection($data)
    {
        $this->db->where('mo_id', 1)->update('machine_option', $data);
    }
}
