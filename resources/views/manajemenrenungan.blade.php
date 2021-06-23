<html>
    <title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <body id="body-pd">

@include('sidebar.sidebar')

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jemaat</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method='POST' action='/renungan/tambah' id='formRenungan' enctype="multipart/form-data">
        @csrf
        
            <div class="mb-3">
                <label for="nama" class="form-label">Judul</label>
                <input type="text" class="form-control" id="nama" name='judul' required>
            </div>
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01" name='penulis'>
                        @foreach($penulis as $p)
                            <option value="{{ $p->nij }}">{{ $p->nij }} - {{ $p->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="text" class="form-control" id="tanggal" disabled value="<?php $t=time(); echo(date("d M Y",$t));?>">
                <input type="hidden" name="tanggal">
            </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi</label>
                <textarea rows="4" cols="48" name="isi" form="formRenungan" placeholder="Isi renungan.." required></textarea>
            </div>
            <div class="mb-3">
                <label for="lampiran" class="form-label">Lampiran</label>
                <input type="file" class="form-control" id="lampiran" name='lampiran'>
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
        Tambah Renungan
    </button>
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
                    <td>{{ $d->idRenungan }}</td>
                    <td>{{ $d->judul }}</td>
                    <td>{{ $d->nij }} - {{ $d->nama }}</td>
                    <td><a href='/renungan/{{ $d->idRenungan }}' class='btn btn-secondary'>Lihat</a></td>
                    <td><a href="/renungan/view/{{ $d->idRenungan }}" class='btn btn-primary'>Edit</a></td>
                    <td><a href="/renungan/hapus/{{ $d->idRenungan }}" class='btn btn-danger'>Hapus</a></td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
      
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="sidebar.js"></script>
</html>
