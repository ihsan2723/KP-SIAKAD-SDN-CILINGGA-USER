<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/kelola1-6.css" />
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
                        <a href="kelolanilai1.php" class="bi bi-arrow-left"></a>
                        <h5>Halaman Pilih Mapel</h5>
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
                        <div class="tambah">
                            <h5></h5>
                        </div>
                        <div class="tabel">
                            <table>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Mata Pelajara</th>
                                    <th>Nama Mata Pelajaran</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>1.</td>
                                    <td>001</td>
                                    <td>Bahasa Indonesia</td>
                                    <td>
                                        <a id="view" class="bi bi-eye-fill" style="color: #fefae0" href="indo.php"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>002</td>
                                    <td>IPA</td>
                                    <td>
                                        <a id="view" class="bi bi-eye-fill" style="color: #fefae0" href="ipa.php"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>003</td>
                                    <td>IPS</td>
                                    <td>
                                        <a id="view" class="bi bi-eye-fill" style="color: #fefae0" href="ips.php"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a id="view" class="bi bi-eye-fill" style="color: #fefae0" href=""></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a id="view" class="bi bi-eye-fill" style="color: #fefae0" href=""></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a id="view" class="bi bi-eye-fill" style="color: #fefae0" href=""></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a id="view" class="bi bi-eye-fill" style="color: #fefae0" href=""></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a id="view" class="bi bi-eye-fill" style="color: #fefae0" href=""></a>
                                    </td>
                                </tr>
                            </table>
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
</body>

</html>