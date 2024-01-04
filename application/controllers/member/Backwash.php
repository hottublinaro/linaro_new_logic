<?php class Backwash extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('member/Backwash_model', 'Backwash_model');
    }
    public function index()
    {
        $info = $this->Backwash_model->get_backwash_infomation();
        $result = array(
            'path_file' => 'backwash/index',
            'menu_name' => 'Reglages du backwash',
            'info' => $info
        );
        $this->load->view('member/index', $result);
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
}
