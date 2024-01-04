<?php class Substance extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('member/Substance_model', 'Substance_model');
    }
    public function index()
    {
        $filtration = $this->Substance_model->get_filtration_set();
        $ph = $this->Substance_model->get_ph_information();
        $orp = $this->Substance_model->get_orp_information();
        $apf = $this->Substance_model->get_apf_information();
        $chlorine = $this->Substance_model->get_chlorine_information();
        $result = array(
            'path_file' => 'substance/index',
            'menu_name' => 'PH / ORP / APF / CHLORINE',
            'info' => $filtration,
            'ph' => $ph,
            'orp' => $orp,
            'apf' => $apf,
            'chlorine' => $chlorine
        );
        $this->load->view('member/index', $result);
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
        $result = array(
            'path_file' => 'substance/setting',
            'menu_name' => 'PH / ORP / APF / CHLORINE',
            'info' => $info
        );
        $this->load->view('member/index', $result);
    }
    public function update_substance_setting()
    {
        $input_id = $this->input->post('input_id');
        $number = $this->input->post('number');
        $this->Substance_model->update_substance_setting($input_id, $number);
    }
}
