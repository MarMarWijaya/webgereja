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
        <table class="table-borderless" style="width: 100%;text-align: center;margin-top: 30px;font-family: 'Tahoma';margin-bottom: 20px;">
            <tr>
                <td>
                    <i style="font-family: 'Times New Roman';text-align: left;">Lahir di</i><br>
                </td>
                <td width="25%" style="border-bottom: 1px solid black;"><b><?php echo $data['tempatLahir'] ?></b></td>
                <td>
                    <i style="font-family: 'Times New Roman';text-align: left;">Tanggal</i><br>
                </td>
                <td width="25%" style="border-bottom: 1px solid black;">
                    <b><?php $date = date_create($data['tanggalLahir']);
                        echo date_format($date, "d F Y");  ?></b>
                </td>
                <td>
                    <i style="font-family: 'Times New Roman';text-align: left;">No. Induk</i><br>
                </td>
                <td width="25%" style="border-bottom: 1px solid black;"></td>
            </tr>
        </table>

        <i style="font-family: 'Times New Roman';">Telah menerima</i><br>
        <i style="font-family: 'Monotype Corsiva';color: #D4AF37;font-size: 40px;">Sakramen Baptisan Kudus</i>

        <table style="margin-top: 2rem;text-align: center;width: 100%;">
            <tr>
                <td style="width: 15%;"> </td>
                <td style="width: 5%;">
                    <i style="font-family: 'Times New Roman';text-align: left;">di JKI</i>
                </td>
                <td style="border-bottom: 1px solid black;width: 75%;"><b>Kerajaan Allah Jepara</b></td>
            </tr>
        </table>

        <table style="margin-top: 1rem;text-align: center;width: 100%;">
            <tr valign="bottom" style="padding-top: 2rem;">
                <td style="width: 15%;"> </td>
                <td>
                    <i style="font-family: 'Times New Roman';text-align: left;">pada hari</i>
                </td>
                <td style="border-bottom: 1px solid black;width: 30%;">
                    <b><?php $date = date_create($data['tanggalBaptis']);
                        echo date_format($date, "l");  ?></b>
                </td>
                <td>
                    <i style="font-family: 'Times New Roman';text-align: left;">tanggal</i>
                </td>
                <td style="border-bottom: 1px solid black;width: 40%;">
                    <b><?php $date = date_create($data['tanggalBaptis']);
                        echo date_format($date, "d F Y");  ?></b>
                </td>
            </tr>
        </table>

        <table style="width: 100%;margin-top: 6rem;text-align: center;">
            <tr valign="bottom">
                <td style="width: 15%;"> </td>
                <td style="width: 22%;border-bottom: 1px solid black;">
                    <b>{{ $data['nama'] }}</b>
                </td>
                <td style="width: 5%;"> </td>
                <td style="width: 22%;border-bottom: 1px solid black;">
                    <b>Ps. Ferryadi NC</b>
                </td>
                <td style="width: 5%;"> </td>
                <td style="width: 22%;border-bottom: 1px solid black;">
                    <b>Pnt. Daud K</b>
                </td>
            </tr>
            <tr style="padding-top: 2rem;" valign="top">
                <td style="width: 15%;"> </td>
                <td style="width: 22%;">
                    <i style="font-size: 14px;">Yang Dibaptis</i>
                </td>
                <td style="width: 5%;"> </td>
                <td style="width: 22%;">
                    <i style="font-size: 14px;">Gembala Jemaat</i>
                </td>
                <td style="width: 5%;"> </td>
                <td style="width: 22%;">
                    <i style="font-size: 14px;">Majelis Gereja</i>
                </td>
            </tr>
        </table>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>