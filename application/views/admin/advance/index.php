<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Réglages avancés</h4>
                </div>
                <div class="row">
                    <div class="col-md-8 mt-3">
                        <h3>Délai de démarrage de la pompe à eau [ 1 - 10 ]</h3>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="float-end">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1" onclick="set_number_input('minus','aeau','int')"><i class="fa fa-minus fa-lg"></i></span>
                                <input type="text" aria-label="Username" id="aeau" value="<?= $setting[0]->setting_aeau ?> Sec." style="width: 90px; text-align : center">
                                <span class="input-group-text" id="basic-addon2" onclick="set_number_input('plus','aeau','int')"><i class="fa fa-plus fa-lg"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-8 mt-3">
                        <h3>Délai d'arrêt de la pompe à eau [ 1 - 59 ]</h3>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="float-end">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1" onclick="set_number_input('minus','eau','int')"><i class="fa fa-minus fa-lg"></i></span>
                                <input type="text" aria-label="Username" id="eau" value="<?= $setting[0]->setting_eau ?> Sec." style="width: 90px; text-align : center">
                                <span class="input-group-text" id="basic-addon2" onclick="set_number_input('plus','eau','int')"><i class="fa fa-plus fa-lg"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3" style="display: none;">
                    <div class="col-md-8 mt-3">
                        <h3>Délai de démarrage du systême [ 1-5 ]</h3>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="float-end">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1" onclick="set_number_input('minus','systeme','int')"><i class="fa fa-minus fa-lg"></i></span>
                                <input type="text" aria-label="Username" id="systeme" value="<?= $setting[0]->setting_systeme ?> Sec." style="width: 90px; text-align : center">
                                <span class="input-group-text" id="basic-addon2" onclick="set_number_input('plus','systeme','int')"><i class="fa fa-plus fa-lg"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-8 mt-3">
                        <h3>Différentiel de température [ 1 - 10 ]</h3>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="float-end">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1" onclick="set_number_input('minus','temp','int')"><i class="fa fa-minus fa-lg"></i></span>
                                <input type="text" aria-label="Username" id="temp" value="<?= $setting[0]->setting_temp_deff ?> °C" style="width: 90px; text-align : center">
                                <span class="input-group-text" id="basic-addon2" onclick="set_number_input('plus','temp','int')"><i class="fa fa-plus fa-lg"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-8 mt-3">
                        <h3>Différentiel pression basse [ 0 - 2 ]</h3>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="float-end">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1" onclick="set_number_input('minus','basse','float')"><i class="fa fa-minus fa-lg"></i></span>
                                <input type="text" aria-label="Username" id="basse" value="<?= $setting[0]->setting_basse ?> Bar." style="width: 90px; text-align : center">
                                <span class="input-group-text" id="basic-addon2" onclick="set_number_input('plus','basse','float')"><i class="fa fa-plus fa-lg"></i></span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-3">
                    <div class="col-md-8 mt-3">
                        <h3>Coupure pression haute [ 0 - 3 ]</h3>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="float-end">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1" onclick="set_number_input('minus','haute','float')"><i class="fa fa-minus fa-lg"></i></span>
                                <input type="text" aria-label="Username" id="haute" value="<?= $setting[0]->setting_haute ?> Bar." style="width: 90px; text-align : center">
                                <span class="input-group-text" id="basic-addon2" onclick="set_number_input('plus','haute','float')"><i class="fa fa-plus fa-lg"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-8 mt-3">
                        <h3>Délai de rétablissement pression [ 1 - 30 ]</h3>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="float-end">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1" onclick="set_number_input('minus','tentative','int')"><i class="fa fa-minus fa-lg"></i></span>
                                <input type="text" aria-label="Username" id="tentative" value="<?= $setting[0]->setting_tentative ?> Sec." style="width: 90px; text-align : center">
                                <span class="input-group-text" id="basic-addon2" onclick="set_number_input('plus','tentative','int')"><i class="fa fa-plus fa-lg"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-8 mt-3">
                        <h3>Fréquence de rétablissement pression [ 1 - 5 ]</h3>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="float-end">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1" onclick="set_number_input('minus','frequence','int')"><i class="fa fa-minus fa-lg"></i></span>
                                <input type="text" aria-label="Username" id="frequence" value="<?= $setting[0]->setting_frequence ?> Hour." style="width: 90px; text-align : center">
                                <span class="input-group-text" id="basic-addon2" onclick="set_number_input('plus','frequence','int')"><i class="fa fa-plus fa-lg"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container ">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Calibrate pression</h4>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <h3>Type</h3>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="float-end">
                            <select class="form-control" id="type_calibrate" name="type_calibrate" style="width: 150px; text-align:center" onchange="change_status_type()">
                                <?php if ($setting[0]->pressure_type == 'minus') { ?>
                                    <option value="minus" selected>Minus</option>
                                <?php } else { ?>
                                    <option value="minus">Minus</option>
                                <?php } ?>
                                <?php if ($setting[0]->pressure_type == 'plus') { ?>
                                    <option value="plus" selected>Plus</option>
                                <?php } else { ?>
                                    <option value="plus">Plus</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <h3>calibrate</h3>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="float-end">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1" onclick="set_calibrate('minus')"><i class="fa fa-minus fa-lg"></i></span>
                                <input type="text" id="calibrate_temp" value="<?= $online_setting[0]->pressure_calibrate ?>" style="width: 70px; text-align : center">
                                <span class="input-group-text" id="basic-addon2" onclick="set_calibrate('plus')"><i class="fa fa-plus fa-lg"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-4">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Set Date et heure</h4>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <h3>Date et heure</h3>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="float-end">
                            <input type="datetime-local" class="form-control" id="date_time" value="<?= date('Y-m-d H:i') ?>" onchange="set_datetime()">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('admin/advance/heatpump') ?>
    </div>
</div>

<script>
    function save_heatpump() {
        $.post("<?= base_url('admin/Advance/save_time_heatpump') ?>", {
            heapump_start_time: $('#heapump_start_time').val(),
            heapump_end_time: $('#heapump_end_time').val()
        }, function() {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
            })
        })
    }

    function set_datetime() {
        console.log($('#date_time').val())
        var split_time = $('#date_time').val().split('T');
        console.log(split_time)
        var date = split_time[0]
        var time = split_time[1]
        var process = date + " " + time;
        console.log(process)
        $.getJSON("http://localhost:5000/" + process, function(data) {

        });
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Open online mode complete',
            showConfirmButton: false,
            timer: 1500
        })


    }

    function change_status_type() {
        $.post("<?= base_url('admin/Advance/update_type_calibrate_pression') ?>", {
            type_calibrate: $('#type_calibrate').val()
        }, function() {

        });
    }

    function set_calibrate(status) {
        var data = $('#calibrate_temp').val();
        var calibrate_temp = parseFloat(data);
        if (status == 'minus') {
            if (calibrate_temp > 0) {
                calibrate_temp = calibrate_temp - 0.01;
            }
        } else {
            calibrate_temp = calibrate_temp + 0.01;
        }
        $('#calibrate_temp').val(calibrate_temp.toFixed(2));
        $.post("<?= base_url('admin/Advance/update_value_calibrate_pression') ?>", {
            calibrate_temp: calibrate_temp.toFixed(2)
        }, function() {})
    }

    function update_status_online(status) {
        $.post("<?= base_url('admin/Advance/update_status_online') ?>", {
            status: status
        }, function() {
            if (status == "1") {
                tranfer_setting_mode();
            }
        })
    }

    function tranfer_setting_mode() {
        var path_url = $('#urlPath').val() + 'get_setting_mode';
        $.getJSON("<?= base_url('api/Rest_api/get_setting_mode') ?>", function(data) {
            $.each(data, function(k, v) {
                $.post(path_url, {
                    sm_filtration: v['sm_filtration'],
                    sm_bypass: v['sm_bypass'],
                    sm_ozone_choc: v['sm_ozone_choc'],
                    sm_chauffage: v['sm_chauffage'],
                    sm_pomp_ozone: v['sm_pomp_ozone'],
                    sm_lamp_ozone: v['sm_lamp_ozone'],
                    sm_lamp_uv: v['sm_lamp_uv'],
                    sm_pump_air: v['sm_pump_air'],
                    machine_code: $('#machine_code').val()
                }, function() {
                    tranfer_ph();
                });
            });
        });
    }

    function tranfer_ph() {
        var path_url = $('#urlPath').val() + 'get_ph';
        $.getJSON("<?= base_url('api/Rest_api/get_ph') ?>", function(data) {
            $.each(data, function(k, v) {
                $.post(path_url, {
                    ph_1: v['ph_1'],
                    ph_2: v['ph_2'],
                    ph_3: v['ph_3'],
                    ph_4: v['ph_4'],
                    ph_5: v['ph_5'],
                    ph_6: v['ph_6'],
                    ph_7: v['ph_7'],
                    ph_8: v['ph_8'],
                    ph_9: v['ph_9'],
                    ph_10: v['ph_10'],
                    ph_11: v['ph_11'],
                    ph_12: v['ph_12'],
                    ph_13: v['ph_13'],
                    ph_14: v['ph_14'],
                    ph_15: v['ph_15'],
                    ph_16: v['ph_16'],
                    ph_17: v['ph_17'],
                    ph_18: v['ph_18'],
                    ph_19: v['ph_19'],
                    ph_20: v['ph_20'],
                    ph_21: v['ph_21'],
                    ph_22: v['ph_22'],
                    ph_23: v['ph_23'],
                    ph_24: v['ph_24'],
                    machine_code: $('#machine_code').val()
                }, function() {
                    tranfer_orp()
                });
            });
        });
    }

    function tranfer_orp() {
        var path_url = $('#urlPath').val() + 'get_orp';
        $.getJSON("<?= base_url('api/Rest_api/get_orp') ?>", function(data) {
            $.each(data, function(k, v) {
                $.post(path_url, {
                    orp_1: v['orp_1'],
                    orp_2: v['orp_2'],
                    orp_3: v['orp_3'],
                    orp_4: v['orp_4'],
                    orp_5: v['orp_5'],
                    orp_6: v['orp_6'],
                    orp_7: v['orp_7'],
                    orp_8: v['orp_8'],
                    orp_9: v['orp_9'],
                    orp_10: v['orp_10'],
                    orp_11: v['orp_11'],
                    orp_12: v['orp_12'],
                    orp_13: v['orp_13'],
                    orp_14: v['orp_14'],
                    orp_15: v['orp_15'],
                    orp_16: v['orp_16'],
                    orp_17: v['orp_17'],
                    orp_18: v['orp_18'],
                    orp_19: v['orp_19'],
                    orp_20: v['orp_20'],
                    orp_21: v['orp_21'],
                    orp_22: v['orp_22'],
                    orp_23: v['orp_23'],
                    orp_24: v['orp_24'],
                    machine_code: $('#machine_code').val()
                }, function() {
                    tranfer_apf();
                });
            });
        });
    }

    function tranfer_apf() {
        var path_url = $('#urlPath').val() + 'get_apf';
        $.getJSON("<?= base_url('api/Rest_api/get_apf') ?>", function(data) {
            $.each(data, function(k, v) {
                $.post(path_url, {
                    apf_1: v['apf_1'],
                    apf_2: v['apf_2'],
                    apf_3: v['apf_3'],
                    apf_4: v['apf_4'],
                    apf_5: v['apf_5'],
                    apf_6: v['apf_6'],
                    apf_7: v['apf_7'],
                    apf_8: v['apf_8'],
                    apf_9: v['apf_9'],
                    apf_10: v['apf_10'],
                    apf_11: v['apf_11'],
                    apf_12: v['apf_12'],
                    apf_13: v['apf_13'],
                    apf_14: v['apf_14'],
                    apf_15: v['apf_15'],
                    apf_16: v['apf_16'],
                    apf_17: v['apf_17'],
                    apf_18: v['apf_18'],
                    apf_19: v['apf_19'],
                    apf_20: v['apf_20'],
                    apf_21: v['apf_21'],
                    apf_22: v['apf_22'],
                    apf_23: v['apf_23'],
                    apf_24: v['apf_24'],
                    machine_code: $('#machine_code').val()
                }, function() {
                    tranfer_chlorine();
                });
            });
        });
    }

    function tranfer_chlorine() {
        var path_url = $('#urlPath').val() + 'get_chlorine';
        $.getJSON("<?= base_url('api/Rest_api/get_chlorine') ?>", function(data) {
            $.each(data, function(k, v) {
                $.post(path_url, {
                    chlorine_1: v['chlorine_1'],
                    chlorine_2: v['chlorine_2'],
                    chlorine_3: v['chlorine_3'],
                    chlorine_4: v['chlorine_4'],
                    chlorine_5: v['chlorine_5'],
                    chlorine_6: v['chlorine_6'],
                    chlorine_7: v['chlorine_7'],
                    chlorine_8: v['chlorine_8'],
                    chlorine_9: v['chlorine_9'],
                    chlorine_10: v['chlorine_10'],
                    chlorine_11: v['chlorine_11'],
                    chlorine_12: v['chlorine_12'],
                    chlorine_13: v['chlorine_13'],
                    chlorine_14: v['chlorine_14'],
                    chlorine_15: v['chlorine_15'],
                    chlorine_16: v['chlorine_16'],
                    chlorine_17: v['chlorine_17'],
                    chlorine_18: v['chlorine_18'],
                    chlorine_19: v['chlorine_19'],
                    chlorine_20: v['chlorine_20'],
                    chlorine_21: v['chlorine_21'],
                    chlorine_22: v['chlorine_22'],
                    chlorine_23: v['chlorine_23'],
                    chlorine_24: v['chlorine_24'],
                    machine_code: $('#machine_code').val()
                }, function() {
                    tranfer_filtration_time();
                });
            });
        });
    }

    function tranfer_filtration_time() {
        var path_url = $('#urlPath').val() + 'get_filtration_time';
        $.getJSON("<?= base_url('api/Rest_api/get_filtration_data_time') ?>", function(data) {
            $.each(data, function(k, v) {
                $.post(path_url, {
                    ft_status_1: v['ft_status_1'],
                    ft_status_2: v['ft_status_2'],
                    ft_status_3: v['ft_status_3'],
                    ft_status_4: v['ft_status_4'],
                    ft_status_5: v['ft_status_5'],
                    ft_status_6: v['ft_status_6'],
                    ft_status_7: v['ft_status_7'],
                    ft_status_8: v['ft_status_8'],
                    ft_status_9: v['ft_status_9'],
                    ft_status_10: v['ft_status_10'],
                    ft_status_11: v['ft_status_11'],
                    ft_status_12: v['ft_status_12'],
                    ft_status_13: v['ft_status_13'],
                    ft_status_14: v['ft_status_14'],
                    ft_status_15: v['ft_status_15'],
                    ft_status_16: v['ft_status_16'],
                    ft_status_17: v['ft_status_17'],
                    ft_status_18: v['ft_status_18'],
                    ft_status_19: v['ft_status_19'],
                    ft_status_20: v['ft_status_20'],
                    ft_status_21: v['ft_status_21'],
                    ft_status_22: v['ft_status_22'],
                    ft_status_23: v['ft_status_23'],
                    ft_status_24: v['ft_status_24'],
                    machine_code: $('#machine_code').val()
                }, function() {
                    tranfer_setting();
                });
            });
        });
    }

    function tranfer_setting() {
        var path_url = $('#urlPath').val() + 'get_setting';
        $.getJSON("<?= base_url('api/Rest_api/get_data_setting') ?>", function(data) {
            $.each(data, function(k, v) {
                $.post(path_url, {
                    setting_temperature: v['setting_temperature'],
                    setting_aeau: v['setting_aeau'],
                    setting_eau: v['setting_eau'],
                    setting_systeme: v['setting_systeme'],
                    setting_temp_deff: v['setting_temp_deff'],
                    setting_basse: v['setting_basse'],
                    setting_haute: v['setting_haute'],
                    setting_tentative: v['setting_tentative'],
                    setting_frequence: v['setting_frequence'],
                    machine_code: $('#machine_code').val()
                }, function() {
                    tranfer_besgo();
                });
            });
        });
    }

    function tranfer_besgo() {
        var path_url = $('#urlPath').val() + 'get_besgo';
        $.getJSON("<?= base_url('api/Rest_api/get_data_besgo') ?>", function(data) {
            $.each(data, function(k, v) {
                $.post(path_url, {
                    backwash_state_1: v['backwash_state_1'],
                    backwash_start_1: v['backwash_start_1'],
                    backwash_end_1: v['backwash_end_1'],
                    backwash_status_1: v['backwash_status_1'],
                    backwash_state_2: v['backwash_state_2'],
                    backwash_start_2: v['backwash_start_2'],
                    backwash_end_2: v['backwash_end_2'],
                    backwash_status_2: v['backwash_status_2'],
                    backwash_state_3: v['backwash_state_3'],
                    backwash_start_3: v['backwash_start_3'],
                    backwash_end_3: v['backwash_end_3'],
                    backwash_status_3: v['backwash_status_3'],
                    backwash_state_4: v['backwash_state_4'],
                    backwash_start_4: v['backwash_start_4'],
                    backwash_end_4: v['backwash_end_4'],
                    backwash_status_4: v['backwash_status_4'],
                    backwash_mode: v['backwash_mode'],
                    backwash_time: v['backwash_time'],
                    machine_code: $('#machine_code').val()
                }, function() {
                    tranfer_substance();
                });
            });
        });
    }

    function tranfer_substance() {
        var path_url = $('#urlPath').val() + 'get_substance';
        $.getJSON("<?= base_url('api/Rest_api/get_substance') ?>", function(data) {
            $.each(data, function(k, v) {
                $.post(path_url, {
                    ph_set: v['ph_set'],
                    ph_lower: v['ph_lower'],
                    ph_inj: v['ph_inj'],
                    ph_freq: v['ph_freq'],
                    orp_set: v['orp_set'],
                    orp_lower: v['orp_lower'],
                    orp_inj: v['orp_inj'],
                    orp_freq: v['orp_freq'],
                    apf_set: v['apf_set'],
                    apf_lower: v['apf_lower'],
                    apf_inj: v['apf_inj'],
                    apf_freq: v['apf_freq'],
                    machine_code: $('#machine_code').val()
                }, function() {
                    tranfer_dashboard();
                });
            });
        });
    }

    function tranfer_dashboard() {
        var path_url = $('#urlPath').val() + 'get_dashboard';
        $.getJSON("<?= base_url('api/Rest_api/get_dashborad') ?>", function(data) {
            $.each(data, function(k, v) {
                $.post(path_url, {
                    pressure: v['pressure'],
                    ph: v['ph'],
                    orp: v['orp'],
                    temperature: v['temperature'],
                    filtration: v['filtration'],
                    pompe_ozone: v['pompe_ozone'],
                    chauffage: v['chauffage'],
                    chauffage2: v['chauffage2'],
                    lamp_zone1: v['lamp_zone1'],
                    lamp_zone2: v['lamp_zone2'],
                    lamp_uv: v['lamp_uv'],
                    volt_1: v['volt_1'],
                    volt_2: v['volt_2'],
                    volt_3: v['volt_3'],
                    machine_code: $('#machine_code').val()
                }, function() {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Open online mode complete',
                        showConfirmButton: false,
                        timer: 1500
                    })
                });
            });
        });
    }

    function set_number_input(type, input_id, type_number) {

        var txt_input = $('#' + input_id).val();
        var split_txt = txt_input.split(' ');
        var number_set = 0.00;
        if (type_number == 'int') {
            number_set = parseInt(split_txt[0]);
            if (type == 'minus') {
                number_set -= 1;
            } else {
                number_set += 1;
            }
        } else {
            number_set = parseFloat(split_txt[0]);
            if (type == 'minus') {
                number_set = number_set - 0.01;
            } else {
                number_set = number_set + 0.01;
            }
        }

        var new_text = number_set.toFixed(2) + ' ' + split_txt[1];
        $('#' + input_id).val(new_text);
        $.post("<?= base_url('admin/Advance/update_setting') ?>", {
            number_set: number_set.toFixed(2),
            field: input_id
        }, function() {
            writefile_set_pressure()
            if ($('#online_setting').val() == 1) {
                set_number_input_server(number_set.toFixed(2), input_id);
            }

        });
    }

    function set_number_input_server(number_set, input_id) {
        var path_server = $('#path_server').val() + 'api/Receive_setting/update_setting';
        $.post(path_server, {
            number_set: number_set,
            field: input_id,
            machine_code: $('#machine_code').val()
        }, function() {})
    }

    function writefile_set_pressure() {
        $.post("<?= base_url('Write_status/write_set_pressure') ?>", {}, function() {

        })
    }
</script>
