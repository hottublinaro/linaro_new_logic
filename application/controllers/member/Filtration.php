<?php class Filtration extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('member/Filtration_model', 'Filtration_model');
    }
    public function index()
    {
        $info = $this->Filtration_model->get_filtration_set();
        $result = array(
            'path_file' => 'filtration/index',
            'menu_name' => 'Reglage des plages de filtration',
            'info' => $info
        );

        $this->load->view('member/index', $result);
    }
    public function set_filration_time()
    {
        $status = $this->input->post('status');
        $time_set = $this->input->post('time_set');
        $ft_zone = $this->input->post('ft_zone');
        $ft_status =  $this->input->post('ft_status');
        $this->Filtration_model->set_filration_time($status, $time_set, $ft_zone, $ft_status);
    }
}
