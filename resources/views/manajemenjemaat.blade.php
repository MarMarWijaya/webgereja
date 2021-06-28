<html>
    <title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <body id="body-pd">

@include('sidebar.sidebardatajemaat')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jemaat</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method='POST' action='/datajemaat/tambah'>
        @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name='nama' required>
            </div>
            <div class="mb-3">
                <label for="kk" class="form-label">KK</label>
                <input type="text" class="form-control" id="kk" name='kk' required>
            </div>
            <div class="mb-3">
                <label for="namaBaptis" class="form-label">Gender</label>
                <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01" name='gender'>
                        <option selected>Choose...</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="tanggalBaptis" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="tanggalBaptis" name='alamat'>
            </div>
            <div class="mb-3">
                <label for="tanggalLahir" class="form-label">Tempat, Tanggal Lahir</label>
                <input type="text" class="form-control" id="tanggalLahir" name='ttl'>
            </div>
            <div class="mb-3">
                <label for="hp" class="form-label">HP</label>
                <input type="text" class="form-control" id="hp" name='hp'>
            </div>
            <div class="mb-3">
                <label for="ayah" class="form-label">Nama Ayah</label>
                <input type="text" class="form-control" id="ayah" name='ayah'>
            </div>
            <div class="mb-3">
                <label for="ibu" class="form-label">Nama Ibu</label>
                <input type="text" class="form-control" id="ibu" name='ibu'>
            </div>
            <div class="mb-3">
                <label for="pasangan" class="form-label">Nama Pasangan</label>
                <input type="text" class="form-control" id="pasangan" name='pasangan'>
            </div>
            <div class="mb-3">
                <label for="goldar" class="form-label">Gol. Darah</label>
                <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01" name='goldar'>
                        <option selected>Choose...</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                        <option value="">Belum diketahui</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="desa" class="form-label">Desa</label>
                <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01" name='desa'>
                        <option value="">Belum diketahui</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="home" class="form-label">Home</label>
                <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01" name='home'>
                        <option value="">Belum diketahui</option>
                        @foreach($dataHome as $dH)
                            <option value="{{ $dH->idHome }}">{{ $dH->nama_home }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="mentor" class="form-label">Mentor</label>
                <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01" name='mentor'>
                        <option value="">Belum diketahui</option>
                    </select>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div> 

<div class="content">
    <div style="margin-top: 5%"></div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Jemaat
    </button>
    <br></br>
    <table class="table table-striped table-hover data">
        <thead>
            <tr>
                <td>NIJ</td>
                <td>Nama</td>
                <td>KK</td>
                <td>HP</td>
                <td>Ayah</td>
                <td>Home</td>
                <td>Gol. Darah</td>
                <td colspan='3'>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
                <tr>
                    <td>{{ $d->nij }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->kk }}</td>
                    <td>{{ $d->hp }}</td>
                    <td>{{ $d->nama_ayah }}</td>
                    <td>{{ $d->idHome }}</td>
                    @if($d->gol_darah == '')
                        <td>Belum diketahui</td>
                    @endif
                    @if($d->gol_darah != '')
                        <td>{{ $d->gol_darah }}</td>
                    @endif
                    
                    <td><a href='/datajemaat/{{ $d->nij }}' class='btn btn-secondary'>Lihat</a></td>
                    <td><a href='/datajemaat/view/{{ $d->nij }}' class='btn btn-warning'>Edit</a></td>
                    <td><a href="/datajemaat/hapus/{{ $d->nij }}" class='btn btn-danger'>Hapus</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="sidebar.js"></script>
</html>
