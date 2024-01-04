<?php if ($status_heatpump[0]->heat_pump_heater == 1 || $status_heatpump[0]->heat_pump_cooling == 1 || $status_heatpump[0]->heat_pump_all  == 1) { ?>
    <div class="col-md-12 mt-4 mb-5">
    <?php } else { ?>
        <div class="col-md-12 mt-4 mb-5" style="display: none;">
        <?php } ?>
        <div class="box-showing">
            <div class="tab-header text-center">
                <h4>Heat Pump</h4>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="float-end">
                        <i class="fa fa-save fa-2x" onclick="save_heatpump()"></i>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Start Time</label>
                        <input type="time" class="form-control" id="heapump_start_time" name="heapump_start_time" value="<?= $heatpump[0]->heatpump_start ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>End Time</label>
                        <input type="time" class="form-control" id="heapump_end_time" name="heapump_end_time" value="<?= $heatpump[0]->heatpump_end ?>">
                    </div>
                </div>
            </div>

        </div>
        </div>

        <input type="hidden" id="urlPath" value="<?= $url_online ?>">
        <input type="hidden" id="machine_code" value="<?= $machine_code ?>">

        <input type="hidden" id="online_setting" name="online_setting" value="<?= $online_setting[0]->online_status ?>">
        <input type="hidden" id="path_server" name="path_server" value="<?= $path_server ?>">
   
