<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,300;1,800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="{{ asset('css/cat.css') }}">

    <title>Raport</title>
  </head>
  <body>
   

     <!-- NAVBARR -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Raport SMK Bagimu Negriku</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    
    
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav ms-auto my-2 my-lg-0 ">
        
        <li class="nav-item">

           <a class="nav-link" href="#">LOGIN</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#">
            REGISTER
          </a>
         </li>
       </ul>
     </div>
  </div>
</nav><!-- NAVBARR -->



<section class="main">
    <div class="container py-5">
        <div class="row py-4">
            <div class="col-lg-15 pt-7 text-center">

      <h1 style="text-shadow: 4px 4px 5px rgb(224, 218, 218);margin-top : 130px; color:aliceblue">Selamat Datang, Di Website Raport</h1>
      <h3 style="text-shadow: 4px 4px 5px white;margin-top : 30px; color:aliceblue">SMK Bagimu Negriku</h3>
      </div>
        </div>
    </div>
</section>
</div>

 <section class="new">
   <div class="container py-1">
     <div class="row pt-5">
       <div class="col-lg-7 m-auto">
         <div class="row text-center">
           
          
          
          
          
          
          
          
          <div class="col-lg-3">
             <h2 style="color:rgb(15, 15, 15);
                        text-shadow: 2px 2px 3px rgb(119, 115, 115);
                        margin-left : -479px;
                            ">BERBUDI</h2>
           </div>
          
          <div class="col-lg-3">
             <h2 style="color:rgb(15, 15, 15);
                        text-shadow: 2px 2px 3px rgb(119, 115, 115);
                        margin-left : -200px;

                            ">BERKUALITAS</h2>
           </div>
          
          <div class="col-lg-3">
             <h2 style="color:rgb(15, 15, 15);
                        text-shadow: 2px 2px 3px rgb(119, 115, 115);
                        margin-left : 50px ;
                            ">BERDAYA</h2>
           </div>
          
          <div class="col-lg-3">
             <h2 style="color:rgb(15, 15, 15);
                        text-shadow: 2px 2px 3px rgb(119, 115, 115);
                        margin-left : 199px ;
                            ">BERHASIl</h2>
           </div>
          
          
    
         </div>
       </div>
     </div>
   </div>
 </section>


 <section class="product">
   <div class="container py-5">
      <div class="row py-5">
          <div class="col-lg-5 m-auto text-center">
              <h1>KOMPETENSI</h1>
              <h6 style="color:darkred;">   SMK BAGIMU NEGRIKU SEMARANG  </h6>
          </div>
        </div>


    <div class="row">
      <div class="col-lg-1">
      
        </div>
       <div class="col-lg-2">
      <div class="card border-0">
      
        <div class="card-body">
          <img src="{{ asset ('pictures/img4.jpg') }}" class="img-luid" alt="" style=" margin-left : -5px">
        </div>
      </div>
      <h6 class="text-center">TKRO</h6>
      <h6 class="text-center"></h6>
      </div>


      <div class="col-lg-2">
        <div class="card border-0 ">
        
          <div class="card-body">
            <img src="{{ asset ('pictures/img5.jpg') }}" class="img-luid" alt="" >
          </div>
        </div>
        <h6 class="text-center">MM</h6>
        <h6 class="text-center"></h6>
        </div>


        <div class="col-lg-2">
          <div class="card border-0">
          
            <div class="card-body">
              <img src="{{ asset ('pictures/img7.jpg') }}" class="img-luid" alt="">
            </div>
          </div>
          <h6 class="text-center">TB</h6>
          <h6 class="text-center"></h6>
          </div>

          
        <div class="col-lg-2">
          <div class="card border-0">
          
            <div class="card-body">
              <img src="{{ asset ('pictures/img6.jpg') }}" class="img-luid" alt="">
            </div>
          </div>
          <h6 class="text-center">BKP</h6>
          <h6 class="text-center"></h6>
          </div>

          <div class="col-lg-2">
            <div class="card border-0">
            
              <div class="card-body">
                <img src="{{ asset ('pictures/img2.jpg') }}" class="img-luid" alt="">
              </div>
            </div>
            <h6 class="text-center">RPL</h6>
            <h6 class="text-center"></h6>
            </div>
            <div class="col-lg-1">
      
            </div>
  
      
     </div>
   </div>
 </section>


 {{-- <section class="about">
   <div class="container py-5">
     <div class="row py-2">
       <div class="col-lg-8 m-auto text-center">
          <h1>KETERANGAN</h1>
          <h6 style="color:darkred;">   JURUSAN SMK BAGIMU NEGRIKU  </h6>
         </div>

         <div class="row py-2">
          <div class="col-lg-4  m-auto text-center">
              <img src="" class="img-fluid mb-3" alt="">
              <h5>TKRO</h5>
              <p> Teknik Kendaraan Ringan Otomotif
                Kompetensi Keahlian Teknik Kendaraan Ringan dan Otomotif (TKRO) merupakan Kompetensi Keahlian
                dari spesifikasi Bidang Keahlian Teknik Otomitif dimana lebih menitikberatkan pada kendaraan kecil 
                sampai berat seperti mobil dan sejenisnya
              </p>
          </div>

          <div class="col-lg-2  m-auto text-center">
            <img src="" class="img-fluid mb-3" alt="">
            <h5>MULTIMEDIA</h5>
            <p>Prospek lulusan dari Multimedia dapat bekerja diberbagai instasi pemerintah maupun swasta 
              sebagai tim kreatif dan juga content creator. Tak hanya itu Multimedia juga mampu menghasilkan lulusan yang ahli dalam
              bidang animasi, broadcasting dan desain kreatif.

            </p>
              
        </div>
          <div class="col-lg-2  m-auto text-center">
            <img src="" class="img-fluid mb-3" alt="">
            <h5>TATA BOGA</h5>
            <p>Kompetensi Keahlian Tata Boga membekali anak didik dengan pendidikan dan pelatihan teknik kuliner
              yang berkualitas untuk menghadapi persaingan di dunia kerja, khususnya dibidang kebogaan dan
              mempersiapkan serts menghasilkan peserta didik menjadi tenaga menengah yang profesional dibidang jasa boga.</p>
        </div>

        </div>
          <div class="col-lg-2  m-auto text-center">
            <img src="" class="img-fluid mb-3" alt="">
            <h5>BKP</h5>
            <p>Keunggulan Kompetensi Bisnis Kostruksi dan properti merupakan jurusan 
              yang mencetak tenaga ahli menengah dibidang Teknik Sipil Bangunan.
            </p>
        </div>

        </div>
          <div class="col-lg-2  m-auto text-center">
            <img src="" class="img-fluid mb-3" alt="">
            <h5>REKAYASA PERANGKAT LUNAK</h5>
            Teknologi Informasi sangat membutuhkan Rekayasa Perangkat Linak (RPL)
              sehingga diharapkan dapat memunculkan program-program komputer baru
              yang bisa memudahkan dan membantu dunia industri seiring dengan perkembangan jaman
            
        </div> --}}
          

        
  

          </div>
    </div>
   </div>
 </section>

<!-- NAVBARR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <?div class="container">
    <a class="navbar-brand" href="#">Text</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav ms-auto my-2 my-lg-0 ">
        
        <li class="nav-item">
          <a class="nav-link" href="#">text</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#">
            text
          </a>
         </li>
       </ul>
     </div>
    </div>
    </nav> 
    
    
    <!-- NAVBARR -->









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>








