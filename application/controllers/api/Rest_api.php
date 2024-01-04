<?php class Rest_api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rest_api_model');
        $this->load->model('Process_model');
    }
    public function get_setting_mode()
    {
        echo json_encode($this->Rest_api_model->get_setting_mode());
    }
    public function get_ph()
    {
        echo json_encode($this->Rest_api_model->get_ph());
    }
    public function get_orp()
    {
        echo json_encode($this->Rest_api_model->get_orp());
    }
    public function get_apf()
    {
        echo json_encode($this->Rest_api_model->get_apf());
    }
    public function get_chlorine()
    {
        echo json_encode($this->Rest_api_model->get_chlorine());
    }
    public function get_filtration_time()
    {
        $arr = [];
        $result = $this->Rest_api_model->get_filtration_time();
        for ($i = 1; $i <= 24; $i++) {
            $status = "ft_status_" . ($i);
            array_push($arr, $result[0]->$status);
        }
        echo json_encode($arr);
        // echo "<pre>";
        // print_r($arr);
        // echo "</pre>";
    }
    public function get_filtration_data_time()
    {
        echo json_encode($this->Rest_api_model->get_filtration_data_time());
    }
    public function get_data_setting()
    {
        echo json_encode($this->Rest_api_model->get_data_setting());
    }
    public function get_besgo()
    {
        $data = [];
        $besgo = $this->Rest_api_model->get_besgo();
        for ($i = 1; $i <= 4; $i++) {
            $backwash_status = "backwash_status_" . $i;
            if ($besgo[0]->$backwash_status == 1) {
                $backwash_state = "backwash_state_" . $i;
                $backwash_start = 'backwash_start_' . $i;
                $backwash_end = 'backwash_end_' . $i;
                $start_time = $this->Process_model->format_time($besgo[0]->$backwash_start);
                $end_time = $this->Process_model->format_time($besgo[0]->$backwash_end);
                $day = $this->Process_model->change_number_to_day($besgo[0]->$backwash_state);
                if ($day != '') {
                    array_push($data, $start_time . '-' . $end_time);
                }
            }
        }
        echo json_encode($data);
    }
    public function get_besgo_setting()
    {
        echo json_encode($this->Rest_api_model->get_besgo_setting());
    }
    public function get_data_besgo()
    {
        echo json_encode($this->db->get('backwash')->result());
    }
    public function get_substance()
    {
        echo json_encode($this->Rest_api_model->get_substance());
    }
    public function get_dashborad()
    {
        echo json_encode($this->db->get('dashboard')->result());
    }
    public function get_machine_option()
    {
        echo json_encode($this->Rest_api_model->get_machine_option());
    }
    public function get_heatpump()
    {
        echo json_encode($this->Rest_api_model->get_heatpump());
    }
    public function get_night_time_mode()
    {
        echo json_encode($this->Rest_api_model->get_setting_night_time());
    }
}
