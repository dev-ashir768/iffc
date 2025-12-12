<?php
$page_title = 'Home - IFFC - International Fashion Festival Canada';
$page_desc = 'IFFC - International Fashion Festival Canada. Celebrating culture, craft, and creativity across continents.';
include 'includes/header.php';
?>

<!-- Hero Section -->
<section id="home" class="hero">
  <div class="hero-background">
    <video autoplay muted loop playsinline id="heroVideo">
      <source src="./assets//videos/IFFC-teaser-03.mp4" type="video/mp4" />
      <source src="./assets//videos/IFFC-teaser-03.mp4" type="video/mp4" />
    </video>
    <div class="video-overlay"></div>
  </div>

  <div class="hero-content">
    <h1 class="hero-title" data-aos="fade-up">IFFC</h1>
    <h2 class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
      INTERNATIONAL FASHION<br />FESTIVAL CANADA
    </h2>
    <p class="hero-description" data-aos="fade-up" data-aos-delay="400">
      Celebrating culture, craft, and creativity across continents.
    </p>
  </div>
</section>

<!-- About Section -->
<section id="about" class="section">
  <div class="container">
    <!-- Our Story -->
    <div class="row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 4rem; margin-bottom: 6rem;">
      <div class="col-text" style="flex: 1; min-width: 300px" data-aos="fade-right">
        <h2 class="section-title" style="text-align: left">Our Story</h2>
        <div class="story-content" style="line-height: 1.8; color: #d1d5db;">
          <p style="margin-bottom: 1.5rem">
            IFF began as a concept on Style360 TV and evolved into a global
            fashion platform, celebrating culture, creativity, and
            craftsmanship across continents.
          </p>
          <p>
            Today, IFFC stands as a bridge between Pakistan, Canada, Europe,
            and South Asia, empowering designers, talent, and brands to
            connect internationally.
          </p>
          <a href="about" class="btn btn-outline" style="margin-top: 1.5rem">Read Full Story</a>
        </div>
      </div>
      <div class="col-image" style="flex: 1; min-width: 300px" data-aos="fade-left">
        <div class="image-frame-premium" style="position: relative;">
          <img src="assets/images/runway-shots/shot-4.png" alt="Our Story"
            style="width: 100%; border-radius: 4px; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);" />
        </div>
      </div>
    </div>

    <!-- Global Impact -->
    <h2 class="section-title" data-aos="fade-up">Global Impact</h2>
    <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
      Creating Opportunities & Connections
    </p>

    <div class="impact-grid" data-aos="fade-up" data-aos-delay="200">
      <div class="impact-card">
        <div class="impact-image">
          <img src="assets/images/about/global-impact.png" alt="Cultural Exchange">
        </div>
        <div class="impact-content">
          <h3>Cultural Exchange</h3>
          <p>Cross-continental cultural exchanges</p>
        </div>
      </div>
      <div class="impact-card">
        <div class="impact-image">
          <img src="assets/images/about/cultural-fusion.png" alt="New Markets">
        </div>
        <div class="impact-content">
          <h3>New Markets</h3>
          <p>Showcasing designers to new markets</p>
        </div>
      </div>
      <div class="impact-card">
        <div class="impact-image">
          <img src="assets/images/about/innovation.png" alt="Business Opportunities">
        </div>
        <div class="impact-content">
          <h3>Business Opportunities</h3>
          <p>Creating business opportunities for fashion, art, media, and production industries</p>
        </div>
      </div>
    </div>

    <!-- Leadership Teaser -->
    <div style="margin-top: 6rem;">
      <h2 class="section-title" data-aos="fade-up">Leadership & Team</h2>
      <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
        Visionaries behind the movement
      </p>

      <div class="team-grid">
        <!-- Member 1 -->
        <div class="team-card" data-aos="fade-up">
          <div class="team-image">
            <img src="https://placehold.co/400x500/1a2624/c9a961?text=Alina+Khan" alt="Alina Khan">
          </div>
          <div class="team-info">
            <h3>Alina Khan</h3>
            <span class="team-role">Founder & CEO</span>
            <p class="team-bio">Visionary leader with over 15 years in global fashion management.</p>
          </div>
        </div>

        <!-- Member 2 -->
        <div class="team-card" data-aos="fade-up" data-aos-delay="100">
          <div class="team-image">
            <img src="https://placehold.co/400x500/1a2624/c9a961?text=David+SP" alt="David Saint-Pierre">
          </div>
          <div class="team-info">
            <h3>David Saint-Pierre</h3>
            <span class="team-role">Creative Director</span>
            <p class="team-bio">Award-winning creative directing immersive fashion experiences.</p>
          </div>
        </div>

        <!-- Member 3 -->
        <div class="team-card" data-aos="fade-up" data-aos-delay="200">
          <div class="team-image">
            <img src="https://placehold.co/400x500/1a2624/c9a961?text=Sarah+Ahmed" alt="Sarah Ahmed">
          </div>
          <div class="team-info">
            <h3>Sarah Ahmed</h3>
            <span class="team-role">Head of Partnerships</span>
            <p class="team-bio">Building bridges between brands and international markets.</p>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 3rem;">
        <a href="about" class="btn btn-outline">Meet the Full Team</a>
      </div>
    </div>
  </div>
</section>

<!-- Designers Section -->
<section id="designers-showcase" class="section designers-section">
  <div class="container">
    <h2 class="section-title" data-aos="fade-up">DESIGNERS</h2>
    <div class="designers-grid">
      <div class="designer-card" data-aos="fade-up" data-aos-delay="0">
        <div class="designer-image">
          <img src="assets/images/designers/mayur-girotra.png" alt="Mayyur Girotra" />
        </div>
        <h3 class="designer-name">MAYYUR GIROTRA</h3>
      </div>
      <div class="designer-card" data-aos="fade-up" data-aos-delay="100">
        <div class="designer-image">
          <img src="assets/images/designers/nomi-ansari.png" alt="Nomi Ansari" />
        </div>
        <h3 class="designer-name">NOMI ANSARI</h3>
      </div>
      <div class="designer-card" data-aos="fade-up" data-aos-delay="200">
        <div class="designer-image">
          <img src="assets/images/designers/aleksandra-baranova.jpeg" alt="Aleksandra Baranova" />
        </div>
        <h3 class="designer-name">ALEKSANDRA BARANOVA</h3>
      </div>
    </div>
  </div>
</section>

<!-- Upcoming Events with Swiper Carousel -->
<section id="events" class="section" style="background: rgba(255, 255, 255, 0.02)">
  <div class="container">
    <h2 class="section-title" data-aos="fade-up">Upcoming Events</h2>
    <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
      Join us at our world-class fashion events across the globe
    </p>

    <div class="swiper eventsSwiper" data-aos="fade-up" data-aos-delay="200">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="event-card">
            <img src="assets/images/upcoming-events/iffc-annual-gala.png" alt="iffc-annual-gala" class="event-image" />
            <div class="event-content">
              <div class="event-date">December 3, 2025</div>
              <h3 class="event-title">IFFC Annual Gala</h3>
              <p class="event-location">Montreal, Canada</p>
              <a href="#tickets" class="btn btn-outline">Get Tickets</a>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="event-card">
            <img src="assets/images/upcoming-events/global-couture-exhibition.png" alt="global-couture-exhibition"
              class="event-image" />
            <div class="event-content">
              <div class="event-date">December 10, 2025</div>
              <h3 class="event-title">Global Couture Exhibition</h3>
              <p class="event-location">Vancouver, Canada</p>
              <a href="#tickets" class="btn btn-outline">Get Tickets</a>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="event-card">
            <img src="assets/images/upcoming-events/toronto-fashion-week.png" alt="toronto-fashion-week"
              class="event-image" />
            <div class="event-content">
              <div class="event-date">December 15, 2025</div>
              <h3 class="event-title">Toronto Fashion Week</h3>
              <p class="event-location">Toronto, Canada</p>
              <a href="#tickets" class="btn btn-outline">Get Tickets</a>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="event-card">
            <img src="assets/images/upcoming-events/brampton-fashion-festival.png" alt="brampton-fashion-festival"
              class="event-image" />
            <div class="event-content">
              <div class="event-date">December 27, 2025</div>
              <h3 class="event-title">Brampton Fashion Festival</h3>
              <p class="event-location">Brampton, Ontario, Canada</p>
              <a href="#tickets" class="btn btn-outline">Get Tickets</a>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<!-- Participate Section (Hover Accordion) -->
<section id="participate" class="section participate-section">
  <div class="container-fluid p-0">
    <div class="participate-header container mb-5">
      <h2 class="section-title" data-aos="fade-right">
        JOIN THE<br />EXPERIENCE
      </h2>
      <p class="section-subtitle" data-aos="fade-left" data-aos-delay="100">
        Be part of the world's most prestigious fashion festival.
      </p>
    </div>

    <div class="accordion-container">
      <!-- Models -->
      <a href="#models" class="accordion-item" style="
              background-image: url('assets/images/join-the-moment/model.jpeg');
            ">
        <div class="accordion-overlay"></div>
        <div class="accordion-content">
          <span class="accordion-number">01</span>
          <h3>Models</h3>
          <p>Walk the runway</p>
          <span class="accordion-btn">Cast Now</span>
        </div>
      </a>

      <!-- Designers -->
      <a href="#designers" class="accordion-item" style="
              background-image: url('assets/images/join-the-moment/aleksandra.jpeg');
            ">
        <div class="accordion-overlay"></div>
        <div class="accordion-content">
          <span class="accordion-number">02</span>
          <h3>Designers</h3>
          <p>Showcase your collection to the world</p>
          <span class="accordion-btn">Apply Now</span>
        </div>
      </a>

      <!-- Exhibitors -->
      <a href="#exhibitors" class="accordion-item" style="
              background-image: url('assets/images/join-the-moment/exhibitors.png');
            ">
        <div class="accordion-overlay"></div>
        <div class="accordion-content">
          <span class="accordion-number">03</span>
          <h3>Exhibitors</h3>
          <p>Display your brand</p>
          <span class="accordion-btn">Join Us</span>
        </div>
      </a>

      <!-- Media -->
      <a href="#media" class="accordion-item" style="
              background-image: url('assets/images/join-the-moment/media.png');
            ">
        <div class="accordion-overlay"></div>
        <div class="accordion-content">
          <span class="accordion-number">04</span>
          <h3>Media</h3>
          <p>Cover the event</p>
          <span class="accordion-btn">Get Access</span>
        </div>
      </a>

      <!-- Volunteers -->
      <a href="#volunteers" class="accordion-item" style="
              background-image: url('assets/images/join-the-moment/volunteer.png');
            ">
        <div class="accordion-overlay"></div>
        <div class="accordion-content">
          <span class="accordion-number">05</span>
          <h3>Volunteers</h3>
          <p>Be the heartbeat</p>
          <span class="accordion-btn">Support</span>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- Gallery Section with Masonry -->
<section id="gallery" class="section" style="background: rgba(255, 255, 255, 0.02)">
  <div class="container">
    <h2 class="section-title" data-aos="fade-up">Gallery</h2>
    <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
      Experience the glamour and unforgettable moments from our events
    </p>

    <!-- Runway Shots -->
    <div class="gallery-section">
      <h3 class="section-title" style="font-size: 2rem; margin-bottom: 2rem; text-align: left" data-aos="fade-up">
        Runway Shots
      </h3>
      <div class="swiper gallerySwiper runwaySwiper archiveSwiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="#" class="archive-card">
              <img src="assets/images/runway-shots/shot-2.png" alt="Runway 2" />
              <div class="archive-overlay">
                <span class="archive-year">2024</span>
                <span class="archive-content">Paris Fashion Week</span>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#" class="archive-card">
              <img src="assets/images/runway-shots/shot-4.png" alt="Runway 4" />
              <div class="archive-overlay">
                <span class="archive-year">2023</span>
                <span class="archive-content">Milan Couture</span>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#" class="archive-card">
              <img src="assets/images/runway-shots/shot-5.png" alt="Runway 5" />
              <div class="archive-overlay">
                <span class="archive-year">2023</span>
                <span class="archive-content">New York Show</span>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#" class="archive-card">
              <img src="assets/images/runway-shots/shot-6.png" alt="Runway 6" />
              <div class="archive-overlay">
                <span class="archive-year">2022</span>
                <span class="archive-content">London Fashion Week</span>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#" class="archive-card">
              <img src="assets/images/runway-shots/shot-7.png" alt="Runway 6" />
              <div class="archive-overlay">
                <span class="archive-year">2022</span>
                <span class="archive-content">Tokyo Runway</span>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#" class="archive-card">
              <img src="assets/images/runway-shots/shot-8.png" alt="Runway 6" />
              <div class="archive-overlay">
                <span class="archive-year">2021</span>
                <span class="archive-content">Berlin Fashion</span>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#" class="archive-card">
              <img src="assets/images/runway-shots/shot-10.png" alt="Runway 6" />
              <div class="archive-overlay">
                <span class="archive-year">2021</span>
                <span class="archive-content">Shanghai Week</span>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#" class="archive-card">
              <img src="assets/images/runway-shots/shot-11.png" alt="Runway 6" />
              <div class="archive-overlay">
                <span class="archive-year">2020</span>
                <span class="archive-content">Virtual Gala</span>
              </div>
            </a>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <!-- Backstage Moments -->
    <div class="gallery-section">
      <h3 class="section-title" style="font-size: 2rem; margin-bottom: 2rem; text-align: left" data-aos="fade-up">
        Backstage Moments
      </h3>
      <div class="swiper gallerySwiper backstageSwiper archiveSwiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="#" class="archive-card">
              <img src="assets/images/backstage-moments/backstage-1.png" alt="Backstage 1" />
              <div class="archive-overlay">
                <span class="archive-year">2024</span>
                <span class="archive-content">Behind the Scenes</span>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#" class="archive-card">
              <img src="assets/images/backstage-moments/backstage-3.jpeg" alt="Backstage 3" />
              <div class="archive-overlay">
                <span class="archive-year">2024</span>
                <span class="archive-content">Makeup & Prep</span>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#" class="archive-card">
              <img src="assets/images/backstage-moments/backstage-4.jpeg" alt="Backstage 4" />
              <div class="archive-overlay">
                <span class="archive-year">2023</span>
                <span class="archive-content">Final Touches</span>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#" class="archive-card">
              <img src="assets/images/backstage-moments/backstage-5.png" alt="Backstage 4" />
              <div class="archive-overlay">
                <span class="archive-year">2023</span>
                <span class="archive-content">Model Casting</span>
              </div>
            </a>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="section" style="background: rgba(255, 255, 255, 0.02)">
  <div class="container">
    <h2 class="section-title" data-aos="fade-up">WHAT PEOPLE SAY</h2>
    <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
      Hear from our community of designers, models, and fashion enthusiasts
    </p>

    <div class="swiper reviewsSwiper" data-aos="fade-up" data-aos-delay="200">
      <div class="swiper-wrapper">
        <!-- Review 1 -->
        <div class="swiper-slide">
          <div class="video-review-card">
            <div class="video-wrapper">
              <video poster="assets/images/runway-shots/shot-2.png" playsinline loop muted onmouseover="this.play()"
                onmouseout="this.pause()">
                <source src="./assets/videos/IFFC-teaser-03.mp4" type="video/mp4" />
              </video>
              <div class="play-button">
                <i class="fas fa-play"></i>
              </div>
            </div>
            <div class="review-info">
              <h3>Sarah Chen</h3>
              <p>Fashion Designer</p>
            </div>
          </div>
        </div>

        <!-- Review 2 -->
        <div class="swiper-slide">
          <div class="video-review-card">
            <div class="video-wrapper">
              <video poster="assets/images/runway-shots/shot-4.png" playsinline loop muted onmouseover="this.play()"
                onmouseout="this.pause()">
                <source src="./assets/videos/IFFC-teaser-03.mp4" type="video/mp4" />
              </video>
              <div class="play-button">
                <i class="fas fa-play"></i>
              </div>
            </div>
            <div class="review-info">
              <h3>Marcus Johnson</h3>
              <p>Fashion Journalist</p>
            </div>
          </div>
        </div>

        <!-- Review 3 -->
        <div class="swiper-slide">
          <div class="video-review-card">
            <div class="video-wrapper">
              <video poster="assets/images/runway-shots/shot-5.png" playsinline loop muted onmouseover="this.play()"
                onmouseout="this.pause()">
                <source src="./assets/videos/IFFC-teaser-03.mp4" type="video/mp4" />
              </video>
              <div class="play-button">
                <i class="fas fa-play"></i>
              </div>
            </div>
            <div class="review-info">
              <h3>Priya Sharma</h3>
              <p>Model</p>
            </div>
          </div>
        </div>

        <!-- Review 4 -->
        <div class="swiper-slide">
          <div class="video-review-card">
            <div class="video-wrapper">
              <video poster="assets/images/runway-shots/shot-6.png" playsinline loop muted onmouseover="this.play()"
                onmouseout="this.pause()">
                <source src="./assets/videos/IFFC-teaser-03.mp4" type="video/mp4" />
              </video>
              <div class="play-button">
                <i class="fas fa-play"></i>
              </div>
            </div>
            <div class="review-info">
              <h3>David Miller</h3>
              <p>Event Coordinator</p>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<!-- Sponsors -->
<section id="sponsors" class="section" style="background: rgba(255, 255, 255, 0.02)">
  <div class="container">
    <h2 class="section-title" data-aos="fade-up">Our Sponsors</h2>

    <div class="sponsors-marquee-container">
      <div class="sponsors-track">
        <!-- Original Set -->
        <div class="sponsor-logo">
          <img src="assets/images/sponsors/hum-world.png" alt="hum-world" />
        </div>
        <div class="sponsor-logo">
          <img src="assets/images/sponsors/international-fashion.png" alt="international-fashion" />
        </div>
        <div class="sponsor-logo">
          <img src="assets/images/sponsors/queen-manner.png" alt="queen-manner" />
        </div>
        <div class="sponsor-logo">
          <img src="assets/images/sponsors/travel-arrangers.png" alt="travel-arrangers" />
        </div>
        <div class="sponsor-logo">
          <img src="assets/images/sponsors/the-iffshow.png" alt="the-iffshow" />
        </div>
        <div class="sponsor-logo">
          <img src="assets/images/sponsors/bramption.png" alt="bramption" />
        </div>
        <div class="sponsor-logo">
          <img src="assets/images/sponsors/nanda.png" alt="nanda" />
        </div>
        <div class="sponsor-logo">
          <img src="assets/images/sponsors/shimal.png" alt="shimal" />
        </div>
        <div class="sponsor-logo">
          <img src="assets/images/sponsors/haier.png" alt="haier" />
        </div>
        <div class="sponsor-logo">
          <img src="assets/images/sponsors/royal-delight.png" alt="royal-delight" />
        </div>

        <!-- Duplicate Set for Infinite Scroll -->
        <div class="sponsor-logo">
          <img src="assets/images/sponsors/hum-world.png" alt="hum-world" />
        </div>
        <div class="sponsor-logo">
          <img src="assets/images/sponsors/international-fashion.png" alt="international-fashion" />
        </div>
        <div class="sponsor-logo">
          <img src="assets/images/sponsors/queen-manner.png" alt="queen-manner" />
        </div>
        <div class="sponsor-logo">
          <img src="assets/images/sponsors/travel-arrangers.png" alt="travel-arrangers" />
        </div>
        <div class="sponsor-logo">
          <img src="assets/images/sponsors/the-iffshow.png" alt="the-iffshow" />
        </div>
        <div class="sponsor-logo">
          <img src="assets/images/sponsors/bramption.png" alt="bramption" />
        </div>
        <div class="sponsor-logo">
          <img src="assets/images/sponsors/nanda.png" alt="nanda" />
        </div>
        <div class="sponsor-logo">
          <img src="assets/images/sponsors/shimal.png" alt="shimal" />
        </div>
        <div class="sponsor-logo">
          <img src="assets/images/sponsors/haier.png" alt="haier" />
        </div>
        <div class="sponsor-logo">
          <img src="assets/images/sponsors/royal-delight.png" alt="royal-delight" />
        </div>
      </div>
    </div>

    <div style="text-align: center; margin-top: 4rem" data-aos="fade-up" data-aos-delay="200">
      <a href="#sponsor-with-us" class="btn btn-primary">Become a Sponsor</a>
    </div>
  </div>
</section>

<!-- CTA Section - Improved Design -->
<section id="tickets" class="section cta-section">
  <div class="container">
    <div class="cta-content" data-aos="zoom-in">
      <h2 class="section-title">READY TO JOIN IFFC ?</h2>
      <p class="section-subtitle">
        Don't miss the fashion event of the year. Secure your spot now!
      </p>

      <div class="hero-ctas" style="margin-top: 3rem">
        <a href="#buy-tickets" class="btn btn-primary">Buy Tickets Now</a>
        <a href="#participate" class="btn btn-outline">Apply to Participate</a>
        <a href="#contact" class="btn btn-secondary">Contact Us</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>