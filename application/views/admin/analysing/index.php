<style>
    .height220 {
        height: 220px;
    }

    @media only screen and (max-width: 800px) {
        .height220 {
            height: 150px;
        }
    }
</style>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Diagnostic</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-showing">
                            <h4>Date/Heure <span class="float-end" id="datetime_now"><?= date('Y-m-d H:i:s') ?></span></h4>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-5">
                        <div class="box-showing height220">
                            <h4>Température de l'eau (°C) <span class="float-end" id="read_temp">0.00</span></h4>
                            <h4>Température réglée (°C) <span class="float-end" id="set_temp">0.00</span></h4>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="box-showing height220">
                            <h4>Mode de filtration (Man / Arr / Auto) <span class="float-end" id="filtration_mode">Man</span></h4>
                            <h4>Mode du backwash (Man / Arr / Auto) <span class="float-end" id="backwash_mode">Man</span></h4>
                            <h4>Chauffage (Mar/Arr) <span class="float-end" id="heater_mode">ON</span></h4>
                            <h4>Contrôle de pression (Activé/Deactivé) <span class="float-end" id="bypass_mode">Disable</span></h4>
                            <h4>Mode nuit(Mar/Arr) <span class="float-end">Off</span></h4>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-5">
                        <div class="box-showing height220">
                            <h4>Pression (Bar)<span class="float-end" id="read_pressure">0.00</span></h4>
                            <h4>Pression mini (Bar) <span class="float-end" id="min-pressure"><?= number_format($settings[0]->setting_basse, 1) ?></span></h4>
                            <h4>Pression maxi (Bar) <span class="float-end" id="max-pressure"><?= number_format($settings[0]->setting_haute, 1) ?></span></h4>
                            <h4>Panse de sécurité (3 Hr) <span class="float-end" id="pressure_count_down">Fault</span></h4>
                            <h4 style="display: none;">W28-Counter (3hr) <span class="float-end" id="countdown_pressure_set">Fault</span></h4>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="box-showing height220">
                            <h4>Entrée PLC <span class="float-end" id="plc_in">XXXX XXXX</span></h4>
                            <h4>Sortie PLC <span class="float-end" id="plc_out">XXXX</span></h4>
                            <h4>Relais 8CH <span class="float-end" id="relay_ch">XXXX XXXX</span></h4>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="box-showing">
                            <h4>Compteur d'heures <span class="float-end">HHHHH.MM</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    setInterval(load_plc_in, 3000);
    setInterval(load_plc_out, 3000);
    setInterval(load_relay, 3000);
    setInterval(setting_mode, 3000);
    setInterval(backwash, 3000);
    setInterval(temp_set, 3000);
    setInterval(read_temp, 3000);
    setInterval(read_pressure, 3000);
    setInterval(read_pressure_count_down, 3000);
    setInterval(load_datetime_now, 1000);
    // setInterval(min_max_pressure, 3000);
    $(function() {
        load_plc_in();
        load_plc_out();
        load_relay();
        setting_mode();
        backwash();
        temp_set();
        read_temp();
        read_pressure();
        read_pressure_count_down();
        load_datetime_now();
        // min_max_pressure();
    });

    function load_datetime_now() {
        var currentdate = new Date();
        var datetime = currentdate.getDate() + "/" +
            (currentdate.getMonth() + 1) + "/" +
            currentdate.getFullYear() + ' ' +
            currentdate.getHours() + ":" +
            currentdate.getMinutes() + ":" +
            currentdate.getSeconds();
        $('#datetime_now').html(datetime);
    }

    function load_plc_in() {
        var data_in = '';
        $.getJSON("<?= base_url('Read_status/read_plc_in') ?>", function(data) {
            $.each(data, function(k, v) {
                if (v == "False") {
                    data_in += "N";
                } else {
                    data_in += "F";
                }
            })
            $('#plc_in').html(data_in);
        });
    }

    function load_plc_out() {
        var data_in = '';
        $.getJSON("<?= base_url('Read_status/read_plc') ?>", function(data) {
            $.each(data, function(k, v) {
                if (v == "False") {
                    data_in += "N";
                } else {
                    data_in += "F";
                }
            })
            $('#plc_out').html(data_in);
        });
    }

    function load_relay() {
        var data_in = '';
        $.getJSON("<?= base_url('Read_status/relay_8_ch') ?>", function(data) {
            $.each(data, function(k, v) {
                if (v == "False") {
                    data_in += "N";
                } else {
                    data_in += "F";
                }
            })
            $('#relay_ch').html(data_in);
        });
    }

    function setting_mode() {
        $.getJSON("<?= base_url('api/Rest_api/get_setting_mode') ?>", function(data) {
            $.each(data, function(k, v) {
                if (v['sm_filtration'] == '1') {
                    $('#filtration_mode').html('Man');
                } else if (v['sm_filtration'] == '0') {
                    $('#filtration_mode').html('Off');
                } else if (v['sm_filtration'] == '2') {
                    $('#filtration_mode').html('Auto');
                }

                if (v['sm_bypass'] == '1') {
                    $('#bypass_mode').html('Activé');
                } else if (v['sm_bypass'] == '0') {
                    $('#bypass_mode').html('Disable');
                }
                if (v['sm_chauffage'] == '1') {
                    $('#heater_mode').html('On');
                } else if (v['sm_chauffage'] == '0') {
                    $('#heater_mode').html('Off');
                }

            });
        });
    }

    function backwash() {
        $.getJSON("<?= base_url('api/Rest_api/get_besgo_setting') ?>", function(data) {
            $.each(data, function(k, v) {
                if (v['backwash_mode'] == '0') {
                    $('#backwash_mode').html('Off');
                } else if (v['backwash_mode'] == '1') {
                    $('#backwash_mode').html('Man');
                } else if (v['backwash_mode'] == '2') {
                    $('#backwash_mode').html('Auto');
                }
            });
        });
    }

    function temp_set() {
        $.getJSON("<?= base_url('api/Rest_api/get_data_setting') ?>", function(data) {
            $.each(data, function(k, v) {
                $('#set_temp').html(v['setting_temperature']);
            });
        });
    }

    function read_temp() {
        $.getJSON("<?= base_url('Read_status/read_temperature') ?>", function(data) {
            $('#read_temp').html(data);
        });
    }

    function read_pressure() {
        $.getJSON("<?= base_url('Read_status/read_pressure') ?>", function(data) {
            $('#read_pressure').html(data);
        });
    }

    function read_pressure_count_down() {
        $.getJSON("<?= base_url('Read_status/read_pressure_countdown') ?>", function(data) {
            if (data == '') {
                $('#pressure_count_down').html('Fault');
            } else {
                var date = new Date;
                read_time = data.split(":");
                var minutes = date.getMinutes();
                var hour = date.getHours();
                var sum_minute = '';
                var sum_hour = parseInt(read_time[0]) - parseInt(hour);
                if (parseInt(minutes) > parseInt(read_time[1])) {
                    sum_minute = parseInt(minutes) - parseInt(read_time[1]);
                } else {
                    sum_minute = parseInt(read_time[1]) - parseInt(minutes);
                }
                var diff = sum_hour + ":" + sum_minute;
                $('#countdown_pressure_set').html(diff);

                $('#pressure_count_down').html('True');
            }
        });
    }
    // var min_max_pressure = function() {
    //     $.getJSON("<?= base_url('api/Rest_api/get_dashborad') ?>", function(data) {
    //         $.each(data, function(k, v) {
    //             if (v['min_pressure'] == '') {
    //                 $('#min-pressure').html('0')
    //             } else {
    //                 $('#min-pressure').html(v['min_pressure'])
    //             }

    //             if (v['max_pressure'] == '') {
    //                 $('#max-pressure').html('0')
    //             } else {

    //                 $('#max-pressure').html(v['max_pressure'])
    //             }
    //         })
    //     });
    // }
</script>
