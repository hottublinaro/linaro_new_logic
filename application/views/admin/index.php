<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTTUB BY SWISS WATER SULUTION</title>
    <?php $this->load->view('template/nav_link') ?>
</head>

<body>
    <i class="fa fa-th-large fa-2x" onclick="goto_menu()"> </i>
    <?= '<h3 class="menu-header-name" onclick="goto_menu()" >' . $menu_name . '</h3>' ?>
    <div class="container">

        <?php $this->load->view('admin/' . $path_file) ?>
    </div>

    <script>
        setInterval(insert_realtime, 3000);
        $(function() {
            insert_realtime();
        });

        function goto_menu() {
            window.location.href = "<?= base_url('admin/menu/index') ?>";
        }

        function insert_realtime() {
            $.post("<?= base_url('Read_status/update_data_realtime_mysql') ?>", {}, function() {})
        }
    </script>
</body>

</html>
