<html>
    <title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <body class="container">
    <h3>Surat Baptis</h3>
    <h5>Diberikan kepada : </h5>
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
            <td><?php $date=date_create($data['tanggalBaptis']);
                echo date_format($date,"D, d M Y");  ?>
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?php $date=date_create($data['tanggalLahir']);
                echo date_format($date,"D, d M Y");  ?>
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

    </table>
      
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>
