<style>
    .font-date {
        padding-top: 1.2%;
        font-size: 22px !important;
    }

    .text-blur {
        color: grey;
    }

    .box-dashboard-top {
        height: 450px;
    }

    @media only screen and (max-width: 800px) {
        .font-date {
            padding-top: 1.2%;
            font-size: 14px !important;
        }

        .box-dashboard-top {
            height: 350px;
        }
    }
</style>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="box-showing box-dashboard-top">
                <div class="tab-header text-center">
                    <h4>Tableau de bord</h4>
                </div>
                <h3>Date et heure : <span class="float-end font-date" id="datetime_now"></span></h3>
                <h3>Pression : <span class="float-end" id="read_pressure">0.00</span></h3>
                <?php if ($options[0]->temperature == 1) { ?>
                    <h3>Température : <span class="float-end" id="read_temp">0.00</span></h3>
                <?php } else { ?>
                    <h3 class="text-blur">Température : <span class="float-end">0.00</span></h3>
                <?php } ?>
                <h3>PH : <span class="float-end" id="read_ph">0.00</span></h3>
                <h3>ORP : <span class="float-end" id="read_orp">0.00</span></h3>
                <h3 style="display: none;">Count Down :<span class="float-end" id="countdown_pressure_set">0.00</span> </h3>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box-showing box-dashboard-top">
                <div class="tab-header text-center">
                    <h4>Statut</h4>
                </div>
                <h3>Pompe de filtration : <span class="float-end">
                        <div id="filtration_status" class=""></div>
                    </span></h3>
                <h3>Pompe Ozone : <span class="float-end">
                        <div id="pompe_ozone" class=""></div>
                    </span></h3>
                <?php if ($options[0]->ozone_1 == 1) { ?>
                    <h3>Lampe Ozone #1 : <span class="float-end">
                            <div id="lamp_zone1" class=""></div>
                        </span></h3>
                <?php } else { ?>
                    <h3 class="text-blur">Lampe Ozone #1 : <span class="float-end">
                            <div class=""></div>
                        </span></h3>
                <?php } ?>
                <?php if ($options[0]->ozone_2 == 1) { ?>
                    <h3>Lampe Ozone #2 : <span class="float-end">
                            <div id="lamp_zone2" class=""></div>
                        </span></h3>
                <?php } else { ?>
                    <h3 class="text-blur">Lampe Ozone #2 : <span class="float-end">
                            <div class=""></div>
                        </span></h3>
                <?php } ?>
                <h3>Lampe UV : <span class="float-end">
                        <div id="lamp_uv" class=""></div>
                    </span></h3>
                <?php if ($options[0]->heater_1 == 1) { ?>
                    <h3>Chauffage #1 : <span class="float-end">
                            <div id="chauffage" class=""></div>
                        </span></h3>
                <?php } else { ?>
                    <h3 class="text-blur">Chauffage #1 : <span class="float-end">
                            <div class=""></div>
                        </span></h3>
                <?php } ?>
                <?php if ($options[0]->heater_2 == 1) { ?>
                    <h3>Chauffage #2 : <span class="float-end">
                            <div id="chauffage2" class=""></div>
                        </span></h3>
                <?php } else { ?>
                    <h3 class="text-blur">Chauffage #2 : <span class="float-end">
                            <div class=""></div>
                        </span></h3>
                <?php } ?>
                <h3>Filtration nocturne activée : <span class="float-end">
                        <div id="status_night"></div>
                    </span></h3>
                <h3>Filtration nocturne désactivée : <span class="float-end">
                        <div id="status_night_disable"></div>
                    </span></h3>
            </div>
        </div>

        <div class="col-md-12 mt-4" style="display: none;">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Réglage de température</h4>
                </div>
                <div class="row">
                    <!-- <div class="col-md-3">
                        <h3>[ 1 - 50 ] °C</h3>
                    </div> -->
                    <!-- <div class="col-md-9">
                        <input type="range" class="form-range" min="1" max="50" step="0.5" value="10" id="customRange3">
                    </div> -->

                    <div class="col-md-6 mt-3">
                        <h3>Température de I'eau</h3>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="float-end">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1" onclick="set_temperature('minus')"><i class="fa fa-minus fa-lg"></i></span>
                                <input type="text" aria-label="Username" id="temperature" value="<?= $temp[0]->setting_temperature ?>" style="width: 70px; text-align : center">
                                <span class="input-group-text" id="basic-addon2" onclick="set_temperature('plus')"><i class="fa fa-plus fa-lg"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-4 ">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Voltages</h4>
                </div>
                <?php if ($options[0]->volt_2_ph == 1) {  ?>
                    <h3>Voltage phase 1 : <span class="float-end" id="volt_1">0.00</span></h3>
                    <h3>Voltage phase 2 : <span class="float-end" id="volt_2">0.00</span></h3>
                    <h3>Voltage phase 3 : <span class="float-end" id="volt_3">0.00</span></h3>
                <?php } else if ($options[0]->volt_1_ph == 1) { ?>
                    <h3>Voltage phase 1 : <span class="float-end" id="volt_1_ph">0.00</span></h3>
                    <h3 class="text-blur">Voltage phase 2 : <span class="float-end">0.00</span></h3>
                    <h3 class="text-blur">Voltage phase 3 : <span class="float-end">0.00</span></h3>
                <?php } else { ?>
                    <h3 class="text-blur">Voltage phase 1 : <span class="float-end">0.00</span></h3>
                    <h3 class="text-blur">Voltage phase 2 : <span class="float-end">0.00</span></h3>
                    <h3 class="text-blur">Voltage phase 3 : <span class="float-end">0.00</span></h3>
                <?php } ?>
            </div>
        </div>

        <div class="col-md-12 mt-4 mb-5" style="display: none;">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Close Program</h4>
                </div>
                <div class="row mt-3">
                    <div class="co-md-12">
                        <div class="switch-toggle switch-3 switch-candy">
                            <input id="bypass_off" name="bypass" type="radio" checked="checked" />
                            <label for="bypass_off" onclick="" style="margin-top: 5px;">Close</label>

                            <input id="bypass_active" name="bypass" type="radio" checked="checked" />
                            <label for="bypass_active" style="margin-top: 5px;">Start</label>
                            <a></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="online_setting" name="online_setting" value="<?= $online_setting[0]->online_status ?>">
<input type="hidden" id="path_server" name="path_server" value="<?= $path_server ?>">
<input type="hidden" id="machine_code" name="machine_code" value="<?= $machine_code[0]->machine_code ?>">

<script>
    setInterval(load_plc_status, 3000);
    setInterval(load_volt_tag, 3000);
    setInterval(load_ph, 3000);
    setInterval(load_orp, 3000);
    setInterval(load_temperature, 3000);
    setInterval(load_pressure, 3000);
    setInterval(status_show, 2000);
    setInterval(load_countdown_pressure, 3000);
    setInterval(datetime_now, 1000);

    $(function() {
        load_ph()
        load_orp()
        load_temperature()
        load_volt_tag()
        load_pressure();
        load_countdown_pressure();
        status_show();
        datetime_now();
    })

    function datetime_now() {
        var currentdate = new Date();
        var datetime = currentdate.getDate() + "/" +
            (currentdate.getMonth() + 1) + "/" +
            currentdate.getFullYear() + " " +
            currentdate.getHours() + ":" +
            currentdate.getMinutes() + ":" +
            currentdate.getSeconds();
        $('#datetime_now').html(datetime);
    }

    function load_countdown_pressure() {
        $.getJSON("<?= base_url('Read_status/read_pressure_countdown') ?>", function(data) {
            if (data != '') {
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
                // $('#countdown_pressure_set').html(diff)
            } else {
                // $('#countdown_pressure_set').html("0:00")
            }

        });
    }

    function load_pressure() {
        $.getJSON("<?= base_url('Read_status/read_pressure') ?>", function(data) {
            $('#read_pressure').html(data);
        });
    }

    function load_ph() {
        $.getJSON("<?= base_url('Read_status/read_ph') ?>", function(data) {
            $('#read_ph').html(data);
        });

    }

    function load_orp() {
        $.getJSON("<?= base_url('Read_status/read_orp') ?>", function(data) {
            $('#read_orp').html(data);
        });
        load_temperature()
    }

    function load_temperature() {
        var status_temp = "<?= $options[0]->temperature ?>";
        if (status_temp == "1") {
            $.getJSON("<?= base_url('Read_status/read_temperature') ?>", function(data) {
                $('#read_temp').html(data);
            });
        }

    }

    function status_show() {
        // $('#status_night_disable').addClass('status-not-making');
        $.getJSON("<?= base_url('Read_status/read_plc_in') ?>", function(data) {
            if (data[2] == 'True') {
                $('#status_night').removeClass('status-not-making');
                $('#status_night').addClass('status-making');
                $('#status_night_disable').removeClass('status-making');
                $('#status_night_disable').addClass('status-not-making');
            } else {
                $('#status_night').removeClass('status-making');
                $('#status_night').addClass('status-not-making');
                $('#status_night_disable').removeClass('status-not-making');
                $('#status_night_disable').addClass('status-making');
            }
            if (data[3] == 'True') {
                $('#lamp_zone1').removeClass('status-not-making');
                $('#lamp_zone1').addClass('status-making');
            } else {
                $('#lamp_zone1').removeClass('status-making');
                $('#lamp_zone1').addClass('status-not-making');
            }
            if (data[4] == 'True') {
                $('#lamp_zone2').removeClass('status-not-making');
                $('#lamp_zone2').addClass('status-making');
            } else {
                $('#lamp_zone2').removeClass('status-making');
                $('#lamp_zone2').addClass('status-not-making');
            }
            if (data[5] == 'True') {
                $('#lamp_uv').removeClass('status-not-making');
                $('#lamp_uv').addClass('status-making');
            } else {
                $('#lamp_uv').removeClass('status-making');
                $('#lamp_uv').addClass('status-not-making');
            }
            if (data[6] == 'True') {
                $('#chauffage').removeClass('status-not-making');
                $('#chauffage').addClass('status-making');
            } else {
                $('#chauffage').removeClass('status-making');
                $('#chauffage').addClass('status-not-making');
            }
            if (data[7] == 'True') {
                $('#chauffage2').removeClass('status-not-making');
                $('#chauffage2').addClass('status-making');
            } else {
                $('#chauffage2').removeClass('status-making');
                $('#chauffage2').addClass('status-not-making');
            }

        });
    }

    function load_plc_status() {
        $.getJSON("<?= base_url('Read_status/read_plc') ?>", function(data) {
            if (data[0] == 'True') {
                $('#filtration_status').removeClass('status-not-making');
                $('#filtration_status').addClass('status-making');
            } else {
                $('#filtration_status').removeClass('status-making');
                $('#filtration_status').addClass('status-not-making');
            }
            if (data[1] == 'True') {
                $('#pompe_ozone').removeClass('status-not-making');
                $('#pompe_ozone').addClass('status-making');
            } else {
                $('#pompe_ozone').removeClass('status-making');
                $('#pompe_ozone').addClass('status-not-making');
            }

            // if (data[2] == 'True') {
            //     $('#chauffage').removeClass('status-not-making');
            //     $('#chauffage2').removeClass('status-not-making');
            //     $('#chauffage').addClass('status-making');
            //     $('#chauffage2').addClass('status-making');
            // } else {
            //     $('#chauffage').removeClass('status-making');
            //     $('#chauffage2').removeClass('status-making');
            //     $('#chauffage').addClass('status-not-making');
            //     $('#chauffage2').addClass('status-not-making');
            // }
        });
    }

    function load_volt_tag() {
        $.getJSON("<?= base_url('Read_status/read_voltage') ?>", function(data) {
            var status_volt_3_ph = "<?= $options[0]->volt_2_ph == 1 ?>";
            var status_volt_1_ph = "<?= $options[0]->volt_1_ph == 1 ?>";
            if (status_volt_3_ph == "1") {
                $('#volt_1').html(data[0]);
                $('#volt_2').html(data[1]);
                $('#volt_3').html(data[2]);
            } else if (status_volt_1_ph == "1") {
                $('#volt_1_ph').html(data[0]);
            }

        });
    }

    function set_temperature(txt) {
        temp = parseInt($('#temperature').val());
        if (txt == 'minus') {
            temp = temp - 1
        } else {
            temp = temp + 1
        }
        $('#temperature').val(temp);
        $.post("<?= base_url('admin/dashboard/update_set_temperature') ?>", {
            temp: temp
        }, function() {
            if ($('#online_setting').val() == 1) {
                connect_path_server(temp);
            }
        });
    }

    function connect_path_server(set) {
        var path_server = $('#path_server').val() + 'api/Receive_setting/update_set_temperature';
        $.post(path_server, {
            temp: temp,
            machine_code: $('#machine_code').val()
        }, function() {})
    }
</script>
