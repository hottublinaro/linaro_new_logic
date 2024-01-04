<?php class Loging extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('admin_id') == '') {
        //     redirect('member/dashboard/index', 'refersh');
        //     exit();
        // }
        $this->load->model('admin/Logger_model', 'Logger_model');
    }
    public function index($index = 1)
    {

        $result = array(
            'path_file' => 'loging/index',
            'menu_name' => 'Loging',
            'page_row' => $index
        );
        $this->load->view('admin/index', $result);
    }
    public function list_data_logger($date_time, $index = 1)
    {
        $month = explode("-", $date_time);
        $set_month = $month[0] . '-' . $month[1];
        $row = 30;
        $result = array(
            'path_file' => 'loging/list_logger',
            'menu_name' => 'List Loging',
            'date_time' => $date_time,
            'data_file' => $this->Logger_model->get_logger_list($index, $row, $set_month),
            'links' => $this->getpagination('admin/Loging/list_data_logger/' . $date_time . '/', $this->Logger_model->get_logger_list_count($set_month), 5, $row)
        );
        $this->load->view('admin/index', $result);
    }
    public function list_data_logger_volt($date_time, $index = 1)
    {
        $month = explode("-", $date_time);
        $set_month = $month[0] . '-' . $month[1];
        $row = 30;
        $result = array(
            'path_file' => 'loging/list_logger_volt',
            'menu_name' => 'Loging Volt',
            'date_time' => $date_time,
            'data_file' => $this->Logger_model->get_logger_list_volt($index, $row, $set_month),
            'links' => $this->getpagination('admin/Loging/list_data_logger_volt/' . $date_time . '/', $this->Logger_model->get_logger_list_volt_count($set_month), 5, $row)
        );
        $this->load->view('admin/index', $result);
    }
    public function group_mount_logger($index = 1)
    {
        $row = 30;
        $result = array(
            'data' => $this->Logger_model->group_mount_logger($index, $row),
            'rows' => $this->Logger_model->group_mount_logger_count(),
        );
        echo json_encode($result);
    }
    public function export_logger($date_time)
    {
        $month = explode("-", $date_time);
        $set_month = $month[0] . '-' . $month[1];
        $result = array(
            'path_file' => 'loging/export_logger',
            'menu_name' => 'List Loging',
            'data_file' => $this->Logger_model->export_logger($set_month),
            'date_time' => $date_time
        );
        $this->load->view('admin/index', $result);
    }

    public function export_logger_volt($date_time)
    {
        $month = explode("-", $date_time);
        $set_month = $month[0] . '-' . $month[1];
        $result = array(
            'path_file' => 'loging/export_logger_volt',
            'menu_name' => 'List Loging',
            'data_file' => $this->Logger_model->export_logger_volt($set_month),
            'date_time' => $date_time
        );
        $this->load->view('admin/index', $result);
    }
    function getpagination($url, $all_row, $uri_segment, $row)
    {
        $config['base_url'] = base_url() . $url;
        $config['total_rows'] = $all_row;
        $config['per_page'] = $row;
        $config["uri_segment"] = $uri_segment;
        $config['num_links'] = 2;
        $config['use_page_numbers'] = TRUE;
        $config['reuse_query_string'] = TRUE;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['attributes'] = ['class' => 'page-link'];
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        return $this->pagination->create_links();
    }
}
