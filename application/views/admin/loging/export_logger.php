<?php
$fileName = "export_logger_" . $date_time . ".xlsx";
header("Content-Disposition: attachment; filename=\"$fileName\"");
header("Content-Type: application/vnd.ms-excel");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <table class="table">
                        <thead>
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
                        </thead>
                        <tbody>
                            <?php foreach ($data_file as $item) { ?>
                                <tr>
                                    <td><?= $item->date_time ?></td>
                                    <td><?= $item->ph ?></td>
                                    <td><?= $item->orp ?></td>
                                    <td><?= $item->temp ?></td>
                                    <td><?= $item->temp ?></td>
                                    <td><?= $item->plc_q0 ?></td>
                                    <td><?= $item->plc_q1 ?></td>
                                    <td><?= $item->plc_q2 ?></td>
                                    <td><?= $item->plc_q3 ?></td>
                                    <td><?= $item->plc_i0 ?></td>
                                    <td><?= $item->plc_i1 ?></td>
                                    <td><?= $item->plc_i2 ?></td>
                                    <td><?= $item->plc_i3 ?></td>
                                    <td><?= $item->plc_i4 ?></td>
                                    <td><?= $item->plc_i5 ?></td>
                                    <td><?= $item->plc_i6 ?></td>
                                    <td><?= $item->plc_i7 ?></td>
                                    <td><?= $item->relay_ch0 ?></td>
                                    <td><?= $item->relay_ch1 ?></td>
                                    <td><?= $item->relay_ch2 ?></td>
                                    <td><?= $item->relay_ch3 ?></td>
                                    <td><?= $item->relay_ch4 ?></td>
                                    <td><?= $item->relay_ch5 ?></td>
                                    <td><?= $item->relay_ch6 ?></td>
                                    <td><?= $item->relay_ch7 ?></td>
                                    <td></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
