<?php class Process_model extends CI_Model
{
    public function change_number_to_day($backwash_state)
    {
        // echo date('w');
        $day = "";
        $json_decode = json_decode($backwash_state);
        foreach ($json_decode as $item) {
            if ($item == date('w')) {
                $day = $this->change_day($item);
            }
        }
        return $day;
    }
    public function change_day($number)
    {
        if ($number == 1) {
            return "SUN";
        } else if ($number == 2) {
            return "MON";
        } else if ($number == 3) {
            return "TUE";
        } else if ($number == 4) {
            return "WED";
        } else if ($number == 5) {
            return "THU";
        } else if ($number == 6) {
            return "FRI";
        } else if ($number == 7) {
            return "SAT";
        }
    }
    public function format_time($time)
    {
        $date = date_create($time);
        return date_format($date, "H:i:s");
    }
}
