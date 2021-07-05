<html>
<<<<<<< HEAD
    <title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('sidebar.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{asset('cardview.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script type="text/javascript" src="{{asset('Chart.js')}}"></script>
    
    
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
    
    <body id="body-pd">

    @include('sidebar.sidebardatajemaat')

<div class="content">
    <div style="margin-top: 10%;"></div>
    <table class="table table-striped" style="margin-left:-10%">
        <tr>
            <td>NIJ</td>
            <td>{{ $data['nij'] }}</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>{{ $data['nama'] }}</td>
        </tr>
        <tr>
            <td>KK</td>
            <td>{{ $data['kk'] }}</td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>{{ $data['gender'] }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>{{ $data['alamat'] }}</td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>{{ $data['ttl'] }}</td>
        </tr>
        <tr>
            <td>HP</td>
            <td>{{ $data['hp'] }}</td>
        </tr>
        <tr>
            <td>Nama Ayah</td>
            <td>{{ $data['nama_ayah'] }}</td>
        </tr>
        <tr>
            <td>Nama Ibu</td>
            <td>{{ $data['nama_ibu'] }}</td>
        </tr>
        <tr>
            <td>Nama Pasangan</td>
            <td>{{ $data['nama_pasangan'] }}</td>
        </tr>
        <tr>
            <td>Gol. Darah</td>
            @if(isset($data['gol_darah']))
                <td>{{ $data['gol_darah'] }}</td>
                @endif
                @if(!isset($data['gol_darah']))
                <td>Belum diketahui</td>

            @endif
        </tr>
            <tr>
                <td>Desa</td>
                @if(isset($desa))
                <td>{{ $desa['Nama_Desa'] }}</td>
                @endif
                @if(!isset($desa))
                <td>Belum diketahui</td>

                 @endif
        </tr>
      
            <tr>
                <td>Home</td>
                @if(isset($home))
                <td>{{ $home['nama_home'] }}</td>
                @endif
                @if(!isset($data['idHome']))
                <td>Belum diketahui</td>

            @endif
        </tr>
            <tr>
                <td>Mentor</td>

                @if(isset($mentor))
                <td>{{ $mentor['nama'] }}</td>
                @endif
                @if(!isset($mentor))
                <td>Belum diketahui</td>
                @endif
        </tr>
    </table>
    <br>
    <a href="/datajemaat/view/{{ $data['nij'] }}" class='btn btn-primary' style="margin-left:-10%">Edit</a>
    <a href="/datajemaat/hapus/{{ $data['nij'] }}" class='btn btn-danger'>Hapus</a>
    
</div>
 

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="{{asset('sidebar.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>

</html>
