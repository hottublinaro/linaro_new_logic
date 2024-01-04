<style>
    .progress {
        width: 150px;
        height: 150px;
        line-height: 150px;
        background: none;
        margin: 0 auto;
        box-shadow: none;
        position: relative;
    }

    .progress:after {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 12px solid #fff;
        position: absolute;
        top: 0;
        left: 0;
    }

    .progress>span {
        width: 50%;
        height: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 1;
    }

    .progress .progress-left {
        left: 0;
    }

    .progress .progress-bar {
        width: 100%;
        height: 100%;
        background: none;
        border-width: 12px;
        border-style: solid;
        position: absolute;
        top: 0;
    }

    .progress .progress-left .progress-bar {
        left: 100%;
        border-top-right-radius: 80px;
        border-bottom-right-radius: 80px;
        border-left: 0;
        -webkit-transform-origin: center left;
        transform-origin: center left;
    }

    .progress .progress-right {
        right: 0;
    }

    .progress .progress-right .progress-bar {
        left: -100%;
        border-top-left-radius: 80px;
        border-bottom-left-radius: 80px;
        border-right: 0;
        -webkit-transform-origin: center right;
        transform-origin: center right;
        animation: loading-1 1.8s linear forwards;
    }

    .progress .progress-value {
        width: 90%;
        height: 90%;
        border-radius: 50%;
        background: #44484b;
        font-size: 24px;
        color: #fff;
        line-height: 135px;
        text-align: center;
        position: absolute;
        top: 5%;
        left: 5%;
    }

    .progress.blue .progress-bar {
        border-color: #049dff;
    }

    .progress.blue .progress-left .progress-bar {
        animation: loading-2 1.5s linear forwards 1.8s;
    }

    .progress-left .progress-bar {
        animation: loading-3 1s linear forwards 1.8s;
    }

    .progress-left .progress-bar {
        animation: loading-4 0.4s linear forwards 1.8s;
    }

    .progress-left .progress-bar {
        animation: loading-5 1.2s linear forwards 1.8s;
    }

    @keyframes loading-1 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }
    }

    @keyframes loading-2 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }
    }

    @keyframes loading-3 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }
    }

    @keyframes loading-4 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }
    }

    @media only screen and (max-width: 990px) {
        .progress {
            margin-bottom: 20px;
        }
    }
</style>

<style>
    .col-14-2 {
        width: 14.28%;
        background-color: black;
        float: left;
        text-align: center;
        border-radius: 5px;
    }

    .col-14-2:hover {
        cursor: pointer;
    }

    .active-week {
        background-color: red;
    }

    .fa-save {
        color: blue;
    }
</style>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>MODE </h4>
                </div>
                <div class="row mt-3">
                    <div class="co-md-12">
                        <div class="switch-toggle switch-3 switch-candy">
                            <input id="back_wash_on" name="back_wash" type="radio" <?= ($info[0]->backwash_mode == 1) ? 'checked' : '' ?> onclick="update_mode('1');" />
                            <label for="back_wash_on" onclick="" style="margin-top: 5px;">Manuel</label>

                            <input id="back_wash_na" name="back_wash" type="radio" <?= ($info[0]->backwash_mode == 0) ? 'checked' : '' ?> onclick="update_mode('0');" />
                            <label for="back_wash_na" onclick="" style="margin-top: 5px;">Arrêt</label>

                            <input id="back_wash_auto" name="back_wash" type="radio" <?= ($info[0]->backwash_mode == 2) ? 'checked' : '' ?> onclick="update_mode('2');" />
                            <label for="back_wash_auto" style="margin-top: 5px;">Automatique</label>
                            <a></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3" style="display: none;">
        <div class="col-md-12">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Compte a rebours </h4>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h1>0</h1>
                            <h3>Temps restant</h3>
                            <div class="container d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-md-9 col-sm-6">
                                        <div class="progress blue">
                                            <span class="progress-left">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar"></span>
                                            </span>
                                            <div class="progress-value">100%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row mt-3 mb-5" style="display: none;">
        <div class="col-md-12 mt-4">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Réglage du backwash auto</h4>
                </div>
                <div class="row mt-4">
                    <div class="col-md-3">
                        <h3>Durée en secondes : </h3>
                    </div>

                    <div class="col-md-9 ">
                        <div class="float-end">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1" onclick="update_time_backwash('minus');"><i class="fa fa-minus fa-lg"></i></span>
                                <input type="text" aria-label="Username" id="adjust_time" value="<?= $info[0]->backwash_time ?>" style=" width: 70px; text-align : center">
                                <span class="input-group-text" id="basic-addon2" onclick="update_time_backwash('plus');"><i class="fa fa-plus fa-lg"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3 mb-5">
        <div class="col-md-12 mt-4">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Calendrier du backwash</h4>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="float-end">
                            <i class="fa fa-trash fa-2x" style="padding-right: 10px; color: black" onclick="clear_setup_backwash('1')"></i>
                            <?php if ($info[0]->backwash_status_1 == 1) { ?>
                                <i class="fa fa-power-off fa-2x" style="padding-right: 10px; color:#27F82B" onclick="update_status('<?= $info[0]->backwash_status_1 ?>','1')"></i>
                            <?php } else { ?>
                                <i class="fa fa-power-off fa-2x" style="padding-right: 10px; color:red" onclick="update_status('<?= $info[0]->backwash_status_1 ?>','1')"></i>
                            <?php } ?>
                            <i class="fa fa-save fa-2x" onclick="save_backwash_one()"></i>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="col-14-2 " id="day_1_1" onclick="selection_day('day_1_1','txt_day_state_1');">
                            Dim
                        </div>
                        <div class="col-14-2" id="day_1_2" onclick="selection_day('day_1_2','txt_day_state_1');">
                            Lun
                        </div>
                        <div class="col-14-2 " id="day_1_3" onclick="selection_day('day_1_3','txt_day_state_1');">
                            Mar
                        </div>
                        <div class="col-14-2" id="day_1_4" onclick="selection_day('day_1_4','txt_day_state_1');">
                            Mer
                        </div>
                        <div class="col-14-2" id="day_1_5" onclick="selection_day('day_1_5','txt_day_state_1');">
                            Jeu
                        </div>
                        <div class="col-14-2 " id="day_1_6" onclick="selection_day('day_1_6','txt_day_state_1');">
                            Ven
                        </div>
                        <div class="col-14-2" id="day_1_7" onclick="selection_day('day_1_7','txt_day_state_1');">
                            Sam
                        </div>
                        <div class="row g-1">
                            <div class="col-md-6">
                                <label>Démarrage : </label>
                                <input type="time" class="form-control" name="start_time_1" id="start_time_1" value="<?= $info[0]->backwash_start_1 ?>" step="2">
                            </div>
                            <div class="col-md-6">
                                <label>Arrêt : </label>
                                <input type="time" class="form-control" name="end_time_1" id="end_time_1" value="<?= $info[0]->backwash_end_1 ?>" step="2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="float-end">
                            <i class="fa fa-trash fa-2x" style="padding-right: 10px; color: black" onclick="clear_setup_backwash('2')"></i>

                            <?php if ($info[0]->backwash_status_2 == 1) { ?>
                                <i class="fa fa-power-off fa-2x" style="padding-right: 10px; color:#27F82B" onclick="update_status('<?= $info[0]->backwash_status_2 ?>','2')"></i>
                            <?php } else { ?>
                                <i class="fa fa-power-off fa-2x" style="padding-right: 10px; color:red" onclick="update_status('<?= $info[0]->backwash_status_2 ?>','2')"></i>
                            <?php } ?>
                            <i class="fa fa-save fa-2x" onclick="save_backwash_two()"></i>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="col-14-2 " id="day_2_1" onclick="selection_day('day_2_1','txt_day_state_2');">
                            Dim
                        </div>
                        <div class="col-14-2" id="day_2_2" onclick="selection_day('day_2_2','txt_day_state_2');">
                            Lun
                        </div>
                        <div class="col-14-2 " id="day_2_3" onclick="selection_day('day_2_3','txt_day_state_2');">
                            Mar
                        </div>
                        <div class="col-14-2" id="day_2_4" onclick="selection_day('day_2_4','txt_day_state_2');">
                            Mer
                        </div>
                        <div class="col-14-2" id="day_2_5" onclick="selection_day('day_2_5','txt_day_state_2');">
                            Jeu
                        </div>
                        <div class="col-14-2 " id="day_2_6" onclick="selection_day('day_2_6','txt_day_state_2');">
                            Ven
                        </div>
                        <div class="col-14-2" id="day_2_7" onclick="selection_day('day_2_7','txt_day_state_2');">
                            Sam
                        </div>
                        <div class="row g-1">
                            <div class="col-md-6">
                                <label>Démarrage : </label>
                                <input type="time" class="form-control" name="start_time_2" id="start_time_2" value="<?= $info[0]->backwash_start_2 ?>" step="2">
                            </div>
                            <div class="col-md-6">
                                <label>Arrêt : </label>
                                <input type="time" class="form-control" name="end_time_2" id="end_time_2" value="<?= $info[0]->backwash_end_2 ?>" step="2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="float-end">
                            <i class="fa fa-trash fa-2x" style="padding-right: 10px; color: black" onclick="clear_setup_backwash('3')"></i>

                            <?php if ($info[0]->backwash_status_3 == 1) { ?>
                                <i class="fa fa-power-off fa-2x" style="padding-right: 10px; color:#27F82B" onclick="update_status('<?= $info[0]->backwash_status_3 ?>','3')"></i>
                            <?php } else { ?>
                                <i class="fa fa-power-off fa-2x" style="padding-right: 10px; color:red" onclick="update_status('<?= $info[0]->backwash_status_3 ?>','3')"></i>
                            <?php } ?>
                            <i class="fa fa-save fa-2x" onclick="save_backwash_three()"></i>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="col-14-2 " id="day_3_1" onclick="selection_day('day_3_1','txt_day_state_3');">
                            Dim
                        </div>
                        <div class="col-14-2" id="day_3_2" onclick="selection_day('day_3_2','txt_day_state_3');">
                            Lun
                        </div>
                        <div class="col-14-2 " id="day_3_3" onclick="selection_day('day_3_3','txt_day_state_3');">
                            Mar
                        </div>
                        <div class="col-14-2" id="day_3_4" onclick="selection_day('day_3_4','txt_day_state_3');">
                            Mer
                        </div>
                        <div class="col-14-2" id="day_3_5" onclick="selection_day('day_3_5','txt_day_state_3');">
                            Jeu
                        </div>
                        <div class="col-14-2 " id="day_3_6" onclick="selection_day('day_3_6','txt_day_state_3');">
                            Ven
                        </div>
                        <div class="col-14-2" id="day_3_7" onclick="selection_day('day_3_7','txt_day_state_3');">
                            Sam
                        </div>
                        <div class="row g-1">
                            <div class="col-md-6">
                                <label>Démarrage : </label>
                                <input type="time" class="form-control" name="start_time_3" id="start_time_3" value="<?= $info[0]->backwash_start_3 ?>" step="2">
                            </div>
                            <div class="col-md-6">
                                <label>Arrêt : </label>
                                <input type="time" class="form-control" name="end_time_3" id="end_time_3" value="<?= $info[0]->backwash_end_3 ?>" step="2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="float-end">
                            <i class="fa fa-trash fa-2x" style="padding-right: 10px; color: black" onclick="clear_setup_backwash('3')"></i>
                            <?php if ($info[0]->backwash_status_4 == 1) { ?>
                                <i class="fa fa-power-off fa-2x" style="padding-right: 10px; color:#27F82B" onclick="update_status('<?= $info[0]->backwash_status_4 ?>','4')"></i>
                            <?php } else { ?>
                                <i class="fa fa-power-off fa-2x" style="padding-right: 10px; color:red" onclick="update_status('<?= $info[0]->backwash_status_4 ?>','4')"></i>
                            <?php } ?>
                            <i class="fa fa-save fa-2x" onclick="save_backwash_four()"></i>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="col-14-2 " id="day_4_1" onclick="selection_day('day_4_1','txt_day_state_4');">
                            Dim
                        </div>
                        <div class="col-14-2" id="day_4_2" onclick="selection_day('day_4_2','txt_day_state_4');">
                            Lun
                        </div>
                        <div class="col-14-2 " id="day_4_3" onclick="selection_day('day_4_3','txt_day_state_4');">
                            Mar
                        </div>
                        <div class="col-14-2" id="day_4_4" onclick="selection_day('day_4_4','txt_day_state_4');">
                            Mer
                        </div>
                        <div class="col-14-2" id="day_4_5" onclick="selection_day('day_4_5','txt_day_state_4');">
                            Jeu
                        </div>
                        <div class="col-14-2 " id="day_4_6" onclick="selection_day('day_4_6','txt_day_state_4');">
                            Ven
                        </div>
                        <div class="col-14-2" id="day_4_7" onclick="selection_day('day_4_7','txt_day_state_4');">
                            Sam
                        </div>
                        <div class="row g-1">
                            <div class="col-md-6">
                                <label>Démarrage : </label>
                                <input type="time" class="form-control" name="start_time_4" id="start_time_4" value="<?= $info[0]->backwash_start_4 ?>" step="2">
                            </div>
                            <div class="col-md-6">
                                <label>Arrêt : </label>
                                <input type="time" class="form-control" name="end_time_4" id="end_time_4" value="<?= $info[0]->backwash_end_4 ?>" step="2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<input type="hidden" id="txt_day_state_1" value="<?php echo ($this->Backwash_model->change_array_day_one($info[0]->backwash_state_1)) ?>">
<input type="hidden" id="txt_day_state_2" value="<?php echo ($this->Backwash_model->change_array_day_two($info[0]->backwash_state_2)) ?>">
<input type="hidden" id="txt_day_state_3" value="<?php echo ($this->Backwash_model->change_array_day_three($info[0]->backwash_state_3)) ?>">
<input type="hidden" id="txt_day_state_4" value="<?php echo ($this->Backwash_model->change_array_day_four($info[0]->backwash_state_4)) ?>">
<input type="hidden" id="txt_day_state_5">
<input type="hidden" id="txt_day_state_6">
<!-- online set -->
<input type="hidden" id="online_setting" name="online_setting" value="<?= $online_setting[0]->online_status ?>">
<input type="hidden" id="path_server" name="path_server" value="<?= $path_server ?>">
<input type="hidden" id="machine_code" name="machine_code" value="<?= $machine_code[0]->machine_code ?>">
<!-- online set -->
<script>
    $(function() {
        set_state_day();
    });

    function set_state_day() {
        var date_1 = $('#txt_day_state_1').val();
        if (date_1 != '') {
            var split_day_1 = date_1.split(',');
            for (var d1 = 0; d1 < split_day_1.length; d1++) {
                if (split_day_1[d1] != '') {
                    $('#' + split_day_1[d1]).addClass('active-week');
                }
            }
        }


        var date_2 = $('#txt_day_state_2').val();
        if (date_2 != '') {
            var split_day_2 = date_2.split(',');
            for (var d2 = 0; d2 < split_day_2.length; d2++) {
                if (split_day_2[d2] != '') {
                    $('#' + split_day_2[d2]).addClass('active-week');
                }
            }
        }

        var date_3 = $('#txt_day_state_3').val();
        if (date_3 != "") {
            var split_day_3 = date_3.split(',');
            for (var d3 = 0; d3 < split_day_3.length; d3++) {
                if (split_day_3[d3] != '') {
                    $('#' + split_day_3[d3]).addClass('active-week');
                }
            }
        }

        var date_4 = $('#txt_day_state_4').val();
        if (date_4 != '') {
            var split_day_4 = date_4.split(',');
            for (var d4 = 0; d4 < split_day_4.length; d4++) {
                if (split_day_4[d4] != '') {
                    $('#' + split_day_4[d4]).addClass('active-week');
                }
            }
        }

    }

    function selection_day(id_selection, input_id) {
        var state_txt = $('#' + input_id).val();
        if (state_txt == '') {
            $('#' + input_id).val(id_selection + ',');
            $('#' + id_selection).addClass('active-week');
        } else {
            var split_txt = state_txt.split(',');
            console.log(split_txt)
            var greaterThanTen = split_txt.filter(element => element == id_selection);
            if (greaterThanTen.length == 1) {
                $('#' + id_selection).removeClass('active-week');
                arr = split_txt.filter(function(item) {
                    return item !== id_selection
                })
                $('#' + input_id).val(arr);
            } else {
                state_txt += id_selection + ',';
                $('#' + id_selection).addClass('active-week');
                $('#' + input_id).val(state_txt);
            }
        }
    }

    function save_backwash_one() {
        if ($('#start_time_1').val() == '') {
            if ($('#start_time_1').val() == '') {
                Swal.fire(
                    'ERROR',
                    'Please enter start time',
                    'error'
                )
                return false;
            }
        } else {
            // เช็คเงื่อนไข
            if ($('#start_time_1').val() > $('#end_time_1').val()) {
                alert_system_incorrect();
            } else {
                //เช็คเงือนไขนาที
                var start_time_1 = $('#start_time_1').val();
                var end_time_1 = $('#end_time_1').val();
                var split_time_start = start_time_1.split(":");
                var split_time_end = end_time_1.split(":");
                var minus_time = parseInt(split_time_end[1]) - parseInt(split_time_start[1]);
                if (minus_time > 5) {
                    alert_system_incorrect();
                } else {
                    var arr_day = [];
                    var day = $('#txt_day_state_1').val();
                    var split_day = day.split(",");
                    for (var i = 0; i < split_day.length; i++) {
                        if (split_day[i] != '') {
                            var set_text_split = split_day[i];
                            split_of_day = set_text_split.split('_');
                            arr_day.push(parseInt(split_of_day[2]));
                        }
                    }
                    $.post("<?= base_url('admin/backwash/save_backwash_one') ?>", {
                        day_state: arr_day.sort(),
                        start_time: $('#start_time_1').val(),
                        end_time: $('#end_time_1').val()
                    }, function(data) {
                        if ($('#online_setting').val() == 1) {
                            save_backwash_one_server(arr_day.sort());
                        } else {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Your work has been saved',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                    });
                }


            }

        }

    }



    function save_backwash_one_server(arr_day) {
        var path_server = $('#path_server').val() + 'api/Receive_setting/save_backwash_one';
        $.post(path_server, {
            day_state: arr_day,
            start_time: $('#start_time_1').val(),
            end_time: $('#end_time_1').val(),
            machine_code: $('#machine_code').val()
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

    function save_backwash_two() {
        if ($('#start_time_2').val() == '') {
            if ($('#start_time_2').val() == '') {
                Swal.fire(
                    'ERROR',
                    'Please enter start time',
                    'error'
                )
                return false;
            }
        } else {
            if ($('#start_time_2').val() > $('#end_time_2').val()) {
                alert_system_incorrect();
            } else {
                var start_time_2 = $('#start_time_2').val();
                var end_time_2 = $('#end_time_2').val();
                var split_time_start = start_time_2.split(":");
                var split_time_end = end_time_2.split(":");
                var minus_time = parseInt(split_time_end[1]) - parseInt(split_time_start[1]);
                if (minus_time > 5) {
                    alert_system_incorrect();
                } else {
                    var arr_day = [];
                    var day = $('#txt_day_state_2').val();
                    var split_day = day.split(",");
                    for (var i = 0; i < split_day.length; i++) {
                        if (split_day[i] != '') {
                            var set_text_split = split_day[i];
                            split_of_day = set_text_split.split('_');
                            arr_day.push(split_of_day[2]);
                        }
                    }
                    $.post("<?= base_url('admin/backwash/save_backwash_two') ?>", {
                        day_state: arr_day.sort(),
                        start_time: $('#start_time_2').val(),
                        end_time: $('#end_time_2').val()
                    }, function() {
                        if ($('#online_setting').val() == 1) {
                            save_backwash_two_server(arr_day.sort());
                        } else {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Your work has been saved',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }

                    });
                }

            }

        }
    }

    function save_backwash_two_server(arr_day) {
        var path_server = $('#path_server').val() + 'api/Receive_setting/save_backwash_two';
        $.post(path_server, {
            day_state: arr_day,
            start_time: $('#start_time_2').val(),
            end_time: $('#end_time_2').val(),
            machine_code: $('#machine_code').val()
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

    function save_backwash_three() {
        if ($('#start_time_3').val() == '') {
            if ($('#start_time_3').val() == '') {
                Swal.fire(
                    'ERROR',
                    'Please enter start time',
                    'error'
                )
                return false;
            }

        } else {
            if ($('#start_time_3').val() > $('#end_time_3').val()) {
                alert_system_incorrect();
            } else {
                var start_time_3 = $('#start_time_3').val();
                var end_time_3 = $('#end_time_3').val();
                var split_time_start = start_time_3.split(':');
                var split_time_end = end_time_3.split(':');
                var minus_time = parseInt(split_time_end[1]) - parseInt(split_time_start[1]);
                if (minus_time > 5) {
                    alert_system_incorrect();
                } else {
                    var arr_day = [];
                    var day = $('#txt_day_state_3').val();
                    var split_day = day.split(",");
                    for (var i = 0; i < split_day.length; i++) {
                        if (split_day[i] != '') {
                            var set_text_split = split_day[i];
                            split_of_day = set_text_split.split('_');
                            arr_day.push(split_of_day[2]);
                        }
                    }
                    $.post("<?= base_url('admin/backwash/save_backwash_three') ?>", {
                        day_state: arr_day.sort(),
                        start_time: $('#start_time_3').val(),
                        end_time: $('#end_time_3').val()
                    }, function() {
                        if ($('#online_setting').val() == 1) {
                            save_backwash_three_server(arr_day.sort());
                        } else {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Your work has been saved',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                    });
                }
            }
        }
    }

    function save_backwash_three_server(arr_day) {
        var path_server = $('#path_server').val() + 'api/Receive_setting/save_backwash_three';
        $.post(path_server, {
            day_state: arr_day,
            start_time: $('#start_time_3').val(),
            end_time: $('#end_time_3').val(),
            machine_code: $('#machine_code').val()
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

    function save_backwash_four() {
        if ($('#start_time_4').val() == '') {
            if ($('#start_time_4').val() == '') {
                Swal.fire(
                    'ERROR',
                    'Please enter start time',
                    'error'
                )
                return false;
            }

        } else {
            if ($('#start_time_4').val() > $('#end_time_4').val()) {
                alert_system_incorrect();
            } else {
                var start_time_4 = $('#start_time_4').val();
                var end_time_4 = $('#end_time_4').val();
                var split_time_start = start_time_4.split(':');
                var split_time_end = end_time_4.split(':');
                var minus_time = parseInt(split_time_end[1]) - parseInt(split_time_start[1]);
                if (minus_time > 5) {
                    alert_system_incorrect();
                } else {
                    var arr_day = [];
                    var day = $('#txt_day_state_4').val();
                    var split_day = day.split(",");
                    for (var i = 0; i < split_day.length; i++) {
                        if (split_day[i] != '') {
                            var set_text_split = split_day[i];
                            split_of_day = set_text_split.split('_');
                            arr_day.push(split_of_day[2]);
                        }
                    }
                    $.post("<?= base_url('admin/backwash/save_backwash_four') ?>", {
                        day_state: arr_day.sort(),
                        start_time: $('#start_time_4').val(),
                        end_time: $('#end_time_4').val()
                    }, function() {
                        if ($('#online_setting').val() == 1) {
                            save_backwash_four_server(arr_day.sort());
                        } else {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Your work has been saved',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                    });
                }
            }
        }
    }

    function save_backwash_four_server(arr_day) {
        var path_server = $('#path_server').val() + 'api/Receive_setting/save_backwash_four';
        $.post(path_server, {
            day_state: arr_day,
            start_time: $('#start_time_4').val(),
            end_time: $('#end_time_4').val(),
            machine_code: $('#machine_code').val()
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

    function update_status(status, state) {
        $.post("<?= base_url('admin/backwash/update_backwash_status') ?>", {
            status: status,
            state: state
        }, function() {
            if ($('#online_setting').val() == 1) {
                update_status_backwash_online(status, state);
            } else {
                location.reload();
            }
        });
    }

    function update_status_backwash_online(status, state) {
        var path_server = $('#path_server').val() + 'api/Receive_setting/update_backwash_status';
        $.post(path_server, {
            status: status,
            state: state,
            machine_code: $('#machine_code').val()
        }, function() {
            location.reload();
        })
    }

    function update_time_backwash(status) {
        var time = parseInt($('#adjust_time').val());
        if (status == 'minus') {
            if (time > 0) {
                time -= 1;
            }
        } else {
            if (time < 60) {
                time += 1;
            }

        }
        $('#adjust_time').val(time);
        $.post("<?= base_url('admin/backwash/update_adjust_time') ?>", {
            time: time
        }, function() {});
    }

    function update_mode(status) {
        $.post("<?= base_url('admin/backwash/update_mode') ?>", {
            status: status
        }, function() {
            if ($('#online_setting').val() == 1) {
                connect_path_server(status);
            }
        });
    }

    function connect_path_server(status) {
        var path_server = $('#path_server').val() + 'api/Receive_setting/update_mode_backwash';
        $.post(path_server, {
            status: status,
            machine_code: $('#machine_code').val()
        }, function() {})
    }

    function clear_setup_backwash(status) {
        $.post('<?= base_url('admin/backwash/clear_data_backwash') ?>', {
            status: status
        }, function() {
            clear_setup_backwash_server(status);
        })
    }

    function clear_setup_backwash_server(status) {
        var path_server = $('#path_server').val() + 'api/Receive_setting/clear_data_backwash';
        $.post(path_server, {
            status: status,
            machine_code: $('#machine_code').val()
        }, function() {
            location.reload();
        })
    }

    function alert_system_incorrect() {
        Swal.fire({
            title: 'System alert',
            text: "You set the time incorrectly.",
            icon: 'warning',
        }).then((result) => {

        })
    }
</script>
