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
        body {
            background-color: #f8f9fa;
        }

        .forum-header {
            background-color: #f0390f;
            color: white;
            padding: 20px 0;
        }

        .forum-header h1 {
            font-size: 2rem;
            margin: 0;
            color: white;
        }

        .forum-thread {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .thread-title {
            font-weight: bold;
            color: #f0390f;
        }

        .thread-meta {
            font-size: 0.9rem;
            color: #6c757d;
        }

        .new-thread-form textarea {
            resize: none;
        }

        .comment-section {
            margin-top: 20px;
        }

        .comment {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .comment:last-child {
            border-bottom: none;
        }

        .btn {
            background-color: #e56741;
            border-style: none;
        }

        .btn:hover{
            background-color: #b92200;
        }
    </style>
</head>

<body>
    <!-- body -->

    <body class="main-layout inner_page">
        <!-- loader  -->
        <div class="loader_bg">
            <div class="loader"><img src="images/loading.gif" alt="#" /></div>
        </div>
        <!-- end loader -->
        <!-- header -->
        <div class="header">
            <div class="container-fluid">
                <div class="row d_flex">
                    <div class=" col-md-2 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                                aria-label="Toggle navigation">
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
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/recruitment') }}">Recruitment</a>
                                    </li>
                                    <li class="nav-item active">
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
                            <li class="d_none"> <a href="Javascript:void(0)"><i class="fa fa-search"
                                        style="cursor: pointer;" aria-hidden="true"></i></a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Forum Header -->
        <div class="forum-header text-center">
            <div class="container">
                <h1>Forum Diskusi</h1>
                <p>Diskusikan topik menarik atau ajukan pertanyaan Anda!</p>
            </div>
        </div>

        <!-- Main Forum Section -->
        <div class="container my-5">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <!-- New Thread Form -->
                    <div class="forum-thread new-thread-form mb-4">
                        <h4>Buat Topik Baru</h4>
                        <form>
                            <div class="mb-3">
                                <label for="threadTitle" class="form-label">Judul Topik</label>
                                <input type="text" class="form-control" id="threadTitle"
                                    placeholder="Masukkan judul topik...">
                            </div>
                            <div class="mb-3">
                                <label for="threadContent" class="form-label">Isi Topik</label>
                                <textarea class="form-control" id="threadContent" rows="4"
                                    placeholder="Tulis isi topik di sini..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>

                    <!-- Thread List -->
                    <div class="forum-thread mb-4">
                        <h4>Topik Diskusi</h4>
                        <div class="thread-item mb-3">
                            <a href="#" class="thread-title">Bagaimana cara memilih UKM yang tepat?</a>
                            <p class="thread-meta">Dibuat oleh <b>Agus</b> pada 27 Nov 2024 | 10 komentar</p>
                        </div>
                        <div class="thread-item mb-3">
                            <a href="#" class="thread-title">Pengalaman bergabung dengan UKM seni</a>
                            <p class="thread-meta">Dibuat oleh <b>Andre</b> pada 26 Nov 2024 | 5 komentar</p>
                        </div>
                        <div class="thread-item">
                            <a href="#" class="thread-title">Apakah UKM olahraga cocok untuk pemula?</a>
                            <p class="thread-meta">Dibuat oleh <b>Aisyah</b> pada 25 Nov 2024 | 8 komentar</p>
                        </div>
                    </div>

                    <!-- Comment Section (Example for a Thread) -->
                    <div class="forum-thread comment-section">
                        <h4>Komentar</h4>
                        <div class="comment">
                            <p><b>Loly:</b> Saya juga bingung memilih UKM, ada saran?</p>
                        </div>
                        <div class="comment">
                            <p><b>Wahyu:</b> Pilih UKM yang sesuai dengan minatmu, pasti lebih seru!</p>
                        </div>
                        <div class="comment">
                            <p><b>Diana:</b> Kalau belum yakin, coba ikut trial dulu.</p>
                        </div>
                        <!-- Comment Form -->
                        <form class="mt-4">
                            <div class="mb-3">
                                <textarea class="form-control" rows="3"
                                    placeholder="Tulis komentar Anda di sini..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim Komentar</button>
                        </form>
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

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.0.0.min.js"></script>
        <!-- sidebar -->
        <script src="js/custom.js"></script>
        <script>
            AOS.init();
        </script>

        <!-- Bootstrap JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
    </body>

</html>