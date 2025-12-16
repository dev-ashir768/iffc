<?php
$page_title = 'Tickets & Registration - IFFC';
$page_desc = 'Purchase tickets for IFFC events - Choose from General Admission, VIP, Front Row, and Table packages.';
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero page-hero" style="
    min-height: 70vh;
    padding-top: 100px;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8)),
      url('assets/images/runway-shots/shot-5.png');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
  ">
  <div class="hero-content">
    <h1 class="hero-title" data-aos="fade-up" style="font-size: clamp(2.5rem, 8vw, 6rem)">
      TICKETS
    </h1>
    <h2 class="hero-subtitle" data-aos="fade-up" data-aos-delay="200" style="font-size: clamp(1.2rem, 3vw, 2rem)">
      Secure Your Seat at the Runway
    </h2>
    <p class="hero-description" data-aos="fade-up" data-aos-delay="400" style="max-width: 700px;">
      Experience world-class fashion, culture, and creativity
    </p>
  </div>
</section>

<!-- Quick Event Selector -->
<section class="section" style="padding: 3rem 0; background: rgba(201, 169, 97, 0.05);">
  <div class="container">
    <div style="text-align: center;">
      <h3 style="font-size: 1.5rem; margin-bottom: 1.5rem; color: white;">Select Event</h3>
      <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;" data-aos="fade-up">
        <button class="event-selector-btn active" data-event="toronto">
          <i class="fas fa-calendar-alt"></i>
          Toronto Fashion Week
          <span>May 4, 2025</span>
        </button>
        <button class="event-selector-btn" data-event="brampton">
          <i class="fas fa-calendar-alt"></i>
          Brampton Festival
          <span>Dec 27, 2025</span>
        </button>
        <button class="event-selector-btn" data-event="vancouver">
          <i class="fas fa-calendar-alt"></i>
          Vancouver Couture
          <span>Dec 10, 2025</span>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Early Bird Notice -->
<section class="section" style="padding: 2rem 0;">
  <div class="container">
    <div class="early-bird-banner" data-aos="fade-up">
      <div class="early-bird-icon">
        <i class="fas fa-bolt"></i>
      </div>
      <div>
        <h3>Early Bird Special - Save 20%!</h3>
        <p>Book now and get exclusive early bird pricing. Limited time offer ends March 31, 2025.</p>
      </div>
      <div class="countdown-timer">
        <div class="timer-box">
          <span class="timer-value" id="days">45</span>
          <span class="timer-label">Days</span>
        </div>
        <div class="timer-box">
          <span class="timer-value" id="hours">12</span>
          <span class="timer-label">Hours</span>
        </div>
        <div class="timer-box">
          <span class="timer-value" id="mins">34</span>
          <span class="timer-label">Mins</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Ticket Categories -->
<section id="tickets" class="section">
  <div class="container">
    <div style="text-align: center; margin-bottom: 4rem;">
      <span class="event-badge" data-aos="fade-up">CHOOSE YOUR EXPERIENCE</span>
      <h2 class="section-title" data-aos="fade-up" data-aos-delay="100">
        Ticket Categories
      </h2>
      <p class="section-subtitle" data-aos="fade-up" data-aos-delay="200">
        Select the perfect package for your fashion experience
      </p>
    </div>

    <!-- Ticket Cards Grid -->
    <div class="ticket-grid">
      
      <!-- VIP Front Row -->
      <div class="ticket-card ticket-featured" data-aos="fade-up">
        <div class="ticket-badge">BEST VALUE</div>
        <div class="ticket-header">
          <div class="ticket-icon">
            <i class="fas fa-crown"></i>
          </div>
          <h3>VIP Front Row</h3>
          <p class="ticket-description">The ultimate fashion experience</p>
        </div>
        
        <div class="ticket-price">
          <span class="price-amount">$299</span>
          <span class="price-original">$375</span>
          <span class="price-label">per person</span>
        </div>

        <div class="ticket-features">
          <ul>
            <li><i class="fas fa-check"></i> Front row seating</li>
            <li><i class="fas fa-check"></i> VIP lounge access</li>
            <li><i class="fas fa-check"></i> Complimentary drinks</li>
            <li><i class="fas fa-check"></i> Red carpet entry</li>
            <li><i class="fas fa-check"></i> Designer meet & greet</li>
            <li><i class="fas fa-check"></i> Exclusive gift bag</li>
            <li><i class="fas fa-check"></i> Event program</li>
            <li><i class="fas fa-check"></i> Professional photos</li>
          </ul>
        </div>

        <button class="btn btn-primary ticket-btn">
          Select VIP Front Row
        </button>
      </div>

      <!-- VIP General -->
      <div class="ticket-card" data-aos="fade-up" data-aos-delay="100">
        <div class="ticket-header">
          <div class="ticket-icon">
            <i class="fas fa-star"></i>
          </div>
          <h3>VIP General</h3>
          <p class="ticket-description">Premium viewing experience</p>
        </div>
        
        <div class="ticket-price">
          <span class="price-amount">$199</span>
          <span class="price-original">$249</span>
          <span class="price-label">per person</span>
        </div>

        <div class="ticket-features">
          <ul>
            <li><i class="fas fa-check"></i> Reserved seating</li>
            <li><i class="fas fa-check"></i> VIP lounge access</li>
            <li><i class="fas fa-check"></i> Complimentary drinks</li>
            <li><i class="fas fa-check"></i> Priority entry</li>
            <li><i class="fas fa-check"></i> Event program</li>
            <li><i class="fas fa-check"></i> Gift bag</li>
          </ul>
        </div>

        <button class="btn btn-outline ticket-btn">
          Select VIP General
        </button>
      </div>

      <!-- General Admission -->
      <div class="ticket-card" data-aos="fade-up" data-aos-delay="200">
        <div class="ticket-header">
          <div class="ticket-icon">
            <i class="fas fa-ticket-alt"></i>
          </div>
          <h3>General Admission</h3>
          <p class="ticket-description">Experience the show</p>
        </div>
        
        <div class="ticket-price">
          <span class="price-amount">$99</span>
          <span class="price-original">$125</span>
          <span class="price-label">per person</span>
        </div>

        <div class="ticket-features">
          <ul>
            <li><i class="fas fa-check"></i> General seating</li>
            <li><i class="fas fa-check"></i> Event access</li>
            <li><i class="fas fa-check"></i> Event program</li>
            <li><i class="fas fa-check"></i> Cash bar available</li>
          </ul>
        </div>

        <button class="btn btn-secondary ticket-btn">
          Select General Admission
        </button>
      </div>

      <!-- VIP Table -->
      <div class="ticket-card ticket-wide" data-aos="fade-up" data-aos-delay="300">
        <div class="ticket-badge">EXCLUSIVE</div>
        <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 2rem; align-items: start;">
          <div>
            <div class="ticket-header">
              <div class="ticket-icon">
                <i class="fas fa-users"></i>
              </div>
              <h3>VIP Table (10 Guests)</h3>
              <p class="ticket-description">Perfect for groups & corporate</p>
            </div>
            
            <div class="ticket-price">
              <span class="price-amount">$2,499</span>
              <span class="price-original">$3,125</span>
              <span class="price-label">for 10 people</span>
            </div>

            <button class="btn btn-primary ticket-btn">
              Book VIP Table
            </button>
          </div>

          <div class="ticket-features">
            <ul style="columns: 2; column-gap: 2rem;">
              <li><i class="fas fa-check"></i> Reserved table for 10</li>
              <li><i class="fas fa-check"></i> Front section placement</li>
              <li><i class="fas fa-check"></i> Bottle service</li>
              <li><i class="fas fa-check"></i> Dedicated server</li>
              <li><i class="fas fa-check"></i> VIP lounge access</li>
              <li><i class="fas fa-check"></i> Red carpet photos</li>
              <li><i class="fas fa-check"></i> Designer meet & greet</li>
              <li><i class="fas fa-check"></i> Premium gift bags</li>
              <li><i class="fas fa-check"></i> Event programs</li>
              <li><i class="fas fa-check"></i> Priority parking</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Seating Map -->
<section class="section" style="background: rgba(255, 255, 255, 0.02);">
  <div class="container">
    <div style="text-align: center; margin-bottom: 3rem;">
      <h2 class="section-title" data-aos="fade-up">Venue Seating Map</h2>
      <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
        Choose your preferred section
      </p>
    </div>

    <div class="seating-map-container" data-aos="fade-up" data-aos-delay="200">
      <!-- Stage -->
      <div class="seating-stage">
        <i class="fas fa-theater-masks"></i>
        <span>RUNWAY / STAGE</span>
      </div>

      <!-- Seating Sections -->
      <div class="seating-layout">
        <!-- Front Row VIP -->
        <div class="seating-section front-row">
          <div class="section-label">VIP Front Row</div>
          <div class="seats">
            <span class="seat available"></span>
            <span class="seat available"></span>
            <span class="seat sold"></span>
            <span class="seat available"></span>
            <span class="seat available"></span>
            <span class="seat sold"></span>
            <span class="seat available"></span>
            <span class="seat available"></span>
          </div>
        </div>

        <!-- VIP Tables -->
        <div class="seating-section vip-tables">
          <div class="section-label">VIP Tables</div>
          <div class="tables">
            <div class="table available">
              <i class="fas fa-circle"></i>
              <span>Table 1</span>
            </div>
            <div class="table sold">
              <i class="fas fa-circle"></i>
              <span>Table 2</span>
            </div>
            <div class="table available">
              <i class="fas fa-circle"></i>
              <span>Table 3</span>
            </div>
            <div class="table available">
              <i class="fas fa-circle"></i>
              <span>Table 4</span>
            </div>
          </div>
        </div>

        <!-- VIP General -->
        <div class="seating-section vip-general">
          <div class="section-label">VIP General</div>
          <div class="seats-rows">
            <div class="seat-row">
              <span class="seat available"></span>
              <span class="seat available"></span>
              <span class="seat sold"></span>
              <span class="seat available"></span>
              <span class="seat available"></span>
              <span class="seat available"></span>
            </div>
            <div class="seat-row">
              <span class="seat available"></span>
              <span class="seat sold"></span>
              <span class="seat available"></span>
              <span class="seat available"></span>
              <span class="seat sold"></span>
              <span class="seat available"></span>
            </div>
          </div>
        </div>

        <!-- General Admission -->
        <div class="seating-section general">
          <div class="section-label">General Admission</div>
          <div class="seats-rows">
            <div class="seat-row">
              <span class="seat available"></span>
              <span class="seat available"></span>
              <span class="seat available"></span>
              <span class="seat available"></span>
              <span class="seat available"></span>
              <span class="seat available"></span>
              <span class="seat available"></span>
              <span class="seat available"></span>
            </div>
            <div class="seat-row">
              <span class="seat available"></span>
              <span class="seat available"></span>
              <span class="seat available"></span>
              <span class="seat available"></span>
              <span class="seat available"></span>
              <span class="seat available"></span>
              <span class="seat available"></span>
              <span class="seat available"></span>
            </div>
            <div class="seat-row">
              <span class="seat available"></span>
              <span class="seat available"></span>
              <span class="seat available"></span>
              <span class="seat available"></span>
              <span class="seat available"></span>
              <span class="seat available"></span>
              <span class="seat available"></span>
              <span class="seat available"></span>
            </div>
          </div>
        </div>
      </div>

      <!-- Legend -->
      <div class="seating-legend">
        <div class="legend-item">
          <span class="seat available"></span>
          <span>Available</span>
        </div>
        <div class="legend-item">
          <span class="seat sold"></span>
          <span>Sold</span>
        </div>
        <div class="legend-item">
          <span class="seat selected"></span>
          <span>Selected</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="section">
  <div class="container">
    <div style="text-align: center; margin-bottom: 4rem;">
      <h2 class="section-title" data-aos="fade-up">Frequently Asked Questions</h2>
    </div>

    <div style="max-width: 900px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
      
      <!-- FAQ Card 1 -->
      <div class="faq-card" data-aos="fade-up">
        <div class="faq-card-icon">
          <i class="fas fa-tshirt"></i>
        </div>
        <h4>Dress Code</h4>
        <p>Semi-formal to cocktail attire. We encourage fashionable and elegant outfits. Business casual is acceptable for general admission.</p>
      </div>

      <!-- FAQ Card 2 -->
      <div class="faq-card" data-aos="fade-up" data-aos-delay="100">
        <div class="faq-card-icon">
          <i class="fas fa-map-marker-alt"></i>
        </div>
        <h4>Venue</h4>
        <p>Toronto Convention Centre, 255 Front St W, Toronto, ON. The venue is accessible via TTC and has wheelchair access.</p>
      </div>

      <!-- FAQ Card 3 -->
      <div class="faq-card" data-aos="fade-up" data-aos-delay="200">
        <div class="faq-card-icon">
          <i class="fas fa-clock"></i>
        </div>
        <h4>Timings</h4>
        <p>Doors open at 6:00 PM. Show starts at 7:30 PM sharp. VIP guests can arrive from 5:30 PM for lounge access.</p>
      </div>

      <!-- FAQ Card 4 -->
      <div class="faq-card" data-aos="fade-up" data-aos-delay="300">
        <div class="faq-card-icon">
          <i class="fas fa-parking"></i>
        </div>
        <h4>Parking</h4>
        <p>Parking available at the venue ($20). VIP table guests receive complimentary valet parking. Public transit recommended.</p>
      </div>

      <!-- FAQ Card 5 -->
      <div class="faq-card" data-aos="fade-up" data-aos-delay="400">
        <div class="faq-card-icon">
          <i class="fas fa-undo"></i>
        </div>
        <h4>Refund Policy</h4>
        <p>Full refund if cancelled 14+ days before event. 50% refund for 7-14 days. No refunds within 7 days. Tickets are transferable.</p>
      </div>

      <!-- FAQ Card 6 -->
      <div class="faq-card" data-aos="fade-up" data-aos-delay="500">
        <div class="faq-card-icon">
          <i class="fas fa-mobile-alt"></i>
        </div>
        <h4>Mobile Tickets</h4>
        <p>E-tickets will be sent via email. Present QR code at entrance. Screenshots accepted. Physical tickets available upon request.</p>
      </div>

    </div>
  </div>
</section>

<!-- Secure Payment Notice -->
<section class="section" style="background: rgba(255, 255, 255, 0.02); padding: 3rem 0;">
  <div class="container">
    <div class="payment-security-box" data-aos="fade-up">
      <div class="security-badges">
        <div class="security-badge">
          <i class="fas fa-lock"></i>
          <span>SSL Secured</span>
        </div>
        <div class="security-badge">
          <i class="fab fa-cc-visa"></i>
          <span>Visa</span>
        </div>
        <div class="security-badge">
          <i class="fab fa-cc-mastercard"></i>
          <span>Mastercard</span>
        </div>
        <div class="security-badge">
          <i class="fab fa-cc-amex"></i>
          <span>Amex</span>
        </div>
        <div class="security-badge">
          <i class="fab fa-cc-paypal"></i>
          <span>PayPal</span>
        </div>
      </div>
      <p style="text-align: center; color: #9ca3af; margin-top: 1.5rem;">
        All transactions are encrypted and secured. Your payment information is never stored on our servers.
      </p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="section cta-section">
  <div class="container">
    <div class="cta-content" data-aos="zoom-in">
      <h2 class="section-title">Ready to Experience IFFC?</h2>
      <p class="section-subtitle">
        Don't miss out! Tickets are selling fast. Secure your spot today.
      </p>
      <div class="hero-ctas" style="margin-top: 2rem;">
        <button class="btn btn-primary" id="openTicketFormBtn">Buy Tickets Now</button>
        <a href="contact" class="btn btn-outline">Need Help?</a>
      </div>
    </div>
  </div>
</section>

<!-- Ticket Purchase Modal -->
<div class="ticket-modal" id="ticketModal">
  <div class="ticket-modal-overlay"></div>
  <div class="ticket-modal-content">
    <button class="ticket-modal-close" id="closeTicketModal">
      <i class="fas fa-times"></i>
    </button>

    <div class="ticket-modal-header">
      <h2>Purchase Tickets</h2>
      <p>Complete your booking in just a few steps</p>
    </div>

    <form id="ticketPurchaseForm" class="ticket-purchase-form">
      
      <!-- Step 1: Select Ticket -->
      <div class="form-step active" data-step="1">
        <div class="step-header">
          <div class="step-number">1</div>
          <div class="step-text">
            <h3>Select Your Ticket</h3>
            <p>Choose the experience that's right for you</p>
          </div>
        </div>

        <div class="ticket-options-list">
          <label class="ticket-option-item">
            <input type="radio" name="ticketType" value="vip-front" data-price="299" required>
            <div class="ticket-option-card">
              <div class="ticket-option-info">
                <h4>VIP Front Row</h4>
                <p>Front row seating, VIP lounge, meet & greet</p>
              </div>
              <div class="ticket-option-price">$299</div>
            </div>
          </label>

          <label class="ticket-option-item">
            <input type="radio" name="ticketType" value="vip-general" data-price="199">
            <div class="ticket-option-card">
              <div class="ticket-option-info">
                <h4>VIP General</h4>
                <p>Reserved seating, VIP lounge access</p>
              </div>
              <div class="ticket-option-price">$199</div>
            </div>
          </label>

          <label class="ticket-option-item">
            <input type="radio" name="ticketType" value="general" data-price="99">
            <div class="ticket-option-card">
              <div class="ticket-option-info">
                <h4>General Admission</h4>
                <p>General seating, event access</p>
              </div>
              <div class="ticket-option-price">$99</div>
            </div>
          </label>

          <label class="ticket-option-item">
            <input type="radio" name="ticketType" value="vip-table" data-price="2499">
            <div class="ticket-option-card">
              <div class="ticket-option-info">
                <h4>VIP Table (10 Guests)</h4>
                <p>Reserved table, bottle service, full VIP benefits</p>
              </div>
              <div class="ticket-option-price">$2,499</div>
            </div>
          </label>
        </div>

        <div class="ticket-quantity-section">
          <label class="quantity-label">Number of Tickets</label>
          <select name="quantity" id="ticketQuantity" class="quantity-select" required>
            <option value="1">1 Ticket</option>
            <option value="2">2 Tickets</option>
            <option value="3">3 Tickets</option>
            <option value="4">4 Tickets</option>
            <option value="5">5 Tickets</option>
            <option value="6">6 Tickets</option>
            <option value="7">7 Tickets</option>
            <option value="8">8 Tickets</option>
            <option value="9">9 Tickets</option>
            <option value="10">10 Tickets</option>
          </select>
        </div>

        <button type="button" class="modal-btn modal-btn-primary next-step" data-next="2">
          Continue to Personal Info →
        </button>
      </div>

      <!-- Step 2: Personal Information -->
      <div class="form-step" data-step="2">
        <div class="step-header">
          <div class="step-number">2</div>
          <div class="step-text">
            <h3>Personal Information</h3>
            <p>We'll send your tickets to this email</p>
          </div>
        </div>

        <div class="modal-form-grid">
          <div class="modal-form-group">
            <label class="modal-label">First Name *</label>
            <input type="text" name="firstName" class="modal-input" required>
          </div>
          <div class="modal-form-group">
            <label class="modal-label">Last Name *</label>
            <input type="text" name="lastName" class="modal-input" required>
          </div>
        </div>

        <div class="modal-form-grid">
          <div class="modal-form-group">
            <label class="modal-label">Email Address *</label>
            <input type="email" name="email" class="modal-input" required>
          </div>
          <div class="modal-form-group">
            <label class="modal-label">Phone Number *</label>
            <input type="tel" name="phone" class="modal-input" required>
          </div>
        </div>

        <div class="modal-form-group">
          <label class="modal-label">Special Requirements (Optional)</label>
          <textarea name="requirements" rows="3" class="modal-textarea" placeholder="Dietary restrictions, accessibility needs, etc."></textarea>
        </div>

        <div class="modal-btn-group">
          <button type="button" class="modal-btn modal-btn-secondary prev-step" data-prev="1">
            ← Back
          </button>
          <button type="button" class="modal-btn modal-btn-primary next-step" data-next="3">
            Continue to Payment →
          </button>
        </div>
      </div>

      <!-- Step 3: Payment -->
      <div class="form-step" data-step="3">
        <div class="step-header">
          <div class="step-number">3</div>
          <div class="step-text">
            <h3>Payment Details</h3>
            <p>Your information is secure and encrypted</p>
          </div>
        </div>

        <!-- Order Summary -->
        <div class="order-summary-box">
          <h4 class="summary-title">Order Summary</h4>
          <div class="summary-item">
            <span class="summary-label">Ticket Type:</span>
            <span class="summary-value" id="summaryTicketType">-</span>
          </div>
          <div class="summary-item">
            <span class="summary-label">Quantity:</span>
            <span class="summary-value" id="summaryQuantity">-</span>
          </div>
          <div class="summary-item">
            <span class="summary-label">Subtotal:</span>
            <span class="summary-value" id="summarySubtotal">$0</span>
          </div>
          <div class="summary-item">
            <span class="summary-label">Service Fee:</span>
            <span class="summary-value" id="summaryFee">$0</span>
          </div>
          <div class="summary-item summary-total">
            <span class="summary-label">Total:</span>
            <span class="summary-value" id="summaryTotal">$0</span>
          </div>
        </div>

        <div class="modal-form-group">
          <label class="modal-label">Card Number *</label>
          <input type="text" name="cardNumber" class="modal-input" placeholder="1234 5678 9012 3456" maxlength="19" required>
        </div>

        <div class="modal-form-grid">
          <div class="modal-form-group">
            <label class="modal-label">Expiry Date *</label>
            <input type="text" name="expiry" class="modal-input" placeholder="MM/YY" maxlength="5" required>
          </div>
          <div class="modal-form-group">
            <label class="modal-label">CVV *</label>
            <input type="text" name="cvv" class="modal-input" placeholder="123" maxlength="4" required>
          </div>
        </div>

        <div class="modal-form-group modal-checkbox-group">
          <label class="modal-checkbox-label">
            <input type="checkbox" name="terms" required>
            <span>I agree to the <a href="#terms" class="modal-link">Terms & Conditions</a> and <a href="#privacy" class="modal-link">Privacy Policy</a></span>
          </label>
        </div>

        <div class="security-notice">
          <i class="fas fa-lock"></i>
          <span>Your payment is secured with 256-bit SSL encryption</span>
        </div>

        <div class="modal-btn-group">
          <button type="button" class="modal-btn modal-btn-secondary prev-step" data-prev="2">
            ← Back
          </button>
          <button type="submit" class="modal-btn modal-btn-primary">
            <i class="fas fa-check-circle"></i>
            Complete Purchase
          </button>
        </div>
      </div>

    </form>

    <!-- Success Message (Hidden by default) -->
    <div class="success-screen" id="successMessage">
      <div class="success-icon-large">
        <i class="fas fa-check-circle"></i>
      </div>
      <h2 class="success-title">Tickets Purchased Successfully!</h2>
      <p class="success-text">Your tickets have been sent to your email address.</p>
      <p class="success-text">Check your inbox for your e-tickets and event details.</p>
      <button class="modal-btn modal-btn-primary" id="closeSuccessBtn">Close</button>
    </div>

  </div>
</div>

<?php include 'includes/footer.php'; ?>