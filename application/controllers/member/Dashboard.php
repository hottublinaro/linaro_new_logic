<?php class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('member/Dashboard_model', 'Dashboard_model');
    }
    public function index()
    {
        // $path_file = "/home/linaro/hottub_machine/txt_file/status_working_program.txt";
        // $status_working = file_get_contents($path_file);

        $temp = $this->Dashboard_model->get_temperature();
        $result = array(
            'path_file' => 'dashboard/index',
            'menu_name' => 'Accueil',
            'temp' => $temp,
            'status_working' => 0
        );

        $this->load->view('member/index', $result);
    }
    public function update_set_temperature()
    {
        $temp = $this->input->post('temp');

        $this->Dashboard_model->update_set_temperature($temp);
    }
    public function check_authen_close_program()
    {
        $userlogin = $this->input->post('userlogin');
        $password = $this->input->post('password');
        $status = $this->Dashboard_model->check_authen_close_program($userlogin, $password);
        echo json_encode(['status' => $status]);
    }
}
