<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>Rekomendasi Ormawa</title>
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/responsive.css">
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>

<body class="main-layout inner_page">
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
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
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                     aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarsExample04">
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                           <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ url('/about') }}">Tentang</a>
                        </li>
                        <li class="nav-item active">
                           <a class="nav-link" href="{{ url('/opsi') }}">Rekomendasi</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ url('/recruitment') }}">Recruitment</a>
                        </li>
                       
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="col-md-2">
               <ul class="email text_align_right">
                  <li class="d_none">
                     <a href="{{ url('/dashboard') }}" class="btn btn-primary d-flex align-items-center gap-2"
                        style="border-radius: 25px; padding: 8px 20px; background: #3e0bce; border: none;">
                        <i class="fa fa-user" aria-hidden="true" style="font-size: 1rem; color: white"></i>
                        <!-- <span style="font-weight: 300;">Login</span> -->
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>

   <div class="container mt-5">
      <div class="row">
         <div class="col-md-12 text-center">
            <h2>Temukan ORMAWA yang Cocok untuk Anda</h2>
            <p>Jawab beberapa pertanyaan berikut untuk menemukan UKM yang sesuai dengan minat dan hobi Anda.</p>
         </div>
      </div>
      <div class="row mt-4">
         <div class="col-md-6 offset-md-3">
            <form id="recommendationForm">

               <div class="form-group">
                  <label>Apakah kamu berminat terlibat dalam organisasi?</label>
                  <select class="form-control" id="question1">
                     <option value="">Pilih Opsi</option>
                     <option value="Ya">Ya</option>
                     <option value="Tidak">Tidak</option>
                  </select>
               </div>

               
               <div class="form-group">
                  <label>Jenis organisasi apa yang paling di minati? </label>
                  <select class="form-control" id="question2">
                     <option value="">Pilih Jenis Organisasi</option>
                     <option value="Organisasi pengembangan jiwa kepemimpinan">Organisasi pengembangan jiwa kepemimpinan?</option>
                     <option value="Organisasi pengembangan minat bakat ( seni, olahraga, literasi, teknologi)">Organisasi pengembangan minat bakat ( seni, olahraga, literasi, teknologi)</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Jika harus memilih satu faktor yang paling penting dalam sebuah organisasi, apa yang jadi prioritas kamu?</label>
                  <select class="form-control" id="question3">
                     <option value="">Pilih Jawaban</option>
                     <option value="Lingkungan yang mendukung dan positif">Lingkungan yang mendukung dan positif</option>
                     <option value="Peluang belajar dan berkembang">Peluang belajar dan berkembang</option>
                     <option value="Kesempatan untuk menunjukkan hasil atau prestasi">Kesempatan untuk menunjukkan hasil atau prestasi</option>
                     <option value="Ruang untuk mengekspresikan ide">Ruang untuk mengekspresikan ide</option>
                  </select>
               </div>

                <div class="form-group">
                  <label>Jenis kegiatan apakah yang kamu lebih suka lakukan di Organisasi?</label>
                  <select class="form-control" id="question4">
                     <option value="">Pilih Jenis Kegiatan</option>
                     <option value="Kompetisi">Kompetisi</option>
                     <option value="Kolaborasi Tim">Kolaborasi Tim</option>
                     <option value="Kegiatan Fisik">Kegiatan Fisik</option>
                     <option value="Kreativitas">Kreativitas</option>
                     <option value="Sosial">Sosial</option>
                     <option value="Pengabdian Masyarakat">Pengabdian Masyarakat</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Seberapa besar komitmen yang dapat kamu berikan ketika bergabung dalam organisasi?</label>
                  <select class="form-control" id="question5">
                     <option value="">Pilih Opsi</option>
                     <option value="Komitmen Besar">Komitmen Besar</option>
                     <option value="Cukup Besar">Cukup Besar</option>
                     <option value="Sedang">Sedang</option>
                     <option value="Kecil">Kecil</option>
                  </select>
               </div>

               <!-- Pertanyaan 6: Apakah Anda memiliki pengalaman atau keterampilan khusus yang relevan dengan UKM yang Anda minati? -->
               <div class="form-group">
                  <label>Seberapa sering kamu ingin berkontribusi untuk organisasi?</label>
                  <select class="form-control" id="question6">
                     <option value="">Pilih Jawaban</option>
                     <option value="Sering">Sering</option>
                     <option value="Cukup">Cukup</option>
                     <option value="Kadang-kadang">Kadang-kadang</option>
                  </select>
               </div>

               <!-- Pertanyaan 7: Apakah Anda tertarik untuk berpartisipasi dalam kegiatan sosial atau pengabdian masyarakat? -->
               <div class="form-group">
                  <label>Seberapa besar minat anda berpartisipasi dalam organisasi diluar poltek harber?</label>
                  <select class="form-control" id="question7">
                     <option value="">Pilih Jawaban</option>
                     <option value="Besar">Besar</option>
                     <option value="Cukup">Cukup</option>
                     <option value="Biasa saja">Biasa saja</option>
                     <option value="Tidak tertarik">Tidak tertarik</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Alasan utama anda jika ikut organisasi atau kegiatan diluar akademik?</label>
                  <select class="form-control" id="question8">
                     <option value="">Pilih Jawaban</option>
                     <option value="Membangun jaringan/relasi">Membangun jaringan/relasi</option>
                     <option value="Menambah pengalaman">Menambah pengalaman</option>
                     <option value="Melatih soft skill">Melatih soft skill</option>
                     <option value="Meningkatkan CV/portofolio">Meningkatkan CV/portofolio</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Hal apa yang menjadi target jangka pendek yang ingin anda capai dari keikutsertaan dalam kegiatan diluar akademik?</label>
                  <select class="form-control" id="question9">
                     <option value="">Pilih Jawaban</option>
                     <option value="Pengembangan diri">Pengembangan diri</option>
                     <option value="Belajar hal baru">Belajar hal baru</option>
                     <option value="Eksplorasi minat">Eksplorasi minat</option>
                     <option value="Keseruan dan kebersamaan">Keseruan dan kebersamaan</option>
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
         const question1 = document.getElementById('question1').value;
         const question2 = document.getElementById('question2').value;
         const question3 = document.getElementById('question3').value;
         const question4 = document.getElementById('question4').value;
         const question5 = document.getElementById('question5').value;
         const question6 = document.getElementById('question6').value;
         const question7 = document.getElementById('question7').value;
         const question8 = document.getElementById('question8').value;
         const question9 = document.getElementById('question9').value;


         // Validasi input
         if (!question1 || !question2 || !question3 || !question4 || !question5 || !question6 || !question7 || !question8 ||
            !question9) {
            alert('Harap lengkapi semua pertanyaan sebelum melanjutkan.');
            return;
         }

         // Kirim data ke backend
         $.ajax({
            url: '/get-rekomawa',
            method: 'POST',
            headers: {
               'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            data: {
               question1, question2, question3, question4, question5,
               question6, question7, question8, question9
            },
            success: function (response) {
               console.log('Response:', response); // Debugging
               const recommendations = response.recommendations;
               let html = '<h4>Rekomendasi Ormawa:</h4><ul>';
               recommendations.forEach(function (item, index) {
                  html += `<li>${index + 1}. ${item.nama}</li>`;
               });
               html += '</ul>';
               document.getElementById('recommendationResult').innerHTML = html;
            },
            error: function () {
               alert('Gagal memproses rekomendasi. Coba lagi.');
            }
         });

      }
   </script>

</body>

</html>