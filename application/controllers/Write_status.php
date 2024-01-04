<?php class Write_status extends CI_Controller
{
    private $path_file = "/home/linaro/";
    public function write_on_off_ph()
    {
        $path_ph = "txt_file/counter_ph.txt";
        $path = $this->path_file . $path_ph;

        $txt = 0;
        if (!write_file($path, $txt)) {
            echo 'Unable to write the file';
        } else {
            echo 'File written!';
        }
    }
    public function write_on_off_orp()
    {
        $path_ph = "txt_file/counter_orp.txt";
        $path = $this->path_file . $path_ph;
        $txt = 0;
        if (!write_file($path, $txt)) {
            echo 'Unable to write the file';
        } else {
            echo 'File written!';
        }
    }
    public function write_on_off_apf()
    {
        $path_ph = "txt_file/counter_apf.txt";
        $path = $this->path_file . $path_ph;
        $txt = 0;
        if (!write_file($path, $txt)) {
            echo 'Unable to write the file';
        } else {
            echo 'File written!';
        }
    }
    public function write_close_program()
    {
        $path_ph = "txt_file/status_working_program.txt";
        $path = $this->path_file . $path_ph;
        $txt = $this->input->post('staus_input_working');
        if (!write_file($path, $txt)) {
            echo 'Unable to write the file';
        } else {
            echo 'File written!';
        }
    }
    public function write_set_pressure()
    {
        $path_ph = "txt_file/set_pressure.txt";
        $path = $this->path_file . $path_ph;
        $data = $this->db->select('*')->from('setting')->get()->resullt();
        $txt = $data[0]->setting_basse . ',' . $data[0]->setting_tentative . ',' . $data[0]->setting_frequence;
        if (!write_file($path, $txt)) {
            echo 'Unable to write the file';
        } else {
            echo 'File written!';
        }
    }
}
