<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<body>
    <div style="text-align: center;">
        <img src="{{ public_path('/logo_jki.png') }}" style="width: 100px;">
        <h5 style="font-family: 'Lucida Bright';color: #D4AF37;">JEMAAT KRISTEN INDONESIA</h5>
        <i style="font-family: 'Times New Roman';">Menerangkan bahwa :</i><br>
        <div style="font-family: Tahoma;border-bottom: 1px solid black;margin-top: 2rem;">
            <b>{{ $data['nama'] }}</b>
        </div>

        <div class="row mt-3 mb-3">
            <div class="col-1">
                <i style="font-family: 'Times New Roman';text-align: left;">Lahir di</i><br>
            </div>
            <div class="col-3" style="font-family: Tahoma;border-bottom: 1px solid black;">
                <b>Jepara</b>
            </div>
            <div class="col-1">
                <i style="font-family: 'Times New Roman';text-align: left;">Tanggal</i><br>
            </div>
            <div class="col-3" style="font-family: Tahoma;border-bottom: 1px solid black;">
                <b><?php $date = date_create($data['tanggalLahir']);
                    echo date_format($date, "d F Y");  ?></b>
            </div>
            <div class="col-1">
                <i style="font-family: 'Times New Roman';text-align: left;">No. Induk</i><br>
            </div>
            <div class="col-3" style="font-family: Tahoma;border-bottom: 1px solid black;">
                <b></b>
            </div>
        </div>

        <i style="font-family: 'Times New Roman';">Telah menerima</i>
        <h1 style="font-family: 'Monotype Corsiva';color: #D4AF37;">Sakramen Baptisan Kudus</h1>

        <div class="row mt-4">
            <div class="col-2">
                <div style="width: 113px;height: 151px;border: 1px solid black;">Pas Foto</div>
            </div>
            <div class="col-10" style="font-family: Tahoma;">

                <div class="row mb-3">
                    <div class="col-1" style="text-align: left;">
                        <i style="font-family: 'Times New Roman';text-align: left;">di JKI</i><br>
                    </div>
                    <div class="col-11" style="font-family: Tahoma;border-bottom: 1px solid black;">
                        <b>Kerajaan Allah Jepara</b>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-1" style="text-align: left;">
                        <i style="font-family: 'Times New Roman';">pada hari</i><br>
                    </div>
                    <div class="col-5" style="font-family: Tahoma;border-bottom: 1px solid black;">
                        <b><?php $date = date_create($data['tanggalBaptis']);
                            echo date_format($date, "l");  ?></b>
                    </div>
                    <div class="col-1">
                        <i style="font-family: 'Times New Roman';text-align: left;">tanggal</i><br>
                    </div>
                    <div class="col-5" style="font-family: Tahoma;border-bottom: 1px solid black;">
                        <b><?php $date = date_create($data['tanggalBaptis']);
                            echo date_format($date, "d F Y");  ?></b>
                    </div>
                </div>

                <div class="row">
                    <div class="col-2" style="font-family: Tahoma;"></div>
                    <div class="col-2" style="font-family: Tahoma;border-bottom: 1px solid black;">
                        <b>{{ $data['nama'] }}</b>
                    </div>
                    <div class="col-2" style="font-family: Tahoma;"></div>
                    <div class="col-2" style="font-family: Tahoma;border-bottom: 1px solid black;">
                        <b>Ps. Feriyadi NC</b>
                    </div>
                    <div class="col-2" style="font-family: Tahoma;"></div>
                    <div class="col-2" style="font-family: Tahoma;border-bottom: 1px solid black;">
                        <b>Ps. Daud K</b>
                    </div>

                    <div class="col-2" style="font-family: Tahoma;"></div>
                    <div class="col-2" style="font-family: Tahoma;">
                        <i>Yang Dibaptis</i>
                    </div>
                    <div class="col-2" style="font-family: Tahoma;"></div>
                    <div class="col-2" style="font-family: Tahoma;">
                        <i>Gembala Jemaat</i>
                    </div>
                    <div class="col-2" style="font-family: Tahoma;"></div>
                    <div class="col-2" style="font-family: Tahoma;">
                        <i>Majelis Gereja</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 
    <table class="table table-hover">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $data['nama'] }}</td>
        </tr>
        <tr>
            <td>Nama Baptis</td>
            <td>:</td>
            <td><?php echo $data['namaBaptis'] ?></td>
        </tr>
        <tr>
            <td>Tanggal Baptis</td>
            <td>:</td>
            <td><?php $date = date_create($data['tanggalBaptis']);
                echo date_format($date, "D, d M Y");  ?>
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?php $date = date_create($data['tanggalLahir']);
                echo date_format($date, "D, d M Y");  ?>
            </td>
        </tr>
        <tr>
            <td>Ayah</td>
            <td>:</td>
            <td><?php echo $data['ayah'] ?></td>
        </tr>
        <tr>
            <td>Ibu</td>
            <td>:</td>
            <td><?php echo $data['ibu'] ?></td>
        </tr>
        <tr>
            <td>Pendeta</td>
            <td>:</td>
            <td><?php echo $data['pendeta'] ?></td>
        </tr>
        <tr>
            <td>Mentor</td>
            <td>:</td>
            <td><?php echo $data['mentor'] ?></td>
        </tr>

    </table> -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>