<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="sidebar.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<body id="body-pd" style="background-color: whitesmoke;">

    @include('sidebar.sidebaradministrasi')

    <div class="content">
        <div style="margin-top: 5%"></div>
        <form method='POST' action='/administrasi/cetak'>
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name='nama'>
            </div>
            <div class="mb-3">
                <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempatLahir" name='tempatLahir'>
            </div>
            <div class="mb-3">
                <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggalLahir" name='tanggalLahir'>
            </div>
            <div class="mb-3">
                <label for="tanggalBaptis" class="form-label">Tanggal Baptis</label>
                <input type="date" class="form-control" id="tanggalBaptis" name='tanggalBaptis'>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="sidebar.js"></script>

</html>