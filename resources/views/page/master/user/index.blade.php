@extends('layouts.app', [
    'page' => $sub_menu,
    'active' => '2',
    'breadcumbs' => [['nama' => $menu, 'link' => 'javascript:void(0)', 'active' => ''], ['nama' => $sub_menu, 'link' => '', 'active' => 'active']],
])

@section('top_button')
    <div class="page-header-actions">
        <button class="btn btn-sm btn-primary btn-round" onclick="tambah()">
            <i class="icon md-plus" aria-hidden="true"></i>
            <span class="hidden-sm-down">Tambah Data</span>
        </button>
    </div>
@endsection

@section('content')
    <div class="panel">
        <div class="panel-body">
            <div class="row mb-15">
                <div class="col-md-12">
                    <table class="table table-hover dataTable table-striped w-full" id="table">
                        <thead>
                            <tr>
                                <th style="text-align: center" width="5%">No</th>
                                <th style="text-align: center">Nama</th>
                                <th style="text-align: center">Username</th>
                                <th style="text-align: center">Email</th>
                                <th style="text-align: center">Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th style="text-align: center" width="5%">No</th>
                                <th style="text-align: center">Nama</th>
                                <th style="text-align: center">Username</th>
                                <th style="text-align: center">Email</th>
                                <th style="text-align: center">Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-fade-in-scale-up" id="modal-kelola" aria-hidden="true" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-simple">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="width: 100%; text-align: center; align-content: center; align-self: center; align-items: center"></h4>
                </div>
                <div class="modal-body" style="padding-bottom: 20px;">
                    <form class="form-horizontal" id="form" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" id="id">
                        <div class="form-group row form-material row">
                            <label class="col-md-3 form-control-label">Nama</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" autocomplete="off" autofocus required />
                            </div>
                        </div>
                        <div class="form-group row form-material row">
                            <label class="col-md-3 form-control-label">Username</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" autocomplete="off" autofocus required />
                            </div>
                        </div>
                        <div class="form-group row form-material row">
                            <label class="col-md-3 form-control-label">Email</label>
                            <div class="col-md-8">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" autocomplete="off" autofocus required />
                            </div>
                        </div>
                        <div class="form-group row form-material row">
                            <label class="col-md-3 form-control-label">Password</label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" autocomplete="off" autofocus required />
                            </div>
                        </div>
                        <div class="form-group row form-material row">
                            <label class="col-md-3 form-control-label">Re-enter Password</label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Masukkan Password" autocomplete="off" autofocus required />
                            </div>
                        </div>
                        <div class="form-group row form-material row">
                            <div class="col-md-8 offset-md-3">
                                <button type="button" id="btn-close" class="btn btn-default btn-pure" data-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-primary" onclick="simpan($(this))">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip();
            table;
        });

        var table = $('#table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('master/user') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    searchable: false,
                    orderable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'username',
                    name: 'username'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'action',
                    name: 'action'
                }
            ],
            columnDefs: [{
                className: 'text-center',
                targets: [0, 1, 2, 3, 4]
            }, ],
        });

        $('#modal-kelola').on('hide.bs.modal', function(e) {
            $('#id').val('');
            $('#name').val('');
            $('#username').val('');
            $('#email').val('');
            $('#password').val('');
            $('#password_confirmation').val('');
        });

        function tambah() {
            $('#modal-kelola').modal('show');
            $('.modal-title').text('Tambah Data');
            $('#modal-kelola').modal('show');
        }

        function edit(this_) {
            $('#modal-kelola').modal('show');
            $('.modal-title').text('Edit Data');
            $('#modal-kelola').modal('show');
            var id = this_.data('id');
            $.get(`user/get-data/${id}`, function(data) {
                $('#id').val(id);
                $('#name').val(data.name);
                $('#username').val(data.username);
                $('#email').val(data.email);
            });
        }

        function simpan(this_) {
            var form = $('#form')[0];
            var formData = new FormData(form);
            $.ajax({
                url: `user/simpan`,
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                processData: false,
                contentType: false,
                success: function(respon) {
                    if (respon.success == true) {
                        $('#modal-kelola').modal('hide');
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: respon.message,
                        }).then((result) => {
                            table.ajax.reload();
                        });
                    } else {
                        $('#modal-kelola').modal('hide');

                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: `
                                    ${('name' in respon.message) ? respon.message.name+',' : ''}
                                    ${('username' in respon.message) ? respon.message.username+',' : ''}
                                    ${('email' in respon.message) ? respon.message.email+',' : ''}
                                    ${('password' in respon.message) ? respon.message.password+',' : ''}
                                    ${('password_confirmation' in respon.message) ? respon.message.password_confirmation+',' : ''}
                                `,
                        }).then((result) => {
                            table.ajax.reload();
                        });
                    }
                }
            });
        }

        function hapus(this_) {
            this_.tooltip('dispose');
            Swal.fire({
                title: "Apakah anda yakin ?",
                text: "Data yang dihapus tidak dapat dikembalikan",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Hapus",
                cancelButtonText: "Close",
                reverseButtons: true,
            }).then(function(result) {
                if (result.value === true) {
                    var id = this_.data('id');
                    $.ajax({
                        url: `user/hapus/${id}`,
                        type: 'get',
                        success: function(respon) {
                            if (respon.success == true) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: respon.message,
                                }).then((result) => {
                                    table.ajax.reload();
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal',
                                    text: respon.message,
                                }).then((result) => {
                                    table.ajax.reload();
                                });
                            }
                        }
                    });
                }
            });
        }
    </script>
@endsection
