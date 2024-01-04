<style>
    .box-showing {
        cursor: pointer;
    }
</style>
<div class="container mt-3">
    <div class="text-center">

        <h2>Please select machine program</h2>
        <input type="text" id="machine_code" value="<?= $machine[0]->machine_code ?>" style="text-align: center;">
    </div>

    <div class="row mt-3">
        <h2>HOTTUB</h2>
        <div class="col-md-4">
            <div class="box-showing text-center" style="background-color: <?= ($machine[0]->machine_name == 'standard_plus') ? 'red' : 'black' ?>;" onclick="setup_machine('standard_plus')">
                <h3>STANDARD PLUS</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box-showing text-center" style="background-color: <?= ($machine[0]->machine_name == 'performance') ? 'red' : 'black' ?>;" onclick="setup_machine('performance')">
                <h3>PERFORMANCE</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box-showing text-center" style="background-color:  <?= ($machine[0]->machine_name == 'performance_pro') ? 'red' : 'black' ?>;" onclick="setup_machine('performance_pro')">
                <h3>PERFORMANCE PRO</h3>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <h2>UBO</h2>
        <div class="col-md-4">
            <div class="box-showing text-center" style="background-color: <?= ($machine[0]->machine_name == 'ubo_full_160') ? 'red' : 'black' ?>;" onclick="setup_machine('ubo_full_160')">
                <h3>UBO FULL 160</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box-showing text-center" style="background-color: <?= ($machine[0]->machine_name == 'ubo_full_240') ? 'red' : 'black' ?>;" onclick="setup_machine('ubo_full_240')">
                <h3>UBO FULL 240</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box-showing text-center" style="background-color: <?= ($machine[0]->machine_name == 'ubo_full_240_plus') ? 'red' : 'black' ?>;" onclick="setup_machine('ubo_full_240_plus')">
                <h3>UBO FULL 240+</h3>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="box-showing text-center" style="background-color: <?= ($machine[0]->machine_name == 'ubo_full_480') ? 'red' : 'black' ?>;" onclick="setup_machine('ubo_full_480')">
                <h3>UBO FULL 480</h3>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="box-showing text-center" style="background-color: <?= ($machine[0]->machine_name == 'ubo_160') ? 'red' : 'black' ?>;" onclick="setup_machine('ubo_160')">
                <h3>UBO 160</h3>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="box-showing text-center" style="background-color: <?= ($machine[0]->machine_name == 'ubo_240') ? 'red' : 'black' ?>;" onclick="setup_machine('ubo_240')">
                <h3>UBO 240</h3>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="box-showing text-center" style="background-color: <?= ($machine[0]->machine_name == 'ubo_240_plus') ? 'red' : 'black' ?>;" onclick="setup_machine('ubo_240_plus')">
                <h3>UBO 240+</h3>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="box-showing text-center" style="background-color: <?= ($machine[0]->machine_name == 'ubo_480') ? 'red' : 'black' ?>;" onclick="setup_machine('ubo_480')">
                <h3>UBO 480</h3>
            </div>
        </div>
    </div>
</div>

<script>
    function setup_machine(machine_name) {
        $.post("<?= base_url('admin/Machine_setting/update_machine') ?>", {
            machine_name: machine_name,
            machine_code: $('#machine_code').val()
        }, function() {
            location.reload();
        });
    }
</script>
