<!-- The Modal -->
<div class="modal fade" id="modal_signin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" style="color: black">SIGN UP</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="alert alert-danger" id="error_signin">
                    <strong>ERROR!</strong> This information is not available in the system.
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="username" id="userlogin" onclick="clear_error()">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="password" id="password" onclick="clear_error()">
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="check_login()">Sign in</button>
            </div>

        </div>
    </div>
</div>

<script>
    $(function() {
        $('#error_signin').hide()
    })


    function check_login() {
        $.post("<?= base_url('member/menu/sign_in') ?>", {
            userlogin: $('#userlogin').val(),
            password: $('#password').val()
        }, function(response) {
            var json_decode = JSON.parse(response);
            if (json_decode['status'] == 'ok') {
                window.location.href = "<?= base_url('admin/dashboard/index') ?>";
            } else {
                $('#error_signin').show()
            }
        })
    }

    function clear_error() {
        $('#error_signin').hide()
    }
</script>
