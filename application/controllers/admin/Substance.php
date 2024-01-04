<?php class Substance extends CI_Controller
{
    private $path_server = "https://ultrabioozone.fr/";
    public function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('admin_id') == '') {
        //     redirect('member/dashboard/index', 'refersh');
        //     exit();
        // }
        $this->load->model('admin/Substance_model', 'Substance_model');
        $this->load->model('admin/Setting_model', 'Setting_model');
    }
    public function index()
    {
        $filtration = $this->Substance_model->get_filtration_set();
        $ph = $this->Substance_model->get_ph_information();
        $orp = $this->Substance_model->get_orp_information();
        $apf = $this->Substance_model->get_apf_information();
        $chlorine = $this->Substance_model->get_chlorine_information();
        $setting_mode = $this->Setting_model->setting_mode();
        $online_setting = $this->Setting_model->get_online_setting();
        $machine_code = $this->Setting_model->get_machine_code();
        $options = $this->Setting_model->get_machine_option();
        $result = array(
            'path_file' => 'substance/index',
            'menu_name' => 'Réglages (PH / ORP / APF)',
            'info' => $filtration,
            'ph' => $ph,
            'orp' => $orp,
            'apf' => $apf,
            'chlorine' => $chlorine,
            'setting_mode' => $setting_mode,
            'online_setting' => $online_setting,
            'machine_code' => $machine_code,
            'path_server' => $this->path_server,
            'options' => $options
        );
        $this->load->view('admin/index', $result);
    }
    public function save_status_ph()
    {
        $field = $this->input->post('field');
        $this->Substance_model->save_status_ph($field);
    }
    public function save_status_orp()
    {
        $field = $this->input->post('field');
        $this->Substance_model->save_status_orp($field);
    }
    public function save_status_apf()
    {
        $field = $this->input->post('field');
        $this->Substance_model->save_status_apf($field);
    }
    public function save_status_chlorine()
    {
        $field = $this->input->post('field');
        $this->Substance_model->save_status_chlorine($field);
    }
    public function substance_setting()
    {
        $info = $this->Substance_model->get_substance();
        $setting_mode = $this->Setting_model->setting_mode();
        $online_setting = $this->Setting_model->get_online_setting();
        $machine_code = $this->Setting_model->get_machine_code();
        $options = $this->Setting_model->get_machine_option();
        $result = array(
            'path_file' => 'substance/setting',
            'menu_name' => 'PH / ORP / APF / CHLORINE',
            'info' => $info,

            'setting_mode' => $setting_mode,
            'online_setting' => $online_setting,
            'machine_code' => $machine_code,
            'path_server' => $this->path_server,
            'options' => $options
        );
        $this->load->view('admin/index', $result);
    }
    public function update_substance_setting()
    {
        $input_id = $this->input->post('input_id');
        $number = $this->input->post('number');
        $this->Substance_model->update_substance_setting($input_id, $number);
    }
    
}
