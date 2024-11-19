<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kesiswaan SMPN 2 Malang</title>
  <!-- CSS Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
  <!-- Ikon Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
    .organisasi{
        margin: 6%  auto 10% auto ;
    }
    .organisasi-card{
        gap: 20px;
    }
    .organisasi-title {
        font-size: 35px;
        color: #343a40;
        margin-bottom: 20px;
        text-align: center;
        margin-top: 10%;
        font-family: 'montserrat', sans-serif;
        font-weight: bold;
    }
    .garis-bawah{
        margin: 0 auto;
        width: 30%;
        border: none;
        height: 2px;
        background-color: #E04E4E;
        margin-bottom: 60px;
    }
    #fotoCarousel .carousel-inner {
      max-width: 1200px;
      margin: 0 auto;
      border-radius: 30px;
      overflow: hidden;
      position: relative;
      margin-bottom: 15%;
    }
    #fotoCarousel .carousel-item img {
      width: 100%;
      height: auto;
    }
    .caption-ekstra {
    position: absolute;
    bottom: 50px;
    left: 50%; 
    transform: translateX(-50%); 
    color: white;
    text-align: center;
    font-family: 'Montserrat', sans-serif;
    font-size: 35px;
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
        .ekstra-box{
          display: flex;
          margin-left: auto;
          margin-right: auto;
          justify-content: space-between;
          width: 1013px;
          margin-bottom: 7%;
        }
        .card {
            background-color: #E04E4E;
            color: white;
            border: 2px solid #E04E4E;
            border-radius: 10px;
            text-align: center;
            padding: 20px;
            margin: 10px;
            width: 250px;
            height: 250px;
            transition: all 0.3s;
        }
        .card:hover{
          background-color: white;
          border: solid 2px #E04E4E;
          color: #E04E4E;
          
        }
        .card i {
            font-size: 50px;
            margin-bottom: 30px;
            padding-top: 20px; 
        }
        .card-title {
            font-size: 16px;
            font-weight: bold;
            margin-top: 40px;
        }
        .card a{
          text-decoration: none;
          color: white;
        }
        .card a:hover{
          color: #E04E4E;
        }
        
</style>
<body>

  <div class="hero-image-container">
    <img src="../../project kelas 1/kesiswaan/Hero (2).png" class="img-fluid w-100">
  </div>

  <!--organisasi-->
<h1 class="organisasi-title">
   Organisasi 
 </h1>
 <hr class="garis-bawah">

    <div class="container organisasi">
        <div class="row justify-content-center organisasi-card">
            <div class="col-md-5 osis">
                <img src="../../project kelas 1/kesiswaan/Card (1).png" alt="osis">
            </div>
            <div class="col-md-5 polisi">
                <img src="../../project kelas 1/kesiswaan/Card (2).png" alt="polisi disiplin">
            </div>
        </div>
    </div>

<!--slide ekstrakulikuler-->
<h1 class="organisasi-title ekskul">
    Ekstrakulikuler
</h1>
<hr class="garis-bawah">

<div id="fotoCarousel" class="carousel slide ">
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="../../project kelas 1/kesiswaan/image 1 (1).png" class="d-block w-100" alt="foto 1">
          <p class="caption-ekstra">Basket</p>
      </div>
      <div class="carousel-item">
          <img src="../../project kelas 1/kesiswaan/image 2.png" class="d-block w-100" alt="foto 2">
          <p class="caption-ekstra">Dewan Galang</p>
      </div>
      <div class="carousel-item">
          <img src="../../project kelas 1/kesiswaan/image 3.png" class="d-block w-100" alt="foto 3">
          <p class="caption-ekstra">Paskibra</p>
      </div>
      <div class="carousel-item">
          <img src="../../project kelas 1/kesiswaan/Image 4.png" class="d-block w-100" alt="foto 4">
          <p class="caption-ekstra">Palang Merah Remaja</p>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#fotoCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#fotoCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!--card ekstrakulikuler-->
  <div class="container ekstra-box">
    <div class="row justify-content-center">

            <div class="card">
                <i class="fas fa-campground"></i>
                <div class="card-title">Pramuka Wajib</div>
            </div>

            <div class="card" style="margin-left: 57px;">
                <i class="fas fa-leaf"></i>
                <div class="card-title">Kader Adiwiyata</div>
            </div>

            <div class="card" style="margin-left: 57px;">
                <i class="fas fa-paint-brush"></i>
                <div class="card-title">Seni Rupa Desain</div>
            </div>

            <div class="card" >
              <a <?= ($page == 'ekstra') ? 'active' : '' ?>" href="index.php?page=ekstra">
                <i class="fas fa-users"></i>
                <div class="card-title">Dewan Galang</div>
              </a>
            </div>

            <div class="card" style="margin-left: 57px;">
                <i class="fas fa-futbol" ></i>
                <div class="card-title">Futsal</div>
            </div>

            <div class="card" style="margin-left: 57px;">
                <i class="fas fa-hand-rock"></i>
                <div class="card-title">Karate</div>
            </div>

            <div class="card">
                <i class="fas fa-flag"></i>
                <div class="card-title">Paskibra</div>
            </div>

            <div class="card" style="margin-left: 57px;">
                <i class="fas fa-volleyball-ball"></i>
                <div class="card-title">Voli</div>
            </div>

            <div class="card" style="margin-left: 57px;">
                <i class="fas fa-chess"></i>
                <div class="card-title">Catur</div>
            </div>

            <div class="card">
                <i class="fas fa-first-aid"></i>
                <div class="card-title">Palang Merah Remaja</div>
            </div>

            <div class="card" style="margin-left: 57px;">
                <i class="fas fa-basketball-ball"></i>
                <div class="card-title">Basket</div>
            </div>

            <div class="card" style="margin-left: 57px;">
                <i class="fas fa-drum"></i>
                <div class="card-title">Al Banjari</div>
            </div>

            <div class="card">
                <i class="fas fa-music"></i>
                <div class="card-title">Tari</div>
            </div>

            <div class="card" style="margin-left: 57px;">
                <i class="fas fa-guitar"></i>
                <div class="card-title">Band</div>
            </div>

            <div class="card" style="margin-left: 57px;">
                <i class="fas fa-users"></i>
                <div class="card-title">Paduan Suara</div>
            </div>

            <div class="card">
                <i class="fas fa-pen"></i>
                <div class="card-title">Jurnalistik</div>
            </div>
        </div>
    </div>
</div>
