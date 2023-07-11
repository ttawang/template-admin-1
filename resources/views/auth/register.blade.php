<div id="inputRegister">
    <form action="" method="post" enctype="multipart/form-data" id="formRegister">
        @csrf
        <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="name" id="name" required />
            <label class="floating-label">Nama</label>
            <small class="text-danger" id="nameAlert"></small>
        </div>
        <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="text" class="form-control" name="username" id="username" required />
            <label class="floating-label">Username</label>
            <small class="text-danger" id="usernameAlert" hide></small>
        </div>
        <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="email" class="form-control" name="email" id="email" required />
            <label class="floating-label">Email</label>
            <small class="text-danger" id="emailAlert" hide></small>
        </div>
        <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="password" class="form-control" name="password" id="password" required />
            <label class="floating-label">Password</label>
            <small class="text-danger" id="passwordAlert" hide></small>
        </div>
        <div class="form-group form-material floating" data-plugin="formMaterial">
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required />
            <label class="floating-label">Re-enter Password</label>
            <small class="text-danger" id="password_confirmationAlert" hide></small>
        </div>
        <button type="button" class="btn btn-primary btn-block btn-lg mt-40" id="register">Registrasi</button>
    </form>
    <p>Sudah memiliki akun ? Silahkan <a href="#" onclick="login()">Login</a></p>
</div>
<div id="alertRegister">
    <div class="alert alert-primary text-center text-detaufl" role="alert">Akun berhasil dibuat, silahkan login !!</div>
    <p><button class="btn btn-round btn-primary" onclick="login()">Login</button></p>
</div>

<script>
    $("#alertRegister").hide();
    $('#register').click(function(event) {
        event.preventDefault();
        var form = $('#formRegister')[0];
        var formData = new FormData(form);
        $.ajax({
            url: "{{ route('register.perform') }} ",
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            processData: false,
            contentType: false,
            success: function(respon) {
                if (respon.success === true) {
                    $("#inputRegister").hide();
                    $("#alertRegister").show();
                } else {
                    if (respon.data.name) {
                        $("#nameAlert").show();
                        $("#nameAlert").text(`* ${respon.data.name}`);
                    }
                    if (respon.data.username) {
                        $("#usernameAlert").show();
                        $("#usernameAlert").text(`* ${respon.data.username}`);
                    }
                    if (respon.data.email) {
                        $("#emailAlert").show();
                        $("#emailAlert").text(`* ${respon.data.email}`);
                    }
                    if (respon.data.password) {
                        $("#passwordAlert").show();
                        $("#passwordAlert").text(`* ${respon.data.password}`);
                    }
                    if (respon.data.password_confirmation) {
                        $("#password_confirmationAlert").show();
                        $("#password_confirmationAlert").text(`* ${respon.data.password_confirmation}`);
                    }
                }
            },
        });
        $('#name').on('keyup', function() {
            $("#nameAlert").hide();
            $("#nameAlert").text('');
        });
        $('#username').on('keyup', function() {
            $("#usernameAlert").hide();
            $("#usernameAlert").text('');
        });
        $('#email').on('keyup', function() {
            $("#emailAlert").hide();
            $("#emailAlert").text('');
        });
        $('#password').on('keyup', function() {
            $("#passwordAlert").hide();
            $("#passwordAlert").text('');
        });
        $('#password_confirmation').on('keyup', function() {
            $("#password_confirmationAlert").hide();
            $("#password_confirmationAlert").text('');
        });
    });
</script>
