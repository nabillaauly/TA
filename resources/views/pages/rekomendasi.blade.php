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
                        <!-- <li class="nav-item">
                           <a class="nav-link" href="{{ url('/forum') }}">Forum Diskusi</a>
                        </li> -->
                        <li class="nav-item">
                           <a class="nav-link" href="{{ url('/contact') }}">Bantuan</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="col-md-2">
               <ul class="email text_align_right">
                  <li class="d_none"><a href="{{ url('/dashboard') }}"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                  <li class="d_none"> <a href="Javascript:void(0)"><i class="fa fa-search" style="cursor: pointer;"
                           aria-hidden="true"></i></a> </li>
               </ul>
            </div>
         </div>
      </div>
   </div>

   <div class="container mt-5">
      <div class="row">
         <div class="col-md-12 text-center">
            <h2>Temukan Ormawa yang Cocok untuk Anda</h2>
            <p>Jawab beberapa pertanyaan berikut untuk menemukan Organisasi mahasiswa yang sesuai dengan minat dan hobi Anda.</p>
         </div>
      </div>
      <div class="row mt-4">
         <div class="col-md-6 offset-md-3">
            <form id="recommendationForm">
               <!-- Pertanyaan 2: Jenis kegiatan yang Anda lebih suka lakukan di UKM? -->
               <div class="form-group">
                  <label>Jenis kegiatan apakah yang kamu lebih suka lakukan di Organisasi?</label>
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
                  <label>Bagaimana Anda menggambarkan ukuran komunitas yang kamu inginkan?</label>
                  <select class="form-control" id="communitySizeSelect">
                     <option value="">Pilih Ukuran Komunitas</option>
                     <option value="Kecil">Kecil (25-50 orang)</option>
                     <option value="Sedang">Sedang (50-100 orang)</option>
                     <option value="Besar">Besar (100+ orang)</option>
                  </select>
               </div>

               <!-- Pertanyaan 4: Kapan Anda lebih suka melakukan kegiatan UKM? -->
               <div class="form-group">
                  <label>Kapan kamu lebih suka melakukan kegiatan Organisasi?</label>
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
                  <label>Apakah kamu tertarik untuk terlibat dalam organisasi atau kepengurusan Organisasi?</label>
                  <select class="form-control" id="organizerInterestSelect">
                     <option value="">Pilih Jawaban</option>
                     <option value="Ya">Ya</option>
                     <option value="Tidak">Tidak</option>
                     <option value="Mungkin di masa depan">Mungkin di masa depan</option>
                  </select>
               </div>

               <!-- Pertanyaan 6: Apakah Anda memiliki pengalaman atau keterampilan khusus yang relevan dengan UKM yang Anda minati? -->
               <div class="form-group">
                  <label>Apakah kamu memiliki pengalaman atau keterampilan khusus yang relevan dengan Organisasi yang kamu
                     minati?</label>
                  <select class="form-control" id="skillsSelect">
                     <option value="">Pilih Jawaban</option>
                     <option value="Ya">Ya</option>
                     <option value="Tidak">Tidak</option>
                     <option value="Saya ingin belajar">Saya ingin belajar</option>
                  </select>
               </div>

               <!-- Pertanyaan 7: Apakah Anda tertarik untuk berpartisipasi dalam kegiatan sosial atau pengabdian masyarakat? -->
               <div class="form-group">
                  <label>Apakah kamu tertarik untuk berpartisipasi dalam kegiatan sosial atau pengabdian
                     masyarakat?</label>
                  <select class="form-control" id="socialActivitySelect">
                     <option value="">Pilih Jawaban</option>
                     <option value="Ya">Ya</option>
                     <option value="Tidak">Tidak</option>
                     <option value="Tertarik di masa depan">Tertarik di masa depan</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Dalam kelompok, kamu biasanya berperan sebagai…</label>
                  <select class="form-control" id="question1">
                     <option value="">Pilih Jawaban</option>
                     <option value="Pengatur strategi">Pengatur strategi</option>
                     <option value="Pelaksana teknis">Pelaksana teknis</option>
                     <option value="Pencatat/pendokumentasi">Pencatat/pendokumentasi</option>
                     <option value="Tidak ada peran tertentu, tergantung situasi">Tidak ada peran tertentu, tergantung situasi</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Ketika menghadiri acara, kamu lebih suka…</label>
                  <select class="form-control" id="question2">
                     <option value="">Pilih Jawaban</option>
                     <option value="Duduk dan menikmati sebagai peserta">Duduk dan menikmati sebagai peserta</option>
                     <option value="Membantu di belakang layar">Membantu di belakang layar</option>
                     <option value="Jadi pembicara/moderator/panitia inti">Jadi pembicara/moderator/panitia inti</option>
                     <option value="Mengamati dan mencatat hal-hal menarik">Mengamati dan mencatat hal-hal menarik</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Apa alasan utama kamu ingin ikut kegiatan di luar kuliah?</label>
                  <select class="form-control" id="question3">
                     <option value="">Pilih Jawaban</option>
                     <option value="Membangun jaringan/relasi">Membangun jaringan/relasi</option>
                     <option value="Menambah pengalaman">Menambah pengalaman</option>
                     <option value="Melatih soft skill">Melatih soft skill</option>
                     <option value="Meningkatkan CV/portofolio">Meningkatkan CV/portofolio</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Seberapa sering kamu mengikuti kegiatan di luar akademik?</label>
                  <select class="form-control" id="question4">
                     <option value="">Pilih Jawaban</option>
                     <option value="Tidak pernah">Tidak pernah</option>
                     <option value="Kadang-kadang (sekali-dua kali sebulan)">Kadang-kadang (sekali-dua kali sebulan)</option>
                     <option value="Cukup sering (sekali seminggu)">Cukup sering (sekali seminggu)</option>
                     <option value="Sangat sering (lebih dari sekali seminggu)">Sangat sering (lebih dari sekali seminggu)</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Dalam seminggu, berapa waktu yang kamu siapkan untuk kegiatan di luar kuliah?</label>
                  <select class="form-control" id="question5">
                     <option value="">Pilih Jawaban</option>
                     <option value="1–3 jam">1–3 jam</option>
                     <option value="4–7 jam">4–7 jam</option>
                     <option value="8–12 jam">8–12 jam</option>
                     <option value="Lebih dari 12 jam">Lebih dari 12 jam</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Ketika bekerja dalam kelompok, kamu lebih nyaman jika?</label>
                  <select class="form-control" id="question6">
                     <option value="">Pilih Jawaban</option>
                     <option value="memimpin dan mengarahkan">memimpin dan mengarahkan</option>
                     <option value="mengikuti pemimpin yang jelas">mengikuti pemimpin yang jelas</option>
                     <option value="Semua orang bekerja setara, tanpa pemimpin tetap">Semua orang bekerja setara, tanpa pemimpin tetap</option>
                     <option value="bekerja sendiri, tidak terlalu suka kerja kelompok">bekerja sendiri, tidak terlalu suka kerja kelompok</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Dalam kegiatan di luar kuliah, kamu ingin merasakan…</label>
                  <select class="form-control" id="question7">
                     <option value="">Pilih Jawaban</option>
                     <option value="Keseruan dan kebersamaan">Keseruan dan kebersamaan</option>
                     <option value="Peluang belajar hal baru">Peluang belajar hal baru</option>
                     <option value="Rasa tenang dan pengembangan diri">Rasa tenang dan pengembangan diri</option>
                     <option value="Ruang untuk eksplorasi minat pribadi">Ruang untuk eksplorasi minat pribadi</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Ketika diberi tanggung jawab, kamu cenderung…</label>
                  <select class="form-control" id="question8">
                     <option value="">Pilih Jawaban</option>
                     <option value="Mengambilnya dengan semangat">Mengambilnya dengan semangat</option>
                     <option value="Mengerjakannya sesuai arahan">Mengerjakannya sesuai arahan</option>
                     <option value="Delegasikan jika tidak yakin">Delegasikan jika tidak yakin</option>
                     <option value="Lebih suka tugas kecil atau ringan">Lebih suka tugas kecil atau ringan</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Kamu lebih tertarik pada kegiatan yang sifatnya...</label>
                  <select class="form-control" id="question9">
                     <option value="">Pilih Jawaban</option>
                     <option value="Terstruktur dan rapi">Terstruktur dan rapi</option>
                     <option value="Fleksibel dan spontan">Fleksibel dan spontan</option>
                     <option value="Tergantung suasana hati">Tergantung suasana hati</option>
                     <option value="Tegas dan disiplin">Tegas dan disiplin</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Kamu ingin ikut kegiatan yang membuatmu menjadi...</label>
                  <select class="form-control" id="question10">
                     <option value="">Pilih Jawaban</option>
                     <option value="Lebih percaya diri">Lebih percaya diri</option>
                     <option value="Lebih kreatif">Lebih kreatif</option>
                     <option value="Lebih teratur dan disiplin">Lebih teratur dan disiplin</option>
                     <option value="Lebih dikenal banyak orang">Lebih dikenal banyak orang</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Seberapa besar komitmen yang siap kamu berikan untuk kegiatan rutin?</label>
                  <select class="form-control" id="question11">
                     <option value="">Pilih Jawaban</option>
                     <option value="Sangat besar, siap aktif penuh">Sangat besar, siap aktif penuh</option>
                     <option value="Cukup besar, asal sesuai jadwal">Cukup besar, asal sesuai jadwal</option>
                     <option value="Sedang, tergantung beban kuliah">Sedang, tergantung beban kuliah</option>
                     <option value="Kecil, ikut saat sempat">Kecil, ikut saat sempat</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Target jangka pendek yang ingin kamu capai dari ikut kegiatan luar kuliah?</label>
                  <select class="form-control" id="question12">
                     <option value="">Pilih Jawaban</option>
                     <option value="Meningkatkan skill tertentu">Meningkatkan skill tertentu</option>
                     <option value="Dapat pengalaman organisasi">Dapat pengalaman organisasi</option>
                     <option value="Lebih kenal banyak orang">Lebih kenal banyak orang</option>
                     <option value="Dapat sertifikat/penghargaan">Dapat sertifikat/penghargaan</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Seberapa sering kamu merasa ingin berkontribusi untuk lingkungan sekitar?</label>
                  <select class="form-control" id="question13">
                     <option value="">Pilih Jawaban</option>
                     <option value="Sangat sering">Sangat sering</option>
                     <option value="Sering">Sering</option>
                     <option value="Kadang-kadang">Kadang-kadang</option>
                     <option value="Jarang">Jarang</option>
                  </select>
               </div>

               <div class="form-group">
                  <label>Kamu lebih suka kegiatan yang…</label>
                  <select class="form-control" id="question14">
                     <option value="">Pilih Jawaban</option>
                     <option value="Ada banyak interaksi dan diskusi">Ada banyak interaksi dan diskusi</option>
                     <option value="Lebih banyak praktik langsung">Lebih banyak praktik langsung</option>
                     <option value="Lebih banyak eksplorasi mandiri">Lebih banyak eksplorasi mandiri</option>
                     <option value="Fokus pada tugas yang jelas">Fokus pada tugas yang jelas</option>
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
         // const interest = document.getElementById('interestSelect').value;
         const activityType = document.getElementById('activityTypeSelect').value;
         const communitySize = document.getElementById('communitySizeSelect').value;
         const preferredTime = document.getElementById('preferredTimeSelect').value;
         const organizerInterest = document.getElementById('organizerInterestSelect').value;
         const skills = document.getElementById('skillsSelect').value;
         const socialActivity = document.getElementById('socialActivitySelect').value;
         const question1 = document.getElementById('question1').value;
         const question2 = document.getElementById('question2').value;
         const question3 = document.getElementById('question3').value;
         const question4 = document.getElementById('question4').value;
         const question5 = document.getElementById('question5').value;
         const question6 = document.getElementById('question6').value;
         const question7 = document.getElementById('question7').value;
         const question8 = document.getElementById('question8').value;
         const question9 = document.getElementById('question9').value;
         const question10 = document.getElementById('question10').value;
         const question11 = document.getElementById('question11').value;
         const question12 = document.getElementById('question12').value;
         const question13 = document.getElementById('question13').value;
         const question14 = document.getElementById('question14').value;


         // Validasi input
         if ( !activityType || !communitySize || !preferredTime || !organizerInterest || !skills || !socialActivity ||
         !question1 || !question2 || !question3 || !question4 || !question5 || !question6 || !question7 || !question8 ||
         !question9 || !question10 || !question11 || !question12 || !question13 || !question14) {
            alert('Harap lengkapi semua pertanyaan sebelum melanjutkan.');
            return;
         }

         // Kirim data ke backend
         $.ajax({
            url: '/get-recommendations',
            method: 'POST',
            headers: {
               'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            data: {
               // interest,
               activity_type: activityType,
               community_size: communitySize,
               preferred_time: preferredTime,
               organizer_interest: organizerInterest,
               skills,
               social_activity: socialActivity,
               question1,
               question2,
               question3,
               question4,
               question5,
               question6,
               question7,
               question8,
               question9,
               question10,
               question11,
               question12,
               question13,
               question14// Pastikan key dan variabel sesuai
            },
            success: function (response) {
               const recommendations = response.recommendations;
               let html = '<h4>Rekomendasi UKM:</h4><ul>';
               recommendations.forEach(item => {
                  html += `<li>${item.nama} (Skor: ${item.score})</li>`;
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