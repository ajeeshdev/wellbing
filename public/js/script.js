

/* ============================================================
   MAIN SCRIPT
============================================================ */



document.addEventListener("DOMContentLoaded", () => {

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


document.addEventListener("DOMContentLoaded", function () {

  const fileInput = document.getElementById("fileUpload");
  const uploadArea = document.querySelector(".upload-area");
  const fileList = document.querySelector(".uploaded-files");

  // open file dialog on click
uploadArea.addEventListener("click", (e) => {
  // If click came from label or input, let browser handle it
  if (e.target.closest("label") || e.target.closest("input")) {
    return;
  }

  e.preventDefault();
  fileInput.click();
});


  // handle file select
  fileInput.addEventListener("change", handleFiles);

  // drag & drop
  uploadArea.addEventListener("dragover", e => {
    e.preventDefault();
    uploadArea.classList.add("drag");
  });

  uploadArea.addEventListener("dragleave", () => {
    uploadArea.classList.remove("drag");
  });

  uploadArea.addEventListener("drop", e => {
    e.preventDefault();
    uploadArea.classList.remove("drag");
    handleFiles({ target: { files: e.dataTransfer.files } });
  });

  function handleFiles(e) {
    [...e.target.files].forEach(file => {
      renderFile(file);
    });
    fileInput.value = ""; // reset input
  }

  function renderFile(file) {
    const fileItem = document.createElement("div");
    fileItem.className = "file-item";

    fileItem.innerHTML = `
      <div class="file-info">
        <span class="file-icon"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none"> <path fill-rule="evenodd" clip-rule="evenodd" d="M24.5 7.875V24.5C24.5 25.4283 24.1313 26.3185 23.4749 26.9749C22.8185 27.6313 21.9283 28 21 28H19.25V26.25H21C21.4641 26.25 21.9092 26.0656 22.2374 25.7374C22.5656 25.4092 22.75 24.9641 22.75 24.5V7.875H19.25C18.5538 7.875 17.8861 7.59844 17.3938 7.10616C16.9016 6.61387 16.625 5.94619 16.625 5.25V1.75H7C6.53587 1.75 6.09075 1.93437 5.76256 2.26256C5.43437 2.59075 5.25 3.03587 5.25 3.5V19.25H3.5V3.5C3.5 2.57174 3.86875 1.6815 4.52513 1.02513C5.1815 0.368749 6.07174 0 7 0L16.625 0L24.5 7.875ZM16.905 22.106C17.038 22.3743 17.1197 22.6613 17.15 22.967H15.792C15.7602 22.8133 15.7029 22.666 15.6222 22.5312C15.5443 22.4031 15.4434 22.2904 15.3247 22.1988C15.202 22.0992 15.0612 22.0243 14.91 21.9783C14.7405 21.9262 14.5641 21.9003 14.3867 21.9013C13.8874 21.9013 13.4995 22.0774 13.223 22.4298C12.95 22.7809 12.8135 23.2768 12.8135 23.9172V24.7887C12.8135 25.1982 12.8701 25.557 12.9833 25.865C13.0867 26.1524 13.2716 26.4035 13.5153 26.5877C13.7833 26.7669 14.1013 26.8564 14.4235 26.8433C14.6996 26.8512 14.9737 26.7936 15.2233 26.6753C15.4231 26.5703 15.5884 26.4099 15.6992 26.2132C15.8042 26.0219 15.8573 25.8102 15.8585 25.578V25.1318H14.42V24.0993H17.178V25.4958C17.178 25.8341 17.1214 26.1549 17.0082 26.4583C16.8957 26.7586 16.721 27.0317 16.4955 27.2598C16.2486 27.5014 15.9534 27.688 15.6292 27.8075C15.2839 27.937 14.8773 28.0017 14.4095 28.0017C13.9595 28.0102 13.5121 27.9318 13.0918 27.7708C12.7347 27.6246 12.4157 27.399 12.159 27.111C11.9036 26.8154 11.7128 26.4697 11.599 26.096C11.4723 25.6732 11.4104 25.2336 11.4152 24.7922V23.9067C11.4152 23.2733 11.5319 22.7191 11.7653 22.2443C11.9998 21.7706 12.3392 21.4013 12.7837 21.1365C13.2317 20.8705 13.7719 20.7375 14.4043 20.7375C14.8208 20.7375 15.1917 20.7958 15.5172 20.9125C15.8439 21.0292 16.1239 21.1896 16.3573 21.3938C16.5906 21.5979 16.7738 21.8353 16.9067 22.106H16.905ZM0 25.8755C0 26.1625 0.0478333 26.4338 0.1435 26.6893C0.240333 26.9459 0.382083 27.1734 0.56875 27.3717C0.76125 27.5701 0.998667 27.7258 1.281 27.839C1.568 27.9475 1.89992 28.0017 2.27675 28.0017C3.01175 28.0017 3.58575 27.8005 3.99875 27.398C4.41525 26.9943 4.62408 26.4081 4.62525 25.6392V20.8705H3.241V25.6742C3.241 26.0278 3.1605 26.2996 2.9995 26.4897C2.8385 26.6799 2.59233 26.7756 2.261 26.7767C2.10193 26.7841 1.94388 26.7479 1.80388 26.672C1.66387 26.5961 1.54722 26.4835 1.4665 26.3463C1.38729 26.201 1.34352 26.0391 1.33875 25.8737H0V25.8755ZM8.61 20.8705H5.8135V27.8705H7.19775V25.5203H8.603C9.10467 25.5203 9.53167 25.4199 9.884 25.2192C10.2398 25.0128 10.5099 24.7357 10.6943 24.388C10.8833 24.0357 10.9772 23.6407 10.976 23.2032C10.976 22.7669 10.8838 22.372 10.6995 22.0185C10.5148 21.6702 10.2359 21.3809 9.8945 21.1838C9.5445 20.9737 9.1175 20.8693 8.6135 20.8705H8.61ZM9.5655 23.2032C9.57173 23.4344 9.52063 23.6634 9.41675 23.87C9.32357 24.0489 9.17835 24.1953 9.00025 24.29C8.79639 24.3904 8.57115 24.4396 8.344 24.4335H7.1925V21.973H8.3475C8.729 21.973 9.02767 22.0792 9.2435 22.2915C9.45933 22.5027 9.5655 22.8066 9.5655 23.2032Z" fill="#383838"/> </svg></span>
        <div>
          <p>${file.name}</p>
                <span class="file-size">${(file.size / 1024 / 1024).toFixed(1)}MB</span>

          <span class="progress"><i></i></span> 
        </div>
      </div>
      <button type="button" class="remove-file"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"> <path d="M12 12L7 7M12 12L17 17M12 12L17 7M12 12L7 17" stroke="#4B535D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </svg></button>
    `;

    fileList.appendChild(fileItem);

    // fake progress animation
    const bar = fileItem.querySelector(".progress i");
    let percent = 0;
    const timer = setInterval(() => {
      percent += 10;
      bar.style.width = percent + "%";
      if (percent >= 100) clearInterval(timer);
    }, 150);

    // remove file
    fileItem.querySelector(".remove-file").onclick = () => {
      fileItem.remove();
    };
  }

});



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




