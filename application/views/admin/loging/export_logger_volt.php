<?php
$fileName = "export_logger_volt" . $date_time . ".xlsx";
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
                                <th scope="col">VA</th>
                                <th scope="col">VB</th>
                                <th scope="col">VC</th>
                                <!-- 25 -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data_file as $item) { ?>
                                <tr>
                                    <td><?= $item->date_time ?></td>
                                    <td><?= $item->va ?></td>
                                    <td><?= $item->vb ?></td>
                                    <td><?= $item->vc ?></td>
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
