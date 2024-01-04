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
        <div class="col-md-12 mt-4">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Data Loging</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-showing">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Date/time</th>
                                            <th>Data</th>
                                            <th>Volt</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table_data">

                                    </tbody>
                                </table>
                                <div class="float-end">
                                    <ul class="pagination" id="list_pagination">

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var page_row = "<?= $page_row ?>";
    var page_pagination;
    $(function() {
        load_data();
    });
    var load_data = function() {
        $.getJSON("<?= base_url('admin/Loging/group_mount_logger/') ?>" + page_row, function(data) {
            page_pagination = data['rows'];

            $.each(data['data'], function(k, v) {
                $('#table_data').append('<tr>' +
                    '<td>' + v['date_create'] + '</td>' +
                    '<td><i class="fa fa-calendar-o fa-lg" onclick="list_data_logger(\'' + v['date_create'] + '\')"></i></td>' +
                    '<td><i class="fa fa-calendar-plus-o fa-lg" onclick="list_data_volt(\'' + v['date_create'] + '\')"></i></td>' +
                    '</tr>');

            });

            var row = page_pagination / 30;
            for (var i = 1; i <= Math.ceil(row); i++) {
                if (i == page_row) {
                    $('#list_pagination').append(' <li class="page-item active"><a class="page-link" >' + i + '</a></li>');
                } else {
                    $('#list_pagination').append(' <li class="page-item"><a class="page-link" onclick="goto_page(\'' + i + '\')">' + i + '</a></li>');
                }

            }
        });

    }
    var list_data_logger = function(date_time) {
        window.location.href = "<?= base_url('admin/Loging/list_data_logger/') ?>" + date_time;
    }
    var list_data_volt = function(date_time) {
        window.location.href = "<?= base_url('admin/Loging/list_data_logger_volt/') ?>" + date_time;
    }
    var goto_page = function(page) {
        window.location.href = "<?= base_url('admin/Loging/index/') ?>" + page;
    }
</script>
