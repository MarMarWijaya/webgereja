<html>
    <title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('sidebar.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{asset('cardview.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script type="text/javascript" src="{{asset('Chart.js')}}"></script>
    </head>
<body id="body-pd">

    @include('sidebar.sidebardatajemaat')

<div class="content">
    <div style="margin-top: 5%"></div>
    <div class="container">
    <center><h2>Nomor KK</h2>
    <h3>{{ $noKK }}</h3></center>
    <table class="table table-striped">
        @foreach($kk as $k)
        <tr>
           <td>Nama</td>
           <td>{{ $k->nama }}</td>
        </tr>
        @endforeach
    </table>
    </div>

</div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="{{asset('sidebar.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>
</html>
