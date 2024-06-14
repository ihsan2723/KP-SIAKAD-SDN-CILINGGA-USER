<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style3.css" />
</head>

<body>
    <div class="row">
        <div class="col-md-3">
            <div class="sidebar">
                <header>
                    <img src="gambar/logosd.png" alt="" width="100" height="100" />
                </header>
                <ul>
                    <li class="button">
                        <i class="bi bi-grid-fill"></i>
                        <a href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="button">
                        <i class="fa-solid fa-clipboard-user"></i>
                        <a href="presensi/presensi.php" style="margin-left: 4px">Presensi</a>
                    </li>
                    <li class="button">
                        <i class="bi bi-clipboard2-check-fill"></i>
                        <a href="rekap_presensi/rekap_presensi.php">Rekap Presensi</a>
                    </li>
                    <li class="button">
                        <i class="fa-solid fa-list-check"></i>
                        <a href="kelola_nilai/kelolanilai.php">Kelola Nilai</a>
                    </li>
                    <li class="button">
                        <i class="bi bi-person-lines-fill"></i>
                        <a href="biodata_guru/biodata_guru.php" class="feat-btn">Biodata Guru</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="container-fluid">
                <nav class="navbar">
                    <h5>Dashboard</h5>
                    <ul>
                        <li>Admin |</li>
                        <li>Widia Nurindri</li>
                        <li id="logout">
                            <i class="bi bi-box-arrow-right"></i>
                            <a id="out" href="login.php">Logout</a>
                        </li>
                    </ul>
                </nav>
                <hr />
                <div class="box">
                    <div class="items1">
                        <p><b>Guru SDN Cilingga</b></p>
                        <h3 class="text-light">
                            <i class="bi bi-person-plus-fill"> </i>
                        </h3>
                        <h5 class="text-light">15 Guru</h5>
                    </div>
                    <div class="items2">
                        <p><b>Siswa SDN Cilingga</b></p>
                        <h3 class="text-light">
                            <i class="i bi-people-fill"> </i>
                        </h3>
                        <h5 class="text-light">253 Siswa</h5>
                    </div>
                </div>
                <div class="diagram">
                    <div class="chart">
                        <h5 class="bi bi-person-plus-fill">Status Guru</h5>
                        <canvas id="barchart" width="300" height="300"> </canvas>
                    </div>
                    <div class="chart">
                        <h5 class="bi bi-people-fill">Perbandingan Siswa</h5>
                        <canvas id="doughnut" width="300" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <footer>
                <h3 class="text-light">CopyRight 2024_Kelompok 2</h3>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/chart1.js"></script>
    <script src="js/chart2.js"></script>
    <script>
        document.querySelectorAll('.feat-btn').forEach((item) => {
            item.addEventListener('click', (event) => {
                const parent = item.parentElement;
                parent.classList.toggle('active');
            });
        });
    </script>
</body>

</html>