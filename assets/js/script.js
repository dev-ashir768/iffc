/* ===================================
   IFFC - JavaScript Interactions
   =================================== */

(function ($) {
  "use strict";

  // Wait for DOM to be ready
  $(document).ready(function () {
    // ===================================
    // Navigation
    // ===================================

    // Navbar scroll effect
    $(window).on("scroll", function () {
      if ($(window).scrollTop() > 50) {
        $(".navbar").addClass("scrolled");
      } else {
        $(".navbar").removeClass("scrolled");
      }
    });

    // Mobile menu toggle
    $(".menu-toggle").on("click", function () {
      $(this).toggleClass("active");
      $(".nav-menu").toggleClass("active");
      $("body").toggleClass("menu-open");
    });

    // Close mobile menu when clicking a non-dropdown link
    $(".nav-menu a").on("click", function (e) {
      // Don't close if it's a dropdown parent
      if (!$(this).parent().hasClass("dropdown")) {
        $(".menu-toggle").removeClass("active");
        $(".nav-menu").removeClass("active");
        $("body").removeClass("menu-open");
      }
    });

    // Close mobile menu when clicking outside
    $(document).on("click", function (e) {
      if (!$(e.target).closest(".navbar").length) {
        $(".menu-toggle").removeClass("active");
        $(".nav-menu").removeClass("active");
        $("body").removeClass("menu-open");
      }
    });

    // ===================================
    // Smooth Scrolling
    // ===================================

    $('a[href^="#"]').on("click", function (e) {
      e.preventDefault();
      var target = $(this.getAttribute("href"));

      if (target.length) {
        $("html, body")
          .stop()
          .animate(
            {
              scrollTop: target.offset().top - 80,
            },
            1000,
            "swing"
          );
      }
    });

    // Scroll indicator click
    $(".scroll-indicator").on("click", function () {
      $("html, body").animate(
        {
          scrollTop: $(window).height(),
        },
        1000
      );
    });

    // ===================================
    // Scroll Animations
    // ===================================

    function checkScroll() {
      $(".animate-on-scroll").each(function () {
        var elementTop = $(this).offset().top;
        var elementBottom = elementTop + $(this).outerHeight();
        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();

        if (elementBottom > viewportTop && elementTop < viewportBottom) {
          $(this).addClass("animated");
        }
      });
    }

    // Check on scroll
    $(window).on("scroll", checkScroll);

    // Check on load
    checkScroll();

    // ===================================
    // Counter Animation
    // ===================================

    function animateCounter(element) {
      var $this = $(element);
      var countTo = parseInt($this.attr("data-count"));
      var duration = 2000;
      var increment = countTo / (duration / 50);
      var current = 0;

      var timer = setInterval(function () {
        current += increment;
        if (current >= countTo) {
          current = countTo;
          clearInterval(timer);
        }
        $this.text(Math.floor(current) + ($this.attr("data-suffix") || ""));
      }, 50);
    }

    // Trigger counter animation when in viewport
    var counterAnimated = false;
    $(window).on("scroll", function () {
      if (!counterAnimated) {
        var statsSection = $(".stats-section");
        if (statsSection.length) {
          var elementTop = statsSection.offset().top;
          var viewportBottom = $(window).scrollTop() + $(window).height();

          if (viewportBottom > elementTop) {
            $(".stat-number").each(function () {
              animateCounter(this);
            });
            counterAnimated = true;
          }
        }
      }
    });

    // ===================================
    // Parallax Effect
    // ===================================

    $(window).on("scroll", function () {
      var scrolled = $(window).scrollTop();
      $(".hero-background").css(
        "transform",
        "translateY(" + scrolled * 0.5 + "px)"
      );
    });

    // ===================================
    // Image Hover Effects
    // ===================================

    $(".event-card, .gallery-item, .participate-card").hover(
      function () {
        $(this).find("img").addClass("hovered");
      },
      function () {
        $(this).find("img").removeClass("hovered");
      }
    );

    // ===================================
    // Testimonials Slider
    // ===================================

    var currentTestimonial = 0;
    var testimonials = $(".testimonial");
    var totalTestimonials = testimonials.length;

    if (totalTestimonials > 0) {
      // Hide all except first
      testimonials.hide().eq(0).show();

      // Auto-rotate testimonials
      setInterval(function () {
        testimonials.eq(currentTestimonial).fadeOut(500, function () {
          currentTestimonial = (currentTestimonial + 1) % totalTestimonials;
          testimonials.eq(currentTestimonial).fadeIn(500);
        });
      }, 5000);
    }

    // ===================================
    // Stagger Animation for Grid Items
    // ===================================

    function staggerAnimation(container, items, delay) {
      var $container = $(container);
      var $items = $container.find(items);

      $(window).on("scroll", function () {
        var containerTop = $container.offset().top;
        var viewportBottom = $(window).scrollTop() + $(window).height();

        if (
          viewportBottom > containerTop &&
          !$container.hasClass("stagger-animated")
        ) {
          $container.addClass("stagger-animated");

          $items.each(function (index) {
            var $item = $(this);
            setTimeout(function () {
              $item.addClass("animated");
            }, index * delay);
          });
        }
      });
    }

    // Apply stagger animations
    staggerAnimation(".events-grid", ".event-card", 100);
    staggerAnimation(".participate-grid", ".participate-card", 100);
    staggerAnimation(".gallery-grid", ".gallery-item", 80);
    staggerAnimation(".sponsors-grid", ".sponsor-logo", 100);

    // ===================================
    // Gallery Lightbox (Simple)
    // ===================================

    $(".gallery-item").on("click", function () {
      var imgSrc = $(this).find("img").attr("src");
      var lightbox = $('<div class="lightbox"></div>');
      var img = $('<img src="' + imgSrc + '">');
      var close = $('<span class="lightbox-close">&times;</span>');

      lightbox.append(close).append(img);
      $("body").append(lightbox);

      setTimeout(function () {
        lightbox.addClass("active");
      }, 10);

      // Close lightbox
      lightbox.on("click", function (e) {
        if (e.target === this || $(e.target).hasClass("lightbox-close")) {
          lightbox.removeClass("active");
          setTimeout(function () {
            lightbox.remove();
          }, 300);
        }
      });
    });

    // ===================================
    // Form Validation (if needed)
    // ===================================

    $("form").on("submit", function (e) {
      var isValid = true;

      $(this)
        .find("input[required], textarea[required]")
        .each(function () {
          if ($(this).val().trim() === "") {
            isValid = false;
            $(this).addClass("error");
          } else {
            $(this).removeClass("error");
          }
        });

      if (!isValid) {
        e.preventDefault();
        alert("Please fill in all required fields.");
      }
    });

    // ===================================
    // CTA Button Pulse Effect
    // ===================================

    setInterval(function () {
      $(".btn-primary").addClass("pulse");
      setTimeout(function () {
        $(".btn-primary").removeClass("pulse");
      }, 1000);
    }, 5000);

    // ===================================
    // Lazy Loading Images
    // ===================================

    if ("IntersectionObserver" in window) {
      var imageObserver = new IntersectionObserver(function (
        entries,
        observer
      ) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            var img = entry.target;
            img.src = img.dataset.src;
            img.classList.add("loaded");
            imageObserver.unobserve(img);
          }
        });
      });

      document.querySelectorAll("img[data-src]").forEach(function (img) {
        imageObserver.observe(img);
      });
    }

    // ===================================
    // Page Load Animation
    // ===================================

    $("body").addClass("loaded");

    // ===================================
    // Dropdown Menu for Desktop
    // ===================================

    $(".dropdown").hover(
      function () {
        if ($(window).width() > 1024) {
          $(this).find(".dropdown-menu").stop(true, true).fadeIn(200);
        }
      },
      function () {
        if ($(window).width() > 1024) {
          $(this).find(".dropdown-menu").stop(true, true).fadeOut(200);
        }
      }
    );

    // Mobile dropdown toggle
    $(".dropdown > a").on("click", function (e) {
      if ($(window).width() <= 1024) {
        e.preventDefault();
        e.stopPropagation();

        // Close other dropdowns
        $(".dropdown").not($(this).parent()).removeClass("mobile-active");

        // Toggle current dropdown
        $(this).parent().toggleClass("mobile-active");
      }
    });

    // Close dropdown when clicking submenu item
    $(".dropdown-menu a").on("click", function () {
      if ($(window).width() <= 1024) {
        $(".menu-toggle").removeClass("active");
        $(".nav-menu").removeClass("active");
        $(".dropdown").removeClass("mobile-active");
        $("body").removeClass("menu-open");
      }
    });

    // ===================================
    // Back to Top Button
    // ===================================

    var backToTop = $('<div class="back-to-top">↑</div>');
    $("body").append(backToTop);

    $(window).on("scroll", function () {
      if ($(window).scrollTop() > 500) {
        backToTop.addClass("visible");
      } else {
        backToTop.removeClass("visible");
      }
    });

    backToTop.on("click", function () {
      $("html, body").animate({ scrollTop: 0 }, 800);
    });

    // ===================================
    // Console Message
    // ===================================

    console.log(
      "%c IFFC - International Fashion Festival Canada ",
      "background: #00A676; color: #fff; font-size: 16px; padding: 10px;"
    );
    console.log("Website loaded successfully!");

    // ===================================
    // Initialize AOS (Animate On Scroll)
    // ===================================

    AOS.init({
      duration: 1000,
      easing: "ease-out-cubic",
      once: true,
      offset: 100,
      delay: 0,
    });

    // ===================================
    // Initialize Swiper Carousel
    // ===================================

    // Events Swiper (Homepage & Events Page)
    const eventsSwiper = new Swiper(".eventsSwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".eventsSwiper .swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },
      watchOverflow: false,
      allowTouchMove: true,
    });

    // Runway Swiper (Homepage)
    const runwaySwiper = new Swiper(".runwaySwiper", {
      slidesPerView: 1,
      spaceBetween: 40,
      loop: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".runwaySwiper .swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },
      watchSlidesProgress: true,
      watchSlidesVisibility: true,
    });

    // Backstage Swiper (Homepage)
    const backstageSwiper = new Swiper(".backstageSwiper", {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      autoplay: {
        delay: 4500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".backstageSwiper .swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },
      watchSlidesProgress: true,
      watchSlidesVisibility: true,
    });

    // Reviews Swiper (Homepage)
    const reviewsSwiper = new Swiper(".reviewsSwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 6000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".reviewsSwiper .swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },
    });

    // Gallery Swiper (Events Page - IFFC Canada Gallery)
    const gallerySwiper = new Swiper(".gallerySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".gallerySwiper .swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        768: {
          slidesPerView: 1,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 1,
          spaceBetween: 40,
        },
      },
    });

    // Archive Swiper (Events Page - Past Events Archive)
    const archiveSwiper = new Swiper(".archiveSwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 5500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".archiveSwiper .swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },
    });

    // ===================================
    // Initialize Masonry Layouts
    // ===================================

    function initMasonry() {
      $(".masonry-grid").each(function () {
        var $grid = $(this);
        var msnry;

        // Wait for images to load
        imagesLoaded($grid, function () {
          // Masonry is not needed with CSS columns
          // But we can add some enhancements
          $grid.addClass("masonry-loaded");
        });
      });
    }

    // Initialize masonry after a short delay to ensure DOM is ready
    setTimeout(initMasonry, 100);

    // Reinitialize on window resize
    var resizeTimer;
    $(window).on("resize", function () {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function () {
        initMasonry();
      }, 250);
    });

    // ===================================
    // Floating Banner
    // ===================================

    // Show banner after 3 seconds
    setTimeout(function () {
      $("#ticketBanner").addClass("show");
    }, 3000);

    // Close banner function (global)
    window.closeBanner = function () {
      $("#ticketBanner").removeClass("show").addClass("hide");
    };

    // ===================================
    // Gallery View More (Mobile)
    // ===================================

    function setupGalleryPagination() {
      if ($(window).width() <= 768) {
        $(".masonry-grid").each(function () {
          var $grid = $(this);
          var $items = $grid.find(".masonry-item");

          // Hide items after the 4th one
          $items.slice(4).addClass("hidden-mobile");

          // Check if view more button already exists
          if ($grid.next(".gallery-view-more").length === 0) {
            // Add view more button if there are more than 4 items
            if ($items.length > 4) {
              var $viewMore = $(
                '<div class="gallery-view-more"><button class="btn btn-outline view-more-btn">View More</button></div>'
              );
              $grid.after($viewMore);

              // View more click handler
              $viewMore.find(".view-more-btn").on("click", function () {
                var $hiddenItems = $grid.find(".masonry-item.hidden-mobile");
                var $nextBatch = $hiddenItems.slice(0, 4);

                if ($nextBatch.length > 0) {
                  $nextBatch.removeClass("hidden-mobile").hide().fadeIn(400);

                  // If no more items, hide the button
                  if ($grid.find(".masonry-item.hidden-mobile").length === 0) {
                    $(this).text("No More Images").prop("disabled", true);
                  }
                }
              });
            }
          }
        });
      } else {
        // Remove hidden class and view more buttons on desktop
        $(".masonry-item").removeClass("hidden-mobile");
        $(".gallery-view-more").remove();
      }
    }

    // Initialize gallery pagination
    setupGalleryPagination();

    // Reinitialize on window resize
    $(window).on("resize", function () {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function () {
        setupGalleryPagination();
      }, 250);
    });
  }); // End document ready
})(jQuery);
