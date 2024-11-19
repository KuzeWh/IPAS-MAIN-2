<style>
    .foto-guru-container {
      position: relative;
      width: 100%;
      max-width: 1200px; 
      margin: 10% auto; 
      border-radius: 15px;
    }

    .foto-guru-container img {
      width: 100%;
      display: block;
    }
    .foto-guru-caption {
      position: absolute;
      bottom: 10px;
      width: 1194px;
      background: rgba(0, 0, 0, 0.6); 
      color: white;
      text-align: center;
      padding: 25px;
      font-size: 1.2em;
      border-radius: 0 0 50px 50px;
      font-family: 'montserrat', sans-serif;
      font-weight: bold;
    }
    .kepsek{
        justify-content: center;
        display: flex;
        margin-bottom: 13%;

    }
    .title-struktur{
        text-align: center;
        font-family: 'montserrat', sans-serif;
        font-size: 35px;
        margin-bottom: 35px;
    }
    .title-struktur::after{
        content: '';
        display: block;
        width: 30%;
        height: 1px;
        background-color: #E04E4E;
        margin: 20px auto 50px auto;
    }
    .waka{
        display: flex;
        justify-content: space-evenly;
        margin-bottom: 15%;
    }
        .footer h5 {
            font-size: 1.25rem;
            margin-bottom: 20px;
        }
        .footer p {
            margin: 0;
            font-size: 1rem;
        }
        .footer .social-icons a {
            color: #FFFFFF;
            font-size: 1.5rem;
            margin-right: 15px;
        }
        .footer .copyright {
            text-align: right;
            margin-top: 20px;
            font-size: 1rem;
        }
        .footer .row > div {
            margin-bottom: 30px;
        }
        .footer {
        background-color: #2B384B;
        color: white;
        padding: 20px 0;
        text-align: left;
        }
        .header-foot h5{
        font-family: 'montserrat', sans-serif;
        font-weight: bold;
        font-size: 28px;
        position: relative;
        left: 50px;
        }
        .header-foot p{
          font-family: 'open sans', sans-serif;
        }
        .dino{
          position: relative;
          left: 50px;
        }
        .vismi{
          position: relative;
          top: 30px;
        }
  </style>
</head>
<body>
  <div class="hero-image-container">
    <img src="../../project kelas 1/struktur organisasi/Hero (2).png" class="img-fluid w-100" alt="Hero Image">
  </div>

  <!--foto bapak ibu guru-->
  <div class="foto-guru-container">
    <img src="./../project kelas 1/struktur organisasi/Image (4).png" alt="Foto Bapak Ibu Guru">
    <div class="foto-guru-caption">Bapak Ibu Guru SMP Negeri 2 Malang</div>
  </div>

    <h1 class="title-struktur">
       Struktur organisasi
    </h1>
    <div class="container">
        <div class="foto-waka">
            <div class="kepsek">
                <img src="./../project kelas 1/struktur organisasi/Card (1).png">
            </div>
            <div class="waka">
                <img src="./../project kelas 1/struktur organisasi/Card (2).png">
                <img src="./../project kelas 1/struktur organisasi/Card (3).png">
                <img src="./../project kelas 1/struktur organisasi/Card (4).png">
                <img src="./../project kelas 1/struktur organisasi/Card (5).png">
            </div>
        </div>
    </div>