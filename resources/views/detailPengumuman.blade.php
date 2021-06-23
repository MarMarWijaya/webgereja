<html>
    <title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
        margin: 0;
        font-family: "Lato", sans-serif;
        }

        .sidebar {
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #f1f1f1;
        position: fixed;
        height: 100%;
        overflow: auto;
        }

        .sidebar a {
        display: block;
        color: black;
        padding: 16px;
        text-decoration: none;
        }
        
        .sidebar a.active {
        background-color: #04AA6D;
        color: white;
        }

        .sidebar a:hover:not(.active) {
        background-color: #555;
        color: white;
        }

        div.content {
        margin-left: 200px;
        padding: 1px 16px;
        height: 1000px;
        }

        @media screen and (max-width: 700px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }
        .sidebar a {float: left;}
        div.content {margin-left: 0;}
        }

        @media screen and (max-width: 400px) {
        .sidebar a {
            text-align: center;
            float: none;
        }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <body>

    @include('sidebar.sidebar')

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
