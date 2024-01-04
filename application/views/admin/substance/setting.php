<div class="container mt-5 mb-4">
    <?php if ($options[0]->ph == 1) { ?>
        <div class="row">
            <div class="col-md-12">
                <div class="box-showing">
                    <div class="tab-header text-center">
                        <h4>Setting PH</h4>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-8 mt-3">
                            <h3>Demarrer I'injection</h3>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="float-end">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1" onclick="set_number_input('minus','ph_set','float')"><i class="fa fa-minus fa-lg"></i></span>
                                    <input type="text" aria-label="Username" id="ph_set" value="<?= number_format($info[0]->ph_set, 2) ?>" style="width: 90px; text-align : center">
                                    <span class="input-group-text" id="basic-addon2" onclick="set_number_input('plus','ph_set','float')"><i class="fa fa-plus fa-lg"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-8 mt-3">
                            <h3>Arreter I'injection</h3>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="float-end">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1" onclick="set_number_input('minus','ph_lower','float')"><i class="fa fa-minus fa-lg"></i></span>
                                    <input type="text" aria-label="Username" id="ph_lower" value="<?= number_format($info[0]->ph_lower, 2) ?>" style="width: 90px; text-align : center">
                                    <span class="input-group-text" id="basic-addon2" onclick="set_number_input('plus','ph_lower','float')"><i class="fa fa-plus fa-lg"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-8 mt-3">
                            <h3>Inj.</h3>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="float-end">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1" onclick="set_number_input_text('minus','ph_inj','int')"><i class="fa fa-minus fa-lg"></i></span>
                                    <input type="text" aria-label="Username" id="ph_inj" value="<?= number_format($info[0]->ph_inj, 2) ?> Sec." style="width: 90px; text-align : center">
                                    <span class="input-group-text" id="basic-addon2" onclick="set_number_input_text('plus','ph_inj','int')"><i class="fa fa-plus fa-lg"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-8 mt-3">
                            <h3>Freq.</h3>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="float-end">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1" onclick="set_number_input_text('minus','ph_freq','int')"><i class="fa fa-minus fa-lg"></i></span>
                                    <input type="text" aria-label="Username" id="ph_freq" value="<?= number_format($info[0]->ph_freq, 2) ?> Min" style="width: 90px; text-align : center">
                                    <span class="input-group-text" id="basic-addon2" onclick="set_number_input_text('plus','ph_freq','int')"><i class="fa fa-plus fa-lg"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php if ($options[0]->orp == 1) { ?>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="box-showing">
                    <div class="tab-header text-center">
                        <h4>Setting ORP</h4>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-8 mt-3">
                            <h3>Demarrer I'injection</h3>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="float-end">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1" onclick="set_number_input('minus','orp_set','int')"><i class="fa fa-minus fa-lg"></i></span>
                                    <input type="text" aria-label="Username" id="orp_set" value="<?= number_format($info[0]->orp_set, 2) ?>" style="width: 90px; text-align : center">
                                    <span class="input-group-text" id="basic-addon2" onclick="set_number_input('plus','orp_set','int')"><i class="fa fa-plus fa-lg"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-8 mt-3">
                            <h3>Arreter I'injection</h3>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="float-end">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1" onclick="set_number_input('minus','orp_lower','int')"><i class="fa fa-minus fa-lg"></i></span>
                                    <input type="text" aria-label="Username" id="orp_lower" value="<?= number_format($info[0]->orp_lower, 2) ?>" style="width: 90px; text-align : center">
                                    <span class="input-group-text" id="basic-addon2" onclick="set_number_input('plus','orp_lower','int')"><i class="fa fa-plus fa-lg"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-8 mt-3">
                            <h3>Inj.</h3>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="float-end">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1" onclick="set_number_input_text('minus','orp_inj','int')"><i class="fa fa-minus fa-lg"></i></span>
                                    <input type="text" aria-label="Username" id="orp_inj" value="<?= number_format($info[0]->orp_inj, 2) ?> Sec." style="width: 90px; text-align : center">
                                    <span class="input-group-text" id="basic-addon2" onclick="set_number_input_text('plus','orp_inj','int')"><i class="fa fa-plus fa-lg"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-8 mt-3">
                            <h3>Freq.</h3>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="float-end">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1" onclick="set_number_input_text('minus','orp_freq','int')"><i class="fa fa-minus fa-lg"></i></span>
                                    <input type="text" aria-label="Username" id="orp_freq" value="<?= number_format($info[0]->orp_freq, 2) ?> Min." style="width: 90px; text-align : center">
                                    <span class="input-group-text" id="basic-addon2" onclick="set_number_input_text('plus','orp_freq','int')"><i class="fa fa-plus fa-lg"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php if ($options[0]->apf == 1) { ?>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="box-showing">
                    <div class="tab-header text-center">
                        <h4>Setting APF</h4>
                    </div>
                    <!-- <div class="row mt-3">
                    <div class="col-md-8 mt-3">
                        <h3>Demarrer I'injection</h3>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="float-end">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1" onclick="set_number_input('minus','apf_set','float')"><i class="fa fa-minus fa-lg"></i></span>
                                <input type="text" aria-label="Username" id="apf_set" value="<?= number_format($info[0]->apf_set, 2) ?>" style="width: 90px; text-align : center">
                                <span class="input-group-text" id="basic-addon2" onclick="set_number_input('plus','apf_set','float')"><i class="fa fa-plus fa-lg"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-8 mt-3">
                        <h3>Arreter I'injection</h3>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="float-end">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1" onclick="set_number_input('minus','apf_lower','float')"><i class="fa fa-minus fa-lg"></i></span>
                                <input type="text" aria-label="Username" id="apf_lower" value="<?= number_format($info[0]->apf_lower, 2) ?>" style="width: 90px; text-align : center">
                                <span class="input-group-text" id="basic-addon2" onclick="set_number_input('plus','apf_lower','float')"><i class="fa fa-plus fa-lg"></i></span>
                            </div>
                        </div>
                    </div>
                </div> -->

                    <div class="row mt-3">
                        <div class="col-md-8 mt-3">
                            <h3>Inj.</h3>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="float-end">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1" onclick="set_number_input_text('minus','apf_inj','float')"><i class="fa fa-minus fa-lg"></i></span>
                                    <input type="text" aria-label="Username" id="apf_inj" value="<?= number_format($info[0]->apf_inj, 2) ?> Sec." style="width: 90px; text-align : center">
                                    <span class="input-group-text" id="basic-addon2" onclick="set_number_input_text('plus','apf_inj','float')"><i class="fa fa-plus fa-lg"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-8 mt-3">
                            <h3>Freq.</h3>
                        </div>
                        <div class="col-md-4 mt-3">
                            <div class="float-end">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1" onclick="set_number_input_text('minus','apf_freq','float')"><i class="fa fa-minus fa-lg"></i></span>
                                    <input type="text" aria-label="Username" id="apf_freq" value="<?= number_format($info[0]->apf_freq, 2) ?> Sec." style="width: 90px; text-align : center">
                                    <span class="input-group-text" id="basic-addon2" onclick="set_number_input_text('plus','apf_freq','float')"><i class="fa fa-plus fa-lg"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<input type="hidden" id="online_setting" name="online_setting" value="<?= $online_setting[0]->online_status ?>">
<input type="hidden" id="path_server" name="path_server" value="<?= $path_server ?>">
<input type="hidden" id="machine_code" name="machine_code" value="<?= $machine_code[0]->machine_code ?>">
<script>
    function set_number_input(status, input_id, type) {
        var number = $('#' + input_id).val();
        if (status == 'minus') {
            if (type == 'float') {
                number = parseFloat(number) - parseFloat(0.01);
            } else {
                number = parseInt(number) - parseInt(1);
            }
        } else {
            if (type == 'float') {
                console.log(number)
                number = parseFloat(number) + parseFloat(0.01);
            } else {
                number = parseInt(number) + parseInt(1);
            }
        }
        $('#' + input_id).val(number.toFixed(2));
        $.post("<?= base_url('admin/Substance/update_substance_setting') ?>", {
            input_id: input_id,
            number: number
        }, function() {
            if ($('#online_setting').val() == 1) {
                set_number_input_server(input_id, number);
            }
        });
    }


    function set_number_input_text(status, input_id, type) {
        var number = $('#' + input_id).val();
        var txt_split = number.split(" ");
        if (status == 'minus') {
            if (type == 'float') {
                number = parseFloat(txt_split[0]) - parseFloat(0.01);
            } else {
                number = parseInt(txt_split[0]) - parseInt(1);
            }
        } else {
            if (type == 'float') {
                number = parseFloat(txt_split[0]) + parseFloat(0.01);
            } else {
                number = parseInt(txt_split[0]) + +parseInt(1);
            }
        }
        var new_text = number.toFixed(2) + ' ' + txt_split[1];
        $('#' + input_id).val(new_text);
        $.post("<?= base_url('admin/Substance/update_substance_setting') ?>", {
            input_id: input_id,
            number: number
        }, function() {
            if ($('#online_setting').val() == 1) {
                set_number_input_server(input_id, number);
            }
        });
    }

    function set_number_input_server(input_id, number) {
        var path_server = $('#path_server').val() + 'api/Receive_setting/update_substance_setting';
        $.post(path_server, {
            input_id: input_id,
            number: number,
            machine_code: $('#machine_code').val()
        }, function() {})
    }
</script>
