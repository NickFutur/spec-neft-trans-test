const bannerSlider = new Swiper("#js-banner-slider", {
  // Optional parameters
  direction: "horizontal",
  loop: true,
  autoplay: false,
  slidesPerView: 1,
  slidesPerGroup: 1,
  //   // Navigation arrows
  navigation: {
    nextEl: ".banner-pagination__btn-next",
    prevEl: ".banner-pagination__btn-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    type: "custom",
    renderCustom: function (bannerSlider, current, total) {
      return `<span class="pagination-current">${("0" + current).slice(
        -2
      )}</span>/<span class="pagination-total">${("0" + total).slice(
        -2
      )}</span>`;
    },
  },
  //   breakpoints: {
  //     0: {
  //       direction: "vertical",
  //       slidesPerView: 3,
  //       slidesPerView: 3,
  //       slidesPerGroup: 3,
  //     },
  //     481: {
  //       direction: "horizontal",
  //       slidesPerView: 1,
  //       slidesPerView: 1,
  //       spaceBetween: 15,
  //       slidesPerGroup: 1,
  //     },
  //     850: {
  //       slidesPerView: 2,
  //       slidesPerView: 2,
  //       slidesPerGroup: 2,
  //     },
  //     1250: {
  //       slidesPerView: 3,
  //       spaceBetween: 35,
  //       slidesPerGroup: 3,
  //     },
  //   },
});
bannerSlider.on("slideChange", function () {
  bannerSlider.pagination.render();
});
