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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <body id="body-pd">

@include('sidebar.sidebardatajemaat')


<div class="content">
    <br>
    <form method='POST' action='/datajemaat/edit'>
        @csrf
            <div class="mb-3">
                <label for="nij" class="form-label">NIJ</label>
                <input type="text" class="form-control" disabled value="{{ $editData['nij'] }}">
                <input type="hidden" class="form-control" id="nij" name='nij' value="{{ $editData['nij'] }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name='nama' required value="{{ $editData['nama'] }}">
            </div>
            <div class="mb-3">
                <label for="kk" class="form-label">KK</label>
                <input type="text" class="form-control" id="kk" name='kk' required value="{{ $editData['kk'] }}">
            </div>
            <div class="mb-3">
                <label for="namaBaptis" class="form-label">Gender</label>
                <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01" name='gender'>
                        @if($editData['gender'] == 'Pria')
                            <option selected value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        @endif

                        @if($editData['gender'] == 'Wanita')
                            <option  value="Pria">Pria</option>
                            <option selected value="Wanita">Wanita</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="tanggalBaptis" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="tanggalBaptis" name='alamat' value="{{ $editData['alamat'] }}">
            </div>
            <div class="mb-3">
                <label for="tanggalLahir" class="form-label">Tempat, Tanggal Lahir</label>
                <input type="text" class="form-control" id="tanggalLahir" name='ttl' value="{{ $editData['ttl'] }}">
            </div>
            <div class="mb-3">
                <label for="hp" class="form-label">HP</label>
                <input type="text" class="form-control" id="hp" name='hp' value="{{ $editData['hp'] }}">
            </div>
            <div class="mb-3">
                <label for="ayah" class="form-label">Nama Ayah</label>
                <input type="text" class="form-control" id="ayah" name='ayah' value="{{ $editData['nama_ayah'] }}">
            </div>
            <div class="mb-3">
                <label for="ibu" class="form-label">Nama Ibu</label>
                <input type="text" class="form-control" id="ibu" name='ibu' value="{{ $editData['nama_ibu'] }}">
            </div>
            <div class="mb-3">
                <label for="pasangan" class="form-label">Nama Pasangan</label>
                <input type="text" class="form-control" id="pasangan" name='pasangan' value="{{ $editData['nama_pasangan'] }}">
            </div>
            <div class="mb-3">
                <label for="goldar" class="form-label">Gol. Darah</label>
                <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01" name='goldar'>
                        @if($editData['gol_darah'] == 'A')
                            <option selected value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                            <option value="">Belum diketahui</option>
                        @endif

                        @if($editData['gol_darah'] == 'B')
                            <option value="A">A</option>
                            <option selected value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                            <option value="">Belum diketahui</option>
                        @endif

                        @if($editData['gol_darah'] == 'AB')
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option selected value="AB">AB</option>
                            <option value="O">O</option>
                            <option value="">Belum diketahui</option>
                        @endif

                        @if($editData['gol_darah'] == 'O')
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option selected value="O">O</option>
                            <option value="">Belum diketahui</option>
                        @endif

                        @if($editData['gol_darah'] == '')
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                            <option selected value="">Belum diketahui</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="desa" class="form-label">Desa</label>
                <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01" name='desa'>
                        <option selected value="">Choose...</option>
                        <option value="">Belum diketahui</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="home" class="form-label">Home</label>
                <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01" name='home'>
                        @if($namaHome == "Belum diketahui")
                            <option selected value="">Belum diketahui</option>
                            @foreach($dataHome as $dH)
                            <option value="{{ $dH->idHome }}">{{ $dH->idHome }} - {{ $dH->nama_home }}</option>
                            @endforeach
                        @endif

                        @if($namaHome != "Belum diketahui")
                            @foreach($dataHome as $dH)
                                @if($editData['idHome'] == $dH->idHome)
                                    <option selected value="{{ $dH->idHome }}">{{ $dH->idHome }} - {{ $dH->nama_home }}</option>
                                @endif
                                @if($editData['idHome'] != $dH->idHome)
                                    <option value="{{ $dH->idHome }}">{{ $dH->idHome }} - {{ $dH->nama_home }}</option>
                                @endif
                            @endforeach
                            <option value="">Belum diketahui</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="mentor" class="form-label">Mentor</label>
                <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01" name='mentor'>
                        <option selected value="">Choose...</option>
                        <option value="">Belum diketahui</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    
        

      </form>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="sidebar.js"></script>
</html>
