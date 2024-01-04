<div class="modal fade" id="modal_recovery" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" style="color: black">Authentication Recovery</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="alert alert-danger" id="error_recovery">
                    <strong>ERROR!</strong> This information is not available in the system.
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="username" id="userlogin">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="password" id="password">
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-bs-dismiss="modal" onclick="recovery_mode()">Confirm</button>
            </div>

        </div>
    </div>
</div>
<script>
    var recovery_mode = function() {
        $.post("<?= base_url('admin/menu/check_recovery_mode') ?>", {
            username: $('#userlogin').val(),
            password: $('#password').val()
        }, function(data) {
            var decode_status = JSON.parse(data);
            if (decode_status['status'] == 'success') {
                $.post("<?= base_url('admin/Clear_table/clear_data_logger') ?>", {}, function() {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Your work has been saved',
                        showConfirmButton: false,
                        timer: 1500
                    })
                })
            } else {

                Swal.fire({
                    title: 'System alert',
                    text: "Your information is incorrect.",
                    icon: 'warning',

                }).then((result) => {

                })
            }
        })
    }
</script>
