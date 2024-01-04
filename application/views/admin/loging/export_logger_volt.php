<?php

header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=export_volt.xls");
header("Pragma: no-cache");
header("Expires: 0");


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
