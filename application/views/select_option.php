<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTTUB BY SWITTHAI WATER SULUTION</title>
    <?php $this->load->view('template/nav_link') ?>
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

        .form-switch .form-check-input:checked {
            background-color: red;
            border-color: red;
            border: none;
            background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba(255,255,255,1.0)'/></svg>");
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <div class="text-center">
            <img src="<?= base_url('assets/favicon.png') ?>" style="width : 15%">
            <h1>Welcome to Machine</h1>
            <h2>Please select option machine</h2>
        </div>
        <form id="frm-selection" action="<?= base_url('welcome/save_machine_selection') ?>" method="post">
            <div class="row mt-4 mb-5">
                <div class="col-md-4">
                    <h4><i class="fa fa-caret-right fa-lg"></i> No Volt</h4>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="volt_1" name="volt_1">
                        <label class="form-check-label" for="volt_1">1 Ph monitor</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="volt_2" name="volt_2">
                        <label class="form-check-label" for="volt_2"> 3 Ph monitor</label>
                    </div>
                    <h4><i class="fa fa-caret-right fa-lg"></i> Backwash</h4>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="backwash" name="backwash">
                        <label class="form-check-label" for="backwash">Auto matic backwash</label>
                    </div>
                    <h4><i class="fa fa-caret-right fa-lg"></i> PH</h4>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="ph" name="ph">
                        <label class="form-check-label" for="ph">PH</label>
                    </div>
                    <h4><i class="fa fa-caret-right fa-lg"></i> ORP</h4>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="orp" name="orp">
                        <label class="form-check-label" for="orp">ORP</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4><i class="fa fa-caret-right fa-lg"></i> APF</h4>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="apf" name="apf">
                        <label class="form-check-label" for="apf">APF</label>
                    </div>
                    <h4><i class="fa fa-caret-right fa-lg"></i> Chlorine</h4>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="chlorine" name="chlorine">
                        <label class="form-check-label" for="chlorine">Chlorine</label>
                    </div>
                    <h4><i class="fa fa-caret-right fa-lg"></i> Heater</h4>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="heater_1" name="heater_1">
                        <label class="form-check-label" for="heater_1">Heater 1</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="heater_2" name="heater_2">
                        <label class="form-check-label" for="heater_2">Heater 2</label>
                    </div>
                    <h4><i class="fa fa-caret-right fa-lg"></i> Night Time</h4>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="night_time" name="night_time">
                        <label class="form-check-label" for="night_time">Night Time Switch</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4><i class="fa fa-caret-right fa-lg"></i> Heat Pump</h4>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="heat" name="heat">
                        <label class="form-check-label" for="heat">Heat</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="cooling" name="cooling">
                        <label class="form-check-label" for="cooling">Cooling</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="heat_cooling" name="heat_cooling">
                        <label class="form-check-label" for="heat_cooling">Heat/Cooling</label>
                    </div>
                    <h4><i class="fa fa-caret-right fa-lg"></i> Ozone pump</h4>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="ozone_choc" name="ozone_choc">
                        <label class="form-check-label" for="ozone_choc">Ozone Choc</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="ozone_1" name="ozone_1">
                        <label class="form-check-label" for="ozone_1">Ozone 1</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="ozone_2" name="ozone_2">
                        <label class="form-check-label" for="ozone_2">Ozone 2</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="uv" name="uv">
                        <label class="form-check-label" for="uv">UV </label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="air_pump" name="air_pump">
                        <label class="form-check-label" for="air_pump">Air pump </label>
                    </div>
                </div>
                <div class="col-md-12">
                    <h4><i class="fa fa-caret-right fa-lg"></i>I Saver</h4>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="isaver_mode_1" name="isaver_mode_1">
                        <label class="form-check-label" for="isaver_mode_1">Mode 1</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="isaver_mode_2" name="isaver_mode_2">
                        <label class="form-check-label" for="isaver_mode_2">Mode 2</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="isaver_mode_3" name="isaver_mode_3">
                        <label class="form-check-label" for="isaver_mode_3">Mode 3</label>
                    </div>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" role="switch" id="isaver_mode_4" name="isaver_mode_4">
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
</body>

</html>
