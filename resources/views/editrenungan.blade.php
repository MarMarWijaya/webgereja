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
        <link rel="stylesheet" href="{{asset('sidebar.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{asset('cardview.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <body>

@include('sidebar.sidebarrenungan')

<div class="content" style="margin-left: 0%;">
    <br>
    <form method='POST' action='/renungan/edit' id='formRenungan' enctype="multipart/form-data">
        @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Judul</label>
                <input type="hidden" name="idRenungan" value="{{ $data['idRenungan'] }}">
                <input type="text" class="form-control" id="nama" name='judul' required value="{{ $data['judul'] }}">
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
                <input type="text" class="form-control" id="tanggal" disabled value="{{ $data['tanggal'] }}">
                <input type="hidden" name="tanggal">
            </div>
            <div class="mb-3">
                <label for="isi" class="form-label">Isi</label>
                <br>
                <textarea rows="4" cols="100%" name="isi" form="formRenungan" required>{{ $data['isi'] }}</textarea>
            </div>
            <div class="mb-3">
                <label for="lampiran" class="form-label">Lampiran</label>
                <br>
                <img src="/lampiran/{{ $data['lampiran'] }}">
                <br><br>
                <input type="file" class="form-control" id="lampiran" name='lampiran' >
            </div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
 
      </form>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>
