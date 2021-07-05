<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="sidebar.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<body id="body-pd" style="background-color: whitesmoke;">

    @include('sidebar.sidebarpengumuman')

    <div class="content">
        <div style="margin-top: 5%"></div>

        <table cellpadding='5'>
            <tr>
                @foreach($data as $d)
                <td>ID</td>
                <td>:</td>
                <td>{{ $d->idPengumuman }}</td>
            </tr>
            <tr>
                <td>NIJ Penulis</td>
                <td>:</td>
                <td>{{ $d->nij }}</td>
            </tr>
            <tr>
                <td>Nama Penulis</td>
                <td>:</td>
                <td>{{ $d->nama }}</td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td>{{ $d->tanggal }}</td>
            </tr>
            <tr>
                <td>Judul</td>
                <td>:</td>
                <td>{{ $d->judul }}</td>
            </tr>
            <tr>
                <td>Isi</td>
                <td>:</td>
                <td>{{ $d->isi }}</td>
            </tr>
            <tr>
                <td>Lampiran</td>
                <td>:</td>
                <td><img src="/lampiran/{{ $d->lampiran }}" width="100px"></td>
            </tr>
        </table>
        <a href="/pengumuman/view/{{ $d->idPengumuman }}" class='btn btn-primary'>Edit</a>
        <a href="/pengumuman/hapus/{{ $d->idPengumuman }}" class='btn btn-danger'>Hapus</a>
        @endforeach



    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>