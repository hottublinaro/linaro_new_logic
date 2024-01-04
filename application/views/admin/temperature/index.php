<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 ">
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

        <div class="col-md-12 mt-5">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Calibrate température</h4>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <h3>Type</h3>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="float-end">
                            <select class="form-control" id="type_calibrate" name="type_calibrate" style="width: 150px; text-align:center" onchange="change_status_type()">
                                <option value="minus" <?= ($online_setting[0]->temp_type == "minus" ? 'selected' : '') ?>>Minus</option>
                                <option value="plus" <?= ($online_setting[0]->temp_type == "plus" ? 'selected' : '') ?>>Plus</option>
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
                                <input type="text" id="calibrate_temp" value="<?= $online_setting[0]->temp_calibrate ?>" style="width: 70px; text-align : center">
                                <span class="input-group-text" id="basic-addon2" onclick="set_calibrate('plus')"><i class="fa fa-plus fa-lg"></i></span>
                            </div>
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
    function change_status_type() {
        $.post("<?= base_url('admin/Temperature/update_status_type') ?>", {
            type_calibrate: $('#type_calibrate').val()
        }, function() {

        })
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
        $.post("<?= base_url('admin/Temperature/update_value_calibrate') ?>", {
            calibrate_temp: calibrate_temp.toFixed(2)
        }, function() {})
    }

    function set_temperature(txt) {
        temp = parseInt($('#temperature').val());
        if (txt == 'minus') {
            if (temp > 0) {
                temp = temp - 1
            }
        } else {
            if (temp < 42) {
                temp = temp + 1
            }

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

    function connect_path_server(temp) {
        var path_server = $('#path_server').val() + 'api/Receive_setting/update_set_temperature';
        $.post(path_server, {
            temp: temp,
            machine_code: $('#machine_code').val()
        }, function() {})
    }
</script>
