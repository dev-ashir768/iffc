<?php
if (!isset($page_title)) {
  $page_title = 'IFFC - International Fashion Festival Canada';
}
if (!isset($page_desc)) {
  $page_desc = 'IFFC - International Fashion Festival Canada. Celebrating culture, craft, and creativity across continents.';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php echo $page_desc; ?>" />
  <title><?php echo $page_title; ?></title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap"
    rel="stylesheet" />

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css?v=<?php echo filemtime('assets/css/style.css'); ?>" />

  <!-- Font Awesome for Social Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Masonry JS -->
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
  <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>

  <?php
  $request_uri = strtok($_SERVER['REQUEST_URI'], '?');
  $current_page = basename($request_uri);

  // Check for root path or index
  if ($request_uri == '/' || $request_uri == '/index.php' || $current_page == '') {
    $current_page = 'index.php';
  }
  // Check for about
  if ($request_uri == '/about' || $request_uri == '/about.php') {
    $current_page = 'about.php';
  }
  // Check for events
  if ($request_uri == '/events' || $request_uri == '/events.php') {
    $current_page = 'events.php';
  }
  ?>
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar">
    <div class="nav-container">
      <a href="./" class="logo">
        <img src="assets/images/logo.png" width="50" alt="IFFC Logo" />
      </a>

      <ul class="nav-menu">
        <li class="nav-item">
          <a href="./"
            class="nav-link <?php echo ($current_page == 'index.php' || $current_page == '') ? 'active' : ''; ?>">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a href="about" class="nav-link <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">About</a>
          <ul class="dropdown-menu">
            <li><a href="about#our-story">Our Story</a></li>
            <li><a href="about#global-impact">Global Impact</a></li>
            <li><a href="about#leadership">Leadership Team</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a href="events" class="nav-link <?php echo ($current_page == 'events.php') ? 'active' : ''; ?>">Events</a>
          <ul class="dropdown-menu">
            <li><a href="events#iffc-canada">IFFC Canada</a></li>
            <li><a href="events#iff-europe">IFF Europe</a></li>
            <li><a href="events#past-events">Past Events Archive</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a href="./#participate" class="nav-link">Participate</a>
          <ul class="dropdown-menu">
            <li><a href="./#designers">Designers</a></li>
            <li><a href="./#exhibitors">Exhibitors</a></li>
            <li><a href="./#models">Models / Talent</a></li>
            <li><a href="./#volunteers">Volunteers</a></li>
            <li><a href="./#media">Media</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a href="./#sponsors" class="nav-link">Sponsors</a>
          <ul class="dropdown-menu">
            <li><a href="./#sponsor-with-us">Sponsor With Us</a></li>
            <li><a href="./#past-sponsors">Past Sponsors</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="./#gallery" class="nav-link">Gallery</a>
        </li>
        <li class="nav-item">
          <a href="./#press" class="nav-link">Press & Media</a>
        </li>
        <li class="nav-item">
          <a href="./#tickets" class="nav-link">Tickets</a>
        </li>
        <li class="nav-item">
          <a href="./#contact" class="nav-link">Contact</a>
        </li>
      </ul>

      <div class="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </nav>