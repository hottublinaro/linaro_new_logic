<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Reglages advances</h4>
                </div>
                <div class="row">
                    <div class="col-md-8 mt-3">
                        <h3>Delai de demarrage de pa pompe aeau [ 1 - 10 ]</h3>
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
                        <h3>Delau d'arret de la pompe a eau [ 1 - 59 ]</h3>
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

                <div class="row mt-3">
                    <div class="col-md-8 mt-3">
                        <h3>Delau de demarrage du systeme [ 1-5 ]</h3>
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
                        <h3>Deff. Temp [ 1 - 10 ]</h3>
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
                        <h3>Coupure pression basse [ 0 - 2 ]</h3>
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
                        <h3>Tentative retablissement pression [ 1 - 30 ]</h3>
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
                        <h3>Frequence retablissement pression [ 1 - 5 ]</h3>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="float-end">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1" onclick="set_number_input('minus','frequence','int')"><i class="fa fa-minus fa-lg"></i></span>
                                <input type="text" aria-label="Username" id="frequence" value="<?= $setting[0]->setting_frequence ?> Min." style="width: 90px; text-align : center">
                                <span class="input-group-text" id="basic-addon2" onclick="set_number_input('plus','frequence','int')"><i class="fa fa-plus fa-lg"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
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
                number_set -= 0.01;
            } else {
                number_set += 0.01;
            }
        }

        var new_text = number_set + ' ' + split_txt[1];
        $('#' + input_id).val(new_text);
        $.post("<?= base_url('admin/Advance/update_setting') ?>", {
            number_set: number_set,
            field: input_id
        }, function() {

        });
    }
</script>
