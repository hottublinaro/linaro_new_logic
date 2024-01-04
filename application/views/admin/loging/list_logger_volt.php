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
                                                <td class="text-nowrap"><?= $item->date_time ?></td>
                                                <td class="text-nowrap"><?= $item->va ?></td>
                                                <td class="text-nowrap"><?= $item->vb ?></td>
                                                <td class="text-nowrap"><?= $item->vc ?></td>
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
    function export_logger() {
        window.open("<?= base_url('admin/Loging/export_logger_volt/') ?>" + date_time);

    }
</script>
