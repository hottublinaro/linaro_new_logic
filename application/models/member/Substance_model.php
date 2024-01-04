<?php class Substance_model extends CI_Model
{
    public function get_filtration_set()
    {
        return  $this->db->select('*')->from('filtration_time')
            ->get()->result();
    }
    public function get_ph_information()
    {
        return $this->db->select('*')->from('ph')->get()->result();
    }
    public function get_orp_information()
    {
        return $this->db->select('*')->from('orp')->get()->result();
    }
    public function get_apf_information()
    {
        return $this->db->select('*')->from('apf')->get()->result();
    }
    public function get_chlorine_information()
    {
        return $this->db->select('*')->from('chlorine')->get()->result();
    }
    public function save_status_ph($field)
    {
        $ph = $this->db->select('*')->from('ph')->get()->result();
        if (count($ph) == 0) {
            $this->db->insert('ph', array(
                $field => 1
            ));
        } else {
            if ($ph[0]->$field == 1) {
                $this->db->where('ph_id', 1)->update('ph', array(
                    $field => 0
                ));
            } else {
                $this->db->where('ph_id', 1)->update('ph', array(
                    $field => 1
                ));
            }
        }
    }
    public function save_status_orp($field)
    {
        $ph = $this->db->select('*')->from('orp')->get()->result();
        if (count($ph) == 0) {
            $this->db->insert('orp', array(
                $field => 1
            ));
        } else {
            if ($ph[0]->$field == 1) {
                $this->db->where('orp_id', 1)->update('orp', array(
                    $field => 0
                ));
            } else {
                $this->db->where('orp_id', 1)->update('orp', array(
                    $field => 1
                ));
            }
        }
    }
    public function save_status_apf($field)
    {
        $ph = $this->db->select('*')->from('apf')->get()->result();
        if (count($ph) == 0) {
            $this->db->insert('apf', array(
                $field => 1
            ));
        } else {
            if ($ph[0]->$field == 1) {
                $this->db->where('apf_id', 1)->update('apf', array(
                    $field => 0
                ));
            } else {
                $this->db->where('apf_id', 1)->update('apf', array(
                    $field => 1
                ));
            }
        }
    }
    public function save_status_chlorine($field)
    {
        $ph = $this->db->select('*')->from('chlorine')->get()->result();
        if (count($ph) == 0) {
            $this->db->insert('chlorine', array(
                $field => 1
            ));
        } else {
            if ($ph[0]->$field == 1) {
                $this->db->where('chlorine_id', 1)->update('chlorine', array(
                    $field => 0
                ));
            } else {
                $this->db->where('chlorine_id', 1)->update('chlorine', array(
                    $field => 1
                ));
            }
        }
    }
    public function get_substance()
    {
        return $this->db->select('*')->from('substance')->get()->result();
    }
    public function update_substance_setting($input_id, $number)
    {
        $this->db->where('substance_id', 1)->update('substance', array(
            'ph_set' => $number
        ));
    }
}
