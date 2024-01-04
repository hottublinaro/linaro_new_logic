<style>
    table tr {
        color: white;
    }

    table tr td {
        color: white;
    }
</style>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Data Loging</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-showing">
                            <i class="fa fa-file-excel-o fa-2x" onclick="export_logger('<?= $date_time ?>')" style="color: black;"></i>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th scope="col">Date et heure</th>
                                        <th scope="col">Ph</th>
                                        <th scope="col">Orp</th>
                                        <th scope="col">Température</th>
                                        <th scope="col">Pression</th>
                                        <th scope="col">PLC_Q0</th>
                                        <th scope="col">PLC_Q1</th>
                                        <th scope="col">PLC_Q2</th>
                                        <th scope="col">PLC_Q3</th>
                                        <th scope="col">PLC_I0</th>
                                        <th scope="col">PLC_I1</th>
                                        <th scope="col">PLC_I2</th>
                                        <th scope="col">PLC_I3</th>
                                        <th scope="col">PLC_I4</th>
                                        <th scope="col">PLC_I5</th>
                                        <th scope="col">PLC_I6</th>
                                        <th scope="col">PLC_I7</th>
                                        <th scope="col">Relay_CH0</th>
                                        <th scope="col">Relay_CH1</th>
                                        <th scope="col">Relay_CH2</th>
                                        <th scope="col">Relay_CH3</th>
                                        <th scope="col">Relay_CH4</th>
                                        <th scope="col">Relay_CH5</th>
                                        <th scope="col">Relay_CH6</th>
                                        <th scope="col">Relay_CH7</th>
                                        <!-- 25 -->
                                    </tr>

                                    <tbody>
                                        <?php foreach ($data_file as $item) { ?>
                                            <tr>
                                                <td class="text-nowrap"><?= $item->date_time ?></td>
                                                <td class="text-nowrap"><?= $item->ph ?></td>
                                                <td class="text-nowrap"><?= $item->orp ?></td>
                                                <td class="text-nowrap"><?= $item->temp ?></td>
                                                <td class="text-nowrap"><?= $item->temp ?></td>
                                                <td class="text-nowrap"><?= $item->plc_q0 ?></td>
                                                <td class="text-nowrap"><?= $item->plc_q1 ?></td>
                                                <td class="text-nowrap"><?= $item->plc_q2 ?></td>
                                                <td class="text-nowrap"><?= $item->plc_q3 ?></td>
                                                <td class="text-nowrap"><?= $item->plc_i0 ?></td>
                                                <td class="text-nowrap"><?= $item->plc_i1 ?></td>
                                                <td class="text-nowrap"><?= $item->plc_i2 ?></td>
                                                <td class="text-nowrap"><?= $item->plc_i3 ?></td>
                                                <td class="text-nowrap"><?= $item->plc_i4 ?></td>
                                                <td class="text-nowrap"><?= $item->plc_i5 ?></td>
                                                <td class="text-nowrap"><?= $item->plc_i6 ?></td>
                                                <td class="text-nowrap"><?= $item->plc_i7 ?></td>
                                                <td class="text-nowrap"><?= $item->relay_ch0 ?></td>
                                                <td class="text-nowrap"><?= $item->relay_ch1 ?></td>
                                                <td class="text-nowrap"><?= $item->relay_ch2 ?></td>
                                                <td class="text-nowrap"><?= $item->relay_ch3 ?></td>
                                                <td class="text-nowrap"><?= $item->relay_ch4 ?></td>
                                                <td class="text-nowrap"><?= $item->relay_ch5 ?></td>
                                                <td class="text-nowrap"><?= $item->relay_ch6 ?></td>
                                                <td class="text-nowrap"><?= $item->relay_ch7 ?></td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <?= $links ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function export_logger(date_time) {
        window.open("<?= base_url('admin/Loging/export_logger/') ?>" + date_time);
    }
</script>
