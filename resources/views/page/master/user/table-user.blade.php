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
        @php
            $no = 1;
        @endphp
        @foreach ($data as $i)
            <tr>
                <td style="text-align: center">{{ $no }}</td>
                <td style="text-align: center">{{ $i->name }}</td>
                <td style="text-align: center">{{ $i->username }}</td>
                <td style="text-align: center">{{ $i->email }}</td>
                <td style="text-align: center">
                    <button class="btn btn-xs btn-primary btn-round" data-toggle="tooltip" data-placement="top" title="Edit Data" data-id="{{ $i->id }}" onclick="edit($(this))">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                    <button class="btn btn-xs btn-danger btn-round" data-toggle="tooltip" data-placement="top" title="Hapus Data" data-id="{{ $i->id }}" onclick="hapus($(this))">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<script>
    $(function() {
        $('#table').DataTable();
    });
</script>
