<?php class Logger_model extends CI_Model
{
    public function group_mount_logger($index, $row)
    {
        $length = $row;
        $start = ($index - 1) * $length;
        $this->db->limit($length, $start);
        return $this->db->select('*')->from('data_logger')->group_by("MONTH(date_create)")->order_by('date_create', 'DESC')->get()->result();
    }
    public function group_mount_logger_count()
    {
        return $this->db->select('*')->from('data_logger')->group_by("MONTH(date_create)")->order_by('date_create', 'DESC')->get()->num_rows();
    }
    public function get_logger_list($index, $row, $date_time)
    {
        $length = $row;
        $start = ($index - 1) * $length;
        $this->db->limit($length, $start);

        return $this->db->select('*')->from('data_logger')->where("DATE_FORMAT(date_create,'%Y-%m')", $date_time)->order_by('date_time', 'DESC')->get()->result();
    }
    public function  get_logger_list_count($date_time)
    {
        return $this->db->select('*')->from('data_logger')->where("DATE_FORMAT(date_create,'%Y-%m')", $date_time)->order_by('date_time', 'DESC')->get()->num_rows();
    }
    public function get_logger_list_volt($index, $row, $date_time)
    {
        $length = $row;
        $start = ($index - 1) * $length;
        $this->db->limit($length, $start);
        return $this->db->select('*')->from('volt_logger')->where("DATE_FORMAT(date_create,'%Y-%m')", $date_time)->order_by('date_time', 'DESC')->get()->result();
    }
    public function get_logger_list_volt_count($date_time)
    {
        return $this->db->select('*')->from('volt_logger')->where("DATE_FORMAT(date_create,'%Y-%m')", $date_time)->order_by('date_time', 'DESC')->get()->num_rows();
    }
    public function export_logger($date_time)
    {
        return $this->db->select('*')->from('data_logger')->where("DATE_FORMAT(date_create,'%Y-%m')", $date_time)->order_by('date_time', 'DESC')->get()->result();
    }
    public function export_logger_volt($date_time)
    {
        return $this->db->select('*')->from('volt_logger')->where("DATE_FORMAT(date_create,'%Y-%m')", $date_time)->order_by('date_time', 'DESC')->get()->result();
    }
}
