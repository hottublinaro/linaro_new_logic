<div class="container mb-4">
    <div class="text-center">
        <h1>MENU</h1>
    </div>

    <div class="row g-3">
        <div class="col-md-4">
            <div class="box-menu" onclick="goto_page('dashboard/index');">
                <img src="<?= base_url('assets/images/dashboard.png') ?>" class="menu_image">
                <div class="text-center mt-2">
                    <h5>Accueil</h5>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="box-menu" onclick="goto_page('filtration/index');">
                <img src="<?= base_url('assets/images/filtration.png') ?>" class="menu_image">
                <div class="text-center mt-2">
                    <h5>Reglage filtration</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box-menu" onclick="goto_page('backwash/index');">
                <img src="<?= base_url('assets/images/antibacterial.png') ?>" class="menu_image">
                <div class="text-center mt-2">
                    <h5>Reglages du backwash</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box-menu" onclick="goto_page('Substance/index');">
                <img src="<?= base_url('assets/images/paper.png') ?>" class="menu_image">
                <div class="text-center mt-2">
                    <h5>PH / ORP / APF</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box-menu" onclick="goto_page('Setting/index');">
                <img src="<?= base_url('assets/images/control.png') ?>" class="menu_image">
                <div class="text-center mt-2">
                    <h5>Settings</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="display: none;">
            <div class="box-menu" onclick="goto_page('Advance/index');">
                <img src="<?= base_url('assets/images/settings.png') ?>" class="menu_image">
                <div class="text-center mt-2">
                    <h5>Reglases avances</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="display: none;">
            <div class="box-menu">
                <img src="<?= base_url('assets/images/analysing.png') ?>" class="menu_image">
                <div class="text-center mt-2">
                    <h5>Analyse</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box-menu" onclick="signup_admin()">
                <img src="<?= base_url('assets/images/unauthorized-person.png') ?>" class="menu_image">
                <div class="text-center mt-2">
                    <h5>Administrator</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="display: none;">
            <div class="box-menu">
                <img src="<?= base_url('assets/images/log.png') ?>" class="menu_image">
                <div class="text-center mt-2">
                    <h5>Data Log</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="display: none;">
            <div class="box-menu">
                <img src="<?= base_url('assets/images/backup.png') ?>" class="menu_image">
                <div class="text-center mt-2">
                    <h5>Recovery Machine</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('member/menu/modal_menu'); ?>

<script>
    function goto_page(link) {
        window.location.href = "<?= base_url('member/') ?>" + link;
    }

    function signup_admin() {
        console.log("-----")
        $('#modal_signin').modal('toggle');
    }
</script>
