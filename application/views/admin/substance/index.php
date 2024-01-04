<style>
    .col-14-2 {
        width: 14.28%;
        background-color: black;
        float: left;
        text-align: center;
        border-radius: 5px;
    }

    .active-week {
        background-color: red;
    }

    .fa-save {
        color: gainsboro;
    }

    .box-water {
        background-color: #1BF2D7;
        color: black;
        text-align: center;
        padding: 5px;
    }

    .box-choc {
        background-color: #00A2BF;
        text-align: center;
        padding: 5px;
    }

    .form-switch .form-check-input:checked {
        background-color: red;
        border-color: red;
        border: none;
        background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba(255,255,255,1.0)'/></svg>");
    }
</style>

<div class="container mt-5 mb-4">
    <div class="row">
        <div class="col-md-12">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Réglages</h4>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="box-water">Baignade</div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-choc">Ozone choc</div>
                    </div>
                    <div class="col-md-6">
                        <div class="float-end">
                            <i class="fa fa-cogs fa-2x" onclick="setting()"></i>
                        </div>
                    </div>
                </div>


                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="color:white">Heure</th>
                                <?php if ($options[0]->ph == 1) { ?>
                                    <th style="color:white">PH</th>
                                <?php } ?>
                                <?php if ($options[0]->orp == 1) { ?>
                                    <th style="color:white">ORP</th>
                                <?php } ?>
                                <?php if ($options[0]->apf == 1) { ?>
                                    <th style="color:white">APF</th>
                                <?php } ?>
                                <?php if ($options[0]->chlorine == 1) { ?>
                                    <th style="color:white">Chlorine</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <?php
                        $ph_status = '';
                        $orp_status = '';
                        $apf_status = '';
                        $chlorine_status = '';
                        $filtration_status = '';
                        for ($i = 0; $i < 24; $i++) {
                            $filtration_status = "ft_status_" . ($i + 1);
                            $ph_status = 'ph_' . ($i + 1);
                            $orp_status = 'orp_' . ($i + 1);
                            $apf_status = 'apf_' . ($i + 1);
                            $chlorine_status = 'chlorine_' . ($i + 1);
                            if ($info[0]->$filtration_status == 1) {
                        ?>
                                <tr style="background-color: #1BF2D7;">
                                <?php } else if ($info[0]->$filtration_status == 2) { ?>
                                <tr style="background-color: #00A2BF;">
                                <?php } else { ?>
                                <tr>
                                <?php } ?>
                                <td><?php
                                    $time_set = '';

                                    if ($i < 10) {
                                        $time_set = "0" . $i . ":00 - 0" . $i . ":59";
                                        echo $time_set;
                                    } else {
                                        $time_set = $i . ":00 - " . $i . ":59";
                                        echo $time_set;
                                    } ?></td>
                                <?php if ($options[0]->ph == 1) { ?>
                                    <td>
                                        <div class="form-check form-switch">
                                            <?php if ($info[0]->$filtration_status == 0) { ?>
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" disabled>
                                            <?php } else { ?>
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" <?= $ph[0]->$ph_status == 1 ? 'checked' : '' ?> onclick="set_ph('<?= $i ?>','<?= $info[0]->$filtration_status ?>');">
                                            <?php } ?>
                                        </div>
                                    </td>
                                <?php } ?>
                                <?php if ($options[0]->orp == 1) { ?>
                                    <td>
                                        <div class="form-check form-switch">
                                            <?php if ($info[0]->$filtration_status == 0) { ?>
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" disabled>
                                            <?php } else { ?>
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" <?= $orp[0]->$orp_status == 1 ? 'checked' : '' ?> onclick="set_orp('<?= $i ?>','<?= $info[0]->$filtration_status ?>');">
                                            <?php } ?>
                                        </div>
                                    </td>
                                <?php } ?>
                                <?php if ($options[0]->apf == 1) { ?>
                                    <td>
                                        <div class="form-check form-switch">
                                            <?php if ($info[0]->$filtration_status == 0) { ?>
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" disabled>
                                            <?php } else { ?>
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" <?= $apf[0]->$apf_status == 1 ? 'checked' : '' ?> onclick="set_apf('<?= $i ?>','<?= $info[0]->$filtration_status ?>');">
                                            <?php } ?>
                                        </div>
                                    </td>
                                <?php } ?>
                                <?php if ($options[0]->chlorine == 1) { ?>
                                    <td>
                                        <div class="form-check form-switch">
                                            <?php if ($info[0]->$filtration_status == 0) { ?>
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" disabled>
                                            <?php } else { ?>
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" <?= $chlorine[0]->$chlorine_status == 1 ? 'checked' : '' ?> onclick="set_chlorine('<?= $i ?>','<?= $info[0]->$filtration_status ?>');">
                                            <?php } ?>
                                        </div>
                                    </td>
                                <?php } ?>
                                </tr>
                            <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="online_setting" name="online_setting" value="<?= $online_setting[0]->online_status ?>">
<input type="hidden" id="path_server" name="path_server" value="<?= $path_server ?>">
<input type="hidden" id="machine_code" name="machine_code" value="<?= $machine_code[0]->machine_code ?>">
<script>
    function set_ph(row, filtration_status) {
        var field = "ph_" + (parseInt(row) + 1);
        $.post("<?= base_url('admin/Substance/save_status_ph') ?>", {
            field: field
        }, function() {
            $.post("<?= base_url('Write_status/write_on_off_ph') ?>", {}, function(response) {})
            if ($('#online_setting').val() == 1) {
                set_ph_server(field);
            } else {
                location.reload();
            }
        })

    }

    function set_ph_server(field) {
        var path_server = $('#path_server').val() + 'api/Receive_setting/save_status_ph';
        $.post(path_server, {
            field: field,
            machine_code: $('#machine_code').val()
        }, function() {
            location.reload();
        });
    }

    function set_orp(row, filtration_status) {
        var field = "orp_" + (parseInt(row) + 1);
        $.post("<?= base_url('admin/Substance/save_status_orp') ?>", {
            field: field
        }, function() {
            $.post("<?= base_url('Write_status/write_on_off_orp') ?>", {}, function(response) {
                console.log(response)
            })
            if ($('#online_setting').val() == 1) {
                set_orp_server(field);
            } else {
                location.reload();
            }
        })

    }

    function set_orp_server(field) {
        var path_server = $('#path_server').val() + 'api/Receive_setting/save_status_orp';
        $.post(path_server, {
            field: field,
            machine_code: $('#machine_code').val()
        }, function() {
            location.reload();
        })
    }

    function set_apf(row, filtration_status) {
        var field = "apf_" + (parseInt(row) + 1);

        $.post("<?= base_url('admin/Substance/save_status_apf') ?>", {
            field: field
        }, function() {
            $.post("<?= base_url('Write_status/write_on_off_apf') ?>", {}, function() {})
            if ($('#online_setting').val() == 1) {
                set_apf_server(field);
            }
        })
    }

    function set_apf_server(field) {
        var path_server = $('#path_server').val() + 'api/Receive_setting/save_status_apf';
        $.post(path_server, {
            field: field,
            machine_code: $('#machine_code').val()
        }, function() {})
    }

    function set_chlorine(row, filtration_status) {
        var field = "chlorine_" + (parseInt(row) + 1);
        $.post("<?= base_url('admin/Substance/save_status_chlorine') ?>", {
            field: field
        }, function() {
            if ($('#online_setting').val() == 1) {
                set_chlorine_server(field);
            }
        })
    }

    function set_chlorine_server(field) {
        var path_server = $('#path_server').val() + 'api/Receive_setting/save_status_chlorine';
        $.post(path_server, {
            field: field,
            machine_code: $('#machine_code').val()
        }, function() {})
    }

    function setting() {
        window.location.href = "<?= base_url('admin/Substance/substance_setting') ?>"
    }
</script>
