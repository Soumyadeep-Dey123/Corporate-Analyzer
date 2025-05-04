
$(document).ready(function () {
  // Navbar scroll effect
  $(window).scroll(function () {
    if ($(window).scrollTop() > 50) {
      $('.navbar').addClass('shadow-sm');
    } else {
      $('.navbar').removeClass('shadow-sm');
    }
  });

  // Smooth scrolling for anchor links
  $('a[href*="#"]:not([href="#"])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - 80
        }, 800);
        return false;
      }
    }
  });

  // Active nav link on scroll
  $(window).scroll(function () {
    var scrollPosition = $(window).scrollTop() + 100;

    // Check each section
    $('section').each(function () {
      var target = $(this).attr('id');
      var targetOffset = $(this).offset().top;
      var targetHeight = $(this).outerHeight();

      if (targetOffset <= scrollPosition && targetOffset + targetHeight > scrollPosition) {
        $('.nav-link').removeClass('active');
        $('.nav-link[href="#' + target + '"]').addClass('active');
      }
    });
  });

  // Initialize Bootstrap Carousel
  $('.carousel').carousel({
    interval: 5000
  });

  // Reveal animations on scroll
  function revealOnScroll() {
    var windowHeight = $(window).height();
    var windowTopPosition = $(window).scrollTop();
    var windowBottomPosition = windowTopPosition + windowHeight;

    $('.reveal').each(function () {
      var element = $(this);
      var elementHeight = element.outerHeight();
      var elementTopPosition = element.offset().top;
      var elementBottomPosition = elementTopPosition + elementHeight;

      // Check if element is within viewport
      if ((elementBottomPosition >= windowTopPosition) && (elementTopPosition <= windowBottomPosition)) {
        element.addClass('active');
      }
    });
  }

  // Run reveal function on page load and scroll
  $(window).on('scroll', revealOnScroll);
  revealOnScroll();

  // Contact form submission
  $('#contactForm').submit(function (e) {
    e.preventDefault();
    // Here you would normally process the form data
    // For demo, we'll just show an alert
    alert('Thank you for your message! We will get back to you soon.');
    this.reset();
  });

  // Back to top button
  const backToTopButton = document.getElementById('backToTop');

  window.addEventListener('scroll', function () {
    if (window.scrollY > 300) {
      backToTopButton.classList.add('active');
    } else {
      backToTopButton.classList.remove('active');
    }
  });

  backToTopButton.addEventListener('click', function (e) {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

});
