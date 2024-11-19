<style>
.welcome-section {
    padding: 40px 20px;
    border-radius: 8px;
  }
  .welcome-text h1 {
    font-weight: bold;
    font-size: 2rem;
    color: #333;
    margin-bottom: 20px;
    font-family: 'montserrat', sans-serif;
  }
  .welcome-text p {
    font-size: 1.2rem;
    color: #555;
    font-family: 'open sans', sans-serif;
  }
  .hero-image {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
  }
  .img-kepsek {
    background-color: #E04E4E;
    border-radius: 30px;
  }
  .smb{
    font-size: 1.5rem;
  }
  .sambutan-section{
    margin-bottom: 75px;
  }
  .program-title {
    text-align: center;
    font-size: 35px;
    margin-top: 30px;
    color: white;
  }
  .program-card {
    background-color: #fff;
    color: #333;
    border-radius: 8px;
    padding: 20px;
    margin-top: 20px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s;
  }
  .program-card:hover{
    background-color: #E04E4E;
    color: white;
    border: solid 1px white;
  }
  .program-card h5{
    font-family: 'montserrat', sans-serif;
  }
  .program-card p{
    font-family: 'open sans', sans-serif;
  }
  .icon {
    font-size: 36px;
    color: #E04E4E;
    margin-bottom: 10px;
    transition: all 0.3s;
  }
  .icon:hover{
    color: white;
  }
  .berita-header hr{
    width: 30%;
    border-top: 2px solid black;
    margin: 0 auto;
    margin-top: 25px;
  }
  .program{
    background-color: #E04E4E;
    padding: 50PX;
  }
  .program hr{
    width: 30%;
    height: 2px;
    color: white;
    margin: 0 auto;
    margin-bottom: 35px;
  }
  .news-title {
          text-align: center;
          font-size: 35px;
          color: #333;
          margin-top: 10%;
          font-family: 'montserrat', sans-serif;
      }
      .news-title::after {
          content: '';
          display: block;
          height: 1px;
          background-color: #E04E4E;
          margin: 20px auto;
          width: 30%;
          margin-bottom: 35px;
      }
      .news-container {
          display: flex;
          justify-content: center;
          flex-wrap: wrap;
          gap: 20px;
          margin-top: 20px;
      }
      .news-item {
          position: relative;
          width: 700px;
          height: 400px;
          border-radius: 8px;
          overflow: hidden;
      }
      .news-item img {
          width: 100%;
          height: 100%;
          object-fit: cover;
          border-radius: 10px;
      }
      .news-caption {
          position: absolute;
          bottom: 10px;
          color: #fff;
          width: 100%;
          padding: 10px;
          font-size: 14px;
          text-align: center;
          font-size: 20px;
          font-family: 'montserrat', sans-serif;
      }
      .small-news-container {
          display: flex;
          justify-content: center;
          gap: 20px;
          margin-top: 10px;
      }
      .small-news-item {
          width: 220px;
          height: 125px;
          overflow: hidden;
          border-radius: 8px;
      }
      .small-news-item img {
          width: 100%;
          height: 100%;
          object-fit: cover;
      }
      .vertical-news-item {
          position: relative;
          width: 300px;
          height: 535px;
          overflow: hidden;
          border-radius: 8px;
      }
      .vertical-news-item img {
          width: 100%;
          height: 100%;
          object-fit: cover;
      }
      .news-item img,
      .vertical-news-item img,
      .small-news-item img {
          transition: transform 0.3s ease;
      }
      .news-item:hover img,
      .vertical-news-item:hover img,
      .small-news-item:hover img {
      transform: scale(1.05);
      }
      .title-prestasi {
          font-size: 2.5rem;
          color: #343a40;
          margin-bottom: 20px;
          text-align: center;
          margin-top: 70px;
          font-family: 'montserrat', sans-serif;
      }
      .garis {
          width: 30%;
          height: 2px;
          background-color: #dc3545;
          margin: 0 auto 40px;
      }
      .card {
          border-radius: 15px;
          margin-bottom: 60px;
          overflow: hidden;
      }
      .card img {
          border-radius: 15px;
          width: 100%;
          height: auto;
          transition: transform 0.3s ease;
      }
      .card:hover img {
      transform: scale(1.1);
      }
      .card img {
          object-fit: cover;
      }
</style>

<div class="hero-image">
    <img src="../../project kelas 1/Beranda/hero.png" class="img-fluid w-100" alt="Hero Image">
  </div>

  <!-- welcome -->
  <div class="container my-5 align-items-center">
    <div class="row justify-content-center align-items-center welcome-section">
      <div class="col-md-5 welcome-text">
        <h1>Welcome</h1>
        <p>Selamat datang di Website SMPN 2 Malang</p>
      </div>
      <div class="col-md-4 text-center">
        <img src="../project kelas 1/Beranda/Image Container.png" alt="Gambar Hero" class="hero-image img-fluid" width="530px" height="450px">
      </div>
    </div>
  </div>

  
  <!-- Sambutan Kepala Sekolah -->
  <div class="container sambutan-section">
    <div class="row align-items-center">
      <div class="col-md-7 sambutan-text">
        <p class="smb">Sambutan</p>
        <h1>Kepala Sekolah</h1>
        <p>Assalamualaikum Warahmatullahi Wabarakatuh</p>
        <p>Alhamdulillahirabbilalamiin, kami panjatkan kehadirat Allah SWT, bahwasanya dengan rahmat dan karunia-Nya akhirnya Website SMPN 2 Malang dapat kami perbaharui kembali. Kami mengucapkan selamat datang di Website Sekolah kami yang ditujukan untuk seluruh unsur pendidik dan tenaga kependidikan, peserta didik, serta khalayak masyarakat untuk dapat mengakses seluruh informasi tentang segala profil, aktifitas/kegiatan serta fasilitas di sekolah kami.</p>
        <p>Kami selaku pimpinan sekolah menyampaikan terima kasih kepada tim pembuat dan pengisi konten Website ini yang telah berusaha untuk dapat lebih memperkenalkan segala potensi yang dimiliki oleh sekolah. Tentunya Website sekolah kami masih terdapat banyak kekurangan, oleh karena itu kepada seluruh civitas akademika dan masyarakat umum dapat memberikan saran dan kritik yang membangun demi kemajuan Website SMPN 2 Malang ke depan.</p>
        <p>Saya berharap Website ini dapat dijadikan wahana interaksi yang positif baik antar civitas akademika maupun masyarakat pada umumnya sehingga dapat menjalin silaturahmi yang erat di segala unsur. Mari kita bekerja dan berkarya dengan mengharap ridho Sang Kuasa dan keikhlasan yang tulus di jiwa, demi peningkatan kualitas generasi masa depan.</p>
        <p>Terima kasih semoga Allah Azza Wa Jalla menyertai doa kita semua, Amin.</p>
        <p>~ Riatningish, S.Pd., M.M</p>
      </div>
      <!-- Kolom Gambar Kepala Sekolah -->
      <div class="col-md-5 text-center">
        <img src="../project kelas 1/Beranda/Image (1).png" alt="Gambar Kepala Sekolah" class="img-kepsek">
      </div>
    </div>
  </div>

<!-- Program -->
<div class="program">
  <h2 class="program-title">Program</h2>
  <hr style="border: none; height: 2px; background-color: #fff;">
  <div class="row justify-content-center">
    <!-- Card 1 -->
    <div class="col-md-3 mx-3">
      <div class="program-card text-center">
        <div class="icon"><i class="bi bi-person-circle"></i></div>
        <h5>SIMBA ASIA</h5><br>
        <p>( Sinau Mandiri Bersama Anak Satwimaba Istimewa )</p>
        <p>Sebuah inovasi pendidikan yang memberdayakan anak berkebutuhan khusus agar dapat mengakses pendidikan secara optimal</p>
      </div>
    </div>
    <!-- Card 2 -->
    <div class="col-md-3 mx-3">
      <div class="program-card text-center">
        <div class="icon"><i class="bi bi-journal-bookmark-fill"></i></div>
        <h5>ACTIYA SATWIMABA</h5><br>
        <p>Actiya Satwimaba adalah perpustakaan di SMP Negeri 2 Malang yang memiliki koleksi pustaka yang beragam. Koleksi berbagai jenis buku, fiksi maupun non fiksi. Selain itu juga terdapat karya guru dan peserta didik yang dibukukan</p>
      </div>
    </div>
    <!-- Card 3 -->
    <div class="col-md-3 mx-3">
      <div class="program-card text-center">
        <div class="icon"><i class="bi bi-tree-fill"></i></div>
        <h5>ADIWIYATA</h5><br>
        <p>Pengembangan budaya ramah / peduli lingkungan digalakkan melalui kegiatan pembiasaan, intrakurikuler, kokurikuler maupun ekstrakurikuler secara berkesinambungan semua disinergikan untuk kepentingan seluruh warga sekolah</p>
      </div>
    </div>
  </div>
</div>
<!--berita-->
<div class="container">
  <div class="news-title">
   <h1>Berita</h1>
  </div>
  <div class="news-container">
   <div>
    <div class="news-item">
     <a href="../Berita/berita.html">
     <img alt="walikota" height="300" src="../project kelas 1/Beranda/a 1.png" width="500"/>
      <div class="news-caption">
        Pj. Wali Kota Malang Optimis SMK BISA ASIA Masuk 5 Besar PKRI
      </div>
     </a>
    </div>
    <div class="small-news-container">
     <div class="small-news-item">
      <a href="../Berita/berita.html">
      <img alt="kemah blok" height="100" src="../project kelas 1/Beranda/z (1) 1.png" width="150"/>
      </a>
     </div>
     <div class="small-news-item">
      <a href="../Berita/berita.html">
      <img alt="pemenang" height="100" src="../project kelas 1/Beranda/q (1) 1.png" width="150"/>
      </a>
     </div>
     <div class="small-news-item">
      <a href="../Berita/berita.html">
      <img alt="PPDB" height="100" src="../project kelas 1/Beranda/p (1) 1.png" width="150"/>
      </a>
     </div>
    </div>
   </div>
   <div class="vertical-news-item">
    <a href="../Berita/berita.html">
        <img alt="purna siswa" height="410" src="../project kelas 1/Beranda/Image (2).png" width="300"/>
      <div class="news-caption">
        PURNAPWIYATA SISWA KELAS 9 Tahun Pelajaran 2023/2024 SMP NEGERI 2 MALANG
       </div>
    </a>
   </div>
  </div>
</div>

<!--prestasi-->
<h1 class="title-prestasi">
  Prestasi
 </h1>
  <div class="garis">
 </div>
 <div class="container">
  <div class="row justify-content-center">
   <div class="col-md-3 mb-4">
    <div class="card">
      <a href="../Prestasi/prestasi.html">
        <img alt="1" class="card-img-top" src="../project kelas 1/Beranda/Prestasi 1 1.png"/>
      </a>
    </div>
   </div>
   <div class="col-md-3 mb-4">
    <div class="card">
     <a href="../Prestasi/prestasi.html">
      <img alt="2" class="card-img-top" src="../project kelas 1/Beranda/Prestasi 2 1.png"/>
     </a>
    </div>
   </div>
   <div class="col-md-3 mb-4">
    <div class="card">
      <a href="../Prestasi/prestasi.html">
       <img alt="3" class="card-img-top" src="../project kelas 1/Beranda/Prestasi 3 1.png"/>
      </a>
    </div>
   </div>
  </div>
 </div>