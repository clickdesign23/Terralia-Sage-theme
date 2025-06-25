<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Terralia Immobilier</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/public/test.css">
  <script src="<?= get_template_directory_uri() ?>/public/test.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

  <link rel="stylesheet" href="css/custom.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


  <!-- jQuery + Slick JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <style>
    /* Add this to your existing test.css file */

    /* Custom navbar toggle styles */
    .navbar-toggler {
      border: 1px solid rgba(0, 0, 0, .1);
      padding: 4px 8px;
      cursor: pointer;
    }

    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%2833, 37, 41, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
      display: inline-block;
      width: 1.5em;
      height: 1.5em;
      vertical-align: middle;
      background-repeat: no-repeat;
      background-position: center;
      background-size: 100%;
    }

    /* Mobile menu styles */
    .navbar-collapse {
      transition: all 0.3s ease-in-out;
    }

    .navbar-collapse.show {
      display: block !important;
    }

    .navbar-collapse:not(.show) {
      display: none;
    }

    /* Show menu on larger screens */
    @media (min-width: 992px) {
      .navbar-collapse {
        display: flex !important;
      }
    }


    .m_header {
      position: relative;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 999;
      background: #fff;
      padding-left: 20px;
      border-bottom: 1px solid #ddd;
    }

    .brand-logo {
      padding: 10px 0;
    }


    .hamburger-btn {
      font-size: 35px;
      background: none;
      border: none;
    }

    .close-btn {
      font-size: 40px !important;
      background: none;
      border: none;
    }

    .menu-wrapper {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      width: 100%;
      background: #fff;
      z-index: 1000;
      display: none;
    }

    .menu-wrapper.active {
      display: block;
    }

    .menu-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid #ddd;
      padding-bottom: 15px;
    }

    .m_top_box {
      padding-top: 10px;
    }

    .menu-link {
      font-size: 2rem;
      font-weight: 500;
      margin-bottom: 15px;
    }

    .sub-menu-link {
      font-family: monospace;
      font-size: 1.2rem;
      letter-spacing: 1px;
      margin-bottom: 10px;
      text-transform: uppercase;
      line-height: 2.5em;
    }

    .m-btn-contact {
      background-color: #A5E444 !important;
      color: #000;
      font-weight: 500 !important;
      border: 0 !important;
      width: 100% !important;
      ;
      position: relative !important;
      padding: 15px !important;
      font-size: 25px !important;
      border-radius: 0 !important;
      padding-top: 0 !important;
    }

    .m-btn-contact::before {
      content: "";
      position: absolute;
      top: -15px;
      right: 10px;
      width: 100%;
      height: 100%;
      background-color: #a3e635;
      z-index: -1;
      transition: 0.4s;
    }

    .phone-number {
      font-family: monospace;
      font-size: 1.8rem;
      text-align: center;
      margin: 30px 0;
      font-weight: 600;
    }

    .main-content {
      padding-top: 70px;
    }

    .m_header_content {
      padding-left: 20px;
      padding-right: 20px;
    }

    .m_top_box li {
      list-style: none;
    }

    .m_top_box li a {
      font-size: 35px !important;
      line-height: 1.6em;
    }

    .m_top_box .sub-menu {
      width: 52%;
      padding-top: 20px;
    }
  </style>
  <script>
    // Add this to your existing test.js file
    document.addEventListener('DOMContentLoaded', function () {
      const navbarToggler = document.getElementById('navbarToggler');
      const navbarCollapse = document.getElementById('mainNav');

      if (navbarToggler && navbarCollapse) {
        navbarToggler.addEventListener('click', function () {
          // Toggle the 'show' class
          if (navbarCollapse.classList.contains('show')) {
            // Hide the menu
            navbarCollapse.classList.remove('show');
            navbarToggler.setAttribute('aria-expanded', 'false');
            console.log('Menu closed');
          } else {
            // Show the menu
            navbarCollapse.classList.add('show');
            navbarToggler.setAttribute('aria-expanded', 'true');
            console.log('Menu opened');
          }
        });

        // Close menu when clicking on menu items (mobile only)
        const navLinks = navbarCollapse.querySelectorAll('.nav-link, .m-btn-contact');
        navLinks.forEach(function (link) {
          link.addEventListener('click', function () {
            if (window.innerWidth < 992) { // Only on mobile
              navbarCollapse.classList.remove('show');
              navbarToggler.setAttribute('aria-expanded', 'false');
            }
          });
        });

        // Close menu when clicking outside
        document.addEventListener('click', function (event) {
          if (!navbarToggler.contains(event.target) && !navbarCollapse.contains(event.target)) {
            if (navbarCollapse.classList.contains('show')) {
              navbarCollapse.classList.remove('show');
              navbarToggler.setAttribute('aria-expanded', 'false');
            }
          }
        });

        // Handle window resize
        window.addEventListener('resize', function () {
          if (window.innerWidth >= 992) {
            navbarCollapse.classList.remove('show');
            navbarToggler.setAttribute('aria-expanded', 'false');
          }
        });
      }
    });
  </script>

</head>

<body>

<?php
$upper_header_text = get_field('upper_header_text', 'option');
$upper_header_number = get_field('upper_header_number', 'option');
$header_image = get_field('header_image', 'option');
$nous_contacter_button = get_field('nous_contacter_button', 'option');
$nous_contacter_button_url = get_field('nous_contacter_button_url', 'option');
?>

  <header class="d_menu">

    <!-- Top Contact Info -->
    <div class="bg-light text-end small px-3 py-1 border-bottom hide_upper_header_text_in_responsive">
      <div class="container" style="max-width: 1835px;">
        @if($upper_header_text && $upper_header_number)
      <span class="me-3 text-uppercase JetBrains_Mono">{{$upper_header_text}}</span>
      <!-- <span class="me-3 text-uppercase JetBrains_Mono">Conseils et Actus</span>-->
      <span class="me-3">/</span>
      <strong style="font-family: 'JetBrains Mono';">{{$upper_header_number}}</strong>
    @endif
      </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-white bg-white border-bottom">
      <div class="container" style="max-width: 1835px;">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="#">

          <?php
// $upload_dir = wp_upload_dir();
?>


          @if(is_array($header_image))
        <img src="{{ $header_image['url'] }}" alt="logo" class="img-fluid w-100">
      @else
        <img src="{{ $header_image }}" alt="logo" class="img-fluid w-100">
      @endif

          <!-- <div>
          <strong class="d-block">Terralia</strong>
          <small class="text-success">Immobilier</small>
        </div> -->
        </a>

        <!-- Menu Items -->
        <button class="navbar-toggler" type="button" id="navbarToggler" aria-controls="mainNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="mainNav">
          <?php
$menu_name = 'header_menu';
if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
  $menu = wp_get_nav_menu_object($locations[$menu_name]);
  $menu_items = wp_get_nav_menu_items($menu->term_id);
?>
          <ul class="navbar-nav align-items-center mb-2 mb-lg-0 for_gap_">
            <?php
  foreach ((array) $menu_items as $item) {
    echo '<li class="nav-item"><a class="nav-link header_font" href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></li>';
  }
    ?>
            @if($nous_contacter_button)
        <li class="nav-item ms-2"><a href="{{ $nous_contacter_button_url }}"
          class="btn btn-contact">{{$nous_contacter_button}}</a></li>
      @endif
          </ul>
          <?php } ?>
          <!-- <ul class="navbar-nav align-items-center mb-2 mb-lg-0 for_gap_"> -->
          <!-- <li class="nav-item"><a class="nav-link header_font" href="#">Appartements</a></li>
            <li class="nav-item"><a class="nav-link header_font" href="#">Maisons</a></li>
            <li class="nav-item"><a class="nav-link header_font" href="#">Terrains</a></li>
            <li class="nav-item"><a class="nav-link header_font" href="#">Nos services</a></li> -->
          <!-- <li class="nav-item ms-2"><a href="#" class="btn btn-contact">Nous contacter</a></li> -->
          <!-- </ul> -->
        </div>
      </div>
    </nav>
  </header>







  <div class="m_menu">
    <div class="d-flex justify-content-between align-items-center m_header">
      <div class="brand-logo d-flex align-items-center">
        @if(is_array($header_image))
      <img src="{{ $header_image['url'] }}" alt="logo" class="img-fluid w-100">
    @else
      <img src="{{ $header_image }}" alt="logo" class="img-fluid w-100">
    @endif

      </div>
      <div class="open-btn">
        <img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/hamburger.png" class="hamburger-btn"
          id="hamburgerBtn">
        {{-- <button class="hamburger-btn" id="hamburgerBtn">&#9776;</button> --}}
      </div>
    </div>

    <!-- Fullscreen Menu -->
    <div class="menu-wrapper" id="menuWrapper">
      <div class="menu-header mb-4" style="
    padding: 0 10px 0px;
">
        <div class="brand-logo d-flex align-items-center">
          @if(is_array($header_image))
        <img src="{{ $header_image['url'] }}" alt="logo" class="img-fluid w-100">
      @else
        <img src="{{ $header_image }}" alt="logo" class="img-fluid w-100">
      @endif
        </div>
        <div class="close-btn">
          <img src="https://terralia-immobilier.preprodwi.fr/app/uploads/2025/06/close-btn.png"
            class="btn close-btn p-0" id="closeBtn">
          {{-- <button class="btn fs-3 close-btn" id="closeBtn" style="
    font-size: 40px !important;
">&times;</button> --}}
        </div>
      </div>

      <div class="m_header_content d-flex flex-column justify-content-between" style="height: 80vh;">
        <div class="m_top_box">



          <?php
$menu_name = 'header_menu';
$locations = get_nav_menu_locations();

$menu = wp_get_nav_menu_object($locations['primary_navigation']);
$menu_items = wp_get_nav_menu_items($menu->term_id);
            ?>
          <nav class="mb-4">
            <?php
foreach ($menu_items as $item) {
  echo '<li class="nav-item"><a class="nav-link header_font" href="' . $item->url . '">' . $item->title . '</a></li>';
}
              ?>

          </nav>

          <hr>

          <div class="sub-menu">
            @if($upper_header_text)
        <div class="sub-menu-link">{{$upper_header_text}}</div>
        <!-- <div class="sub-menu-link">CONSEILS ET ACTUS</div> -->
      @endif
          </div>
        </div>

        <div class="m_bottom_box">
          @if($upper_header_text)
        <div class="phone-number">{{$upper_header_number}}</div>
      @endif
          @if($nous_contacter_button)
        <a href="{{ $nous_contacter_button_url }}" class="btn m-btn-contact">{{$nous_contacter_button}}</a>
      @endif
        </div>
      </div>
    </div>
  </div>