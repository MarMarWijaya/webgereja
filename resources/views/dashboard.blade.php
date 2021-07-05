<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="sidebar.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="cardview.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script type="text/javascript" src="Chart.js"></script>
</head>

<body id="body-pd" style="background-color:whitesmoke;">

    @include('sidebar.sidebardashboard')

    <div class="content">
        <div style="margin-top: 5%"></div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Dashboard</li>
            </ol>
        </nav>
        <div class="row2">
            <div class="column2">
                <div class="card">
                    <div class="row">
                        <div class="col-4">
                            <i class='bx bx-id-card' style="font-size: 4rem;color: #16d39a;"></i>
                        </div>
                        <div class="col-8" style="text-align: right;font-family: 'Playfair Disney';color: gray;">
                            <h1 style="margin-bottom: -5px;color: #16d39a;">{{ $jumlahJemaat }}</h1>
                            <h7 style="font-style:initial;">Jumlah Jemaat</h7>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column2">
                <div class="card">
                    <div class="row">
                        <div class="col-4">
                            <i class='bx bx-building-house' style="font-size: 4rem;color: #ff7587;"></i>
                        </div>
                        <div class="col-8" style="text-align: right;font-family: 'Playfair Disney';color: gray;">
                            <h1 style="margin-bottom: -5px;color: #ff7587;">{{ $jumlahHome }}</h1>
                            <h7 style="font-style:initial;">Jumlah Home</h7>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column2">
                <div class="card">
                    <div class="row">
                        <div class="col-4">
                            <i class='bx bx-detail' style="font-size: 4rem;color: #00b5b8;"></i>
                        </div>
                        <div class="col-8" style="text-align: right;font-family: 'Playfair Disney';color: gray;">
                            <h1 style="margin-bottom: -5px;color: #00b5b8;">{{ $jumlahPengumuman }}</h1>
                            <h7 style="font-style:initial;">Pengumuman</h7>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column2">
                <div class="card">
                    <div class="row">
                        <div class="col-4">
                            <i class='bx bx-book-bookmark' style="font-size: 4rem;color: #ffa87d;"></i>
                        </div>
                        <div class="col-8" style="text-align: right;font-family: 'Playfair Disney';color: gray;">
                            <h1 style="margin-bottom: -5px;color: #ffa87d;">{{ $jumlahRenungan }}</h1>
                            <h7 style="font-style:initial;">Renungan</h7>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br></br>
        <div class="box">
            <h4>
                <i class='bx bx-line-chart' style="color: #362bff;margin-right: 10px;"></i>Grafik Jemaat dan Prediksinya
            </h4>
            <div>
                <canvas id="myChart"></canvas>
            </div>
        </div>

        <script>
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        <?php
                        $dataTahun;
                        foreach ($tahun as $t) {
                            $dataTahun = $t->tahun;
                            echo $dataTahun . ', ';
                        }
                        echo ++$dataTahun;
                        ?>

                    ],
                    datasets: [{
                        label: '# of Votes',
                        data: [
                            <?php
                            $prediksi = $avg;
                            foreach ($tahun as $t) {
                                echo $t->jumlah . ', ';
                            }
                            echo $avg;
                            ?>

                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="sidebar.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/6.0.6/highcharts.js" charset="utf-8"></script>

</html>