<style>
    .galeri-title {
        font-size: 35px;
        color: #343a40;
        margin-bottom: 20px;
        text-align: center;
        margin-top: 5%;
        font-family: 'montserrat', sans-serif;
        font-weight: bold;
    }
    .garis-bawah{
        margin: 0 auto;
        width: 30%;
        border: none;
        height: 2px;
        background-color: #E04E4E;
        margin-bottom: 90px;
    }
    .foto {
    margin-bottom: 45px; 
    }
    .foto-kegiatan .col-md-5 {
    margin-right: 35px;
    } 
    #videoCarousel .carousel-inner {
      max-width: 1100px;
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
      left: 14%;
    }
    .carousel-control-next {
      right: 14%;
    }

</style>
<body>
    
<div class="hero-image-container">
    <img src="../../project kelas 1/galeri/Hero (3).png" class="img-fluid w-100 mb-4">
</div>

<!--title galeri-->
<h1 class="galeri-title">
   Galeri 
</h1>
<hr class="garis-bawah">

<!--foto foto-->
<div class="container">
    <div class="row justify-content-center foto-kegiatan">
        <div class="col-md-5 foto ">
            <img src="../../project kelas 1/galeri/image (4).png">
        </div>
        <div class="col-md-5 foto">
            <img src="../../project kelas 1/galeri/image 10.png">
        </div>
        <div class="col-md-5 foto">
            <img src="../../project kelas 1/galeri/image 11.png">
        </div>
        <div class="col-md-5 foto">
            <img src="../../project kelas 1/galeri/image 12.png">
        </div>
        <div class="col-md-5 foto">
            <img src="../../project kelas 1/galeri/image 14 (1).png">
        </div>
        <div class="col-md-5 foto">
            <img src="../../project kelas 1/galeri/image 14.png">
        </div>
        <div class="col-md-5 foto">
            <img src="../../project kelas 1/galeri/image 15.png">
        </div>
        <div class="col-md-5 foto">
            <img src="../../project kelas 1/galeri/image 16.png">
        </div>
    </div>
</div>

<!--video-->
<h1 class="galeri-title">
    Video
 </h1>
 <hr class="garis-bawah">

<!--slide galeri-->
<div id="videoCarousel" class="carousel slide ">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="https://youtu.be/cOkSZ17gm5k?si=9ObQT-696s8QLUzR" target="_blank">
          <img src="../../project kelas 1/galeri/thumbnail 1 (1).png" class="d-block w-100" alt="Video 1">
          <i class="bi bi-play-circle-fill play-icon"></i>
        </a>
      </div>
      <div class="carousel-item">
        <a href="https://youtu.be/tHej61IUL58?si=qNmdtUelhiaq7g6C" target="_blank">
          <img src="../../project kelas 1/galeri/thumbnail 4.png" class="d-block w-100" alt="Video 2">
          <i class="bi bi-play-circle-fill play-icon"></i>
        </a>
      </div>
      <div class="carousel-item">
        <a href="https://youtu.be/QBW5-ainqbo?si=C8scTmlJLTKi_LcZ" target="_blank">
          <img src="../../project kelas 1/galeri/thumbnail 5.png" class="d-block w-100" alt="Video 3">
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