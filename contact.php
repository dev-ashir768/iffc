<?php
$page_title = 'Contact Us - IFFC';
$page_desc = 'Get in touch with IFFC - International Fashion Festival Canada. Connect with our team for inquiries, partnerships, and support.';
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero page-hero" style="
    min-height: 60vh;
    padding-top: 100px;
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8)),
      url('assets/images/backstage-moments/backstage-3.jpeg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
  ">
  <div class="hero-content">
    <h1 class="hero-title" data-aos="fade-up" style="font-size: clamp(3rem, 8vw, 6rem)">
      CONTACT US
    </h1>
    <h2 class="hero-subtitle" data-aos="fade-up" data-aos-delay="200" style="font-size: clamp(1.2rem, 3vw, 2rem)">
      Let's Create Something Extraordinary
    </h2>
    <p class="hero-description" data-aos="fade-up" data-aos-delay="400" style="max-width: 700px;">
      We're here to answer your questions and help you become part of the IFFC experience
    </p>
  </div>
</section>

<!-- Quick Contact Cards -->
<section class="section" style="padding: 4rem 0; background: rgba(255, 255, 255, 0.02);">
  <div class="container">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
      
      <!-- Email -->
      <div class="contact-quick-card" data-aos="fade-up">
        <div class="contact-icon">
          <i class="fas fa-envelope"></i>
        </div>
        <h3>Email Us</h3>
        <p>info@iffc.ca</p>
        <a href="mailto:info@iffc.ca" class="contact-link">Send Email <i class="fas fa-arrow-right"></i></a>
      </div>

      <!-- Phone -->
      <div class="contact-quick-card" data-aos="fade-up" data-aos-delay="100">
        <div class="contact-icon">
          <i class="fas fa-phone-alt"></i>
        </div>
        <h3>Call Us</h3>
        <p>+1 (416) 000-0000</p>
        <a href="tel:+14160000000" class="contact-link">Call Now <i class="fas fa-arrow-right"></i></a>
      </div>

      <!-- WhatsApp -->
      <div class="contact-quick-card" data-aos="fade-up" data-aos-delay="200">
        <div class="contact-icon">
          <i class="fab fa-whatsapp"></i>
        </div>
        <h3>WhatsApp</h3>
        <p>Quick Response</p>
        <a href="https://wa.me/14160000000" target="_blank" class="contact-link">Message Us <i class="fas fa-arrow-right"></i></a>
      </div>

      <!-- Location -->
      <div class="contact-quick-card" data-aos="fade-up" data-aos-delay="300">
        <div class="contact-icon">
          <i class="fas fa-map-marker-alt"></i>
        </div>
        <h3>Visit Us</h3>
        <p>Toronto, Ontario, Canada</p>
        <a href="#map" class="contact-link">View Map <i class="fas fa-arrow-right"></i></a>
      </div>

    </div>
  </div>
</section>

<!-- Main Contact Section -->
<section class="section">
  <div class="container">
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: start;">
      
      <!-- Contact Form -->
      <div data-aos="fade-right">
        <div style="margin-bottom: 2rem;">
          <span class="event-badge">GET IN TOUCH</span>
          <h2 style="font-size: 2.5rem; margin-top: 1rem; margin-bottom: 1rem; color: white;">Send us a Message</h2>
          <p style="color: #9ca3af; line-height: 1.7;">
            Fill out the form below and we'll get back to you within 24 hours.
          </p>
        </div>

        <form id="contactForm" class="contact-form">
          <div class="form-row">
            <div class="form-group">
              <label>First Name *</label>
              <input type="text" required placeholder="John">
            </div>
            <div class="form-group">
              <label>Last Name *</label>
              <input type="text" required placeholder="Doe">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label>Email Address *</label>
              <input type="email" required placeholder="john@example.com">
            </div>
            <div class="form-group">
              <label>Phone Number</label>
              <input type="tel" placeholder="+1 (555) 000-0000">
            </div>
          </div>

          <div class="form-group">
            <label>Subject *</label>
            <select required>
              <option value="">Select a topic</option>
              <option value="general">General Inquiry</option>
              <option value="designer">Designer Application</option>
              <option value="model">Model Casting</option>
              <option value="exhibitor">Exhibitor Registration</option>
              <option value="sponsor">Sponsorship Opportunity</option>
              <option value="media">Media Accreditation</option>
              <option value="volunteer">Volunteer Program</option>
              <option value="tickets">Ticket Purchase</option>
              <option value="other">Other</option>
            </select>
          </div>

          <div class="form-group">
            <label>Message *</label>
            <textarea rows="6" required placeholder="Tell us how we can help you..."></textarea>
          </div>

          <button type="submit" class="btn btn-primary" style="width: 100%; padding: 1.25rem;">
            Send Message
            <i class="fas fa-paper-plane" style="margin-left: 0.5rem;"></i>
          </button>
        </form>
      </div>

      <!-- Contact Info & Social -->
      <div data-aos="fade-left">
        
        <!-- Office Info -->
        <div class="contact-info-box">
          <h3>Office Information</h3>
          <div class="info-item">
            <i class="fas fa-map-marker-alt"></i>
            <div>
              <strong>Address</strong>
              <p>123 Fashion Avenue<br>Toronto, ON M5H 2N2<br>Canada</p>
            </div>
          </div>
          <div class="info-item">
            <i class="fas fa-clock"></i>
            <div>
              <strong>Office Hours</strong>
              <p>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM<br>Sunday: Closed</p>
            </div>
          </div>
          <div class="info-item">
            <i class="fas fa-envelope"></i>
            <div>
              <strong>Email</strong>
              <p>General: info@iffc.ca<br>Press: media@iffc.ca<br>Sponsors: sponsors@iffc.ca</p>
            </div>
          </div>
        </div>

        <!-- Social Media -->
        <div class="contact-info-box" style="margin-top: 2rem;">
          <h3>Follow Us</h3>
          <p style="color: #9ca3af; margin-bottom: 1.5rem;">Stay connected and get the latest updates</p>
          <div class="social-icons" style="gap: 1rem; justify-content: flex-start;">
            <a href="https://facebook.com/iffc" target="_blank" class="social-icon" style="width: 50px; height: 50px; font-size: 1.5rem;">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://instagram.com/iffc" target="_blank" class="social-icon" style="width: 50px; height: 50px; font-size: 1.5rem;">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="https://twitter.com/iffc" target="_blank" class="social-icon" style="width: 50px; height: 50px; font-size: 1.5rem;">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="https://youtube.com/iffc" target="_blank" class="social-icon" style="width: 50px; height: 50px; font-size: 1.5rem;">
              <i class="fab fa-youtube"></i>
            </a>
            <a href="https://linkedin.com/company/iffc" target="_blank" class="social-icon" style="width: 50px; height: 50px; font-size: 1.5rem;">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Map Section -->
<section id="map" class="section" style="padding: 0; background: rgba(255, 255, 255, 0.02);">
  <div style="position: relative; width: 100%; height: 500px; background: rgba(10, 21, 20, 0.5);">
    <!-- Google Maps Embed -->
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d184551.90977207488!2d-79.51814179726564!3d43.71837099415425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb90d7c63ba5%3A0x323555502ab4c477!2sToronto%2C%20ON%2C%20Canada!5e0!3m2!1sen!2s!4v1234567890123!5m2!1sen!2s" 
      width="100%" 
      height="500" 
      style="border:0; filter: grayscale(100%) invert(92%) contrast(83%);" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    
    <!-- Map Overlay Card -->
    <div style="position: absolute; bottom: 2rem; left: 2rem; background: rgba(10, 21, 20, 0.95); backdrop-filter: blur(10px); padding: 2rem; border-radius: 12px; border: 1px solid rgba(201, 169, 97, 0.3); max-width: 400px;">
      <h3 style="font-size: 1.5rem; margin-bottom: 1rem; color: white;">Visit Our Office</h3>
      <p style="color: #9ca3af; margin-bottom: 1rem; line-height: 1.6;">
        123 Fashion Avenue<br>
        Toronto, ON M5H 2N2<br>
        Canada
      </p>
      <a href="https://maps.google.com/?q=Toronto+ON+Canada" target="_blank" class="btn btn-outline" style="padding: 0.75rem 1.5rem;">
        <i class="fas fa-directions" style="margin-right: 0.5rem;"></i>
        Get Directions
      </a>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="section">
  <div class="container">
    <div style="text-align: center; margin-bottom: 4rem;">
      <span class="event-badge" data-aos="fade-up">FAQ</span>
      <h2 class="section-title" data-aos="fade-up" data-aos-delay="100">
        Frequently Asked Questions
      </h2>
      <p class="section-subtitle" data-aos="fade-up" data-aos-delay="200">
        Find quick answers to common questions
      </p>
    </div>

    <div style="max-width: 900px; margin: 0 auto;">
      
      <!-- FAQ Item 1 -->
      <div class="faq-item" data-aos="fade-up">
        <div class="faq-question">
          <h4>How can I participate in IFFC as a designer?</h4>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          <p>Visit our Participate page and fill out the designer application form. You can also download our guidelines PDF and contact us via WhatsApp for immediate assistance.</p>
        </div>
      </div>

      <!-- FAQ Item 2 -->
      <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
        <div class="faq-question">
          <h4>Where can I buy tickets for upcoming events?</h4>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          <p>Tickets are available on our Tickets/Registration page. We offer various categories including General Admission, VIP, Front Row, and Table packages with early bird pricing.</p>
        </div>
      </div>

      <!-- FAQ Item 3 -->
      <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
        <div class="faq-question">
          <h4>How do I become a sponsor?</h4>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          <p>Check our Sponsors page for detailed packages (Platinum, Gold, Silver, Associate). Download our sponsor deck or request a call with our partnerships team to discuss custom opportunities.</p>
        </div>
      </div>

      <!-- FAQ Item 4 -->
      <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
        <div class="faq-question">
          <h4>Do you offer media accreditation?</h4>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          <p>Yes! Media professionals can apply through our Media section under Participate. We provide press access, media pit details, and coverage guidelines for download.</p>
        </div>
      </div>

      <!-- FAQ Item 5 -->
      <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
        <div class="faq-question">
          <h4>What is your refund policy?</h4>
          <i class="fas fa-chevron-down"></i>
        </div>
        <div class="faq-answer">
          <p>Refund policies vary by ticket type and purchase date. Please refer to our Tickets page FAQ section for detailed information on refunds, exchanges, and cancellations.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="section cta-section">
  <div class="container">
    <div class="cta-content" data-aos="zoom-in">
      <h2 class="section-title">Can't Find What You're Looking For?</h2>
      <p class="section-subtitle">
        Our team is here to help. Reach out and we'll get back to you promptly.
      </p>
      <div class="hero-ctas" style="margin-top: 2rem;">
        <a href="mailto:info@iffc.ca" class="btn btn-primary">Email Us</a>
        <a href="https://wa.me/14160000000" target="_blank" class="btn btn-outline">WhatsApp</a>
        <a href="tel:+14160000000" class="btn btn-secondary">Call Now</a>
      </div>
    </div>
  </div>
</section>

<style>
/* Mobile responsive for contact page */
@media (max-width: 768px) {
  .container > div[style*="grid-template-columns: 1fr 1fr"] {
    grid-template-columns: 1fr !important;
    gap: 2rem !important;
  }
  
  .form-row {
    flex-direction: column !important;
  }
}
</style>

<?php include 'includes/footer.php'; ?>