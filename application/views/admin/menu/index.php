<style>
    @media only screen and (max-width: 800px) {
        h5 {
            font-size: 14px;
        }

        .box-menu {
            height: 250px;
        }
    }
</style>
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
        <?php if ($options[0]->temperature == 1) { ?>
            <div class="col-md-4">
                <div class="box-menu" onclick="goto_page('Temperature/index');">
                    <img src="<?= base_url('assets/images/temperatures.png') ?>" class="menu_image">
                    <div class="text-center mt-2">
                        <h5>Température</h5>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="col-md-4">
            <div class="box-menu" onclick="goto_page('filtration/index');">
                <img src="<?= base_url('assets/images/filtration.png') ?>" class="menu_image">
                <div class="text-center mt-2">
                    <h5>Réglages plages horaires de filtration</h5>
                </div>
            </div>
        </div>
        <?php if ($options[0]->backwash == 1) { ?>
            <div class="col-md-4">
                <div class="box-menu" onclick="goto_page('backwash/index');">
                    <img src="<?= base_url('assets/images/antibacterial.png') ?>" class="menu_image">
                    <div class="text-center mt-2">
                        <h5>Réglages Backwash</h5>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="col-md-4">
            <div class="box-menu" onclick="goto_page('Substance/index');">
                <img src="<?= base_url('assets/images/paper.png') ?>" class="menu_image">
                <div class="text-center mt-2">
                    <h5>Réglages PH / ORP / APF</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box-menu" onclick="goto_page('Setting/index');">
                <img src="<?= base_url('assets/images/control.png') ?>" class="menu_image">
                <div class="text-center mt-2">
                    <h5>Mode de fonctionnement</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box-menu" onclick="goto_page('Advance/index');">
                <img src="<?= base_url('assets/images/settings.png') ?>" class="menu_image">
                <div class="text-center mt-2">
                    <h5>Réglages de délai démarrage</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box-menu" onclick="goto_page('Analysing/index');">
                <img src="<?= base_url('assets/images/analysing.png') ?>" class="menu_image">
                <div class="text-center mt-2">
                    <h5>Diagnostic</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box-menu" onclick="goto_page('Administrator/index')">
                <img src="<?= base_url('assets/images/unauthorized-person.png') ?>" class="menu_image">
                <div class="text-center mt-2">
                    <h5>Administrator</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box-menu" onclick="goto_page('Loging/index');">
                <img src="<?= base_url('assets/images/log.png') ?>" class="menu_image">
                <div class="text-center mt-2">
                    <h5>Data Log</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box-menu" onclick="open_modal_recovery()">
                <img src="<?= base_url('assets/images/backup.png') ?>" class="menu_image">
                <div class="text-center mt-2">
                    <h5>Déconnexion</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/menu/modal_form'); ?>

<script>
    $(function() {
        $('#error_recovery').hide();
    });

    function goto_page(link) {
        window.location.href = "<?= base_url('admin/') ?>" + link;
    }

    function open_modal_recovery() {
        $('#modal_recovery').modal('toggle');
    }
</script>
