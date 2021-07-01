<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="sidebar.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="cardview.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script type="text/javascript" src="Chart.js"></script>
</head>
<body id="body-pd">

    @include('sidebar.sidebardashboard')

    <div class="content">
        <div style="margin-top: 5%"></div>
        <div class="row2">
            <div class="column2">
                <div class="card">
                    <h3>Jumlah Jemaat</h3>
                    <h2>{{ $jumlahJemaat }}</h2>
                </div>
            </div>
            <div class="column2">
                <div class="card">
                    <h3>Jumlah Home</h3>
                    <h2>{{ $jumlahHome }}</h2>
                </div>
            </div>

            <div class="column2">
                <div class="card">
                    <h3>Tanggal</h3>
                    <p><?php echo date('l') . ", " . date('d M Y') ?></p>
                </div>
            </div>
        </div>
        <br></br>
        <h2>Grafik Jemaat dan Prediksinya</h2>

        <div style="width: 500px;height: 500px">
	        <canvas id="myChart"></canvas>
        </div>

        <script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: 
                [
                    <?php 
                        $dataTahun;
                        foreach ($tahun as $t) {
                            $dataTahun = $t->tahun;
                            echo $dataTahun.', ';
                        }    
                        echo ++$dataTahun;
                    ?>
                    
                ],
				datasets: [{
					label: '# of Votes',
					data: 
                    [
                        <?php 
                        $prediksi = $avg;
                        foreach ($tahun as $t) {
                            echo $t->jumlah.', ';
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
							beginAtZero:true
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