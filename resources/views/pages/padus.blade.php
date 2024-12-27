<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>padus</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <style>
       body {
    font-family: 'Arial', sans-serif;
    color: #333;
    background-color: #f4f6f9;
    margin: 0;
    padding: 0;
}

.ukm-detail-container {
    font-family: 'Arial', sans-serif;
    color: #333;
    padding: 20px;
    max-width: 1200px;
    margin: auto;
}

.ukm-detail-header {
    text-align: center;
    padding: 30px;
    background: #00244D; /* Warna latar belakang utama */
    color: white;
    border-radius: 10px;
}

.ukm-detail-header h1 {
    font-size: 2.5em;
    margin: 0;
    color: #fff; /* Warna teks */

}

.ukm-detail-header .header-subtitle {
    font-size: 1.2em;
    margin-top: 10px;
    opacity: 0.9;
}

.section-title {
    margin-top: 20px;
    font-size: 1.8em;
    text-align: center;
    color: #00244D; /* Warna judul */
}

.benefit-list {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
}

.benefit-item {
    text-align: center;
    font-size: 1.1em;
}

.benefit-item i {
    font-size: 2em;
    color: #00244D; /* Warna ikon */
    margin-bottom: 10px;
}

.card-container {
    display: flex;
    gap: 20px;
    margin-top: 20px;
    flex-wrap: wrap;
    justify-content: center;
}

.card {
    width: 300px;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    transition: transform 0.3s;
    background: #f9f9f9; /* Latar belakang kartu */
}

.card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.card-content {
    padding: 15px;
    text-align: center;
}

.card-content h3 {
    color: #00244D; /* Warna judul kartu */
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.contact-info {
    text-align: center;
    margin-top: 30px;
    font-size: 1.1em;
    color: #00244D; /* Warna teks kontak */
}

@media (max-width: 768px) {
    .ukm-detail-container {
        margin: 20px;
    }

    .section-title {
        font-size: 1.5rem;
    }

    .ukm-detail-content {
        padding: 20px 15px;
    }

    .contact-info {
        font-size: 1rem;
    }
}

    </style>
   </head>
   <body class="main-layout inner_page">
      <div class="header">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-2 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo">
                           <a href="index.html"><img src="images/logo.png" alt="Logo" /></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-8 col-sm-12">
                  <nav class="navigation navbar navbar-expand-md navbar-dark ">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                           <li class="nav-item active">
                              <a class="nav-link" href="{{ url('/') }}">Home</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="{{ url('/about') }}">About</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="{{ url('/rekomendasi') }}">Rekomendasi</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="{{ url('/recruitment') }}">Recruitment</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="{{ url('/forum') }}">Forum Diskusi</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="{{ url('/contact') }}">Bantuan</a>
                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div>
      
      <div class="ukm-detail-container">
    <!-- Header Section -->
    <div class="ukm-detail-header">
        <h1>UKM Paduan Suara</h1>
        <p class="header-subtitle">Kreativitas dalam harmoni, ekspresi dalam melodi</p>
    </div>

    <!-- Content Section -->
    <div class="ukm-detail-content">
        <!-- Description Section -->
        <div class="description">
            <h2 class="section-title">Tentang Kami</h2>
            <p>
            UKM Paduan Suara adalah komunitas mahasiswa yang mendalami seni vokal dan harmoni. 
                Kami percaya bahwa bernyanyi bukan hanya sekadar menyalurkan bakat, tetapi juga 
                menjadi sarana untuk membangun kepercayaan diri, mengasah kreativitas, dan menciptakan 
                momen tak terlupakan bersama tim yang solid.
            </p>
        </div>

        <!-- Benefits Section -->
        <div class="benefits">
            <h2 class="section-title">Mengapa Bergabung?</h2>
            <div class="benefit-list">
                <div class="benefit-item">
                <i class="fa fa-music" aria-hidden="true"></i>
                    <p>Belajar teknik vokal profesional</p>
                </div>
                <div class="benefit-item">
                    <i class="fa fa-users"></i>
                    <p>Memperluas jejaring sosial</p>
                </div>
                <div class="benefit-item">
                    <i class="fa fa-trophy"></i>
                    <p>Berpartisipasi dalam kompetisi bergengsi</p>
                </div>
            </div>
        </div>

        <!-- Activities Section -->
        <div class="activities">
            <h2 class="section-title">Kegiatan Kami</h2>
            <div class="card-container">
                <div class="card">
                    <img src="/images/padus1.JPG" alt="Sesi Latihan Mingguan">
                    <div class="card-content">
                        <h3>Latihan Mingguan</h3>
                        <p>Setiap minggu untuk menyempurnakan harmoni dan persiapan.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="/images/padus_activity2.jpg" alt="Penampilan Publik">
                    <div class="card-content">
                        <h3>Penampilan Publik</h3>
                        <p>Bersinar dalam acara kampus dan konser spesial.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="/images/padus_activity3.jpg" alt="Kompetisi dan Festival">
                    <div class="card-content">
                        <h3>Kompetisi</h3>
                        <p>Uji kemampuan dengan kompetisi regional dan nasional.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Information -->
<div class="contact-info">
    <p>Informasi lebih lanjut:</p>
    <div class="social-media-links">
        <a href="https://www.instagram.com/ukmpadus_harber/" target="_blank">
            <img src="/icon/instagram.png" alt="Instagram" class="social-icon">
        </a>
        <a href="https://www.facebook.com/yourusername" target="_blank">
            <img src="/icon/facebook.png" alt="Facebook" class="social-icon">
        </a>
        <a href="https://www.youtube.com/yourusername" target="_blank">
            <img src="/icon/youtube.png" alt="YouTube" class="social-icon">
        </a>
    </div>
</div>
    </div>
</div>


      <!-- Keep the footer section -->
      <footer>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <p>© 2024 UKM Paduan Suara | All Rights Reserved.</p>
                  </div>
               </div>
            </div>
         </div>
      </footer>

      <!-- Scripts -->
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
