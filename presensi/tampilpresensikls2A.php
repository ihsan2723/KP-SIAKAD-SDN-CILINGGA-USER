<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/tampilpresensikls1-6.css" />
</head>

<body>
    <div class="row">
        <div class="col-md-3">
            <div class="sidebar">
                <header>
                    <img src="../gambar/logosd.png" alt="" width="100" height="100" />
                </header>
                <ul>
                    <li class="button">
                        <i class="bi bi-grid-fill"></i>
                        <a href="../dashboard.php">Dashboard</a>
                    </li>
                    <li class="button">
                        <i class="fa-solid fa-clipboard-user"></i>
                        <a href="../presensi/presensi.php" style="margin-left: 4px">Presensi</a>
                    </li>
                    <li class="button">
                        <i class="bi bi-clipboard2-check-fill"></i>
                        <a href="../rekap_presensi/rekap_presensi.php">Rekap Presensi</a>
                    </li>
                    <li class="button">
                        <i class="fa-solid fa-list-check"></i>
                        <a href="../kelola_nilai/kelolanilai.php">Kelola Nilai</a>
                    </li>
                    <li class="button">
                        <i class="bi bi-person-lines-fill"></i>
                        <a href="../biodata_guru/biodata_guru.php" class="feat-btn">Biodata Guru</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="container">
                <nav class="navbar">
                    <div id="indikator">
                        <a href="presensikls2.php" class="bi bi-arrow-left"></a>
                        <h5>Halaman Tampil presensi Siswa Kelas 2A</h5>
                    </div>
                    <ul>
                        <li>Admin |</li>
                        <li>Widia Nurindri</li>
                        <li id="logout">
                            <i class="bi bi-box-arrow-right"></i>
                            <a id="out" href="../login.php">Logout</a>
                        </li>
                    </ul>
                </nav>
                <hr />
                <div class="box">
                    <div class="container">
                        <div class="kalender">
                            <h5 class="bi bi-calendar4-week">19/04/2024</h5>
                        </div>
                        <div class="tabel">
                            <table>
                                <tr>
                                    <th>No</th>
                                    <th>NISN</th>
                                    <th>ID Siswa</th>
                                    <th>Nama Siswa</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>1.</td>
                                    <td>001</td>
                                    <td>001</td>
                                    <td>Widia N</td>
                                    <td>
                                        <div class="absensi">
                                            <button class="action-presensi" id="buttonS">S</button>
                                            <button class="action-presensi" id="buttonI">I</button>
                                            <button class="action-presensi" id="buttonA">A</button>
                                            <button class="action-presensi" id="buttonH">H</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>002</td>
                                    <td>002</td>
                                    <td>Della D</td>
                                    <td>
                                        <div class="absensi">
                                            <button class="action-presensi" id="buttonS">S</button>
                                            <button class="action-presensi" id="buttonI">I</button>
                                            <button class="action-presensi" id="buttonA">A</button>
                                            <button class="action-presensi" id="buttonH">H</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>003</td>
                                    <td>003</td>
                                    <td>M Ihsan</td>
                                    <td>
                                        <div class="absensi">
                                            <button class="action-presensi" id="buttonS">S</button>
                                            <button class="action-presensi" id="buttonI">I</button>
                                            <button class="action-presensi" id="buttonA">A</button>
                                            <button class="action-presensi" id="buttonH">H</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td> </td>
                                </tr>
                            </table>
                            <div class="simpan">
                                <button onclick="myFunction()">Simpan</button>
                            </div>
                        </div>
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
    <script>
        document.querySelectorAll('.feat-btn').forEach((item) => {
            item.addEventListener('click', (event) => {
                const parent = item.parentElement;
                parent.classList.toggle('active');
            });
        });
    </script>
    <script>
        // Function to handle button click
        function handleButtonClick(event) {
            // Get the row of the clicked button
            let row = event.target.closest('tr');
            // Remove 'clicked' class from all buttons in the row
            row.querySelectorAll('.action-presensi').forEach((button) => {
                button.classList.remove('clicked');
            });
            // Add 'clicked' class to the clicked button
            event.target.classList.add('clicked');
        }

        // Add click event listener to all buttons
        document.querySelectorAll('.action-presensi').forEach((button) => {
            button.addEventListener('click', handleButtonClick);
        });
    </script>
    <script>
        function myFunction() {
            alert("Presensi Berhasil Di Simpan");
        }
    </script>
</body>

</html>