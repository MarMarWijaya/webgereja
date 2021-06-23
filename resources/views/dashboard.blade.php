<html>
    <title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="cardview.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <body>

@include('sidebar.sidebar')

<div class="content">
    <div style="margin-top: 5%"></div>
    <div class="row2">
        <div class="column2">
            <div class="card">
                <h3>Jumlah Jemaat</h3>
                <h2>{{ $jumlahJemaat }}</h2>
            </div>
        </div>

        <div class="column2">
            <div class="card">
                <h3>Tanggal</h3>
                <p><?php echo date('l').", ".date('d/m/Y')?></p>
            </div>
        </div>
    </div>
    <br></br>
    <h2>Grafik Jemaat dan Prediksinya</h2>
</div>
      
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>
