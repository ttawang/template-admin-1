<form action="" method="post" enctype="multipart/form-data" id="formLogin">
    @csrf
    <div class="alert alert-danger alert-dismissible" id="alertLogin" hide>
        Login Gagal !
    </div>
    <div class="form-group form-material floating" data-plugin="formMaterial">
        <input type="text" class="form-control" name="username" required />
        <label class="floating-label">Username / Email</label>
    </div>
    <div class="form-group form-material floating" data-plugin="formMaterial">
        <input type="password" class="form-control" name="password" required />
        <label class="floating-label">Password</label>
    </div>
    <button type="button" class="btn btn-primary btn-block btn-lg mt-40" id="login">Login</button>
</form>
<p>Belum memiliki akun ? Silahkan <a href="#" onclick="register()">Registrasi</a></p>

<script>
    $("#alertLogin").hide();
    $('#login').click(function(event) {
        event.preventDefault();
        var form = $('#formLogin')[0];
        var formData = new FormData(form);
        if (form.checkValidity()) {
            $.ajax({
                url: "{{ route('login.perform') }} ",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                processData: false,
                contentType: false,
                success: function(respon) {
                    if (respon.success === true) {
                        window.location.href = `{{ route('home') }}`;
                    } else {
                        $("#alertLogin").show();
                        setTimeout(function() {
                            $("#alertLogin").fadeOut("slow", function() {
                                $(this).hide();
                            });
                        }, 1000);
                    }
                }
            });
        } else {
            $("#alertLogin").show();
            setTimeout(function() {
                $("#alertLogin").fadeOut("slow", function() {
                    $(this).hide();
                });
            }, 1000);
        }
    });
</script>
