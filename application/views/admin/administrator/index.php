<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="box-showing">
                <div class="tab-header text-center">
                    <h4>Setting</h4>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-showing" onclick="goto_page('admin/Machine_setting/select_machine');" style="cursor:pointer">
                            <h4>Machine Setting <span class="float-end"><i class="fa fa-angle-right fa-lg"></i></span></h4>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="box-showing" onclick="goto_page('admin/Machine_setting/select_option');" style="cursor:pointer">
                            <h4>Selection Setting <span class="float-end"><i class="fa fa-angle-right fa-lg"></i></span></h4>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <div class="box-showing" onclick="modal_online()" style="cursor:pointer">
                            <h4>Online Setting <span class="float-end"><i class="fa fa-angle-right fa-lg"></i></span></h4>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3" onclick="night_time_setting()" style="cursor:pointer">
                        <div class="box-showing">
                            <h4>Night time <span class="float-end"><i class="fa fa-angle-right fa-lg"></i></span></h4>
                        </div>
                    </div>

                    <div class="col-md-12 mt-3" onclick="goto_page_about('admin/Administrator/about_hottub');" style="cursor:pointer">
                        <div class="box-showing">
                            <h4>About System <span class="float-end"><i class="fa fa-angle-right fa-lg"></i></span></h4>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3" onclick="check_change_user()" style="cursor:pointer">
                        <div class="box-showing">
                            <h4>Change User Password <span class="float-end"><i class="fa fa-angle-right fa-lg"></i></span></h4>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3" onclick="update_version()" style="cursor:pointer">
                        <div class="box-showing">
                            <h4>Update Systems <span class="float-end"><i class="fa fa-angle-right fa-lg"></i></span></h4>
                        </div>
                    </div>

                    <div class="col-md-12 mt-3" style="display: none;">
                        <div class="box-showing" onclick="signout()">
                            <h4>Signout <span class="float-end"><i class="fa fa-angle-right fa-lg"></i></span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin/administrator/modal') ?>
<input type="hidden" id="urlPath" value="<?= $url_online ?>">
<input type="hidden" id="machine_code" value="<?= $machine_code ?>">
<script>
    function update_version() {
        $('#txt_error_update').hide();
        $('#modal_check_updatecode').modal('toggle');
    }

    function check_permission_update_code() {
        $.post("<?= base_url('admin/Administrator/check_permission') ?>", {
            user_permission: $('#user_permission_update').val(),
            pwd_permission: $('#pwd_permission_update').val()
        }, function(data) {
            if (data == "true") {
                $('#modal_check_updatecode').modal('hide');
                commit_update();
            } else {
                $('#txt_error_update').show();
            }
        })
    }

    function commit_update() {
        $('#modal_update_systems').modal('toggle');
        $.get("http://localhost:5006/update", {}, function() {})
    }

    function goto_page_about(slug) {
        window.location.href = "<?= base_url() ?>" + slug;
    }

    function modal_online() {
        $('#txt_error_online').hide();
        $('#modal_permission_online').modal('toggle');

    }

    function check_online_permission() {
        $.post("<?= base_url('admin/Administrator/check_permission') ?>", {
            user_permission: $('#online_user').val(),
            pwd_permission: $('#online_password').val()
        }, function(data) {
            if (data == "true") {
                $('#modal_permission_online').modal('hide');
                $('#modal_online').modal('toggle');
            } else {
                $('#txt_error_online').show();
            }
        })
    }

    function check_change_user() {
        $('#txt_error_change').hide();
        $('#modal_change_username').modal('toggle');
    }

    function check_change_username() {
        $.post("<?= base_url('admin/Administrator/check_permission') ?>", {
            user_permission: $('#user_change').val(),
            pwd_permission: $('#pwd_change').val()
        }, function(data) {
            if (data == "true") {
                $('#modal_change_username').modal('hide');
                $('#modal_form_username').modal('toggle');
            } else {
                $('#txt_error_change').show();
            }
        })
    }

    function confirm_change_user() {
        if ($('#c_pwd_change').val() == $('#c_pwd_change_confirm').val()) {
            $.post("<?= base_url('admin/Administrator/change_user_password') ?>", {
                user_permission: $('#c_user_change').val(),
                pwd_permission: $('#c_pwd_change').val()
            }, function() {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Your work has been saved',
                    showConfirmButton: false,
                    timer: 1500
                })
                $('#modal_form_username').modal('hide');
            });
        } else {
            $('#txt_error_change_new').html('Your passwords do not match.');
            $('#txt_error_change_new').show();
        }

    }

    function goto_page(slug) {
        $('#txt_error').hide();
        $('#path_slug').val(slug);
        $('#modal_check_permission').modal('toggle');
        // window.location.href = "<?= base_url() ?>" + slug;
    }

    function check_permission() {
        $.post("<?= base_url('admin/Administrator/check_permission') ?>", {
            user_permission: $('#user_permission').val(),
            pwd_permission: $('#pwd_permission').val()
        }, function(data) {
            if (data == "true") {
                window.location.href = "<?= base_url() ?>" + $("#path_slug").val();
                $('#modal_check_permission').modal('hide');
            } else {
                $('#txt_error').show();
            }
        })
    }

    function signout() {
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to signout",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirm'
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = "<?= base_url('admin/Administrator/signout') ?>";
            } else {

            }
        })

    }

    function update_status_online(status) {
        $.post("<?= base_url('admin/Advance/update_status_online') ?>", {
            status: status
        }, function() {
            if (status == "1") {
                tranfer_setting_mode();
            }
        })
    }

    function tranfer_setting_mode() {
        var path_url = $('#urlPath').val() + 'get_setting_mode';
        $.getJSON("<?= base_url('api/Rest_api/get_setting_mode') ?>", function(data) {
            $.each(data, function(k, v) {
                $.post(path_url, {
                    sm_filtration: v['sm_filtration'],
                    sm_bypass: v['sm_bypass'],
                    sm_ozone_choc: v['sm_ozone_choc'],
                    sm_chauffage: v['sm_chauffage'],
                    sm_pomp_ozone: v['sm_pomp_ozone'],
                    sm_lamp_ozone: v['sm_lamp_ozone'],
                    sm_lamp_uv: v['sm_lamp_uv'],
                    sm_pump_air: v['sm_pump_air'],
                    machine_code: $('#machine_code').val()
                }, function() {
                    tranfer_ph();
                });
            });
        });
    }

    function tranfer_ph() {
        var path_url = $('#urlPath').val() + 'get_ph';
        $.getJSON("<?= base_url('api/Rest_api/get_ph') ?>", function(data) {
            $.each(data, function(k, v) {
                $.post(path_url, {
                    ph_1: v['ph_1'],
                    ph_2: v['ph_2'],
                    ph_3: v['ph_3'],
                    ph_4: v['ph_4'],
                    ph_5: v['ph_5'],
                    ph_6: v['ph_6'],
                    ph_7: v['ph_7'],
                    ph_8: v['ph_8'],
                    ph_9: v['ph_9'],
                    ph_10: v['ph_10'],
                    ph_11: v['ph_11'],
                    ph_12: v['ph_12'],
                    ph_13: v['ph_13'],
                    ph_14: v['ph_14'],
                    ph_15: v['ph_15'],
                    ph_16: v['ph_16'],
                    ph_17: v['ph_17'],
                    ph_18: v['ph_18'],
                    ph_19: v['ph_19'],
                    ph_20: v['ph_20'],
                    ph_21: v['ph_21'],
                    ph_22: v['ph_22'],
                    ph_23: v['ph_23'],
                    ph_24: v['ph_24'],
                    machine_code: $('#machine_code').val()
                }, function() {
                    tranfer_orp()
                });
            });
        });
    }

    function tranfer_orp() {
        var path_url = $('#urlPath').val() + 'get_orp';
        $.getJSON("<?= base_url('api/Rest_api/get_orp') ?>", function(data) {
            $.each(data, function(k, v) {
                $.post(path_url, {
                    orp_1: v['orp_1'],
                    orp_2: v['orp_2'],
                    orp_3: v['orp_3'],
                    orp_4: v['orp_4'],
                    orp_5: v['orp_5'],
                    orp_6: v['orp_6'],
                    orp_7: v['orp_7'],
                    orp_8: v['orp_8'],
                    orp_9: v['orp_9'],
                    orp_10: v['orp_10'],
                    orp_11: v['orp_11'],
                    orp_12: v['orp_12'],
                    orp_13: v['orp_13'],
                    orp_14: v['orp_14'],
                    orp_15: v['orp_15'],
                    orp_16: v['orp_16'],
                    orp_17: v['orp_17'],
                    orp_18: v['orp_18'],
                    orp_19: v['orp_19'],
                    orp_20: v['orp_20'],
                    orp_21: v['orp_21'],
                    orp_22: v['orp_22'],
                    orp_23: v['orp_23'],
                    orp_24: v['orp_24'],
                    machine_code: $('#machine_code').val()
                }, function() {
                    tranfer_apf();
                });
            });
        });
    }

    function tranfer_apf() {
        var path_url = $('#urlPath').val() + 'get_apf';
        $.getJSON("<?= base_url('api/Rest_api/get_apf') ?>", function(data) {
            $.each(data, function(k, v) {
                $.post(path_url, {
                    apf_1: v['apf_1'],
                    apf_2: v['apf_2'],
                    apf_3: v['apf_3'],
                    apf_4: v['apf_4'],
                    apf_5: v['apf_5'],
                    apf_6: v['apf_6'],
                    apf_7: v['apf_7'],
                    apf_8: v['apf_8'],
                    apf_9: v['apf_9'],
                    apf_10: v['apf_10'],
                    apf_11: v['apf_11'],
                    apf_12: v['apf_12'],
                    apf_13: v['apf_13'],
                    apf_14: v['apf_14'],
                    apf_15: v['apf_15'],
                    apf_16: v['apf_16'],
                    apf_17: v['apf_17'],
                    apf_18: v['apf_18'],
                    apf_19: v['apf_19'],
                    apf_20: v['apf_20'],
                    apf_21: v['apf_21'],
                    apf_22: v['apf_22'],
                    apf_23: v['apf_23'],
                    apf_24: v['apf_24'],
                    machine_code: $('#machine_code').val()
                }, function() {
                    tranfer_chlorine();
                });
            });
        });
    }

    function tranfer_chlorine() {
        var path_url = $('#urlPath').val() + 'get_chlorine';
        $.getJSON("<?= base_url('api/Rest_api/get_chlorine') ?>", function(data) {
            $.each(data, function(k, v) {
                $.post(path_url, {
                    chlorine_1: v['chlorine_1'],
                    chlorine_2: v['chlorine_2'],
                    chlorine_3: v['chlorine_3'],
                    chlorine_4: v['chlorine_4'],
                    chlorine_5: v['chlorine_5'],
                    chlorine_6: v['chlorine_6'],
                    chlorine_7: v['chlorine_7'],
                    chlorine_8: v['chlorine_8'],
                    chlorine_9: v['chlorine_9'],
                    chlorine_10: v['chlorine_10'],
                    chlorine_11: v['chlorine_11'],
                    chlorine_12: v['chlorine_12'],
                    chlorine_13: v['chlorine_13'],
                    chlorine_14: v['chlorine_14'],
                    chlorine_15: v['chlorine_15'],
                    chlorine_16: v['chlorine_16'],
                    chlorine_17: v['chlorine_17'],
                    chlorine_18: v['chlorine_18'],
                    chlorine_19: v['chlorine_19'],
                    chlorine_20: v['chlorine_20'],
                    chlorine_21: v['chlorine_21'],
                    chlorine_22: v['chlorine_22'],
                    chlorine_23: v['chlorine_23'],
                    chlorine_24: v['chlorine_24'],
                    machine_code: $('#machine_code').val()
                }, function() {
                    tranfer_filtration_time();
                });
            });
        });
    }

    function tranfer_filtration_time() {
        var path_url = $('#urlPath').val() + 'get_filtration_time';
        $.getJSON("<?= base_url('api/Rest_api/get_filtration_data_time') ?>", function(data) {
            $.each(data, function(k, v) {
                $.post(path_url, {
                    ft_status_1: v['ft_status_1'],
                    ft_status_2: v['ft_status_2'],
                    ft_status_3: v['ft_status_3'],
                    ft_status_4: v['ft_status_4'],
                    ft_status_5: v['ft_status_5'],
                    ft_status_6: v['ft_status_6'],
                    ft_status_7: v['ft_status_7'],
                    ft_status_8: v['ft_status_8'],
                    ft_status_9: v['ft_status_9'],
                    ft_status_10: v['ft_status_10'],
                    ft_status_11: v['ft_status_11'],
                    ft_status_12: v['ft_status_12'],
                    ft_status_13: v['ft_status_13'],
                    ft_status_14: v['ft_status_14'],
                    ft_status_15: v['ft_status_15'],
                    ft_status_16: v['ft_status_16'],
                    ft_status_17: v['ft_status_17'],
                    ft_status_18: v['ft_status_18'],
                    ft_status_19: v['ft_status_19'],
                    ft_status_20: v['ft_status_20'],
                    ft_status_21: v['ft_status_21'],
                    ft_status_22: v['ft_status_22'],
                    ft_status_23: v['ft_status_23'],
                    ft_status_24: v['ft_status_24'],
                    machine_code: $('#machine_code').val()
                }, function() {
                    tranfer_setting();
                });
            });
        });
    }

    function tranfer_setting() {
        var path_url = $('#urlPath').val() + 'get_setting';
        $.getJSON("<?= base_url('api/Rest_api/get_data_setting') ?>", function(data) {
            $.each(data, function(k, v) {
                $.post(path_url, {
                    setting_temperature: v['setting_temperature'],
                    setting_aeau: v['setting_aeau'],
                    setting_eau: v['setting_eau'],
                    setting_systeme: v['setting_systeme'],
                    setting_temp_deff: v['setting_temp_deff'],
                    setting_basse: v['setting_basse'],
                    setting_haute: v['setting_haute'],
                    setting_tentative: v['setting_tentative'],
                    setting_frequence: v['setting_frequence'],
                    machine_code: $('#machine_code').val()
                }, function() {
                    tranfer_besgo();
                });
            });
        });
    }

    function tranfer_besgo() {
        var path_url = $('#urlPath').val() + 'get_besgo';
        $.getJSON("<?= base_url('api/Rest_api/get_data_besgo') ?>", function(data) {
            $.each(data, function(k, v) {
                $.post(path_url, {
                    backwash_state_1: v['backwash_state_1'],
                    backwash_start_1: v['backwash_start_1'],
                    backwash_end_1: v['backwash_end_1'],
                    backwash_status_1: v['backwash_status_1'],
                    backwash_state_2: v['backwash_state_2'],
                    backwash_start_2: v['backwash_start_2'],
                    backwash_end_2: v['backwash_end_2'],
                    backwash_status_2: v['backwash_status_2'],
                    backwash_state_3: v['backwash_state_3'],
                    backwash_start_3: v['backwash_start_3'],
                    backwash_end_3: v['backwash_end_3'],
                    backwash_status_3: v['backwash_status_3'],
                    backwash_state_4: v['backwash_state_4'],
                    backwash_start_4: v['backwash_start_4'],
                    backwash_end_4: v['backwash_end_4'],
                    backwash_status_4: v['backwash_status_4'],
                    backwash_mode: v['backwash_mode'],
                    backwash_time: v['backwash_time'],
                    machine_code: $('#machine_code').val()
                }, function() {
                    tranfer_substance();
                });
            });
        });
    }

    function tranfer_substance() {
        var path_url = $('#urlPath').val() + 'get_substance';
        $.getJSON("<?= base_url('api/Rest_api/get_substance') ?>", function(data) {
            $.each(data, function(k, v) {
                $.post(path_url, {
                    ph_set: v['ph_set'],
                    ph_lower: v['ph_lower'],
                    ph_inj: v['ph_inj'],
                    ph_freq: v['ph_freq'],
                    orp_set: v['orp_set'],
                    orp_lower: v['orp_lower'],
                    orp_inj: v['orp_inj'],
                    orp_freq: v['orp_freq'],
                    apf_set: v['apf_set'],
                    apf_lower: v['apf_lower'],
                    apf_inj: v['apf_inj'],
                    apf_freq: v['apf_freq'],
                    machine_code: $('#machine_code').val()
                }, function() {
                    tranfer_dashboard();
                });
            });
        });
    }

    function tranfer_dashboard() {
        var path_url = $('#urlPath').val() + 'get_online_mode';
        $.getJSON("<?= base_url('api/Rest_api/get_dashborad') ?>", function(data) {
            $.each(data, function(k, v) {
                $.post(path_url, {
                    pressure: v['pressure'],
                    ph: v['ph'],
                    orp: v['orp'],
                    temperature: v['temperature'],
                    filtration: v['filtration'],
                    pompe_ozone: v['pompe_ozone'],
                    chauffage: v['chauffage'],
                    chauffage2: v['chauffage2'],
                    lamp_zone1: v['lamp_zone1'],
                    lamp_zone2: v['lamp_zone2'],
                    lamp_uv: v['lamp_uv'],
                    volt_1: v['volt_1'],
                    volt_2: v['volt_2'],
                    volt_3: v['volt_3'],
                    machine_code: $('#machine_code').val(),

                }, function() {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Open online mode complete',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    $('#modal_online').modal('hide');
                });
            });
        });
    }

    function night_time_setting() {
        $('#txt_error_night_time').hide();
        // $('#modal_night_time_setting').modal('toggle');
        $('#modal_night_time_permission').modal('toggle');
    }

    function check_permission_night_time() {
        $.post("<?= base_url('admin/Administrator/check_permission') ?>", {
            user_permission: $('#user_permission_night_time').val(),
            pwd_permission: $('#pwd_permission_night_time').val()
        }, function(data) {
            if (data == "true") {
                $('#modal_night_time_permission').modal('hide');
                $('#modal_night_time_setting').modal('toggle');
            } else {
                $('#txt_error_night_time').show();
            }
        })
    }
</script>
