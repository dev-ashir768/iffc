    <!-- Footer - Minimal & Attractive -->
    <footer class="footer-minimal">
      <div class="container">
        <div class="social-dock">
          <a
            href="https://www.facebook.com/IFFSHOWS/"
            target="_blank"
            class="social-link"
            aria-label="Facebook"
          >
            <i class="fab fa-facebook-f"></i>
          </a>
          <a
            href="https://instagram.com/iffc"
            target="_blank"
            class="social-link"
            aria-label="Instagram"
          >
            <i class="fab fa-instagram"></i>
          </a>
          <a
            href="https://linkedin.com/company/iffc"
            target="_blank"
            class="social-link"
            aria-label="LinkedIn"
          >
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a
            href="https://www.youtube.com/@IFFCSHOW"
            target="_blank"
            class="social-link"
            aria-label="YouTube"
          >
            <i class="fab fa-youtube"></i>
          </a>
        </div>
        <p class="copyright-text">© 2025 IFFC</p>
      </div>
    </footer>

    <!-- Custom JavaScript -->
    <script src="assets/js/script.js"></script>

    <!-- Floating Ticket Banner -->
    <div class="floating-banner" id="ticketBanner">
      <button class="banner-close" onclick="closeBanner()">&times;</button>
      <div class="banner-content">
        <img
          src="https://images.unsplash.com/photo-1492707892479-7bc8d5a4ee93?w=1200&h=800&fit=crop&q=80"
          alt="IFFC Event"
          class="banner-image"
        />
        <div class="banner-text">
          <h3>Get Your Tickets Now!</h3>
          <p>Don't miss the biggest fashion event of the year</p>
          <a href="#tickets" class="btn btn-secondary" onclick="closeBanner()"
            >Buy Tickets</a
          >
        </div>
      </div>
    </div>
    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const navMenu = document.querySelector('.nav-menu');
        const dropdowns = document.querySelectorAll('.dropdown');

        if(menuToggle && navMenu) {
            menuToggle.addEventListener('click', () => {
              menuToggle.classList.toggle('active');
              navMenu.classList.toggle('active');
            });
        }

        if(dropdowns) {
            dropdowns.forEach(dropdown => {
              dropdown.addEventListener('click', (e) => {
                if (window.innerWidth <= 1024) {
                  dropdowns.forEach(d => {
                      if (d !== dropdown) d.classList.remove('mobile-active');
                  });
                  dropdown.classList.toggle('mobile-active');
                  
                  if (dropdown.querySelector('.dropdown-menu')) {
                  }
                }
              });
            });
        }
    </script>
  </body>
</html>
