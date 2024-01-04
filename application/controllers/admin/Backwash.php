<?php class Backwash extends CI_Controller
{
    private $path_server = "https://ultrabioozone.fr/";
    public function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('admin_id') == '') {
        //     redirect('member/dashboard/index', 'refersh');
        //     exit();
        // }
        $this->load->model('admin/Backwash_model', 'Backwash_model');
        $this->load->model('admin/Setting_model', 'Setting_model');
    }
    public function index()
    {
        $info = $this->Backwash_model->get_backwash_infomation();
        $setting_mode = $this->Setting_model->setting_mode();
        $online_setting = $this->Setting_model->get_online_setting();
        $machine_code = $this->Setting_model->get_machine_code();
        $result = array(
            'path_file' => 'backwash/index',
            'menu_name' => 'Réglages Backwash',
            'info' => $info,
            'setting_mode' => $setting_mode,
            'online_setting' => $online_setting,
            'machine_code' => $machine_code,
            'path_server' => $this->path_server
        );
        $this->load->view('admin/index', $result);
    }
    public function save_backwash_one()
    {
        $day_state = $this->input->post('day_state');
        $start_time = $this->input->post('start_time');
        $end_time = $this->input->post('end_time');

        $this->Backwash_model->save_backwash_one($day_state, $start_time, $end_time);
    }
    public function save_backwash_two()
    {
        $day_state = $this->input->post('day_state');
        $start_time = $this->input->post('start_time');
        $end_time = $this->input->post('end_time');

        $this->Backwash_model->save_backwash_two($day_state, $start_time, $end_time);
    }
    public function save_backwash_three()
    {
        $day_state = $this->input->post('day_state');
        $start_time = $this->input->post('start_time');
        $end_time = $this->input->post('end_time');

        $this->Backwash_model->save_backwash_three($day_state, $start_time, $end_time);
    }
    public function save_backwash_four()
    {
        $day_state = $this->input->post('day_state');
        $start_time = $this->input->post('start_time');
        $end_time = $this->input->post('end_time');

        $this->Backwash_model->save_backwash_four($day_state, $start_time, $end_time);
    }
    public function update_backwash_status()
    {
        $status = $this->input->post('status');
        $state = $this->input->post('state');
        $this->Backwash_model->update_backwash_status($status, $state);
    }
    public function update_adjust_time()
    {
        $time = $this->input->post('time');
        $this->Backwash_model->update_adjust_time($time);
    }
    public function update_mode()
    {
        $status = $this->input->post('status');
        $this->Backwash_model->update_mode($status);
    }
    public function clear_data_backwash()
    {
        $status = $this->input->post('status');
        $this->Backwash_model->clear_data_backwash($status);
    }
}
