<style>
    .box-showing {
        cursor: pointer;
    }

    h4 {
        color: black;
    }

    .form-switch {
        margin-left: 30px;
    }
</style>

<div class="container mt-3">
    <div class="text-center">
        <h2>Please select option machine</h2>
    </div>
    <form id="frm-selection" action="<?= base_url('admin/Machine_setting/update_selection') ?>" method="post">
        <div class="row mt-4 mb-5">
            <div class="col-md-4">
                <h4><i class="fa fa-caret-right fa-lg"></i>Voltages</h4>
                <div class="form-check form-switch mt-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="volt_1" name="volt_1" <?= ($selection[0]->volt_1_ph == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="volt_1">1 Ph monitor</label>
                </div>
                <div class="form-check form-switch mt-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="volt_2" name="volt_2" <?= ($selection[0]->volt_2_ph == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="volt_2"> 3 Ph monitor</label>
                </div>
                <h4><i class="fa fa-caret-right fa-lg"></i> Backwash</h4>
                <div class="form-check form-switch mt-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="backwash" name="backwash" <?= ($selection[0]->backwash == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="backwash">Auto matic backwash</label>
                </div>
                <h4><i class="fa fa-caret-right fa-lg"></i> PH</h4>
                <div class="form-check form-switch mt-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="ph" name="ph" <?= ($selection[0]->ph == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="ph">PH</label>
                </div>
                <h4><i class="fa fa-caret-right fa-lg"></i> ORP</h4>
                <div class="form-check form-switch mt-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="orp" name="orp" <?= ($selection[0]->orp == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="orp">ORP</label>
                </div>
                <h4><i class="fa fa-caret-right fa-lg"></i> Température</h4>
                <div class="form-check form-switch mt-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="temp" name="temp" <?= ($selection[0]->temperature == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="orp">Température</label>
                </div>
            </div>
            <div class="col-md-4">
                <h4><i class="fa fa-caret-right fa-lg"></i> APF</h4>
                <div class="form-check form-switch mt-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="apf" name="apf" <?= ($selection[0]->apf == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="apf">APF</label>
                </div>
                <h4><i class="fa fa-caret-right fa-lg"></i> Chlorine</h4>
                <div class="form-check form-switch mt-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="chlorine" name="chlorine" <?= ($selection[0]->chlorine == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="chlorine">Chlorine</label>
                </div>
                <h4><i class="fa fa-caret-right fa-lg"></i> Heater</h4>
                <div class="form-check form-switch mt-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="heater_1" name="heater_1" <?= ($selection[0]->heater_1 == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="heater_1">Heater 1</label>
                </div>
                <div class="form-check form-switch mt-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="heater_2" name="heater_2" <?= ($selection[0]->heater_2 == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="heater_2">Heater 2</label>
                </div>
                <h4><i class="fa fa-caret-right fa-lg"></i> Night Time</h4>
                <div class="form-check form-switch mt-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="night_time" name="night_time" <?= ($selection[0]->night_time == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="night_time">Night Time Switch</label>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <h4><i class="fa fa-caret-right fa-lg"></i> Heat Pump</h4>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="heat" name="heat" <?= ($selection[0]->heat_pump_heater == 1) ? 'checked' : '' ?>>
                        <label class="form-check-label" for="heat">Heat</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="cooling" name="cooling" <?= ($selection[0]->heat_pump_cooling == 1) ? 'checked' : '' ?>>
                        <label class="form-check-label" for="cooling">Cooling</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="heat_cooling" name="heat_cooling" <?= ($selection[0]->heat_pump_all == 1) ? 'checked' : '' ?>>
                        <label class="form-check-label" for="heat_cooling">Heat/Cooling</label>
                    </div>
                </div>
                <h4><i class="fa fa-caret-right fa-lg"></i> Ozone pump</h4>
                <div class="form-check form-switch mt-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="ozone_choc" name="ozone_choc" <?= ($selection[0]->ozone_choc == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="ozone_choc">Ozone Choc</label>
                </div>
                <div class="form-check form-switch mt-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="ozone_1" name="ozone_1" <?= ($selection[0]->ozone_1 == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="ozone_1">Ozone 1</label>
                </div>
                <div class="form-check form-switch mt-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="ozone_2" name="ozone_2" <?= ($selection[0]->ozone_2 == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="ozone_2">Ozone 2</label>
                </div>
                <div class="form-check form-switch mt-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="uv" name="uv" <?= ($selection[0]->uv == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="uv">UV </label>
                </div>
                <div class="form-check form-switch mt-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="air_pump" name="air_pump" <?= ($selection[0]->air_pump == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="air_pump">Air pump </label>
                </div>
            </div>
            <div class="col-md-12" style="display: none;">
                <h4><i class="fa fa-caret-right fa-lg"></i>I Saver</h4>
                <div class="form-check form-switch mt-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="isaver_mode_1" name="isaver_mode_1" <?= ($selection[0]->isaver_mode_1 == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="isaver_mode_1">Mode 1</label>
                </div>
                <div class="form-check form-switch mt-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="isaver_mode_2" name="isaver_mode_2" <?= ($selection[0]->isaver_mode_2 == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="isaver_mode_2">Mode 2</label>
                </div>
                <div class="form-check form-switch mt-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="isaver_mode_3" name="isaver_mode_3" <?= ($selection[0]->isaver_mode_3 == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="isaver_mode_3">Mode 3</label>
                </div>
                <div class="form-check form-switch mt-2">
                    <input class="form-check-input" type="checkbox" role="switch" id="isaver_mode_4" name="isaver_mode_4" <?= ($selection[0]->isaver_mode_4 == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="isaver_mode_4">Mode 4</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="float-end">
                    <button type="button" class="btn btn-danger" onclick="submit_selection();"><i class="fa fa-save fa-lg"></i> SAVE</button>
                </div>

            </div>
        </div>
    </form>

    <script>
        function submit_selection() {
            Swal.fire({
                title: 'Are you sure?',
                text: "Confirm to save these data or not.",
                icon: 'success',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Confirm'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#frm-selection').submit();
                }
            })

        }
    </script>
