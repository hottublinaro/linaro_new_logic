<?php class Menu extends CI_Controller
{
    public function index()
    {
        $result = array(
            'path_file' => 'menu/index',
            'menu_name' => 'MENU'
        );
        $this->load->view('member/index', $result);
    }
    public function sign_in()
    {
        $userlogin = $this->input->post('userlogin');
        $password = $this->input->post('password');

        $admin = $this->db->select('*')->from('administrator')->where('admin_userlogin', $userlogin)
            ->where('admin_password', sha1($password))->get()->result();
        if (count($admin) > 0) {
            $this->session->set_userdata(array(
                'admin_id' => $admin[0]->admin_id,
                'admin_name' => $admin[0]->admin_name
            ));
            $data = array(
                'status' => 'ok',
            );
            echo json_encode($data);
        } else {
            $data = array(
                'status' => 'error',
            );
            echo json_encode($data);
        }
    }
}
