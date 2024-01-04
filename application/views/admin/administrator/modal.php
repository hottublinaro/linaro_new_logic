<style>
    .loader {
        font-size: 48px;
        display: inline-block;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        color: #263238;
        box-sizing: border-box;
        text-shadow: 0 0 2px #FFF, 0 0 1px #FFF, 0 0 1px #FFF;
        letter-spacing: 2px;
        position: relative;
    }

    .loader::after {
        content: 'Loading';
        position: absolute;
        left: 0;
        top: 0;
        color: #FFF;
        width: 100%;
        height: 100%;
        overflow: hidden;
        box-sizing: border-box;
        animation: animloader 6s linear infinite;
    }

    @keyframes animloader {
        0% {
            width: 0%;
        }

        100% {
            width: 100%;
        }
    }
</style>

<div class="modal" id="modal_online" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" style="color:black">Online Mode</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="switch-toggle switch-3 switch-candy">
                    <input id="bypass_off" name="bypass" type="radio" <?= ($setting[0]->online_status == 0) ? 'checked' : '' ?> onclick="update_status_online('0')" />
                    <label for="bypass_off" onclick="" style="margin-top: 5px;">Close</label>
                    <input id="bypass_active" name="bypass" type="radio" <?= ($setting[0]->online_status == 1) ? 'checked' : '' ?> onclick="update_status_online('1')" />
                    <label for="bypass_active" style="margin-top: 5px;">Start</label>
                    <a></a>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>


<div class="modal" id="modal_check_permission" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" style="color:black">Permission</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <input type="hidden" id="path_slug">
                <div class="form-group">
                    <label style="color: black;">Username</label>
                    <input type="text" class="form-control" id="user_permission" onclick="clear_permission_error()">
                </div>
                <div class="form-group">
                    <label style="color: black;">Password</label>
                    <input type="password" class="form-control" id="pwd_permission" onclick="clear_permission_error()">
                </div>
                <p style="color:red; font-size:14px" id="txt_error">The name or password is incorrect.</p>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="check_permission()">Confirm</button>
            </div>

        </div>
    </div>
</div>



<div class="modal" id="modal_change_username" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" style="color:black">Permission</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <input type="hidden" id="path_slug">
                <div class="form-group">
                    <label style="color: black;">Username</label>
                    <input type="text" class="form-control" id="user_change" onclick="clear_permission_error()">
                </div>
                <div class="form-group">
                    <label style="color: black;">Password</label>
                    <input type="password" class="form-control" id="pwd_change" onclick="clear_permission_error()">
                </div>
                <p style="color:red; font-size:14px" id="txt_error_change">The name or password is incorrect.</p>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="check_change_username()">Confirm</button>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="modal_form_username" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" style="color:black">New User Pasword</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <input type="hidden" id="path_slug">
                <div class="form-group">
                    <label style="color: black;">Username</label>
                    <input type="text" class="form-control" id="c_user_change" onclick="clear_permission_error()">
                </div>
                <div class="form-group">
                    <label style="color: black;">Password</label>
                    <input type="password" class="form-control" id="c_pwd_change" onclick="clear_permission_error()">
                </div>
                <div class="form-group">
                    <label style="color: black;">Confirm Password</label>
                    <input type="password" class="form-control" id="c_pwd_change_confirm" onclick="clear_permission_error()">
                </div>
                <p style="color:red; font-size:14px" id="txt_error_change_new">The name or password is incorrect.</p>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="confirm_change_user()">Confirm</button>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="modal_permission_online" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" style="color:black">Permission</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <input type="hidden" id="path_slug">
                <div class="form-group">
                    <label style="color: black;">Username</label>
                    <input type="text" class="form-control" id="online_user" onclick="clear_permission_error()">
                </div>
                <div class="form-group">
                    <label style="color: black;">Password</label>
                    <input type="password" class="form-control" id="online_password" onclick="clear_permission_error()">
                </div>
                <p style="color:red; font-size:14px" id="txt_error_online">The name or password is incorrect.</p>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="check_online_permission()">Confirm</button>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="modal_update_systems" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" style="color:black">Update Systems</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" style="background: black;">
                <div class="text-center">
                    <span class="loader">Loading</span>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="modal" id="modal_check_updatecode" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" style="color:black">Permission</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <input type="hidden" id="path_slug">
                <div class="form-group">
                    <label style="color: black;">Username</label>
                    <input type="text" class="form-control" id="user_permission_update" onclick="clear_permission_error()">
                </div>
                <div class="form-group">
                    <label style="color: black;">Password</label>
                    <input type="password" class="form-control" id="pwd_permission_update" onclick="clear_permission_error()">
                </div>
                <p style="color:red; font-size:14px" id="txt_error_update">The name or password is incorrect.</p>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="check_permission_update_code()">Confirm</button>
            </div>

        </div>
    </div>
</div>

<script>
    function clear_permission_error() {
        $('#txt_error').hide();
        $('#txt_error_change').hide();
        $('#txt_error_change_new').hide();
        $('#txt_error_online').hide();
        $('#txt_error_update').hide();
        $('#txt_error_night_time').hide();
    }
</script>

<div class="modal" id="modal_night_time_permission" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" style="color:black">Permission</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-group">
                    <label style="color: black;">Username</label>
                    <input type="text" class="form-control" id="user_permission_night_time" onclick="clear_permission_error()">
                </div>
                <div class="form-group">
                    <label style="color: black;">Password</label>
                    <input type="password" class="form-control" id="pwd_permission_night_time" onclick="clear_permission_error()">
                </div>
                <p style="color:red; font-size:14px" id="txt_error_night_time">The name or password is incorrect.</p>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="check_permission_night_time()">Confirm</button>
            </div>

        </div>
    </div>
</div>



<div class="modal" id="modal_night_time_setting" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" style="color:black">Setting Night Time</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h5 style="color: black;">Switch Night Time Machine</h5>
                <div class="switch-toggle switch-3 switch-candy">
                    <input id="on" name="sm_night_time" type="radio" <?= ($night_time) ? $night_time[0]->night_time_enable == 0 ? 'checked' : '' : '' ?> value="0" />
                    <label for="on" onclick="">Désactivé</label>
                    <input id="off" name="sm_night_time" type="radio" <?= ($night_time) ? $night_time[0]->night_time_enable == 1 ? 'checked' : '' : '' ?> value="1" />
                    <label for="off" onclick="">Activé</label>

                    <a></a>
                </div>
                <h5 class="mt-3" style="color: black;">Status Night Time</h5>
                <div class="switch-toggle switch-3 switch-candy">
                    <input id="open" name="sm_night_status" type="radio" <?= ($night_time) ? $night_time[0]->night_time_status == 0 ? 'checked' : '' : '' ?> value="0" />
                    <label for="open" onclick="">Désactivé</label>
                    <input id="close" name="sm_night_status" type="radio" <?= ($night_time) ? $night_time[0]->night_time_status == 1 ? 'checked' : '' : '' ?> value="1" />
                    <label for="close" onclick="">Activé</label>
                    <a></a>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-group">

                            <labe style="color:black">Start Time </labe>
                            <input type="time" class="form-control" id="night_time_start_time" name="heapump_start_time" value="<?=($night_time)? $night_time[0]->night_time_start:'' ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label style="color:black">End Time </label>
                            <input type="time" class="form-control" id="night_time_stop_time" name="heapump_end_time" value="<?= ($night_time)?$night_time[0]->night_time_end:'' ?>">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="save_night_time_setting()">Confirm</button>
            </div>

        </div>
    </div>
</div>
<script>
    function save_night_time_setting() {
        var sm_night_time = $('input[name="sm_night_time"]:checked').val();
        var sm_night_status = $('input[name="sm_night_status"]:checked').val();
        var night_time_start_time = $('#night_time_start_time').val();
        var night_time_stop_time = $('#night_time_stop_time').val();

        $.post("<?= base_url('admin/Administrator/setting_night_time') ?>", {
            sm_night_time: sm_night_time,
            sm_night_status: sm_night_status,
            night_time_start_time: night_time_start_time,
            night_time_stop_time: night_time_stop_time
        }, function() {
            $('#modal_night_time_setting').modal('hide');
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: "Your work has been saved",
                showConfirmButton: false,
                timer: 1500
            })
        })
    }
</script>
