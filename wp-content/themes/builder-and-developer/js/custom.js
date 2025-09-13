// Scroll to Top
window.onscroll = function() {
  const builder_and_developer_button = document.querySelector('.scroll-top-box');
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    builder_and_developer_button.style.display = "block";
  } else {
    builder_and_developer_button.style.display = "none";
  }
};

document.querySelector('.scroll-top-box a').onclick = function(event) {
  event.preventDefault();
  window.scrollTo({top: 0, behavior: 'smooth'});
};

// Banner slider
jQuery(document).ready(function () {
  var swiper = new Swiper(".mySwiper", {
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
    speed: 1200,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    loop: true,
    pagination: {
      el: ".banner-swiper-pagination",
      type: "fraction",
      formatFractionCurrent: n => (n < 10 ? "0" + n : n),
      formatFractionTotal: n => (n < 10 ? "0" + n : n),
    },
    navigation: {
      nextEl: ".banner-swiper-button-next",
      prevEl: ".banner-swiper-button-prev",
    },
  });
});

// Swiper Initializer Function
jQuery(document).ready(function($) {

  function builder_and_developer_initCustomSwiper(containerSelector, ulExtraClass, slideExtraClass, paginationSelector) {
    var $builder_and_developer_swiperEl = $(containerSelector);

    if ($builder_and_developer_swiperEl.find("ul.swiper-wrapper").length) {
      var $builder_and_developer_ul = $builder_and_developer_swiperEl.find("ul.swiper-wrapper");
      var $builder_and_developer_slides = $builder_and_developer_ul.find("li");

      // Create new swiper wrapper
      var $builder_and_developer_wrapper = $("<div class='swiper-wrapper " + ulExtraClass + "'></div>");
      $builder_and_developer_slides.each(function () {
        var $builder_and_developer_slide = $("<div class='swiper-slide " + slideExtraClass + "'></div>");
        $builder_and_developer_slide.html($(this).html());
        $builder_and_developer_wrapper.append($builder_and_developer_slide);
      });

      // Replace old UL with new Swiper wrapper
      $builder_and_developer_ul.replaceWith($builder_and_developer_wrapper);
    }

    // Initialize Swiper
    new Swiper(containerSelector, {
      breakpoints: {
        0: { slidesPerView: 1 },
        600: { slidesPerView: 2 },
        992: { slidesPerView: 3 }
      },
      speed: 1200,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      spaceBetween: 30,
      pagination: {
        el: paginationSelector,
        clickable: true,
      },
    });
  }

  // Project Slider
  builder_and_developer_initCustomSwiper(".mySwiper1", "project-box", "project-inner-box", ".project-swiper-pagination");

  // News Slider
  builder_and_developer_initCustomSwiper(".mySwiper2", "news-box", "news-inner-box", ".news-swiper-pagination");

});
