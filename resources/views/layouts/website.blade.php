
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title',env('APP_NAME'))</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="{{url('')}}">
	<meta name="description" content="Discover professional services in ESG (Environmental, Social, and Governance), Finance, Accounting, Tax, and Digital Solutions. Helping businesses with financial planning, digital transformation, and sustainable practices.">
    <meta name="keywords" content="ESG, Environmental Social Governance, Finance, Accounting, Tax Services, Digital Transformation, Business Development, Digital Marketing, Corporate Governance, Data Analytics, Cloud Solutions, Cybersecurity">

    <meta content="@yield('meta_description',env('APP_NAME'))" name="description">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon -->
	<link rel="shortcut icon" href="{{url('ilus/profind0_strip.png')}}">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url('')}}" />
    <meta property="og:title" content="@yield('title',env('APP_NAME'))" />
    <meta property="og:description" content="@yield('meta_description',env('APP_NAME'))" />
    <meta property="og:image" content="@yield('meta_logo',url('ilus/profind0_strip.png'))" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{url('')}}" />
    <meta property="twitter:title" content="@yield('title',env('APP_NAME'))" />
    <meta property="twitter:description" content="@yield('meta_description',env('APP_NAME'))" />
    <meta property="twitter:image" content="@yield('meta_logo',url('ilus/profind0_strip.png'))" />

    <!-- Meta Tags Generated with https://metatags.io -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title',env('APP_NAME'))" />
    <meta property="og:description" content="@yield('meta_description',env('APP_NAME'))" />
    <meta property="og:url" content="{{url('')}}" />
    <meta property="og:site_name" content="{{url('')}}" />
    <meta property="og:image" content="@yield('meta_logo',url('ilus/profind0_strip.png'))" />
    <meta name="twitter:card" content="summary_large_image" />


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('')}}/frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{url('')}}/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{url('')}}/frontend/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{url('')}}/frontend/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="{{url('')}}/frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{url('')}}/frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{url('')}}/frontend/assets/css/main.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">


</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:marketing@profindomitra.co.id?subject=Please support me about ">marketing@profindomitra.co.id</a></i>
          {{-- <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i> --}}
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          {{-- <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> --}}
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{url('')}}" class="logo d-flex align-items-center me-auto">
          <img src="{{url('ilus/logo.png')}}" alt="">
        </a>
        <style>
          .flag-icon {
    width: 20px;
    height: 15px;
    vertical-align: middle;
    border-radius: 2px;
}
        </style>
        <style>
            .text-ucfirst {
              text-transform: lowercase;
            }

            .text-ucfirst::first-letter {
              text-transform: uppercase;
            }
          </style>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('') }}">{{ __('menus.nav_menu.home') }}<br></a></li>
                <li><a href="{{ url('tentang-kami') }}">{{ __('menus.nav_menu.about_us') }}<br></a></li>
                <li class="dropdown">
                    <a href="#"><span>{{ __('menus.nav_menu.prime_solutions') }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ url('layanan-laporan-tahunan-dan-laporan-keberlanjutan') }}">{{ __('menus.nav_menu.annual_report_sustainability_report') }}</a></li>
                        <li><a href="{{ url('jasa-pemeriksaan-dan-manajemen-risiko') }}">{{ __('menus.nav_menu.audit_investigation') }}</a></li>
                        <li><a href="{{ url('keuangan-akuntansi-dan-pajak') }}">{{ __('menus.nav_menu.finance_accounting_tax') }}</a></li>
                        <li><a href="{{ url('layanan-digital-dan-teknologi') }}">{{ __('menus.nav_menu.digital_technology') }}</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('articles') }}">{{ __('menus.nav_menu.articles') }}</a></li>
                <li><a href="{{ url('careers') }}">{{ __('menus.nav_menu.career') }}</a></li>
                <li class="dropdown language-selector">
                    <a href="#">
                        <span>
                            @php
                                $currentLang = session('locale', config('app.locale'));
                                $flag = $currentLang === 'id' ? 'assets/id.png' : 'assets/en.png';
                                $langName = $currentLang === 'id' ? 'Bahasa Indonesia' : 'English';
                            @endphp
                            <img src="{{ url($flag) }}" alt="{{ strtoupper($currentLang) }}" class="flag-icon">
                            {{ $langName }}
                        </span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('lang/id') }}">
                                <img src="{{ url('assets/id.png') }}" alt="ID" class="flag-icon"> Bahasa Indonesia
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('lang/en') }}">
                                <img src="{{ url('assets/en.png') }}" alt="EN" class="flag-icon"> English
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>



        <a class="cta-btn d-none d-sm-block" href="mailto:marketing@profindomitra.co.id">{{ __('menus.nav_menu.button') }}</a>

      </div>

    </div>

  </header>

  @yield('content')

  <footer id="footer" class="footer light-background">

    <div class="container footer-top">
        <div class="row gy-4">
            <!-- Footer About Section -->
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="{{url('')}}" class="logo d-flex align-items-center">
                    <img src="{{url('ilus/logo.png')}}" alt="logo" class="img-fluid">
                </a>
                <div class="footer-contact pt-3">
                    <p><b>{{ __('footer.footer.company_name') }}</b> <br>
                        {{ __('footer.footer.address') }}</p>
                    <p class="mt-3"><strong>{{ __('footer.footer.email_label') }} :</strong> <span><a href="mailto:marketing@profindomitra.co.id">marketing@profindomitra.co.id</a></span></p>
                    <p><strong>{{ __('footer.footer.website_label') }} :</strong> <span><a href="https://profindomitra.co.id">https://profindomitra.co.id</a></span></p>
                </div>
            </div>

            <!-- Quick Access Links -->
            <div class="col-lg-2 col-md-3 footer-links">
                <h4>{{ __('footer.footer.quick_access') }}</h4>
                <ul>
                    <li><a href="{{url('')}}">{{ __('footer.footer.home') }}</a></li>
                    <li><a href="{{url('tentang-kami')}}">{{ __('footer.footer.about') }}</a></li>
                    <li><a href="{{url('layanan-laporan-tahunan-dan-laporan-keberlanjutan')}}">{{ __('footer.footer.solutions') }}</a></li>
                    <li><a href="{{url('articles')}}">{{ __('footer.footer.articles') }}</a></li>
                    <li><a href="{{url('careers')}}">{{ __('footer.footer.careers') }}</a></li>
                </ul>
            </div>

           <!-- Solutions Section (First Column) -->
            <div class="col-lg-2 col-md-3 footer-links">
                <h4>{{ __('footer.footer.solutions') }}</h4>
                <ul>
                    <li><a href="{{url('layanan-laporan-tahunan-dan-laporan-keberlanjutan')}}">{{ __('footer.footer.annual_reports_and_sustainability_reports') }}</a></li>
                    <li><a href="{{url('jasa-pemeriksaan-dan-manajemen-risiko')}}">{{ __('footer.footer.audit_and_risk_management_services') }}</a></li>
                    <li><a href="{{url('keuangan-akuntansi-dan-pajak')}}">{{ __('footer.footer.finance_accounting_and_tax') }}</a></li>
                    <li><a href="{{url('layanan-digital-dan-teknologi')}}">{{ __('footer.footer.digital_and_technology_services') }}</a></li>

                </ul>
            </div>

            <!-- Solutions Section (Second Column) -->
            <div class="col-lg-2 col-md-3 footer-links">
                <h4>{{ __('footer.footer.layanan_kami') }}</h4>
                <ul>
                    <li><a href="{{url('environment-social-and-governance')}}">{{ __('footer.footer.environment_social_and_governance') }}</a></li>
                    <li><a href="{{url('riset-dan-analisis')}}">{{ __('footer.footer.research_and_analysis') }}</a></li>
                    <li><a href="{{url('layanan-hukum-dan-kepatuhan')}}">{{ __('footer.footer.legal_and_compliance_services') }}</a></li>
                    <li><a href="{{url('pengelolaan-jasa-konstruksi-dan-interior')}}">{{ __('footer.footer.architecture_construction_and_interior_services') }}</a></li>
                </ul>
            </div>


            <!-- Email Subscription -->
            <div class="col-lg-2 col-md-3 footer-links">
                <h4>{{ __('footer.footer.get_more_info') }}</h4>
                <div class="col-md-12">
                    <div class="form">
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control" placeholder="{{ __('footer.footer.email_placeholder') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Copyright -->
    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Tigapilar Profindo Mitra</strong> <span>{{ __('footer.footer.rights_reserved') }}</span></p>
        <div class="credits">
            {!! __('footer.footer.credits') !!}
        </div>
    </div>

</footer>

<style>
    .cs-widget {
        position: fixed;
        bottom: -10px;
        left: 5px;
        z-index: 1000;
    }

    .cs-button {
        top: -2em;
        left: 2em;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        transition: transform 0.3s ease;
        position: relative;
    }

    .cs-button:hover {
        transform: scale(1.1);
    }

    .cs-icon {
        width: 130px;
    }

    .cs-popup {
        display: none;
        position: absolute;
        bottom: 80px;
        left: 0;
        width: 320px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        animation: fadeIn 0.3s ease-in-out;
        overflow: hidden;
        z-index: 1001;
    }

    .cs-popup.fadeOut {
        animation: fadeOut 0.3s ease-in-out;
    }

    .cs-popup .card {
        border: none;
        border-radius: 10px;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
            transform: translateY(0);
        }
        to {
            opacity: 0;
            transform: translateY(10px);
        }
    }

    .cs-text {
        position: absolute;
        bottom: 5px; /* Mengatur teks di atas gambar */
        left: 0;
        right: 0;
        margin: auto;
        background-color: rgba(0, 0, 0, 0.8);
        color: white;
        padding: 10px 15px;
        border-radius: 15px;
        font-size: 0.9rem;
        text-align: center;
        animation: typing 2s steps(20, end), blink 0.5s step-end infinite alternate;
        white-space: nowrap;
        overflow: hidden;
        width: 12em;
    }

    @keyframes typing {
        from {
            width: 0;
        }
        to {
            width: 12em;
        }
    }

    @keyframes blink {
        from {
            border-right: 2px solid white;
        }
        to {
            border-right: 2px solid transparent;
        }
    }

    .contact-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .contact-item {
        border-bottom: 1px solid #ddd;
    }

    .contact-item:last-child {
        border-bottom: none;
    }

    .contact-link {
        display: flex;
        align-items: center;
        gap: 15px;
        text-decoration: none;
        padding: 15px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .contact-link:hover {
        background-color: #f4f6f8;
        transform: translateY(-2px);
    }

    .contact-icon {
        width: 2.5em;
        height: 2.5em;
        border-radius: 50%;
        background-color: #f0f4f8;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
    }

    .contact-icon img {
        width: 1.5em;
        height: 1.5em;
    }

    .contact-info {
        display: flex;
        flex-direction: column;
    }

    .contact-info strong {
        font-size: 0.9em;
    }

    .contact-info font {
        font-size: 0.75em;
        color: #666;
    }

    .btn-close {
        margin-top: 10px;
        background: #f0f4f8;
        border: none;
        padding: 10px;
        cursor: pointer;
        font-size: 0.9em;
        width: 100%;
        border-radius: 5px;
        transition: background-color 0.2s ease;
    }

    .btn-close:hover {
        background-color: #e2e6ea;
    }

    @media (max-width: 768px) {
        .cs-popup {
            width: 90%;
            bottom: 100px;
            left: 5%;
        }
    }
</style>

<div class="cs-widget">
    <div class="cs-button" onclick="togglePopup()" aria-label="Buka Customer Service">
        <img src="{{url('ilus/profind0_ilust_13.png')}}" alt="Customer Service" style="transform: scaleX(-1);width: 12em;">
    </div>
    <div class="cs-popup" id="csPopup">
        <div class="card shadow-lg">
            <div class="card-body">
                <h5 class="fw-bold mb-3">Hubungi Kami</h5>
                <ul class="contact-list">
                    <li class="contact-item">
                        <a href="mailto:marketing@profindomitra.co.id" target="_blank" class="contact-link">
                            <div class="contact-icon">
                                <img src="https://cdn-icons-png.flaticon.com/512/5611/5611946.png" alt="Email">
                            </div>
                            <div class="contact-info">
                                <strong>Marketing Services</strong><font>Support</font>
                            </div>
                        </a>
                    </li>
                    <li class="contact-item">
                        <a href="mailto:ferysulstyo@profindomitra.co.id?subject=[Profindo Mitra]&body=Hi%20Ferysulstyo,%20" target="_blank" class="contact-link">
                            <div class="contact-icon">
                                <img src="https://cdn-icons-png.flaticon.com/512/5611/5611946.png" alt="Email">
                            </div>
                            <div class="contact-info">
                                <strong>Ferysulstyo</strong><font>Marketing & Sales</font>
                            </div>
                        </a>
                    </li>
                    <li class="contact-item">
                        <a href="https://wa.me/6281218963148?text=Hi%20Profindo%20Mitra,%20" target="_blank" class="contact-link">
                            <div class="contact-icon">
                                <img src="https://cdn-icons-png.flaticon.com/512/174/174879.png" alt="WhatsApp">
                            </div>
                            <div class="contact-info">
                                <strong>WhatsApps</strong>
                            </div>
                        </a>
                    </li>
                </ul>
                <button class="btn-close" onclick="togglePopup()">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
    function togglePopup() {
        const popup = document.getElementById('csPopup');
        if (popup.style.display === 'block') {
            popup.classList.add('fadeOut');
            setTimeout(() => {
                popup.style.display = 'none';
                popup.classList.remove('fadeOut');
            }, 300); // Durasi animasi
        } else {
            popup.style.display = 'block';
        }
    }
</script>




  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{url('')}}/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('')}}/frontend/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{url('')}}/frontend/assets/vendor/aos/aos.js"></script>
  <script src="{{url('')}}/frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{url('')}}/frontend/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{url('')}}/frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
      AOS.init({
          duration: 800, // Durasi animasi
          offset: 200, // Jarak elemen mulai animasi
      });
  </script>

  <!-- Main JS File -->
  <script src="{{url('')}}/frontend/assets/js/main.js"></script>

</body>

</html>
