<?php class Filtration_model extends CI_Model
{
    public function get_filtration_set()
    {
        return  $this->db->select('*')->from('filtration_time')
            ->get()->result();
    }
    public function set_filration_time($status, $time_set, $ft_zone, $ft_status)
    {
        $filtration_set = $this->db->select('*')->from('filtration_time')
            ->get()->result();
        if (count($filtration_set) == 0) {
            $this->db->insert('filtration_time', array(
                $ft_status => $status,
                $ft_zone => $time_set
            ));
        } else {
            $infomation = $this->db->select('*')->from('filtration_time')
                ->where($ft_status, $status)
                ->get()->result();
            if (count($infomation) > 0) {
                $this->db->where('ft_id', 1)->update('filtration_time', array(
                    $ft_status => 0,
                    $ft_zone => $time_set
                ));
            } else {
                $this->db->where('ft_id', 1)->update('filtration_time', array(
                    $ft_status => $status,
                    $ft_zone => $time_set
                ));
            }
        }
    }
}
