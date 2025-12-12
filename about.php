<?php
$page_title = 'About Us - IFFC';
$page_desc = 'About IFFC - International Fashion Festival Canada. Our story, global impact, and leadership team.';
include 'includes/header.php';
?>

<!-- Page Hero -->
<section class="hero page-hero" style="
        min-height: 50vh;
        padding-top: 100px;
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
          url('assets/images/runway-shots/shot-11.png');
        background-size: cover;
        background-position: center;
      ">
  <div class="hero-content">
    <h1 class="hero-title" data-aos="fade-up" style="font-size: 4rem">
      About IFFC
    </h1>
    <h2 class="hero-subtitle" data-aos="fade-up" data-aos-delay="200" style="font-size: 1.5rem">
      Bridging Continents Through Fashion
    </h2>
  </div>
</section>

<!-- Our Story -->
<section id="our-story" class="section">
  <div class="container">
    <div class="row" style="display: flex; flex-wrap: wrap; align-items: center; gap: 4rem">
      <div class="col-text" style="flex: 1; min-width: 300px" data-aos="fade-right">
        <h2 class="section-title" style="text-align: left">Our Story</h2>
        <div class="story-content" style="
                line-height: 1.8;
                color: #d1d5db;
                font-size: 1.1rem;
              ">
          <p style="margin-bottom: 1.5rem">
            IFF began as a concept on Style360 TV and evolved into a global
            fashion platform, celebrating culture, creativity, and
            craftsmanship across continents.
          </p>
          <p>
            Today, IFFC stands as a bridge between Pakistan, Canada, Europe,
            and South Asia, empowering designers, talent, and brands to
            connect internationally. We are dedicated to fostering a
            community where art meets innovation, creating a legacy of style
            that transcends borders.
          </p>
        </div>
      </div>
      <div class="col-image" style="flex: 1; min-width: 300px" data-aos="fade-left">
        <div class="image-frame-premium">
          <img src="assets/images/runway-shots/shot-4.png" alt="Our Story" style="
                  width: 100%;
                  border-radius: 4px;
                  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
                " />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Global Impact -->
<section id="global-impact" class="section" style="background: rgba(255, 255, 255, 0.02)">
  <div class="container">
    <h2 class="section-title" data-aos="fade-up">Global Impact</h2>
    <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
      Creating Opportunities & Connections
    </p>

    <div class="impact-grid" style="
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 4rem;
          ">
      <!-- Card 1 -->
      <div class="impact-card" data-aos="fade-up" style="
              padding: 0;
              overflow: hidden;
              background: #0a1514;
              border: 1px solid rgba(255, 255, 255, 0.1);
            ">
        <div class="impact-image" style="height: 250px; overflow: hidden">
          <img src="assets/images/about/cultural-fusion.png" alt="Cultural Exchange" style="
                  width: 100%;
                  height: 100%;
                  object-fit: cover;
                  transition: transform 0.5s ease;
                " />
        </div>
        <div class="impact-content" style="padding: 2rem; text-align: center">
          <h3 style="margin-bottom: 1rem; color: white">
            Cultural Exchange
          </h3>
          <p style="color: #9ca3af; font-family: 'Inter', sans-serif">
            Cross-continental cultural exchanges
          </p>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="impact-card" data-aos="fade-up" data-aos-delay="100" style="
              padding: 0;
              overflow: hidden;
              background: #0a1514;
              border: 1px solid rgba(255, 255, 255, 0.1);
            ">
        <div class="impact-image" style="height: 250px; overflow: hidden">
          <img src="assets/images/about/global-impact.png" alt="New Markets" style="
                  width: 100%;
                  height: 100%;
                  object-fit: cover;
                  transition: transform 0.5s ease;
                " />
        </div>
        <div class="impact-content" style="padding: 2rem; text-align: center">
          <h3 style="margin-bottom: 1rem; color: white">New Markets</h3>
          <p style="color: #9ca3af; font-family: 'Inter', sans-serif">
            Showcasing designers to new markets
          </p>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="impact-card" data-aos="fade-up" data-aos-delay="200" style="
              padding: 0;
              overflow: hidden;
              background: #0a1514;
              border: 1px solid rgba(255, 255, 255, 0.1);
            ">
        <div class="impact-image" style="height: 250px; overflow: hidden">
          <img src="assets/images/about/innovation.png" alt="Business Opportunities" style="
                  width: 100%;
                  height: 100%;
                  object-fit: cover;
                  transition: transform 0.5s ease;
                " />
        </div>
        <div class="impact-content" style="padding: 2rem; text-align: center">
          <h3 style="margin-bottom: 1rem; color: white">
            Business Opportunities
          </h3>
          <p style="color: #9ca3af; font-family: 'Inter', sans-serif">
            Creating business opportunities for fashion, art, media, and production industries
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Leadership / Team -->
<section id="leadership" class="section">
  <div class="container">
    <h2 class="section-title" data-aos="fade-up">Leadership & Team</h2>
    <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
      Founders, Curators, and Partners making it happen.
    </p>

    <div class="team-grid" style="
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
          ">
      <!-- Member 1 -->
      <div class="team-card" data-aos="fade-up">
        <div class="team-image" style="
                height: 350px;
                overflow: hidden;
                margin-bottom: 1.5rem;
                position: relative;
              ">
          <img src="/assets/images/leadership/omar-qamar.png" alt="Omar Qamar" style="
                  width: 100%;
                  height: 100%;
                  object-fit: cover;
                  filter: grayscale(100%);
                  transition: all 0.4s ease;
                " />
        </div>
        <div class="team-info" style="text-align: center">
          <h3 style="margin-bottom: 0.5rem; color: #c9a961">Omar Qamar</h3>
          <p style="
                  text-transform: uppercase;
                  letter-spacing: 0.1em;
                  font-size: 0.8rem;
                  color: #9ca3af;
                  margin-bottom: 1rem;
                ">
            Founder- Director
          </p>
          <p style="
                  font-size: 0.9rem;
                  color: #6b7280;
                  line-height: 1.6;
                ">
            Driving the vision of IFFC to connect cultures through fashion.
          </p>
        </div>
      </div>

      <!-- Member 2 -->
      <div class="team-card" data-aos="fade-up" data-aos-delay="100">
        <div class="team-image" style="
                height: 350px;
                overflow: hidden;
                margin-bottom: 1.5rem;
                position: relative;
              ">
          <img src="/assets/images/leadership/nomi-qamar.png" alt="Nomi Qamar" style="
                  width: 100%;
                  height: 100%;
                  object-fit: cover;
                  filter: grayscale(100%);
                  transition: all 0.4s ease;
                " />
        </div>
        <div class="team-info" style="text-align: center">
          <h3 style="margin-bottom: 0.5rem; color: #c9a961">
            Nomi Qamar
          </h3>
          <p style="
                  text-transform: uppercase;
                  letter-spacing: 0.1em;
                  font-size: 0.8rem;
                  color: #9ca3af;
                  margin-bottom: 1rem;
                ">
            Creative Director
          </p>
          <p style="
                  font-size: 0.9rem;
                  color: #6b7280;
                  line-height: 1.6;
                ">
            Leading creative direction and immersive fashion experiences.
          </p>
        </div>
      </div>

      <!-- Member 3 -->
      <div class="team-card" data-aos="fade-up" data-aos-delay="200">
        <div class="team-image" style="
                height: 350px;
                overflow: hidden;
                margin-bottom: 1.5rem;
                position: relative;
              ">
          <img src="/assets/images/leadership/amirJ.Khan.png" alt="Amir J. Khan" style="
                  width: 100%;
                  height: 100%;
                  object-fit: cover;
                  filter: grayscale(100%);
                  transition: all 0.4s ease;
                " />
        </div>
        <div class="team-info" style="text-align: center">
          <h3 style="margin-bottom: 0.5rem; color: #c9a961">Amir J. Khan</h3>
          <p style="
                  text-transform: uppercase;
                  letter-spacing: 0.1em;
                  font-size: 0.8rem;
                  color: #9ca3af;
                  margin-bottom: 1rem;
                ">
            CEO
          </p>
          <p style="
                  font-size: 0.9rem;
                  color: #6b7280;
                  line-height: 1.6;
                ">
            Spearheading strategic growth and international partnerships.
          </p>
        </div>
      </div>
      <!-- Member 4 -->
      <div class="team-card" data-aos="fade-up" data-aos-delay="300">
        <div class="team-image" style="
                height: 350px;
                overflow: hidden;
                margin-bottom: 1.5rem;
                position: relative;
              ">
          <img src="/assets/images/leadership/aleksandra-baranova.jpeg" alt="Aleksandra Baranova"
            style="
                  width: 100%;
                  height: 100%;
                  object-fit: cover;
                  filter: grayscale(100%);
                  transition: all 0.4s ease;
                " />
        </div>
        <div class="team-info" style="text-align: center">
          <h3 style="margin-bottom: 0.5rem; color: #c9a961">
            Aleksandra Baranova
          </h3>
          <p style="
                  text-transform: uppercase;
                  letter-spacing: 0.1em;
                  font-size: 0.8rem;
                  color: #9ca3af;
                  margin-bottom: 1rem;
                ">
            Global Director
          </p>
          <p style="
                  font-size: 0.9rem;
                  color: #6b7280;
                  line-height: 1.6;
                ">
            Expanding IFFC's global footprint and director initiatives.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- History / Timeline -->
<section id="history" class="timeline-section">
  <div class="container">
    <h2 class="section-title" data-aos="fade-up">History</h2>
    <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
      A Legacy of Global Fashion Excellence
    </p>

    <div class="timeline" data-aos="fade-up" data-aos-delay="200">
      <!-- Item 1 -->
      <div class="timeline-item timeline-left">
        <div class="timeline-content">
          <span class="timeline-year">2024</span>
          <h3 class="timeline-title">Brampton Fashion Festival</h3>
          <p class="timeline-location">City Hall, Brampton</p>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="timeline-item timeline-right">
        <div class="timeline-content">
          <span class="timeline-year">2023</span>
          <h3 class="timeline-title">International Fashion Festival</h3>
          <p class="timeline-location">Riga, Latvia</p>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="timeline-item timeline-left">
        <div class="timeline-content">
          <span class="timeline-year">2023</span>
          <h3 class="timeline-title">International Fashion Festival Canada</h3>
          <p class="timeline-location">Canada</p>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="timeline-item timeline-right">
        <div class="timeline-content">
          <span class="timeline-year">2022</span>
          <h3 class="timeline-title">Fashion Festival Canada</h3>
          <p class="timeline-location">Toronto</p>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="timeline-item timeline-left">
        <div class="timeline-content">
          <span class="timeline-year">2022</span>
          <h3 class="timeline-title">International Fashion Festival</h3>
          <p class="timeline-location">Cannes, France</p>
        </div>
      </div>

      <!-- Item 6 -->
      <div class="timeline-item timeline-right">
        <div class="timeline-content">
          <span class="timeline-year">2022</span>
          <h3 class="timeline-title">International Fashion Festival Pakistan</h3>
          <p class="timeline-location">Islamabad</p>
        </div>
      </div>

      <!-- Item 7 -->
      <div class="timeline-item timeline-left">
        <div class="timeline-content">
          <span class="timeline-year">2020</span>
          <h3 class="timeline-title">International Fashion Festival</h3>
          <p class="timeline-location">Islamabad, Pakistan</p>
        </div>
      </div>

      <!-- Item 8 -->
      <div class="timeline-item timeline-right">
        <div class="timeline-content">
          <span class="timeline-year">2011 - 2019</span>
          <h3 class="timeline-title">International Fashion Festival</h3>
          <p class="timeline-location">Toronto, Canada</p>
        </div>
      </div>

      <!-- Item 9 -->
      <div class="timeline-item timeline-left">
        <div class="timeline-content">
          <span class="timeline-year">2017</span>
          <h3 class="timeline-title">PCBC Business Expo</h3>
          <p class="timeline-location">Montreal, Canada</p>
        </div>
      </div>

      <!-- Item 10 -->
      <div class="timeline-item timeline-right">
        <div class="timeline-content">
          <span class="timeline-year">2015</span>
          <h3 class="timeline-title">Pakistan Fashion Festival USA</h3>
          <p class="timeline-location">Dallas, TX</p>
        </div>
      </div>

      <!-- Item 11 -->
      <div class="timeline-item timeline-left">
        <div class="timeline-content">
          <span class="timeline-year">2009 - 2010</span>
          <h3 class="timeline-title">Dubai Fashion Week</h3>
          <p class="timeline-location">Dubai</p>
        </div>
      </div>

      <!-- Item 12 -->
      <div class="timeline-item timeline-right">
        <div class="timeline-content">
          <span class="timeline-year">2009</span>
          <h3 class="timeline-title">Bride & Groom Exhibition</h3>
          <p class="timeline-location">Delhi, India</p>
        </div>
      </div>

      <!-- Item 13 -->
      <div class="timeline-item timeline-left">
        <div class="timeline-content">
          <span class="timeline-year">2010 - 2011</span>
          <h3 class="timeline-title">Bridal Couture Week</h3>
          <p class="timeline-location">Pakistan</p>
        </div>
      </div>

      <!-- Item 14 -->
      <div class="timeline-item timeline-right">
        <div class="timeline-content">
          <span class="timeline-year">2004 - 2006</span>
          <h3 class="timeline-title">International Fashion Festival Pakistan</h3>
          <p class="timeline-location">Lahore</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Vision / Philosophy Section (Premium Addition) -->
<section id="vision" class="vision-section" style="background-image: url('assets/images/runway-shots/shot-2.png');">
  <div class="vision-overlay"></div>
  <div class="vision-content" data-aos="fade-up">
    <div class="vision-icon">
      <i class="fas fa-quote-left"></i>
    </div>
    <h2 class="vision-quote">
      "We don't just showcase fashion. We curate legacies that transcend borders and time."
    </h2>
    <span class="vision-author">The IFFC Vision</span>
  </div>
</section>

<!-- Bento Grid Gallery -->
<section id="gallery-bento" class="bento-section">
  <div class="container">
    <h2 class="section-title" data-aos="fade-up">Moments in Time</h2>
    <div class="bento-grid">
      <!-- Large Item (2x2) -->
      <div class="bento-item bento-large" data-aos="zoom-in">
        <img src="assets/images/about/cultural-fusion.png" alt="Cultural Fusion">
      </div>

      <!-- Standard Item -->
      <div class="bento-item" data-aos="fade-up" data-aos-delay="100">
        <img src="assets/images/runway-shots/shot-4.png" alt="Runway">
      </div>

      <!-- Standard Item -->
      <div class="bento-item" data-aos="fade-up" data-aos-delay="200">
        <img src="assets/images/backstage-moments/backstage-1.png" alt="Backstage">
      </div>

      <!-- Wide Item (2x1) -->
      <div class="bento-item bento-wide" data-aos="fade-up" data-aos-delay="300">
        <img src="assets/images/runway-shots/shot-2.png" alt="Runway Wide">
      </div>

      <!-- Tall Item (1x2) -->
      <div class="bento-item bento-tall" data-aos="fade-up" data-aos-delay="400">
        <img src="assets/images/runway-shots/shot-11.png" alt="Runway Tall">
      </div>

      <!-- Standard Item -->
      <div class="bento-item" data-aos="fade-up" data-aos-delay="500">
        <img src="assets/images/backstage-moments/backstage-3.jpeg" alt="Backstage">
      </div>

      <!-- Standard Item -->
      <div class="bento-item" data-aos="fade-up" data-aos-delay="600">
        <img src="assets/images/runway-shots/shot-7.png" alt="Runway">
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>