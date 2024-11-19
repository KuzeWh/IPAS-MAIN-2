<?php
include 'db.php';

// Ambil semua berita
$result = $conn->query("SELECT * FROM berita ORDER BY tanggal DESC");
?>
    <style>
        /* Kontainer Berita */
        .berita-container {
            display: grid;
            grid-template-rows: auto 1fr;
            gap: 30px;
            margin-top: 30px;
        }

        /* Judul Berita dan Garis */
        .berita-header {
            text-align: center;
        }

        .berita-title {
            font-size: 24px;
            color: #343a40;
            margin-bottom: 10px;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
        }

        .garis-bawah {
            margin: 0 auto;
            width: 30%;
            border: none;
            height: 2px;
            background-color: #E04E4E;
            margin-bottom: 100px;
        }

        /* Berita Grid */
        .berita {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            max-width: 100%;
        }

        /* Gambar */
        .berita .image-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 180px; /* Tinggi tetap untuk kotak gambar */
            overflow: hidden; /* Memotong gambar berlebih */
        }

        .berita .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Menjaga proporsi gambar */
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Card Deskripsi */
        .berita .text-berita {
            background-color: #E04E4E;
            color: white;
            border-radius: 8px;
            padding: 15px;
            display: flex;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow-wrap: break-word; /* Mencegah teks melampaui batas */
        }

        .berita .text-berita h2 {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .berita .text-berita p {
            font-size: 13px;
            margin-bottom: 8px;
            text-align: justify; /* Membuat teks lebih rapi */
        }

        .berita .text-berita .berita-tanggal {
            font-size: 11px;
            color: #ffd1d1;
            margin-top: auto; /* Posisi tanggal di bagian bawah */
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .berita {
                grid-template-columns: 1fr; /* Satu kolom di layar kecil */
            }

            .berita .image-container {
                height: auto; /* Gambar fleksibel pada layar kecil */
            }

            .berita .image-container img {
                height: auto; /* Menyesuaikan proporsi */
            }
        }
    </style>
</head>

<body>
    <!-- Hero Image -->
    <div class="hero-image-container">
        <img src="../../project kelas 1/berita/Hero (3).png" class="img-fluid w-100" alt="Hero Image">
    </div>

    <!-- Kontainer Berita -->
    <div class="mb-5 container berita-container">
        <!-- Header Berita -->
        <div class="berita-header">
            <h1 class="berita-title">Berita</h1>
            <div class="garis-bawah"></div>
        </div>

        <!-- Isi Berita -->
        <div class="berita">
            <?php while ($row = $result->fetch_assoc()): ?>
                <!-- Gambar Berita -->
                <div class="image-container">
                    <?php if ($row['gambar']): ?>
                        <img src="uploads/<?= $row['gambar']; ?>" alt="Gambar Berita">
                    <?php else: ?>
                        <span class="text-muted">No Image</span>
                    <?php endif; ?>
                </div>

                <!-- Card Deskripsi -->
                <div class="text-berita">
                    <h2><?= htmlspecialchars($row['judul'], ENT_QUOTES, 'UTF-8'); ?></h2>
                    <p><?= nl2br(htmlspecialchars($row['deskripsi'], ENT_QUOTES, 'UTF-8')); ?></p>
                    <p class="berita-tanggal"><?= date('d M Y', strtotime($row['tanggal'])); ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <script>
        // Fungsi edit berita (jika diperlukan)
        function editBerita(id, judul, deskripsi, gambar, tanggal) {
            document.getElementById('id').value = id;
            document.getElementsByName('judul')[0].value = judul;
            document.getElementsByName('deskripsi')[0].value = deskripsi;
            document.getElementsByName('gambar')[0].value = gambar;
            document.getElementsByName('tanggal')[0].value = tanggal;
        }
    </script>