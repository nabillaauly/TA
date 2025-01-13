<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Rekomendasi UKM</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   <style>
      /* Custom styles for the UKM card */
      .ukm-card-section {
         /* background: linear-gradient(to right, #f0f8ff, #e6f0ff); */
         background-color: #f0f8ff;
         padding: 60px;
      }

      .ukm-card {
         border: none;
         border-radius: 12px;
         overflow: hidden;
         box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
         transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .ukm-card:hover {
         transform: scale(1.05);
         box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
      }

      .ukm-card img {
         border-top-left-radius: 12px;
         border-top-right-radius: 12px;
      }

      .ukm-card-body {
         padding: 25px;
      }

      .ukm-card-title {
         font-size: 1.7rem;
         color: #333;
         font-weight: bold;
      }

      .ukm-card-text {
         color: #555;
         margin: 15px 0;
      }

      .registration-deadline {
         font-size: 0.9rem;
         color: #888;
         margin-bottom: 15px;
      }

      .ukm-card-btn {
         background-color: #ff7f50;
         color: #fff;
         font-weight: bold;
         padding: 12px 24px;
         border-radius: 5px;
         transition: background-color 0.3s ease;
         text-decoration: none;
      }

      .ukm-card-btn:hover {
         background-color: #e56741;
         color: #fff;
         text-decoration: none;
      }
   </style>
</head>

<body class="main-layout inner_page">
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
   <!-- header -->
   <div class="header">
      <div class="container-fluid">
         <div class="row d_flex">
            <div class="col-md-2 col-sm-3 col logo_section">
               <div class="full">
                  <div class="center-desk">
                     <div class="logo">
                        <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-8 col-sm-12">
               <nav class="navigation navbar navbar-expand-md navbar-dark">
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
                        <li class="nav-item">
                           <a class="nav-link" href="{{ url('/rekomendasi') }}">Rekomendasi</a>
                        </li>
                        <li class="nav-item active">
                           <a class="nav-link" href="{{ url('/rekruitment') }}">Recruitment</a>
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
               <li class="d_none"><a href="{{ url('/dashboard') }}"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                  <li class="d_none"> <a href="Javascript:void(0)"><i class="fa fa-search" style="cursor: pointer;"
                           aria-hidden="true"></i></a> </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <!-- end header -->

   <!-- UKM Registration Card Section -->
   <div class="ukm-card-section">
      <div class="container">
         <div class="row justify-content-center">

         
            <!-- UKM Paduan Suara Card -->
            @forelse ($ukms as $ukm)
    <div class="col-md-6 col-lg-4">
        <div class="card ukm-card">
            <img class="card-img-top" src="{{ Storage::url($ukm->logo) }}" alt="UKM Choir">
            <div class="ukm-card-body">
                <h5 class="ukm-card-title">{{ $ukm->name }}</h5>
                <p class="ukm-card-text">{{ $ukm->about }}</p>
                <p class="registration-deadline">Batas Pendaftaran</p>
                <a href="#" class="ukm-card-btn" data-toggle="modal" data-target="#choirModal">Daftar Sekarang</a>
            </div>
        </div>
    </div>
@empty
    <p>Belum ada UKM yang terdaftar.</p>
@endforelse


            <!-- UKM Tari Card -->
            
            <!-- end UKM Registration Card Section -->
         </div>
         <!-- Modal for UKM Paduan Suara -->
         <div class="modal fade" id="choirModal" tabindex="-1" role="dialog" aria-labelledby="choirModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="choirModalLabel">Formulir Pendaftaran UKM Paduan Suara</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <form action="{{ url('/register/choir') }}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                           <label for="name">Nama Lengkap</label>
                           <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                           <label for="nim">Nomor Induk Mahasiswa (NIM)</label>
                           <input type="text" class="form-control" id="nim" name="nim" required>
                        </div>
                        <div class="form-group">
                           <label for="email">Email</label>
                           <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                           <label for="phone">Nomor Telepon/WhatsApp</label>
                           <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                           <label for="study_program">Program Studi</label>
                           <input type="text" class="form-control" id="study_program" name="study_program" required>
                        </div>
                        <div class="form-group">
                           <label for="year">Semester</label>
                           <input type="number" class="form-control" id="year" name="year" required>
                        </div>
                        <div class="form-group">
                           <label for="gender">Jenis Kelamin</label>
                           <select class="form-control" id="gender" name="gender" required>
                              <option value="Male">Laki-Laki</option>
                              <option value="Female">Perempuan</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="reason">Alasan Bergabung dengan UKM Paduan Suara</label>
                           <textarea class="form-control" id="reason" name="reason" rows="3" required></textarea>
                        </div>
                        <div class="form-group form-check">
                           <input type="checkbox" class="form-check-input" id="agree" name="agree" required>
                           <label class="form-check-label" for="agree">Saya bersedia bergabung dengan UKM ini</label>
                        </div>
                        <div class="form-group">
                           <label for="photo">Foto Diri</label>
                           <input type="file" class="form-control" id="photo" name="photo">
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>


         <!-- Modal for UKM Tari -->
         <div class="modal fade" id="danceModal" tabindex="-1" role="dialog" aria-labelledby="danceModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="danceModalLabel">Formulir Pendaftaran UKM Tari</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <form action="{{ url('/register/choir') }}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                           <label for="name">Nama Lengkap</label>
                           <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                           <label for="nim">Nomor Induk Mahasiswa (NIM)</label>
                           <input type="text" class="form-control" id="nim" name="nim" required>
                        </div>
                        <div class="form-group">
                           <label for="email">Email</label>
                           <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                           <label for="phone">Nomor Telepon/WhatsApp</label>
                           <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                           <label for="study_program">Program Studi</label>
                           <input type="text" class="form-control" id="study_program" name="study_program" required>
                        </div>
                        <div class="form-group">
                           <label for="year">Semester</label>
                           <input type="number" class="form-control" id="year" name="year" required>
                        </div>
                        <div class="form-group">
                           <label for="gender">Jenis Kelamin</label>
                           <select class="form-control" id="gender" name="gender" required>
                              <option value="Male">Laki-Laki</option>
                              <option value="Female">Perempuan</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="reason">Alasan Bergabung dengan UKM Paduan Suara</label>
                           <textarea class="form-control" id="reason" name="reason" rows="3" required></textarea>
                        </div>
                        <div class="form-group form-check">
                           <input type="checkbox" class="form-check-input" id="agree" name="agree" required>
                           <label class="form-check-label" for="agree">Saya bersedia bergabung dengan UKM ini</label>
                        </div>
                        <div class="form-group">
                           <label for="photo">Foto Diri</label>
                           <input type="file" class="form-control" id="photo" name="photo">
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- footer -->
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
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/custom.js"></script>
   <script>
      AOS.init();
   </script>
</body>

</html>