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

    .form-switch .form-check-input:checked {
        background-color: #497BF7;
        border-color: #497BF7;
        border: none;
        background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba(255,255,255,1.0)'/></svg>");
    }

    .form-switch .ozone-choc:checked {
        background-color: #D433FF;
        border-color: #D433FF;
        border: none;
        background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba(255,255,255,1.0)'/></svg>");
    }
</style>

<div class="container mt-5 mb-4">
    <div class="row">
        <div class="col-md-12">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Plages horaires </h4>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="color:white">Time</th>
                                <th style="color:white">Baignade</th>
                                <th style="color:white">Ozone choc</th>
                            </tr>
                        </thead>
                        <?php for ($i = 0; $i < 24; $i++) { ?>
                            <tr>
                                <td><?php
                                    $time_set = '';
                                    $filtration_status = "ft_status_" . ($i + 1);
                                    if ($i < 10) {
                                        $time_set = "0" . $i . ":00 - 0" . $i . ":59";
                                        echo $time_set;
                                    } else {
                                        $time_set = $i . ":00 - " . $i . ":59";
                                        echo $time_set;
                                    } ?></td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" <?= ($info[0]->$filtration_status == 1) ? 'checked' : '' ?> onclick="set_filtration_time(1, '<?= $time_set ?>', '<?= $i ?>');" disabled>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input ozone-choc" type="checkbox" id="flexSwitchCheckDefault" <?= ($info[0]->$filtration_status == 2) ? 'checked' : '' ?> onclick="set_filtration_time(2, '<?= $time_set ?>', '<?= $i ?>');" disabled>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function set_filtration_time(status, time_set, row) {
        var ft_status = "ft_status_" + (parseInt(row) + 1);
        var ft_zone = "ft_zone_" + (parseInt(row) + 1);

        $.post("<?= base_url('admin/filtration/set_filration_time') ?>", {
            status: status,
            time_set: time_set,
            ft_zone: ft_zone,
            ft_status: ft_status
        }, function() {
            window.location.reload();
        });
    }
</script>
