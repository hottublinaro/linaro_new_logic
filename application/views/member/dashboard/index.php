<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="box-showing" style=" height:450px ;">
                <div class="tab-header text-center">
                    <h4>Tableau de board</h4>
                </div>
                <h3>Datetime : <span class="float-end"><?= date("Y-m-d H:i") ?></span></h3>
                <h3>Pression : <span class="float-end">0.00</span></h3>
                <h3>Temperature : <span class="float-end" id="read_temp">0.00</span></h3>
                <h3>PH : <span class="float-end" id="read_ph">0.00</span></h3>
                <h3>ORP : <span class="float-end" id="read_orp">0.00</span></h3>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box-showing" style="height:450px ;">
                <div class="tab-header text-center">
                    <h4>Statut</h4>
                </div>
                <h3>Pompe de filtration : <span class="float-end">
                        <div id="filtration_status" class=""></div>
                    </span></h3>
                <h3>Pompe Ozone : <span class="float-end">
                        <div id="pompe_ozone" class=""></div>
                    </span></h3>
                <h3>Lampe Ozone #1 : <span class="float-end">
                        <div id="lamp_zone1" class=""></div>
                    </span></h3>
                <h3>Lampe Ozone #2 : <span class="float-end">
                        <div id="lamp_zone2" class=""></div>
                    </span></h3>
                <h3>Lampe UV : <span class="float-end">
                        <div id="lamp_uv" class=""></div>
                    </span></h3>
                <h3>Chauffage #1 : <span class="float-end">
                        <div id="chauffage" class=""></div>
                    </span></h3>
                <h3>Chauffage #2 : <span class="float-end">
                        <div id="chauffage2" class=""></div>
                    </span></h3>
                <h3>Filtration nocturne activee : <span class="float-end">
                        <div class="status-making"></div>
                    </span></h3>
                <h3>Filtration nocturne Desactivee : <span class="float-end">
                        <div class="status-making"></div>
                    </span></h3>
            </div>
        </div>

        <div class="col-md-12 mt-4">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Reglage de tamperature</h4>
                </div>
                <div class="row">
                    <!-- <div class="col-md-3">
                        <h3>[ 1 - 50 ] °C</h3>
                    </div> -->
                    <!-- <div class="col-md-9">
                        <input type="range" class="form-range" min="1" max="50" step="0.5" value="10" id="customRange3">
                    </div> -->

                    <div class="col-md-6 mt-3">
                        <h3>Temperature de I'eau</h3>
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
                <h3>Voltage plase 1 : <span class="float-end" id="volt_1">0.00</span></h3>
                <h3>Voltage plase 2 : <span class="float-end" id="volt_2">0.00</span></h3>
                <h3>Voltage plase 3 : <span class="float-end" id="volt_3">0.00</span></h3>
            </div>
        </div>

        <div class="col-md-12 mt-4 mb-5">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Close Program</h4>
                </div>
                <div class="row mt-3">
                    <div class="co-md-12">
                        <div class="switch-toggle switch-3 switch-candy">
                            <input id="bypass_off" name="bypass" type="radio" <?= ($status_working == 0) ? 'checked' : '' ?> onclick="authen_change_programs(0);" />
                            <label for="bypass_off" onclick="" style="margin-top: 5px;">Close</label>

                            <input id="bypass_active" name="bypass" type="radio" <?= ($status_working == 1) ? 'checked' : '' ?> onclick="authen_change_programs(1);" />
                            <label for="bypass_active" style="margin-top: 5px;">Start</label>
                            <a></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('member/dashboard/modal_form') ?>

<script>
    setInterval(load_plc_status, 3000);
    setInterval(load_relay_status, 3000);
    setInterval(load_volt_tag, 3000);
    setInterval(load_ph, 3000);
    setInterval(load_orp, 3000);
    setInterval(load_temperature, 3000);
    setInterval(load_pressure, 3000);

    $(function() {
        load_ph()
        load_orp()
        load_temperature()
        load_volt_tag()
        load_pressure();
        $('#error_signin').hide();
    })

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
        $.getJSON("<?= base_url('Read_status/read_temperature') ?>", function(data) {
            $('#read_temp').html(data);
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

            if (data[2] == 'True') {
                $('#chauffage').removeClass('status-not-making');
                $('#chauffage2').removeClass('status-not-making');
                $('#chauffage').addClass('status-making');
                $('#chauffage2').addClass('status-making');
            } else {
                $('#chauffage').removeClass('status-making');
                $('#chauffage2').removeClass('status-making');
                $('#chauffage').addClass('status-not-making');
                $('#chauffage2').addClass('status-not-making');
            }
        });
    }

    function load_relay_status() {
        $.getJSON("<?= base_url('Read_status/read_8_relay') ?>", function(data) {
            if (data[0] == 'True') {
                $('#lamp_zone1').removeClass('status-not-making');
                $('#lamp_zone2').removeClass('status-not-making');
                $('#lamp_zone1').addClass('status-making');
                $('#lamp_zone2').addClass('status-making');
            } else {
                $('#lamp_zone1').removeClass('status-making');
                $('#lamp_zone2').removeClass('status-making');
                $('#lamp_zone1').addClass('status-not-making');
                $('#lamp_zone2').addClass('status-not-making');
            }
            if (data[1] == "True") {
                $('#lamp_uv').removeClass('status-not-making');
                $('#lamp_uv').addClass('status-making');
            } else {
                $('#lamp_uv').removeClass('status-making');
                $('#lamp_uv').addClass('status-not-making');
            }
        });
    }

    function load_volt_tag() {
        $.getJSON("<?= base_url('Read_status/read_voltage') ?>", function(data) {
            $('#volt_1').html(data[0]);
            $('#volt_2').html(data[1]);
            $('#volt_3').html(data[2]);
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

        });
    }

    function authen_change_programs(status) {
        $('#staus_input_working').val(status);
        $('#modal_authen').modal('toggle');
    }
</script>
