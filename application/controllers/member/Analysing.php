<?php class Analysing extends CI_Controller
{
    public function index()
    {
        $result = array(
            'path_file' => 'dashboard/index',
            'menu_name' => 'Accueil'
        );
        $this->load->view('member/index', $result);
    }
}
