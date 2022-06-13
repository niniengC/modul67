<!DOCTYPE html>
<html lang="en">
<head>
  <title>Siakad | {{$title}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <style>
    a {
        color:white; text-decoration:none;
    }
    * {
        font-family:Georgia;
    }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-md navbar-dark fixed top" style="background-color:#082e64">
  <div class="container-fluid" style="font-size: 14px;">
        <div class="col-3">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class=" navbar-brand" href="/data_mahasiswa">Simple Siakad</a>
                </li>
            </ul>
        </div>
        <div class="col-6">
            <ul class="navbar-nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link {{ ( $title === "Data Mahasiswa") ? 'active' : 'aria'}}" href="/data_mahasiswa">Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ( $title === "Input Data") ? 'active' : ''}}" href="/input_data">Input Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ( $title === "About Me") ? 'active' : ''}}" href="/about_me">About Me</a>
                </li>
            </ul>
        </div>
  </div>
</nav>
<div class="container mt-4 " >
    @yield('container')
</div>

<footer class="{{ ( $title === "Input Data") ? 'fixed-bottom' : ''}}" style="background-color:#082e64;color:white; font-size:12px">

			<div class="row">
				<div class="col-4">
					<div class="container" style="padding-left:30px">
						<img src="logo.png" style="width: 100px;padding:10px;">
					</div>
					<div class="container  ">
						<p>
                        <b>Jurusan Teknik Informatika<br>Universitas Trunojoyo Madura</b>
                        <br>Jl. Raya Telang, Kecamatan Kamal, Bangkalan 69162 Indonesia 
                        <br>Kampus Universitas Trunojoyo Madura
                        </p>
					</div>
					
				</div>
				<div class="col">
                    <ul style="list-style-type:none">
                        <div class="container mt-3">
                            <li ><b>Contact</b></li>
                        </div>
                        <div class="container mt-3">
                            <li >Telp : 031-3011146</li>
                            <li >Fax : 031-3011506</li>
                            <li >email : if.ft@trunojoyo.ac.id</li>
                        </div>
                    </ul>
				</div>
				<div class="col ">
                    <ul style="list-style-type:none">
                        <div class="container mt-3">
						    <li><b>Layanan</b></li>
                        </div>
                        <div class="container mt-3">
                            <li ><a href="#" >Pembayaran UKT</a></li>
                            <li ><a href="#">Pendaftaran KP</a></li>
                            <li ><a href="#">Pendaftaran Wisuda</a></li>
                            <li ><a href="#">Administrasi</a></li>
                        </div>
                    </ul>
				</div>
				<div class="col">
                <ul style="list-style-type:none">
					<div class="container mt-3">
						<li><b>Resource</b></li>
                    </div>
                    <div class="container mt-3">
						<li ><a href="#">e-Journal</a></li>
						<li ><a href="#">Portal Tugas Akhir</a></li>
						<li ><a href="#">Website Resmi Kampus</a></li>
						<li ><a href="#">Download Administrasi</a></li>
                    </div>
                    </ul>
					</div>
				</div>
			</div>
		
</footer>
</body>
</html>
