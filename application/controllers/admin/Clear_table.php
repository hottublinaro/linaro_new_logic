<?php class Clear_table extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Clear_table_model', 'Clear_table_model');
    }
    public function clear_data_logger()
    {
        // clear logger
        $this->db->truncate('data_logger');
        $this->db->truncate('volt_logger');
        $this->Clear_table_model->close_online();
        $this->Clear_table_model->set_ph_orp();
        $this->Clear_table_model->clear_backwash();
    }
}
