<style>
    .foto-prestasi{
      margin: 10% auto;
    }
    .prestasi{
      position: relative;
      margin-left: 35px;
    }
    .prestasi img {
      width: 100%;
      height: auto;
      border-radius: 20px; 
    }
    .prestasi-caption {
      position: absolute;
      bottom: 0;
      left: 10px;
      width: 96%; 
      padding: 10px;
      color: white;
      background-color: rgba(0, 0, 0, 0.6); 
      text-align: center;
      font-size: 15px;
      border-radius: 0 0 20px 20px;
    }
    .video-title {
      text-align: center;
      font-family: 'Montserrat', sans-serif;
      margin-top: 30px;
    }
    .video-title h1 {
      font-size: 35px;
      font-weight: b2old;
    }
    .video-title::after {
      content: '';
      display: block;
      width: 30%;
      height: 1px;
      background-color: #E04E4E;
      margin: 30px auto 70px auto;
    }
    #videoCarousel .carousel-inner {
      max-width: 1200px;
      margin: 0 auto;
      border-radius: 30px;
      overflow: hidden;
      position: relative;
      margin-bottom: 15%;
      ;
    }
    #videoCarousel .carousel-item img {
      width: 100%;
      height: auto;
    }
    .play-icon {
      font-size: 3rem;
      color: white;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      transition: color 0.3s;
    }
    .play-icon:hover {
      color: #E04E4E;
    }
    .carousel-control-prev,
    .carousel-control-next {
      width: auto;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      color: black;
      font-size: 1.5rem;
      padding: 10px;
    }
    .carousel-control-prev {
      left: 12%;
    }
    .carousel-control-next {
      right: 12%;
    }
  </style>
</head>
<body>

  <div class="hero-image-container">
    <img src="../../project kelas 1/prestasi/Hero (2).png" class="img-fluid w-100" alt="Hero Image">
  </div>

  <!--foto foto prestasi-->
  <div class="container foto-prestasi">
    <div class="row justify-content-center">
      <div class="col-md-5 mb-5 prestasi">
        <img src="../../project kelas 1/prestasi/Prestasi 1.png" alt="Prestasi 1">
        <div class="prestasi-caption" style="padding-bottom: 20px; padding-top: 20px;">Juara 1 kelas 9A kemah blok 2023</div>
      </div>
      <div class="col-md-5 mb-5 prestasi">
        <img src="../../project kelas 1/prestasi/prestasi 2.png" alt="Prestasi 2">
        <div class="prestasi-caption">Juara Mula 2 LPKBB JURAGAN 2 Malang<br><strong>Tim Paskibra SMPN 2 Malang</strong></div>
      </div>
      <div class="col-md-5 mb-5 prestasi">
        <img src="../../project kelas 1/prestasi/Prestasi 3.png" alt="Prestasi 3">
        <div class="prestasi-caption">Juara 3 Individu Foil Putri U14 ajang Fencing Kajari Open Championship Anggar<br><strong>Andi Amira kelas 9A</strong></div>
      </div>
      <div class="col-md-5 mb-5 prestasi">
        <img src="../../project kelas 1/prestasi/Prestasi 4.png" alt="Prestasi 4">
        <div class="prestasi-caption">Juara 3 kejuaraan Judo Piala UNESA<br><strong>Ahmad Mubin Persada Kelas 9A</strong></div>
      </div>
      <div class="col-md-5 mb-5 prestasi">
        <img src="../../project kelas 1/prestasi/Prestasi 5.png" alt="Prestasi 5">
        <div class="prestasi-caption">Juara II Kumite +55 Kg SMP Putra dalam kejuaraan Piala Pangdam V/BRW di Surabaya.<br><strong> M. Aldo Ferdianto kelas 8F</strong></div>
      </div>
      <div class="col-md-5 mb-5 prestasi">
        <img src="../../project kelas 1/prestasi/Prestasi 6.png" alt="Prestasi 6">
        <div class="prestasi-caption">Kejuaraan Karate Festival & Open Tournament Piala Kemerdekaan RI- Ketua DPRD Kota Malang.<br><strong>Aslam kelas 9G</strong></div>
      </div>
    </div>
  </div>

 <!-- Video Section -->
 <div class="container video">
  <div class="video-title">
    <h1>Video</h1>
  </div>
</div>

<div id="videoCarousel" class="carousel slide ">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="https://youtu.be/oefce7-8VwE?si=Y4eAHxY8wt2s9bjr" target="_blank">
        <img src="../../project kelas 1/prestasi/thumbnail 1.png" class="d-block w-100" alt="Video 1">
        <i class="bi bi-play-circle-fill play-icon"></i>
      </a>
    </div>
    <div class="carousel-item">
      <a href="https://youtu.be/w36G_CZKir4?si=_mL63DNg_1gwm5mr">
        <img src="../../project kelas 1/prestasi/thumbnail 2 (1).png" class="d-block w-100" alt="Video 2">
        <i class="bi bi-play-circle-fill play-icon"></i>
      </a>
    </div>
    <div class="carousel-item">
      <a href="https://youtu.be/iSaUeqGY0cE?si=bfGVTLr7IkppSCZ2">
        <img src="../../project kelas 1/prestasi/thumbnail 3 (1).png" class="d-block w-100" alt="Video 3">
        <i class="bi bi-play-circle-fill play-icon"></i>
      </a>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>