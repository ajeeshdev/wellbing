

/* ============================================================
   MAIN SCRIPT
============================================================ */

  const switcher = document.getElementById('langSwitcher');
  const button = switcher.querySelector('.lang-btn');
  const current = switcher.querySelector('.current-lang');
  const options = switcher.querySelectorAll('.lang-menu li');

  button.addEventListener('click', () => {
    switcher.classList.toggle('open');
    button.setAttribute(
      'aria-expanded',
      switcher.classList.contains('open')
    );
  });

  options.forEach(option => {
    option.addEventListener('click', () => {
      const lang = option.dataset.lang;
      current.textContent = option.textContent;

      if (lang === 'ar') {
        document.documentElement.lang = 'ar';
        document.documentElement.dir = 'rtl';
      } else {
        document.documentElement.lang = 'en';
        document.documentElement.dir = 'ltr';
      }

      switcher.classList.remove('open');
    });
  });

  // close on outside click
  document.addEventListener('click', e => {
    if (!switcher.contains(e.target)) {
      switcher.classList.remove('open');
    }
  });




document.addEventListener("DOMContentLoaded", () => {

    const switcher = document.getElementById('languageSwitcher');

  switcher.addEventListener('change', function () {
    if (this.value === 'ar') {
      document.documentElement.setAttribute('lang', 'ar');
      document.documentElement.setAttribute('dir', 'rtl');
    } else {
      document.documentElement.setAttribute('lang', 'en');
      document.documentElement.setAttribute('dir', 'ltr');
    }
  });

  /* ------------------------------
    0. Banner
  ------------------------------ */
$(document).ready(function () {
  $(".banner-text-slider-init").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    asNavFor: ".banner-slider-init",
    autoplay: true,
    fade: true,
    cssEase: "linear",
    speed: 800,
      draggable: true,

    // Enable dots and place them in your custom div
    dots: true,
    appendDots: $(".banner-dots"),
  });

  $(".banner-slider-init").slick({
    asNavFor: ".banner-text-slider-init",
    dots: false,
    draggable: true,
    arrows: false,
    fade: true,
    cssEase: "linear",

  });
});



  /* ------------------------------
     1. Sticky Header
  ------------------------------ */
  const header = document.getElementById("header");
  if (header) {
    window.addEventListener("scroll", () => {
      header.classList.toggle("scrolled", window.scrollY >= 30);
    });
  }

  /* ============================================================
     2. Slick Sliders
  ============================================================ */

  // Helper: Who we are

$(document).ready(function () {

const slider = $('.whoWeAre-slider');
slider.slick({
    dots: false,
    arrows: true,
    infinite: true,
    autoplay:true,
    slidesToShow: 1,
      //  fade: true,
    cssEase: "linear",
            prevArrow: $(".prev"),
    nextArrow: $(".next"),
});


});




    /* --- Services Slider with Progress --- */
  (() => {
    const $slider = $(".expertise .expertise-slider");
    const $track = $(".expertise .progress-track");
    const $label = $(".expertise .progress-fill");

    if ($slider.length) {
      $slider.slick({
        slidesToShow: 3,
        slidesToScroll: 2,
        infinite: true,
        dots: false,
        arrows: false,
        cssEase: "linear",
        autoplay: true,
        autoplaySpeed: 1500,
        variableWidth: true,
        swipeToSlide: true,
      });

      $slider.on("beforeChange", (event, slick, currentSlide, nextSlide) => {
        const calc = (nextSlide / (slick.slideCount - 1)) * 100;

        $track
          .css("background-size", `${calc}% 100%`)
          .attr("aria-valuenow", calc);

        $label.text(`${Math.round(calc)}% completed`);
      });

      // $(".expertise-next").on("click", () => $slider.slick("slickNext"));
      // $(".expertise-prev").on("click", () => $slider.slick("slickPrev"));

      $track.css({
        "background-image": "linear-gradient(to right, #FFD52B 100%, #D9D9D9 100%)",
        "background-size": "0% 100%",
        "background-repeat": "no-repeat",
      });
    }
  })();

  /* ============================================================
     4. Equal Height Utility
  ============================================================ */

  const setEqualHeightFor = (selector) => {
    const items = document.querySelectorAll(selector);
    if (!items.length) return;

    let max = 0;
    items.forEach((el) => {
      el.style.height = "auto";
      if (el.offsetHeight > max) max = el.offsetHeight;
    });
    items.forEach((el) => {
      el.style.height = `${max}px`;
    });
  };

  const equalHeightTargets = [
    ".expertise-slider-item h3, .service-card",
  ];

  window.addEventListener("load", () => {
    setTimeout(() => {
      equalHeightTargets.forEach(setEqualHeightFor);
    }, 300);
  });

  window.addEventListener("resize", () => {
    equalHeightTargets.forEach(setEqualHeightFor);
  });



  
  /* ============================================================
     4.Brands
  ============================================================ */

  $('.brands .row-1').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 6000,
    cssEase: 'linear',
    infinite: true,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    pauseOnFocus: false,
     responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
        },
      },
                
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 2,
                    },
                },
    ],
});

$('.brands .row-2').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 6000,
    cssEase: 'linear',
    infinite: true,
    arrows: false,
    dots: false,
    pauseOnHover: false,
      pauseOnFocus: false,
     responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
        },
      },
                
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 2,
                    },
                },
    ],
    // rtl: true   
});




  
  /* ============================================================
    Awards
  ============================================================ */

(() => {
    const $slider = $(".awards-slider");
    const $track = $(".awards .progress-track");
    const $label = $(".awards .progress-fill");

    if ($slider.length) {
      $slider.slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        loop:true,
        dots: false,
        arrows: false,
        cssEase: "linear",
        centerMode:true,
            centerPadding: '0px',
      //  fade: true,
        autoplay: true,
        autoplaySpeed: 1500,
        variableWidth: true,
        swipeToSlide: true,
      });

      $slider.on("beforeChange", (event, slick, currentSlide, nextSlide) => {
        const calc = (nextSlide / (slick.slideCount - 1)) * 100;

        $track
          .css("background-size", `${calc}% 100%`)
          .attr("aria-valuenow", calc);

        $label.text(`${Math.round(calc)}% completed`);
      });

      // $(".expertise-next").on("click", () => $slider.slick("slickNext"));
      // $(".expertise-prev").on("click", () => $slider.slick("slickPrev"));

      $track.css({
        "background-image": "linear-gradient(to right, #FFD52B 100%, #D9D9D9 100%)",
        "background-size": "0% 100%",
        "background-repeat": "no-repeat",
      });
    }
  })();
  /* ============================================================
    products
  ============================================================ */

(() => {
    const $slider = $(".our-product-slider");
    const $track = $(".our-product .progress-track");
    const $label = $(".our-product .progress-fill");

    if ($slider.length) {
      $slider.slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        // loop:true,
        dots: false,
        arrows: false,
        cssEase: "linear",
        autoplay: true,
        autoplaySpeed: 1500,
        swipeToSlide: true,
           responsive: [

      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
        },
      },
                
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                    },
                },
    ],
      });

      $slider.on("beforeChange", (event, slick, currentSlide, nextSlide) => {
        const calc = (nextSlide / (slick.slideCount - 1)) * 100;

        $track
          .css("background-size", `${calc}% 100%`)
          .attr("aria-valuenow", calc);

        $label.text(`${Math.round(calc)}% completed`);
      });

      // $(".expertise-next").on("click", () => $slider.slick("slickNext"));
      // $(".expertise-prev").on("click", () => $slider.slick("slickPrev"));

      $track.css({
        "background-image": "linear-gradient(to right, #FFD52B 100%, #D9D9D9 100%)",
        "background-size": "0% 100%",
        "background-repeat": "no-repeat",
      });
    }


    document.querySelectorAll('.slide-no').forEach((el) => {
  const num = parseInt(el.textContent.trim(), 10);

  if (!isNaN(num) && num < 10) {
    el.textContent = '0' + num;
  }
});

  })();



    /* ============================================================
    Blog
  ============================================================ */

(() => {
    const $slider = $(".blog-slider");
    const $track = $(".blog .progress-track");
    const $label = $(".blog .progress-fill");

    if ($slider.length) {
      $slider.slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        // loop:true,
        dots: false,
        arrows: false,
        cssEase: "linear",
        autoplay: true,
        autoplaySpeed: 1500,
        swipeToSlide: true,
           responsive: [

      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 4,
        },
      },
                
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                    },
                },  {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                    },
                },
    ],
      });

      $slider.on("beforeChange", (event, slick, currentSlide, nextSlide) => {
        const calc = (nextSlide / (slick.slideCount - 1)) * 100;

        $track
          .css("background-size", `${calc}% 100%`)
          .attr("aria-valuenow", calc);

        $label.text(`${Math.round(calc)}% completed`);
      });

      // $(".expertise-next").on("click", () => $slider.slick("slickNext"));
      // $(".expertise-prev").on("click", () => $slider.slick("slickPrev"));

      $track.css({
        "background-image": "linear-gradient(to right, #FFD52B 100%, #D9D9D9 100%)",
        "background-size": "0% 100%",
        "background-repeat": "no-repeat",
      });
    }


    document.querySelectorAll('.slide-no').forEach((el) => {
  const num = parseInt(el.textContent.trim(), 10);

  if (!isNaN(num) && num < 10) {
    el.textContent = '0' + num;
  }
});

  })();

    /* ============================================================
Testimonial SLider
  ============================================================ */

(() => {
    const $slider = $(".testimonial-slider");
    const $track = $(".testimonial .progress-track");
    const $label = $(".testimonial .progress-fill");

    if ($slider.length) {
      $slider.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        // loop:true,
        dots: false,
        arrows: true,
          prevArrow: $(".testimonial-prev"),
    nextArrow: $(".testimonial-next"),
        cssEase: "linear",
        autoplay: true,
        autoplaySpeed: 1500,
        swipeToSlide: true,

      });

      $slider.on("beforeChange", (event, slick, currentSlide, nextSlide) => {
        const calc = (nextSlide / (slick.slideCount - 1)) * 100;

        $track
          .css("background-size", `${calc}% 100%`)
          .attr("aria-valuenow", calc);

        $label.text(`${Math.round(calc)}% completed`);
      });

      // $(".expertise-next").on("click", () => $slider.slick("slickNext"));
      // $(".expertise-prev").on("click", () => $slider.slick("slickPrev"));

      $track.css({
        "background-image": "linear-gradient(to right, #FFD52B 100%, #D9D9D9 100%)",
        "background-size": "0% 100%",
        "background-repeat": "no-repeat",
      });
    }


    document.querySelectorAll('.slide-no').forEach((el) => {
  const num = parseInt(el.textContent.trim(), 10);

  if (!isNaN(num) && num < 10) {
    el.textContent = '0' + num;
  }
});

  })();
    /* ============================================================
mission-vission- SLider
  ============================================================ */

(() => {
    const $slider = $(".mission-vission-slider");
    const $track = $(".testimonial .progress-track");
    const $label = $(".testimonial .progress-fill");


      $slider.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        // loop:true,
        dots: true,
        arrows: false,

        cssEase: "linear",
        autoplay: true,
        autoplaySpeed: 1500,
        swipeToSlide: true,


      
    



});

  })();


  /* ============================================================
     5. Lazy Loading for Images
  ============================================================ */

  const lazyImages = document.querySelectorAll("img[data-src][loading='lazy']");
  if (lazyImages.length) {
    const lazyObserver = new IntersectionObserver((entries, obs) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;

        const img = entry.target;
        img.src = img.dataset.src;
        if (img.dataset.alt) img.alt = img.dataset.alt;
        img.removeAttribute("data-src");
        img.removeAttribute("loading");
        obs.unobserve(img);
      });
    });

    lazyImages.forEach((img) => lazyObserver.observe(img));
  }






  });

  (() => {
    const $slider = $(".gallery-slider");
    const $track = $(".gallery .progress-track");
    const $label = $(".gallery .progress-fill");

    if ($slider.length) {
      $slider.slick({
        slidesToShow: 3,
        slidesToScroll: 2,
        infinite: true,
        dots: false,
        arrows: false,
        cssEase: "linear",
        autoplay: true,
        autoplaySpeed: 1500,
        variableWidth: true,
        swipeToSlide: true,
      });

      $slider.on("beforeChange", (event, slick, currentSlide, nextSlide) => {
        const calc = (nextSlide / (slick.slideCount - 1)) * 100;

        $track
          .css("background-size", `${calc}% 100%`)
          .attr("aria-valuenow", calc);

        $label.text(`${Math.round(calc)}% completed`);
      });

      // $(".expertise-next").on("click", () => $slider.slick("slickNext"));
      // $(".expertise-prev").on("click", () => $slider.slick("slickPrev"));

      $track.css({
        "background-image": "linear-gradient(to right, #FFD52B 100%, #D9D9D9 100%)",
        "background-size": "0% 100%",
        "background-repeat": "no-repeat",
      });
    }
  })();


  
  /* ------------------------------
     2. Star Rating
  ------------------------------ */

  $(document).ready(function () {
    $(".my-rating-readonly").starRating({
      starSize: 18,
      initialRating: 5,
      useFullStars: true,
      readOnly: true,
    });
  });


$(document).ready(function () {
  const slideDuration = 4000;

  const $main = $(".product-detail-image");
  const $nav = $(".product-detail-image-nav");

  $main
    .slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      infinite: true,
      autoplay: true,
      autoplaySpeed: slideDuration,
      pauseOnHover: false,
      pauseOnFocus: false,
      asNavFor: $nav,
    })
    .on("afterChange", function () {
      resetProgress();
    });

  $nav.slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: $main,
    arrows: true,
    focusOnSelect: true,
    variableWidth: true,
    infinite: true,
  });

  function resetProgress() {
    $(".slide-progress").css({
      animation: "none",
      width: 0,
    });

    const $active = $(".slick-current.slick-active .slide-progress");

    if ($active.length) {
      $active[0].offsetHeight; // force reflow
      $active.css({
        animation: `progressBar ${slideDuration}ms linear forwards`,
      });
    }
  }

  // 🔥 manually trigger first slide progress
  setTimeout(resetProgress, 0);
});




  (() => {
    const $slider = $(".other-products-slider-init");
    const $track = $(".other-products .progress-track");
    const $label = $(".other-products .progress-fill");

    if ($slider.length) {
      $slider.slick({
        slidesToShow: 4,
        slidesToScroll: 2,
        infinite: true,
        dots: false,
        arrows: false,
        cssEase: "linear",
        autoplay: true,
        autoplaySpeed: 1500,
        swipeToSlide: true,

             responsive: [

      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 3,
        },
      },
                
                // {
                //     breakpoint: 991,
                //     settings: {
                //         slidesToShow: 3,
                //     },
                
                // },
                
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 2,
                    },
                
                }
                
    ],
      });

      $slider.on("beforeChange", (event, slick, currentSlide, nextSlide) => {
        const calc = (nextSlide / (slick.slideCount - 1)) * 100;

        $track
          .css("background-size", `${calc}% 100%`)
          .attr("aria-valuenow", calc);

        $label.text(`${Math.round(calc)}% completed`);
      });

      // $(".expertise-next").on("click", () => $slider.slick("slickNext"));
      // $(".expertise-prev").on("click", () => $slider.slick("slickPrev"));

      $track.css({
        "background-image": "linear-gradient(to right, #FFD52B 100%, #D9D9D9 100%)",
        "background-size": "0% 100%",
        "background-repeat": "no-repeat",
      });
    }
  })();






// ==========================contry dorp down=============================

function initializePhoneInput(selector) {	
  const shippingFormWrapper = document.querySelector(selector + ' .phone_number');	
  if (shippingFormWrapper !== null) {	
      const phoneInput = window.intlTelInput(shippingFormWrapper, {	
          preferredCountries: ["ae", "sa", "kw", "bh", "qa","om"],	
          excludeCountries: ["ru", "cu", "sy", "ir", "sd", "ss", "kp", "ye", "KR", "UA"],	
          utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",	
      });	
      $(selector + ' .phone_number').on('blur', function () {	
          contactPhone(selector, phoneInput);	
      });	
  }	
}	

function contactPhone(selector, phoneInput) {	
  let phoneNumber = phoneInput.getNumber(); // Get full international number
  
  if (phoneNumber.startsWith('+')) {
      let countryCode = phoneInput.getSelectedCountryData().dialCode; // Get country code only
      let localNumber = phoneNumber.replace('+' + countryCode, ''); // Remove country code from full number
      phoneNumber = `+${countryCode}-${localNumber}`; // Add separator
  }

  $(selector + ' .phone_number').val(phoneNumber);	
}

	
initializePhoneInput("#siteEnquiryForm");	
initializePhoneInput("#careerForm");	
initializePhoneInput(".contact-section-row");	




