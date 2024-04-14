function toggleScrolling(state) {
  // lock scroll position, but retain settings for later
  var scrollPosition = [
    self.pageXOffset ||
      document.documentElement.scrollLeft ||
      document.body.scrollLeft,
    self.pageYOffset ||
      document.documentElement.scrollTop ||
      document.body.scrollTop,
  ];
  if (state == true) {
    var html = jQuery("html"); // it would make more sense to apply this to body, but IE7 won't have that
    html.data("scroll-position", scrollPosition);
    html.data("previous-overflow", html.css("overflow"));
    html.css("overflow", "hidden");
    window.scrollTo(scrollPosition[0], scrollPosition[1]);
  } else {
    // un-lock scroll position
    var html = jQuery("html");
    var scrollPosition = html.data("scroll-position");
    html.css("overflow", html.data("previous-overflow"));
    if (scrollPosition) {
      window.scrollTo(scrollPosition[0], scrollPosition[1]);
    }
  }
}

function readMoreInit(){
  if (jQuery(".read-more-area:not(.read-more-initialized)").length != 0) {
    jQuery(".read-more-area:not(.read-more-initialized)").each(function name() {
      let obj = jQuery(this);
      let height = obj.outerHeight();
      let contentHeight = obj.find(".read-more-area-content").outerHeight();
      if (contentHeight > height) {
        obj.find(".read-more-area-actions").show();
      }
      obj.addClass('read-more-initialized');
    });
  }
}


jQuery(document).ready(function () {

  jQuery('.current-language-flag').on('click', function(e) {
      e.preventDefault();
      jQuery(this).parent().toggleClass('active');
  });

  //Table
  jQuery(document)
    .find("table")
    .each(function () {
      let obj = jQuery(this);
      obj.removeAttr("style");
      obj.find("tr").removeAttr("style");
      obj.find("td").removeAttr("style");
      obj.wrap('<div class="table-responsive custom-scrollbar"></div>');
    });

  //header-search
  jQuery(document).on("click", ".header-search", function (e) {
    e.preventDefault();
    jQuery(".theme-overlay").addClass("active");
    jQuery(".header-search-dropdown").addClass("active");
    toggleScrolling(true);
  });
  jQuery(document).on("click", ".header-search-close", function (e) {
    e.preventDefault();
    jQuery(".theme-overlay").removeClass("active");
    jQuery(".header-search-dropdown").removeClass("active");
    toggleScrolling(false);
  });

  //Menu
  jQuery(".menu-toggle").click(function (e) {
    e.preventDefault();
    jQuery(".horizontal-menu").addClass("active");
    toggleScrolling(true);
  });
  jQuery(".menu-close").click(function (e) {
    e.preventDefault();
    jQuery(".horizontal-menu").removeClass("active");
    toggleScrolling(false);
  });
  jQuery(document).on(
    "click",
    ".horizontal-menu.active .menu-dropdown > a",
    function (e) {
      e.preventDefault();
      jQuery(this).parent(".menu-dropdown").addClass("active");
      jQuery(this)
        .parent()
        .parent()
        .children("li:not(.active)")
        .addClass("is-hide");
      if (jQuery(this).parent().hasClass("menu-lv-2")) {
        jQuery(this).parents(".menu-lv-1").addClass("is-show-level-2");
      }
    }
  );
  jQuery(".sub-menu-mobile .menu-mb-title .icon-dropdown").click(function (e) {
    e.preventDefault();
    jQuery(this).parent().parent().parent().removeClass("active");
    jQuery(this)
      .parent()
      .parent()
      .parent()
      .parent()
      .children("li:not(.active)")
      .removeClass("is-hide");
    if (jQuery(this).parent().parent().parent().hasClass("menu-lv-2")) {
      jQuery(this).parents(".menu-lv-1").removeClass("is-show-level-2");
    }
  });

  //Toggle Content
  jQuery(document).on("click", ".icon-toggle", function (e) {
    e.preventDefault();
    jQuery(this).toggleClass("icon-toggle-plus icon-toggle-minus");
  });
  jQuery(document).on("click", ".footer-widget-toggle", function (e) {
    e.preventDefault();
    jQuery(this).parent().next(".footer-widget-content").slideToggle("fast");
  });

  //Top
  jQuery(".go-to-top-btn").click(function (e) {
    e.preventDefault();
    jQuery("body,html").animate(
      {
        scrollTop: 0,
      },
      500
    );
    return false;
  });

  //home-slider
  let homeSlider = jQuery(".home-hero-slider");
  if (homeSlider.length != 0) {
    jQuery(".home-hero-inner .owl-nav-prev").click(function (e) {
      e.preventDefault();
      homeSlider.slick("slickPrev");
    });
    jQuery(".home-hero-inner .owl-nav-next").click(function (e) {
      e.preventDefault();
      homeSlider.slick("slickNext");
    });
    homeSlider.on("init", function (event, slick) {
      // Show images after the slider is initialized
      jQuery(this).find("img").css("display", "block");
    });
    homeSlider.slick({
      infinite: true,
      //centerMode: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      arrows: false,
      //variableWidth: true
    });
  }

  //featuredSearch-slider
  let featuredSearch = jQuery(".feature-search-slider");
  if (featuredSearch.length != 0) {
    jQuery(".feature-search-inner .owl-nav-prev").click(function (e) {
      e.preventDefault();
      featuredSearch.slick("slickPrev");
    });
    jQuery(".feature-search-inner .owl-nav-next").click(function (e) {
      e.preventDefault();
      featuredSearch.slick("slickNext");
    });
    featuredSearch.slick({
      infinite: true,
      //centerMode: true,
      slidesToShow: 6,
      slidesToScroll: 6,
      dots: false,
      arrows: false,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 5,
          },
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
          },
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          },
        },
        {
          breakpoint: 575,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
      ],
    });
  }

  //featuredSearch-slider
  let featuredBrand = jQuery(".feature-brand-slider");
  if (featuredBrand.length != 0) {
    jQuery(".feature-brand-inner .owl-nav-prev").click(function (e) {
      e.preventDefault();
      featuredBrand.slick("slickPrev");
    });
    jQuery(".feature-brand-inner .owl-nav-next").click(function (e) {
      e.preventDefault();
      featuredBrand.slick("slickNext");
    });
    featuredBrand.slick({
      infinite: true,
      //centerMode: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      dots: false,
      arrows: false,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
        {
          breakpoint: 575,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
  }
  //local-store-slider
  let localStore = jQuery(".local-store-slider");
  if (localStore.length != 0) {
    localStore.slick({
      infinite: true,
      centerMode: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      dots: false,
      arrows: false,
      //variableWidth: true,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: false,
            dots: true,
          },
        },
      ],
      asNavFor: ".local-store-nav-slider",
    });
    jQuery(".local-store-nav-slider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: ".local-store-slider",
      dots: false,
      fade: true,
      arrows: false,
    });
  }

  //featuredSearch-slider
  let homeProducts = jQuery(".home-products-slider");
  if (homeProducts.length != 0) {
    homeProducts.each(function () {
      let currentProduct = jQuery(this);

      currentProduct
        .parent()
        .find(".owl-nav-prev")
        .click(function (e) {
          e.preventDefault();
          currentProduct.slick("slickPrev");
        });
      currentProduct
        .parent()
        .find(".owl-nav-next")
        .click(function (e) {
          e.preventDefault();
          currentProduct.slick("slickNext");
        });
      currentProduct.slick({
        infinite: true,
        //centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 5,
        dots: false,
        arrows: false,
        responsive: [
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4,
            },
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
            },
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            },
          },
          {
            breakpoint: 575,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            },
          },
        ],
      });
    });
  }

  //Chart
  if (jQuery("#home-chart-canvas").length != 0) {
    const homeChartCanvas = document.getElementById("home-chart-canvas");
    const homeChartConfig = {
      type: "line",
      data: {
        datasets: [
          {
            data: [
              { x: "1/11", y: 7100000 },
              { x: "4/11", y: 6950000 },
              { x: "7/11", y: 7000000 },
              { x: "10/11", y: 7000000 },
              { x: "13/11", y: 7100000 },
              { x: "16/11", y: 7100000 },
              { x: "19/11", y: 7150000 },
              { x: "22/11", y: 7150000 },
              { x: "25/11", y: 7200000 },
              { x: "28/11", y: 7300000 },
            ],
            borderColor: "#00CA45",
            borderWidth: 2,
            pointBorderWidth: 0,
            pointHitRadius: 0,
            pointRadius: 0,
          },
          {
            data: [
              { x: "1/11", y: 7000000 },
              { x: "4/11", y: 6850000 },
              { x: "7/11", y: 6900000 },
              { x: "10/11", y: 6900000 },
              { x: "13/11", y: 7000000 },
              { x: "16/11", y: 7000000 },
              { x: "19/11", y: 7050000 },
              { x: "22/11", y: 7050000 },
              { x: "25/11", y: 7100000 },
              { x: "28/11", y: 7200000 },
            ],
            borderColor: "#A02D33",
            borderWidth: 2,
            pointBorderWidth: 0,
            pointHitRadius: 0,
            pointRadius: 0,
          },
        ],
      },
      options: {
        locale: "vi-VN",
        responsive: true,
        plugins: {
          legend: {
            display: false,
          },
        },
        scales: {
          y: {
            //: 'linear',
            display: true,
            position: "right",
          },
        },
      },
    };
    new Chart(homeChartCanvas, homeChartConfig);
  }
  //timelineSlider-slider
  let timelineSlider = jQuery(".timeline-slider");
  if (timelineSlider.length != 0) {
    jQuery(".timeline-inner .owl-nav-prev").click(function (e) {
      e.preventDefault();
      timelineSlider.slick("slickPrev");
    });
    jQuery(".timeline-inner .owl-nav-next").click(function (e) {
      e.preventDefault();
      timelineSlider.slick("slickNext");
    });
    timelineSlider.slick({
      infinite: true,
      //centerMode: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      dots: true,
      arrows: false,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
        {
          breakpoint: 575,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
  }

  //Custom Dropdown
  jQuery(document).on("click", ".theme-dropdown-toggle", function (e) {
    e.preventDefault();
    let dropdownContent = jQuery(this).parent().find(".theme-dropdown-content");
    if (dropdownContent.hasClass("active")) {
      dropdownContent.removeClass("active");
      jQuery(document).find(".theme-dropdown-content").removeClass("active");
    } else {
      jQuery(document).find(".theme-dropdown-content").removeClass("active");
      dropdownContent.addClass("active");
    }
  });
  jQuery(document).mouseup(function (e) {
    if (jQuery(".theme-dropdown-content.active").length != 0) {
      let dropdown = jQuery(".theme-dropdown-toggle");
      let container = jQuery(".theme-dropdown-content.active");

      // if the target of the click isn't the container nor a descendant of the container
      if (
        !container.is(e.target) &&
        container.has(e.target).length === 0 &&
        !dropdown.is(e.target) &&
        dropdown.has(e.target).length === 0
      ) {
        container.removeClass("active");
      }
    }
  });

  //Filter
  jQuery(document).on("click", ".collection-filter-open", function (e) {
    e.preventDefault();
    jQuery(".collection-filter").addClass("active");
    toggleScrolling(true);
  });
  jQuery(document).on("click", ".collection-filter-close", function (e) {
    e.preventDefault();
    jQuery(".collection-filter").removeClass("active");
    toggleScrolling(false);
  });

  //Product gallery
  jQuery(".product-gallery-for").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: true,
    asNavFor: ".product-gallery-nav",
    infinite: true,
  });

  var currentVideo = null;
  // On before slide change
  jQuery(".product-gallery-for").on(
    "beforeChange",
    function (event, slick, currentSlide, nextSlide) {
      let CurrentSlideDom = slick.$slides.eq(nextSlide);
      let id = CurrentSlideDom.attr("data-id");
      if (currentVideo != null) {
        currentVideo.postMessage(
          '{"event":"command","func":"pauseVideo","args":""}',
          "*"
        );
      }
      if (typeof id !== "undefined" && id !== false) {
        let init = CurrentSlideDom.attr("data-video-init");
        if (init != "true") {
          let html =
            '<iframe id="gallery-video-' +
            id +
            '" width="100%" height="100%" class="ratio-media" src="https://www.youtube.com/embed/' +
            id +
            '?rel=0&autoplay=1&showinfo=0&enablejsapi=1&modestbranding=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
          CurrentSlideDom.find(".gallery-video-item").html(html);
          currentVideo =
            CurrentSlideDom[0].getElementsByTagName("iframe")[0].contentWindow;
          CurrentSlideDom.attr("data-video-init", "true");
        } else {
          currentVideo =
            CurrentSlideDom[0].getElementsByTagName("iframe")[0].contentWindow;
          currentVideo.postMessage(
            '{"event":"command","func":"playVideo","args":""}',
            "*"
          );
        }
      }
    }
  );

  jQuery(".product-gallery-nav").slick({
    slidesToShow: 5,
    slidesToScroll: 5,
    asNavFor: ".product-gallery-for",
    arrows: false,
    dots: false,
    //focusOnSelect: true,
    infinite: jQuery(".product-gallery-nav-item").length > 5 ? true : false,
    vertical: true,
    responsive: [
      {
        breakpoint: 575,
        settings: {
          vertical: false,
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
    ],
  });
  jQuery(document).on(
    "click",
    ".product-gallery-for-outer .owl-nav-prev",
    function (e) {
      e.preventDefault();
      jQuery(".product-gallery-for").slick("slickPrev");
    }
  );
  jQuery(document).on(
    "click",
    ".product-gallery-for-outer .owl-nav-next",
    function (e) {
      e.preventDefault();
      jQuery(".product-gallery-for").slick("slickNext");
    }
  );
  Fancybox.bind("[data-fancybox]", {
    on: {
      "*": (fancybox, eventName) => {
        if (currentVideo != null) {
          currentVideo.postMessage(
            '{"event":"command","func":"pauseVideo","args":""}',
            "*"
          );
        }
      },
    },
  });
  //product quantity
  jQuery(document).on("click", ".product-quantity-btn", function (e) {
    e.preventDefault();
    let type = jQuery(this).hasClass("product-quantity-minus")
      ? "minus"
      : "plus";
    let input = jQuery(".product-quantity-input");
    let max = parseInt(input.attr("max"));
    let min = parseInt(input.attr("min"));
    let val = parseInt(input.val());

    if (type == "plus") {
      if (val < max) {
        val++;
        input.val(val);
      }
    } else {
      if (val > min) {
        val--;
        input.val(val);
      }
    }
  });
  jQuery(".product-quantity-input").on("input", function (e) {
    let input = jQuery(this);
    let max = parseInt(input.attr("max"));
    let min = parseInt(input.attr("min"));
    let val = parseInt(input.val());

    if (val > max) {
      val = max;
    }
    if (val < min) {
      val = min;
    }
    input.val(val);
  });
  jQuery(".cart-table-item-quantity").on("input", function (e) {
    let input = jQuery(this);
    let max = parseInt(input.attr("max"));
    let min = parseInt(input.attr("min"));
    let val = parseInt(input.val());

    if (val > max) {
      val = max;
    }
    if (val < min) {
      val = min;
    }
    input.val(val);
  });

  //review link
  jQuery(".review-target-link").click(function (e) {
    e.preventDefault();
    let id = jQuery(this).attr("href");
    let tab = jQuery(this).attr("data-tab");
    let headerHeight = jQuery("header").height();
    jQuery("html, body").animate(
      {
        scrollTop: jQuery(id).offset().top - headerHeight,
      },
      300
    );
    jQuery('[data-bs-target="' + tab + '"]').tab("show");
  });

  // read-more
  readMoreInit();
  jQuery(document).on("click", ".read-more-area-btn", function (e) {
    e.preventDefault();
    let obj = jQuery(this);
    let area = obj.parents(".read-more-area");
    let maxHeight = area.data("max-height");
    if (area.hasClass("is-show-full-content")) {
      area.removeClass("is-show-full-content");
      area.css("max-height", maxHeight);
    } else {
      area.addClass("is-show-full-content");
      area.css("max-height", "100%");
    }
  });
  jQuery('[data-bs-target="#pills-des"]').on('shown.bs.tab', function (e) {
    readMoreInit();
  })



});

jQuery(window).resize(function () {
  jQuery("html").css("overflow", "auto");
});

// jQuery(window).scroll(function () {

// });
