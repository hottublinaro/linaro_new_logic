<style>
    label {
        font-size: 14px;
    }

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
</style>
<div class="container mt-4 mb-4">
    <div class="row">

        <div class="col-md-12">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Mode de filtration</h4>
                </div>
                <div class="row mt-3">
                    <div class="co-md-12">
                        <div class="switch-toggle switch-3 switch-candy">
                            <input id="filtation_on" name="filtation" type="radio" <?= $setting_mode[0]->sm_filtration == 1 ? 'checked' : '' ?> value="1" onchange="change_status('filtation','sm_filtration')" />
                            <label for="filtation_on" onclick="" style="margin-top: 5px;">Manuelle</label>

                            <input id="filtation_na" name="filtation" type="radio" <?= $setting_mode[0]->sm_filtration == 0 ? 'checked' : '' ?> value="0" onchange="change_status('filtation','sm_filtration')" />
                            <label for="filtation_na" onclick="" style="margin-top: 5px;">Arrêt</label>

                            <input id="filtration_off" name="filtation" type="radio" value="2" <?= $setting_mode[0]->sm_filtration == 2 ? 'checked' : '' ?> onchange="change_status('filtation','sm_filtration')" />
                            <label for="filtration_off" style="margin-top: 5px;">Auto</label>
                            <a></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-4">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Contrôle de pression</h4>
                </div>
                <div class="row mt-3">
                    <div class="co-md-12">
                        <div class="switch-toggle switch-3 switch-candy">
                            <input id="bypass_off" name="bypass" type="radio" <?= $setting_mode[0]->sm_bypass == 0 ? 'checked' : '' ?> onchange="change_status('bypass','sm_bypass')" value="0" />
                            <label for="bypass_off" onclick="" style="margin-top: 5px;">Désactivé</label>

                            <input id="bypass_active" name="bypass" type="radio" <?= $setting_mode[0]->sm_bypass == 1 ? 'checked' : '' ?> onchange="change_status('bypass','sm_bypass')" value="1" />
                            <label for="bypass_active" style="margin-top: 5px;">Activé</label>
                            <a></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-4">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Ozone Choc</h4>
                </div>
                <div class="row mt-3">
                    <div class="co-md-12">
                        <div class="switch-toggle switch-3 switch-candy">
                            <input id="ozone_choc_on" name="ozone_choc" type="radio" <?= $setting_mode[0]->sm_ozone_choc == 1 ? 'checked' : '' ?> onchange="change_status('ozone_choc','sm_ozone_choc')" value="1" />
                            <label for="ozone_choc_on" onclick="" style="margin-top: 5px;">Manuel</label>

                            <input id="ozone_choc_na" name="ozone_choc" type="radio" <?= $setting_mode[0]->sm_ozone_choc == 0 ? 'checked' : '' ?> onchange="change_status('ozone_choc','sm_ozone_choc')" value="0" />
                            <label for="ozone_choc_na" onclick="" style="margin-top: 5px;">Arrêt</label>

                            <input id="ozone_choc_auto" name="ozone_choc" type="radio" <?= $setting_mode[0]->sm_ozone_choc == 2 ? 'checked' : '' ?> onchange="change_status('ozone_choc','sm_ozone_choc')" value="2" />
                            <label for="ozone_choc_auto" style="margin-top: 5px;">Auto</label>
                            <a></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-4">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Chauffage</h4>
                </div>
                <div class="row mt-3">
                    <div class="co-md-12">
                        <div class="switch-toggle switch-3 switch-candy">
                            <input id="chauffage_on" name="chauffage" type="radio" <?= $setting_mode[0]->sm_chauffage == 1 ? 'checked' : '' ?> onchange="change_status('chauffage','sm_chauffage')" value="1" />
                            <label for="chauffage_on" onclick="" style="margin-top: 5px;">Marche</label>

                            <input id="chauffage_off" name="chauffage" type="radio" <?= $setting_mode[0]->sm_chauffage == 0 ? 'checked' : '' ?> onchange="change_status('chauffage','sm_chauffage')" value="0" />
                            <label for="chauffage_off" style="margin-top: 5px;">Arrêt</label>
                            <a></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-4">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Pompe Ozone</h4>
                </div>
                <div class="row mt-3">
                    <div class="co-md-12">
                        <div class="switch-toggle switch-3 switch-candy">
                            <input id="pompe_ozone_manual" name="pompe_ozone" type="radio" <?= $setting_mode[0]->sm_pomp_ozone == 1 ? 'checked' : '' ?> value="1" onchange="change_status('pompe_ozone','sm_pomp_ozone')" />
                            <label for="pompe_ozone_manual" onclick="" style="margin-top: 5px;">Mode Baignade + Ozone choc</label>

                            <input id="pompe_ozone_na" name="pompe_ozone" type="radio" <?= $setting_mode[0]->sm_pomp_ozone == 0 ? 'checked' : '' ?> value="0" onchange="change_status('pompe_ozone','sm_pomp_ozone')" />
                            <label for="pompe_ozone_na" onclick="" style="margin-top: 5px;">Arrêt</label>

                            <input id="pompe_ozone_choc" name="pompe_ozone" type="radio" <?= $setting_mode[0]->sm_pomp_ozone == 2 ? 'checked' : '' ?> value="2" onchange="change_status('pompe_ozone','sm_pomp_ozone')" />
                            <label for="pompe_ozone_choc" style="margin-top: 5px;">Ozone choc</label>
                            <a></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-4">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Lamp Ozone</h4>
                </div>
                <div class="row mt-3">
                    <div class="co-md-12">
                        <div class="switch-toggle switch-3 switch-candy">
                            <input id="lampe_ozone_manual" name="lampe_ozone" type="radio" <?= $setting_mode[0]->sm_lamp_ozone == 1 ? 'checked' : '' ?> onchange="change_status('lampe_ozone','sm_lamp_ozone')" value="1" />
                            <label for="lampe_ozone_manual" onclick="" style="margin-top: 5px;">Mode Baignade + Ozone choc</label>

                            <input id="lampe_ozone_na" name="lampe_ozone" type="radio" <?= $setting_mode[0]->sm_lamp_ozone == 0 ? 'checked' : '' ?> onchange="change_status('lampe_ozone','sm_lamp_ozone')" value="0" />
                            <label for="lampe_ozone_na" onclick="" style="margin-top: 5px;">Arrêt</label>

                            <input id="lampe_ozone_choc" name="lampe_ozone" type="radio" <?= $setting_mode[0]->sm_lamp_ozone == 2 ? 'checked' : '' ?> onchange="change_status('lampe_ozone','sm_lamp_ozone')" value="2" />
                            <label for="lampe_ozone_choc" style="margin-top: 5px;">Ozone choc</label>
                            <a></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-4">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Lamp UV</h4>
                </div>
                <div class="row mt-3">
                    <div class="co-md-12">
                        <div class="switch-toggle switch-3 switch-candy">
                            <input id="lampe_uv_manual" name="lampe_uv" type="radio" <?= $setting_mode[0]->sm_lamp_uv == 1 ? 'checked' : '' ?> onchange="change_status('lampe_uv','sm_lamp_uv')" value="1" />
                            <label for="lampe_uv_manual" onclick="" style="margin-top: 5px;">Mode Baignade + Ozone choc</label>

                            <input id="lampe_uv_na" name="lampe_uv" type="radio" <?= $setting_mode[0]->sm_lamp_uv == 0 ? 'checked' : '' ?> onchange="change_status('lampe_uv','sm_lamp_uv')" value="0" />
                            <label for="lampe_uv_na" onclick="" style="margin-top: 5px;">Arrêt</label>

                            <input id="lampe_uv_choc" name="lampe_uv" type="radio" <?= $setting_mode[0]->sm_lamp_uv == 2 ? 'checked' : '' ?> onchange="change_status('lampe_uv','sm_lamp_uv')" value="2" />
                            <label for="lampe_uv_choc" style="margin-top: 5px;">Ozone choc</label>
                            <a></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-4">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Pompe a air</h4>
                </div>
                <div class="row mt-3">
                    <div class="co-md-12">
                        <div class="switch-toggle switch-3 switch-candy">
                            <input id="pompe_air_manual" name="pompe_air" type="radio" <?= $setting_mode[0]->sm_pump_air == 1 ? 'checked' : '' ?> onchange="change_status('pompe_air','sm_pump_air')" value="1" />
                            <label for="pompe_air_manual" onclick="" style="margin-top: 5px;">Mode Baignade + Ozone choc</label>

                            <input id="pompe_air_na" name="pompe_air" type="radio" <?= $setting_mode[0]->sm_pump_air == 0 ? 'checked' : '' ?> onchange="change_status('pompe_air','sm_pump_air')" value="0" />
                            <label for="pompe_air_na" onclick="" style="margin-top: 5px;">Arrêt</label>

                            <input id="pompe_air_choc" name="pompe_air" type="radio" <?= $setting_mode[0]->sm_pump_air == 2 ? 'checked' : '' ?> onchange="change_status('pompe_air','sm_pump_air')" value="2" />
                            <label for="pompe_air_choc" style="margin-top: 5px;">Ozone choc</label>
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
    function change_status(input_name, fields) {
        var filtration = $('input[name="' + input_name + '"]:checked').val();
        update_setting(filtration, fields);
    }

    function update_setting(set, field) {
        $.post("<?= base_url('admin/Setting/update_setting') ?>", {
            set: set,
            field: field
        }, function() {
            if ($('#online_setting').val() == 1) {
                connect_path_server(set, field);
            }
        });
    }

    function connect_path_server(set, field) {
        var path_server = $('#path_server').val() + 'api/Receive_setting/update_setting_formachine';
        $.post(path_server, {
            set: set,
            field: field,
            machine_code: $('#machine_code').val()
        }, function() {})
    }
</script>
