<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Particles</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div id="tsparticles"></div>
    <div id="overlay" class="overlay"></div>
    <div id="notification" class="notification">
        <div class="notification-content">
            <div class="text-content-pop">
                <div class="notif-header">
                    <span class="notification-text bold">DISCLAIMER!</span>
                </div>
                <p>Data yang tersedia hanya sebagai layanan dalam rangka <span class="bold">memenuhi keterbukaan informasi publik.</span></p>
            </div>
            <div class="text-content-pop">
                <div class="notif-header">
                    <span class="notification-text bold">PERINGATAN!</span>
                </div>
                <p>Pemberitahuan putusan secara resmi dilakukan oleh pengadilan pengaju / pengadilan tingkat pertama.</span></p>
            </div>
            <button id="close-notification" class="notification-close">Tutup</button>
        </div>
    </div>
    <div class="login-container">
        <div class="logo-container">
            <img src="./asset/patagonia.jpeg" alt="Logo" class="logo">
        </div>
        <div class="head-container">
            <h2>Silakan Pilih Tahun Perkara</h2>
        </div>
        <div class="head-container">
            <div class="perkara-container">
                <h4>PERKARA</h4>
            </div>
            <div class="btn-tahun-container">
                <a href="./index.php">
                    <div class="btn-tahun">
                        <h5>2022</h5>
                    </div>
                </a>
                <a href="./index.php">
                    <div class="btn-tahun">
                        <h5>2023</h5>
                    </div>
                </a>
                <a href="./index.php">
                    <div class="btn-tahun">
                        <h5>2024</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="head-container">
            <div class="perkara-container">
                <h4>PILKADA</h4>
            </div>
            <div class="btn-tahun-container">
                <a href="./index.php">
                    <div class="btn-tahun">
                        <h5>2022</h5>
                    </div>
                </a>
                <a href="./index.php">
                    <div class="btn-tahun">
                        <h5>2023</h5>
                    </div>
                </a>
                <a href="./index.php">
                    <div class="btn-tahun">
                        <h5>2024</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="head-container">
            <div class="perkara-container">
                <h4>TINGKAT PERTAMA (TK. I)</h4>
            </div>
            <div class="btn-tahun-container">
                <a href="./index.php">
                    <div class="btn-tahun">
                        <h5>2022</h5>
                    </div>
                </a>
                <a href="./index.php">
                    <div class="btn-tahun">
                        <h5>2023</h5>
                    </div>
                </a>
                <a href="./index.php">
                    <div class="btn-tahun">
                        <h5>2024</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="head-container">
            <div class="atau">
                <p>Atau</p>
            </div>
            <div class="header-input">
                <h3>Silakan Isi Nomor Perkara banding</h3>
            </div>
            <div class="input-perkara">
                <input class="no-perkara" type="text" placeholder="1/B/111">
            </div>
            <div class="btn-src-container">
                <a href="#">
                    <div class="btn-src">
                        <p>Cari</p>
                    </div>
                </a>
            </div>
            <div class="guest-out">
                <a href="#">
                    <div class="btn-out">
                        <p>Guest Keluar</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- https://www.jsdeliver.com/package/npm/tsparticles -->
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2.0.6/tsparticles.bundle.min.js"></script>
    <script src="scriptPop.js"></script>
</body>

</html>