<html>
    <title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <body id="body-pd">

@include('sidebar.sidebar')

<div class="content">
    <div style="margin-top: 5%"></div>
    <button type="button" class="btn btn-primary">Tambah Renungan</button>
    <br></br>
    <table class="table table-striped table-hover data">
        <thead>
            <tr>
                <td>ID</td>
                <td>Judul</td>
                <td>Penulis</td>
                <td colspan='3'>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
                <tr>
                    <td>{{ $d->nij }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->hp }}</td>
                    <td>Lihat</td>
                    <td>Edit</td>
                    <td>Hapus</td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
      
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="sidebar.js"></script>
</html>
