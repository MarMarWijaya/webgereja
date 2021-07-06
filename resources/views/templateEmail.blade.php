<html>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="cardview.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
    <body>
        <div class="container">
            <br><br>
            <div class="card">
                <div style="text-align: right;font-family: 'Playfair Disney';color: gray;">
                        <p style="font-family: 'Poppins', sans-serif; text-align: justify;">
                            Hai... <br>
                            Jemaat kita bertambah 1 orang dengan data sebagai berikut :    
                        </p>
                        <table cellpadding="5%" style="text-align: left;">
                            <tr>
                                <td>NIJ</td>
                                <td>:</td>
                                <td>{{ $nij }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{ $nama }}</td>
                            </tr>
                            <tr>
                                <td>No. KK</td>
                                <td>:</td>
                                <td>{{ $kk }}</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>:</td>
                                <td>{{ $gender }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $alamat }}</td>
                            </tr>
                            <tr>
                                <td>Nama Ayah</td>
                                <td>:</td>
                                <td>{{ $nama_ayah }}</td>
                            </tr>
                            <tr>
                                <td>Nama Ibu</td>
                                <td>:</td>
                                <td>{{ $nama_ibu }}</td>
                            </tr>
                            <tr>
                                <td>Nama Pasangan</td>
                                <td>:</td>
                                <td>{{ $nama_pasangan }}</td>
                            </tr>
                            <tr>
                                <td>Gol. Darah</td>
                                <td>:</td>
                                <td>{{ $gol_darah }}</td>
                            </tr>
                        </table>
                        <p style="font-family: 'Poppins', sans-serif; text-align: justify;">
                            Berikut adalah lampiran .xml dari data tersebut. <br>
                            Kiranya Tuhan tetap berkati pelayanan kita semua.
                        </p>
                </div>
            </div>
        </div>
    </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>
