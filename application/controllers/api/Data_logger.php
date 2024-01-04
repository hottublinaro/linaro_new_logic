<?php
Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed
class Data_logger extends CI_Controller
{
    public function logger()
    {
        $ph = $this->input->post('ph');
        $orp = $this->input->post('orp');
        $temp = $this->input->post('temp');
        $pressure = $this->input->post('pressure');
        $plc_q0 = $this->input->post('plc_q0');
        $plc_q1 = $this->input->post('plc_q1');
        $plc_q2 = $this->input->post('plc_q2');
        $plc_q3 = $this->input->post('plc_q3');
        $plc_i0 = $this->input->post('plc_i0');
        $plc_i1 = $this->input->post('plc_i1');
        $plc_i2 = $this->input->post('plc_i2');
        $plc_i3 = $this->input->post('plc_i3');
        $plc_i4 = $this->input->post('plc_i4');
        $plc_i5 = $this->input->post('plc_i5');
        $plc_i6 = $this->input->post('plc_i6');
        $plc_i7 = $this->input->post('plc_i7');
        $relay_ch0 = $this->input->post('relay_ch0');
        $relay_ch1 = $this->input->post('relay_ch1');
        $relay_ch2 = $this->input->post('relay_ch2');
        $relay_ch3 = $this->input->post('relay_ch3');
        $relay_ch4 = $this->input->post('relay_ch4');
        $relay_ch5 = $this->input->post('relay_ch5');
        $relay_ch6 = $this->input->post('relay_ch6');
        $relay_ch7 = $this->input->post('relay_ch7');
        $machine_code = $this->input->post('machine_code');


        $data = array(
            'machine_code' => $machine_code,
            'date_time' => date('Y-m-d H:i:sa'),
            'ph' => $ph,
            'orp' => $orp,
            'temp' => $temp,
            'pressure' => $pressure,
            'plc_q0' => $plc_q0,
            'plc_q1' => $plc_q1,
            'plc_q2' => $plc_q2,
            'plc_q3' => $plc_q3,
            'plc_i0' => $plc_i0,
            'plc_i1' => $plc_i1,
            'plc_i2' => $plc_i2,
            'plc_i3' => $plc_i3,
            'plc_i4' => $plc_i4,
            'plc_i5' => $plc_i5,
            'plc_i6' => $plc_i6,
            'plc_i7' => $plc_i7,
            'relay_ch0' => $relay_ch0,
            'relay_ch1' => $relay_ch1,
            'relay_ch2' => $relay_ch2,
            'relay_ch3' => $relay_ch3,
            'relay_ch4' => $relay_ch4,
            'relay_ch5' => $relay_ch5,
            'relay_ch6' => $relay_ch6,
            'relay_ch7' => $relay_ch7,
            'date_create' => date('Y-m-d')
        );
        $this->db->insert('data_logger', $data);
    }
    public function volt()
    {
        $machine_code = $this->input->post('machine_code');
        $va = $this->input->post('va');
        $vb = $this->input->post('vb');
        $vc = $this->input->post('vc');
        $data = array(
            'machine_code' => $machine_code,
            'va' => $va,
            'vb' => $vb,
            'vc' => $vc,
            'date_create' => date('Y-m-d'),
            'date_time' => date('Y-m-d H:i:sa')
        );
        $this->db->insert('volt_logger', $data);
    }
}
