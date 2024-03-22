<?php class Read_status extends CI_Controller
{
    private $path_file = "/home/linaro/txt_file/";
    public function read_plc()
    {
        $slug = "status_plc.txt";
        $path = $this->path_file . $slug;
        $arr = [];
        $MyFile = file_get_contents($path);
        foreach (explode(',', $MyFile) as $item) {
            $ret = preg_replace("/[\[\\]\']/", "", $item);
            array_push($arr, trim($ret));
        }
        $this->db->where('dashboard_id', 1)->update('dashboard', array(
            'filtration' => $arr[0],
            'pompe_ozone' => $arr[1],
            'chauffage' => $arr[2],
            'chauffage2' => $arr[2]
        ));
        echo json_encode($arr);
    }
    public function read_plc_in()
    {
        $slug = "status_plc_in.txt";
        $path = $this->path_file . $slug;
        $arr = [];
        $MyFile = file_get_contents($path);
        foreach (explode(',', $MyFile) as $item) {
            $ret = preg_replace("/[\[\\]\']/", "", $item);
            array_push($arr, trim($ret));
        }
        // $this->db->where('dashboard_id', 1)->update('dashboard', array(
        //     'plc_in' => json_encode($MyFile)
        // ));
        echo json_encode($arr);
    }
    public function read_8_relay()
    {
        $slug = "status_plc.txt";
        $path = $this->path_file . $slug;
        $arr = [];
        $MyFile = file_get_contents($path);
        foreach (explode(',', $MyFile) as $item) {
            $ret = preg_replace("/[\[\\]\']/", "", $item);
            array_push($arr, trim($ret));
        }
        $this->db->where('dashboard_id', 1)->update('dashboard', array(
            'lamp_zone1' => $arr[0],
            'lamp_zone2' => $arr[0],
            'lamp_uv' => $arr[1]
        ));
        echo json_encode($arr);
    }
    public function relay_8_ch()
    {
        $slug = "status_relay_8.txt";
        $path = $this->path_file . $slug;
        $arr = [];
        $MyFile = file_get_contents($path);
        foreach (explode(',', $MyFile) as $item) {
            $ret = preg_replace("/[\[\\]\']/", "", $item);
            array_push($arr, trim($ret));
        }

        echo json_encode($arr);
    }
    public function read_voltage()
    {
        $arr = [];
        $slug = "volt_tag.txt";
        $path = $this->path_file . $slug;
        $MyFile = file_get_contents($path);
        foreach (explode(',', $MyFile) as $item) {
            array_push($arr, number_format($item, 1));
        }
        // $this->db->where('dashboard_id', 1)->update('dashboard', array(
        //     'volt_1' => $arr[0],
        //     'volt_2' => $arr[1],
        //     'volt_3' => $arr[2]
        // ));
        echo json_encode($arr);
    }
    public function read_ph()
    {
        $slug = "ph.txt";
        $path = $this->path_file . $slug;
        $MyFile = file_get_contents($path);
        // $this->db->where('dashboard_id', 1)->update('dashboard', array(
        //     'ph' => $MyFile
        // ));
        echo json_encode($MyFile);
    }
    public function read_orp()
    {
        $slug = "orp.txt";
        $path = $this->path_file . $slug;
        $MyFile = file_get_contents($path);
        // $this->db->where('dashboard_id', 1)->update('dashboard', array(
        //     'orp' => $MyFile
        // ));
        echo json_encode($MyFile);
    }
    public function read_temperature()
    {
        $slug = "temperature.txt";
        $path = $this->path_file . $slug;
        $MyFile = file_get_contents($path);
        // $this->db->where('dashboard_id', 1)->update('dashboard', array(
        //     'temperature' => $MyFile
        // ));
        echo json_encode(number_format($MyFile, 2));
    }
    public function read_pressure()
    {
        $slug = "pressure.txt";
        $path = $this->path_file . $slug;
        $MyFile = file_get_contents($path);
        // $this->db->where('dashboard_id', 1)->update('dashboard', array(
        //     'pressure' => $MyFile
        // ));

        // $data_dashboard = $this->db->select('*')->from('dashboard')->get()->result();
        // //max pressure
        // if ($data_dashboard[0]->max_pressure  == '') {
        //     $this->db->where('dashboard_id', 1)->update('dashboard', array(
        //         'max_pressure' => $MyFile
        //     ));
        // } else {
        //     if ($data_dashboard[0]->max_pressure < intval($MyFile)) {
        //         $this->db->where('dashboard_id', 1)->update('dashboard', array(
        //             'max_pressure' => $MyFile
        //         ));
        //     }
        // }
        // //min pressure
        // if ($data_dashboard[0]->min_pressure  == 0) {
        //     if ($data_dashboard[0]->min_pressure > intval($MyFile)) {
        //         $this->db->where('dashboard_id', 1)->update('dashboard', array(
        //             'min_pressure' => $MyFile
        //         ));
        //     }
        // } else {
        //     if ($data_dashboard[0]->min_pressure > intval($MyFile)) {
        //         $this->db->where('dashboard_id', 1)->update('dashboard', array(
        //             'min_pressure' => $MyFile
        //         ));
        //     }
        // }

        echo json_encode(number_format($MyFile, 1));
    }
    public function read_pressure_countdown()
    {
        $slug = "count_down_close_system.txt";
        $path = $this->path_file . $slug;
        $MyFile = file_get_contents($path);
        // $this->db->where('dashboard_id', 1)->update('dashboard', array(
        //     'pressure' => $MyFile
        // ));
        echo json_encode(str_replace(PHP_EOL, '', $MyFile));
    }
    public function update_data_realtime_mysql()
    {

        $slug_in = "status_plc_in.txt";
        $slug_out = "status_plc.txt";
        $slug_relay = "status_relay_8.txt";
        $slug_pressure = "pressure.txt";
        $slug_ph = "ph.txt";
        $slug_orp = "orp.txt";
        $slug_temp = "temperature.txt";
        $slug_volt = "volt_tag.txt";
        $slug_pressure_countdown = "count_down_close_system.txt";

        $path_plc_in = $this->path_file . $slug_in;
        $path_plc_out = $this->path_file . $slug_out;
        $path_relay = $this->path_file . $slug_relay;
        $path_pressure = $this->path_file . $slug_pressure;
        $path_ph = $this->path_file . $slug_ph;
        $path_orp = $this->path_file . $slug_orp;
        $path_temp = $this->path_file . $slug_temp;
        $path_volt = $this->path_file . $slug_volt;
        $path_pressure_countdown = $this->path_file . $slug_pressure_countdown;

        $plc_in = file_get_contents($path_plc_in);
        $plc_out = file_get_contents($path_plc_out);
        $relay = file_get_contents($path_relay);
        $pressure = file_get_contents($path_pressure);
        $ph = file_get_contents($path_ph);
        $orp = file_get_contents($path_orp);
        $temp = file_get_contents($path_temp);
        $volt = file_get_contents($path_volt);
        $pressure_countdown = file_get_contents($path_pressure_countdown);

        $arr_volt = [];
        foreach (explode(',', $volt) as $item) {
            array_push($arr_volt, $item);
        }

        $this->db->where('dashboard_id', 1)->update('dashboard', array(
            'plc_in' => $plc_in,
            'plc_out' => $plc_out,
            'relay_ch' => $relay,
            'pressure' => $pressure,
            'ph' => $ph,
            'orp' => $orp,
            'temperature' => number_format($temp, 2),
            'volt_1' => $arr_volt[0],
            'volt_2' => $arr_volt[1],
            'volt_3' => $arr_volt[2],
            'count_down' => $pressure_countdown
        ));

        // $data_dashboard = $this->db->select('*')->from('dashboard')->get()->result();
        // //max pressure
        // if ($data_dashboard[0]->max_pressure  == '') {
        //     $this->db->where('dashboard_id', 1)->update('dashboard', array(
        //         'max_pressure' => $pressure
        //     ));
        // } else {
        //     if ($data_dashboard[0]->max_pressure < intval($pressure)) {
        //         $this->db->where('dashboard_id', 1)->update('dashboard', array(
        //             'max_pressure' => $pressure
        //         ));
        //     }
        // }
        // //min pressure
        // if ($data_dashboard[0]->min_pressure  == 0) {
        //     if ($data_dashboard[0]->min_pressure > intval($pressure)) {
        //         $this->db->where('dashboard_id', 1)->update('dashboard', array(
        //             'min_pressure' => $pressure
        //         ));
        //     }
        // } else {
        //     if ($data_dashboard[0]->min_pressure > intval($pressure)) {
        //         $this->db->where('dashboard_id', 1)->update('dashboard', array(
        //             'min_pressure' => $pressure
        //         ));
        //     }
        // }
    }
    public function read_counter_machine()
    {
        $arr = [];
        $slug = "counter_machine.txt";
        $path = $this->path_file . $slug;
        $MyFile = file_get_contents($path);

        // $this->db->where('dashboard_id', 1)->update('dashboard', array(
        //     'volt_1' => $arr[0],
        //     'volt_2' => $arr[1],
        //     'volt_3' => $arr[2]
        // ));
        echo json_encode($MyFile);
    }
    public function read_datetime_rtc()
    {
        $slug = "time_rtc.txt";
        $path = $this->path_file . $slug;
        $arr = [];
        $MyFile = file_get_contents($path);

        // $this->db->where('dashboard_id', 1)->update('dashboard', array(
        //     'plc_in' => json_encode($MyFile)
        // ));
        echo json_encode($MyFile);
    }
}
