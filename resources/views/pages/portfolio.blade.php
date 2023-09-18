@extends('layouts.index')
@section('content')

@section('title') {{ 'Blog' }} @endsection

@section('css')
    <!-- Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor -->
    <link href="{{ asset('css/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}" />
@endsection

    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    <header id="header">
        <div class="d-flex flex-column">
    
          <div class="profile">
            <img src="{{ asset('img/romi3.jpeg') }}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="/">ROMI MUHAROM</a></h1>
            <div class="social-links mt-3 text-center">
              <a href="//wa.me/6289638023602/" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
              <a href="//www.facebook.com/romi.muharam.18/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="//www.instagram.com/romi_muh05/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="//github.com/Leuthra" class="github"><i class="bx bxl-github"></i></a>          
            </div>
          </div>
    
          <nav class="nav-menu">
            <ul>
              <li class="active"><a href="/"><i class="bx bx-home"></i> <span>Home</span></a></li>
              <li><a href="#about"><i class="bx bx-user"></i> <span>Tentang Saya</span></a></li>
              <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Kelanjutan</span></a></li>
              <li><a href="#portfolio"><i class="bx bx-book-content"></i> Komunitas</a></li>
              <li><a href="#services"><i class="bx bx-server"></i> Note</a></li>
              <li><a href="#contact"><i class="bx bx-envelope"></i> Kontak</a></li>
    
            </ul>
            <footer id="footer">
              <div class="container">
                <div class="copyright">
                  Copyright By Romi Muharom
                </div>
              </div>
            </footer>
          </nav><!-- .nav-menu -->
          <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
    
        </div>
    </header>

    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
          <h1>ROMI MUHAROM</h1>
          <p>I'm <span class="typed" data-typed-items="Web Developer, C++, Java script, Siswa SMK"></span></p>
        </div>
    </section>

    <main id="main">

    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Tentang diriku</h2>
          <p>Saya adalah salah satu Siswa yang berpendidikan di SMK Negeri 69 Jakarta, Jurusan Yang saya pilih adalah SIJA ( Sistem Informatika Jaringan Dan Aplikasi ). Skill yang sedang saya Pelajari yaitu Developer web, C++, dan Java script</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{ asset('img/romi2.jpeg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Java Script Web Developer.</h3>
            <p class="font-italic">
              Ketertarikan saya Pada dunia IT dikarenakan dahulu saya suka melihat Orang membuat Kecerdasan Buatan di WhatsApp atau bisa di sebut Bot dan Juga saya semakin tertarik Dengan Bahasa Mesin lainnya
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Lahir:</strong> 10 Februari 2005</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> <a href="//romidev.link/">Rominaru</a></li>
                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +62 896 3802 3602</li>
                  <li><i class="icofont-rounded-right"></i> <strong>City:</strong> Indonesia Jakarta Timur, Cakung</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Umur:</strong> 16 Tahun</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Status:</strong> Siswa</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> romi49610@gmail.com</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Masih Sekolah</li>
                </ul>
              </div>
            </div>
            <p>
              Saya juga Mengikuti Organisasi MPK di sekolah saya Agar saya Mendapatkan Ilmu Pengetahuan dan Keterampilan Yang Berguna Bagi saya dan  saya Juga bisa menambah banyak pengalaman Dari Organisasi Tersebut,
              untuk meningkatkan Skill saya pada dunia IT baik pemrograman maupun Hal Lainnya Saya Menggunakan Sebuah Website yang sering saya kunjungi yaitu <a href="//github.com/">Github</a>, Di Github Tersebut Banyak Sekali Bermacam-Macam Program-program dengan bahasa yang berbeda dan Saya Hanya menggunakan Beberapa saja.
            </p>
          </div>
        </div>

      </div>
    </section>

    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Fakta</h2>
          <p>Saya terkadang Pusing dan Repot dengan projek yang Saya miliki, Terkadang Ada Masalah Di Kuota saya sendiri, Atau Error Di code Program nya, semua itu membuat saya pusing setiap kali saya melakukan coding. Tetapi saya selalu mencoba Karena saya selalu penasaran dengan Bahasa mesin</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">20</span>
              <p><strong>Kuota Internet</strong> Saya memiliki Kuota data 20 GB, tetapi itu tidak cukup Karena dibutuhkan untuk sekolah juga</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">5</span>
              <p><strong>Projects</strong> Projects saya Hanya ada sedikit Karena Saya sibuk dengan sekolah Setiap Hari</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">3</span>
              <p><strong>Waktu Coding</strong> Terkadang Saya Coding Hingga Lebih dari 3 Jam, dikarenakan Ada yang error dan bug</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">1</span>
              <p><strong>Komputer</strong> Komputer Saya Hanya ada satu dan itu terkadang suka di pakai kakak saya, tetapi saya tetap sabar akan hal tersebut</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Dalam dunia pemrograman saya Mempelajari C++ dan itu hampir Saya bisa kuasai, dan jika sudah saya akan mencoba Bahasa yang lain</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">10%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">10%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">20%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">C++ <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Json <i class="val">20%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Markdown <i class="val">15%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section>

    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Lanjut</h2>
          <p>Disini saya Juga Belajar dan Banyak Hal Yang membuat diri saya penasaran dalam Dunia IT.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Ringkasan</h3>
            <div class="resume-item pb-0">
              <h4>Mau Bertanya?</h4>
              <p><em>Jika anda membutuhkan Bantuan Error Ketika pembuatan WEB Atau Coding Lainnya Mungkin Saya bisa Membantu Anda dalam Menyelesaikan Masalah Tersebut</em></p>
              <ul>
                <li>Hubungi Email : romidev20@gmail.com</li>
                <li>atau : romi49610@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Pendidikan</h3>
            <div class="resume-item">
              <h4>Sekolah Biasa Sekolah Negeri</h4>
              <h5>2021 - 2025</h5>
              <p><em>SMK NEGERI 69, Jakarta, Indonesia</em></p>
              <p>Saya menempuh Sekolah Menengah Kejuruan Dengan Memilih Jurusan Sistem Informatika Jaringan Dan Aplikasi Linknya <a href="http://smkn69jkt.mysch.id/">SMKN_69</a>, Tujuan Saya Masuk Jurusan Tersebut adalah Karena Saya Tertarik dengan dunia IT dan Juga Peluang Untuk Kerja Lebih besar.</p>
            </div>
            <div class="resume-item">
              <h4>Coming Soon information  engginering</h4>
              <h5>2026 - 2030</h5>
              <p><em>Sekolah, Di Jepang</em></p>
              <p>Ya ini baru Keinginan saya kedepan, karena cita cita saya ingin Sekolah di Jepang tersebut agar lebih luas Dengan Ilmu Teknologi</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Pengalaman</h3>
            <div class="resume-item">
              <h4>organisasi Osis</h4>
              <h5>2018 - 2019</h5>
              <p><em>SMP Negeri 168, Jakarta, Indonesia </em></p>
              <ul>
                <li>Pernah menjadi Ketua Bendahara Osis</li>
                <li>Ikut serta dalam Kegiatan Osis</li>
                <li>Pernah menjadi Ketua Kelas Di SMP</li>
                <li>Pernah mengikuti Wisata Antar Sekolah Dengan Guru</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>organisasi belajar</h4>
              <h5>Wilayah indonesia</h5>
              <p><em>nama organisasi tempat saya belajar:</em></p>
              <ul>
                <li>KELOMPOK IT CLUB, dibentuk pada tahun 2021 oleh Kakak Kelas yang ingin memajukan Pengetahuan Dan Keterampilan dalam Jurusan SIJA.</li>
                <li>KEEP LEARNING, KEEP SHARING Sebuah perkumpulan berfokus pada peningkatan kesadaran terhadap dunia <a href="//www.orangsiber.com/">SIBER</a> melalui komunitas, media informasi dan platform edukasi.</li>
                <li>Tempat Coding Segalanya. <a href="//github.com">Github</a></li> 
                <li>Tempat Saya Menyelesaikan Masalah Coding Saya. <a href="//www.petanikode.com/">PetaniKode</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Komunitas Belajar</h2>
          <p>Biasanya dalam proses belajar pemrograman saya mencari referensi nya baik dalam bentuk video maupun artikel, dan bukan hanya itu saja. Komunitas pemrograman juga menjadi suatu hal yang penting untuk bertanya di kala bingung. nah disini ada beberapa referensi belajar dunia IT kelas gratis.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Network</li>
              <li data-filter=".filter-card">Cyber</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/kodingkeun.png') }}" class="img-fluid" alt="" width="1080" height="1080">
              <div class="portfolio-links">
                <a href="{{ asset('img/portfolio/kodingkeun.png') }}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="//github.com/kodingkeun" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/cyberhunter.png') }}" class="img-fluid" alt="" width="1080" height="1080">
              <div class="portfolio-links">
                <a href="{{ asset('img/portfolio/cyberhunter.png') }}" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="https://github.com/XyberHunter" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/sandhika.jpg') }}" class="img-fluid" alt="" width="1080" height="1080">
              <div class="portfolio-links">
                <a href="{{ asset('img/portfolio/wpu.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="https://www.youtube.com/c/WebProgrammingUNPAS" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/pixl.png') }}" class="img-fluid" alt="" width="1080" height="1080">
              <div class="portfolio-links">
                <a href="{{ asset('img/portfolio/pixl.png') }}" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="https://github.com/pixlbytes" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/udemy.png') }}" class="img-fluid" alt="" width="1080" height="1080">
              <div class="portfolio-links">
                <a href="{{ asset('img/portfolio/udemy.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="https://www.udemy.com/topic/cyber-security/" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/onnocenter.jpeg') }}" class="img-fluid" alt="" width="1080" height="1080">
              <div class="portfolio-links">
                <a href="{{ asset('img/portfolio/onno1.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="https://www.youtube.com/c/OnnoCenter/playlists" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset('img/portfolio/kodingkeun.png') }}" class="img-fluid" alt="" width="1080" height="1080">
              <div class="portfolio-links">
                <a href="{{ asset('img/portfolio/kodingkeun.png') }}" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="https://github.com/kodingkeun" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Note</h2>
          <p>Jika saya tidak dapat membantu anda Dalam menyelesaikan Masalah anda, silakan anda bisa chat Saya Langsung dengan melihat di kontak</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="icofont-computer"></i></div>
            <h4 class="title"><a href="">Objek</a></h4>
            <p class="description">saya Suka membantu Orang lain dalam menyelesaikan Masalah terkait Codingan.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
            <h4 class="title"><a href="">Pengembangan</a></h4>
            <p class="description">Dalam suatu sistem biasanya peningkatan kualitas ataupun upgrade adalah hal yang penting untuk mengikuti zaman.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a href="">Kerja sama</a></h4>
            <p class="description">Jika anda ingin Melakukan kerja sama dengan saya, itu sangat bagus karena jika kita Kembangkan Bersama Itu akan menghasilkan hasil yang bagus.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="icofont-image"></i></div>
            <h4 class="title"><a href="">Design</a></h4>
            <p class="description">untuk Design Saya Masih Belajar Dan akan memberikan kenyaman design agar lebih Fun dalam pemakaiannya.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="icofont-settings"></i></div>
            <h4 class="title"><a href="">Komposisi</a></h4>
            <p class="description">Proporsi yang cukup dan seimbang akan membuat lebih benefit dalam penggunaan sistemnya nanti.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="icofont-tasks-alt"></i></div>
            <h4 class="title"><a href="">Data</a></h4>
            <p class="description">Pengelolaan data sistem serta keamanannya akan selalu saya protect untuk menjaga sistem anda agar data aman.</p>
          </div>
        </div>

      </div>
    </section>

    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Kontak</h2>
          <p>Untuk lebih detailnya lagi jika anda penasaran, anda bisa menghubungi kami :</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Lokasi:</h4>
                <p>Gg. Damai Jl. Kp. Pedaengan No.126, RT.11/RW.8, Penggilingan, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13940</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>romi49610@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Telephone: </h4>
                <p>+62 896-3802-3602</p>
              </div>
              
              

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d312.79391296741454!2d106.93707841927475!3d-6.187526772997974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698b4949bb5e07%3A0xe01bbfa9ef56438f!2sAgen46%20azka!5e1!3m2!1sid!2sid!4v1695006748602!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
           @endif

          <div id="contact-message" class="alert alert-success" style="display: none;"></div>
          {{-- contact yang harus bisa crud --}}
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{ route('contact.us.store') }}" method="post" role="form" class="php-email-form" id="contactUSForm">
              {{ csrf_field() }}
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Nama lengkap</label>
                  <input type="text" name="name" class="form-control" value="{{ old('name') }}" />
                  @if ($errors->has('name'))
                      <span class="text-danger">{{ $errors->first('name') }}</span>
                  @endif
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email anda</label>
                  <input type="email" class="form-control" name="email" value="{{ old('email') }}" />
                  @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" value="{{ old('subject') }}" />
                @if ($errors->has('subject'))
                  <span class="text-danger">{{ $errors->first('subject') }}</span>
                @endif
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">pesan</label>
                <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                @if ($errors->has('message'))
                  <span class="text-danger">{{ $errors->first('message') }}</span>
                @endif
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Tunggu sebentar</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan Anda telah dikirim. Terima kasih!</div>
              </div>
              <div class="text-center"><button type="submit">Mengirim Pesan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>

</main>



  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

@section('javascript')
    <script src="{{ asset('css/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('css/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('css/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    
    <script src="{{ asset('css/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('css/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('css/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('css/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('css/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('css/vendor/typed.js/typed.min.js') }}"></script>
    <script src="{{ asset('css/vendor/aos/aos.js') }}"></script>

    <!-- MAIN JS -->
    <script src="{{ asset('js/portfolio.js') }}"></script>
    <script src="{{ asset('js/alert.js') }}"></script>
@endsection

@stop
