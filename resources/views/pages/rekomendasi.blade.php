<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Rekomendasi UKM</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body class="main-layout inner_page">
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
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
                           <li class="nav-item">
                              <a class="nav-link" href="{{ url('/') }}">Home</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="{{ url('/about') }}">About</a>
                           </li>
                           <li class="nav-item active">
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
               <div class="col-md-2">
                  <ul class="email text_align_right">
                     <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                     <li class="d_none"> <a href="Javascript:void(0)"><i class="fa fa-search" style="cursor: pointer;" aria-hidden="true"></i></a> </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      
      <div class="container mt-5">
         <div class="row">
            <div class="col-md-12 text-center">
               <h2>Temukan UKM yang Cocok untuk Anda</h2>
               <p>Jawab beberapa pertanyaan berikut untuk menemukan UKM yang sesuai dengan minat dan hobi Anda.</p>
            </div>
         </div>
         <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
               <form id="recommendationForm">
                  <!-- Pertanyaan 1: Apa minat utama Anda dalam kegiatan ekstrakurikuler? -->
                  <div class="form-group">
                     <label>Apa minat utama Anda dalam kegiatan ekstrakurikuler?</label>
                     <select class="form-control" id="interestSelect">
                        <option value="">Pilih Minat</option>
                        <option value="Musik">Musik</option>
                        <option value="Olahraga">Olahraga</option>
                        <option value="Seni">Seni</option>
                        <option value="Sastra">Sastra</option>
                        <option value="Teknologi">Teknologi</option>
                        <option value="Sosial">Sosial</option>
                        <option value="Kewirausahaan">Kewirausahaan</option>
                     </select>
                  </div>

                  <!-- Pertanyaan 2: Jenis kegiatan yang Anda lebih suka lakukan di UKM? -->
                  <div class="form-group">
                     <label>Jenis kegiatan apakah yang Anda lebih suka lakukan di UKM?</label>
                     <select class="form-control" id="activityTypeSelect">
                        <option value="">Pilih Jenis Kegiatan</option>
                        <option value="Kompetisi">Kompetisi</option>
                        <option value="Kolaborasi Tim">Kolaborasi Tim</option>
                        <option value="Kegiatan Fisik">Kegiatan Fisik</option>
                        <option value="Kreativitas">Kreativitas</option>
                        <option value="Sosial">Sosial</option>
                        <option value="Pengabdian Masyarakat">Pengabdian Masyarakat</option>
                     </select>
                  </div>

                  <!-- Pertanyaan 3: Ukuran komunitas yang Anda inginkan? -->
                  <div class="form-group">
                     <label>Bagaimana Anda menggambarkan ukuran komunitas yang Anda inginkan?</label>
                     <select class="form-control" id="communitySizeSelect">
                        <option value="">Pilih Ukuran Komunitas</option>
                        <option value="Kecil">Kecil (25-50 orang)</option>
                        <option value="Sedang">Sedang (50-100 orang)</option>
                        <option value="Besar">Besar (100+ orang)</option>
                     </select>
                  </div>

                  <!-- Pertanyaan 4: Kapan Anda lebih suka melakukan kegiatan UKM? -->
                  <div class="form-group">
                     <label>Kapan Anda lebih suka melakukan kegiatan UKM?</label>
                     <select class="form-control" id="preferredTimeSelect">
                        <option value="">Pilih Waktu Kegiatan</option>
                        <option value="Pagi">Pagi</option>
                        <option value="Sore">Sore</option>
                        <option value="Malam">Malam</option>
                        <option value="Akhir Pekan">Akhir Pekan</option>
                        <option value="Fleksibel">Fleksibel</option>
                     </select>
                  </div>

                  <!-- Pertanyaan 5: Apakah Anda tertarik untuk terlibat dalam organisasi atau kepengurusan UKM? -->
                  <div class="form-group">
                     <label>Apakah Anda tertarik untuk terlibat dalam organisasi atau kepengurusan UKM?</label>
                     <select class="form-control" id="organizerInterestSelect">
                        <option value="">Pilih Jawaban</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                        <option value="Mungkin di masa depan">Mungkin di masa depan</option>
                     </select>
                  </div>

                  <!-- Pertanyaan 6: Apakah Anda memiliki pengalaman atau keterampilan khusus yang relevan dengan UKM yang Anda minati? -->
                  <div class="form-group">
                     <label>Apakah Anda memiliki pengalaman atau keterampilan khusus yang relevan dengan UKM yang Anda minati?</label>
                     <select class="form-control" id="skillsSelect">
                        <option value="">Pilih Jawaban</option>
                        <option value="Ya">Ya (Jelaskan)</option>
                        <option value="Tidak">Tidak</option>
                        <option value="Saya ingin belajar">Saya ingin belajar</option>
                     </select>
                  </div>

                  <!-- Pertanyaan 7: Apakah Anda tertarik untuk berpartisipasi dalam kegiatan sosial atau pengabdian masyarakat? -->
                  <div class="form-group">
                     <label>Apakah Anda tertarik untuk berpartisipasi dalam kegiatan sosial atau pengabdian masyarakat?</label>
                     <select class="form-control" id="socialActivitySelect">
                        <option value="">Pilih Jawaban</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                        <option value="Tertarik di masa depan">Tertarik di masa depan</option>
                     </select>
                  </div>

                  <div class="text-center">
                     <button type="button" class="btn btn-primary" onclick="submitForm()">Lihat Rekomendasi</button>
                  </div>
               </form>

               <div id="recommendationResult" class="mt-4 text-center"></div>
            </div>
         </div>
      </div>

      <footer>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <p>© 2024 All Rights Reserved.</p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/custom.js"></script>

      <script>
         function submitForm() {
            const interest = document.getElementById('interestSelect').value;
            const activityType = document.getElementById('activityTypeSelect').value;
            const communitySize = document.getElementById('communitySizeSelect').value;
            const preferredTime = document.getElementById('preferredTimeSelect').value;
            const organizerInterest = document.getElementById('organizerInterestSelect').value;
            const skills = document.getElementById('skillsSelect').value;
            const socialActivity = document.getElementById('socialActivitySelect').value;

            $.ajax({
               url: '/get-recommendations',  // Endpoint backend untuk mendapatkan rekomendasi
               method: 'POST',
               data: {
                  interest: interest,
                  activity_type: activityType,
                  community_size: communitySize,
                  preferred_time: preferredTime,
                  organizer_interest: organizerInterest,
                  skills: skills,
                  social_activity: socialActivity
               },
               success: function(response) {
                  document.getElementById('recommendationResult').innerHTML = '<h4>Rekomendasi UKM:</h4><p>' + response.recommendations + '</p>';
               }
            });
         }
      </script>
   </body>
</html>
