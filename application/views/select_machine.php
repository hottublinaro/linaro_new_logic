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
    </style>
</head>

<body>
    <div class="container mt-3">
        <div class="text-center">
            <img src="<?= base_url('assets/favicon.png') ?>" style="width : 15%">
            <h1>Welcome to Machine</h1>
            <h2>Please select machine program</h2>
        </div>

        <div class="row mt-3">
            <h2>HOTTUB</h2>
            <div class="col-md-4">
                <div class="box-showing text-center" style="background-color: black;" onclick="setup_machine('standard_plus')">
                    <h3>STANDARD PLUS</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-showing text-center" style="background-color: black;" onclick="setup_machine('performance')">
                    <h3>PERFORMANCE</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-showing text-center" style="background-color: black;" onclick="setup_machine('performance_pro')">
                    <h3>PERFORMANCE PRO</h3>
                </div>
            </div>

        </div>
        <div class="row mt-3">
            <h2>UBO</h2>
            <div class="col-md-4">
                <div class="box-showing text-center" style="background-color: black;" onclick="setup_machine('ubo_full_160')">
                    <h3>UBO FULL 160</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-showing text-center" style="background-color: black;" onclick="setup_machine('ubo_full_240')">
                    <h3>UBO FULL 240</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-showing text-center" style="background-color: black;" onclick="setup_machine('ubo_full_240_plus')">
                    <h3>UBO FULL 240+</h3>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="box-showing text-center" style="background-color: black;" onclick="setup_machine('ubo_full_480')">
                    <h3>UBO FULL 480</h3>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="box-showing text-center" style="background-color: black;" onclick="setup_machine('ubo_160')">
                    <h3>UBO 160</h3>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="box-showing text-center" style="background-color: black;" onclick="setup_machine('ubo_240')">
                    <h3>UBO 240</h3>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="box-showing text-center" style="background-color: black;" onclick="setup_machine('ubo_240_plus')">
                    <h3>UBO 240+</h3>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="box-showing text-center" style="background-color: black;" onclick="setup_machine('ubo_480')">
                    <h3>UBO 480</h3>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="machine_code" value="MA-202306-001">
    <script>
        function setup_machine(machine_name) {
            $.post("<?= base_url('welcome/set_machine') ?>", {
                machine_name: machine_name,
                machine_code: $('#machine_code').val()
            }, function() {
                window.location.href = "<?= base_url('welcome/select_option') ?>";
            });
        }
    </script>
</body>

</html>
