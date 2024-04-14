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
function searchAjax(inputData, targetDiv) {
  jQuery.ajax({
    type: "POST",
    async: true,
    url: "",
    data: {
      action: "liveSearchFilter",
      data: inputData,
    },
    beforeSend: function () {
      targetDiv.parent().children("form").addClass("is-loading");
    },
    success: function (data) {
      targetDiv.parent().children("form").removeClass("is-loading");
      targetDiv.addClass("active");
      targetDiv.html(data);
    },
  });
}
function liveSearchDelay(callback, ms) {
  var timer = 0;
  return function () {
    var context = this,
      args = arguments;
    clearTimeout(timer);
    timer = setTimeout(function () {
      callback.apply(context, args);
    }, ms || 0);
  };
}
function liveSearch(searchInput, searchResultsDiv) {
  searchResultsDiv = searchResultsDiv.parent();
  //On focus in search box, if has value, show search result
  searchInput.on("focus", function () {
    let val = jQuery(this).val();
    if (val != "") {
      searchResultsDiv.addClass("active");
    }
  });
  searchInput.on(
    "keyup",
    liveSearchDelay(function (e) {
      //if key != enter, ArrowUp, ArrowDown
      if (e.which !== 38 && e.which !== 40 && e.which !== 13) {
        let text = jQuery(this).val().toLowerCase();

        if (text != "" && text.length >= 1) {
          //searchAjax(text,searchResultsDiv)
          searchResultsDiv.addClass("active");
        } else {
          searchResultsDiv.removeClass("active");
        }
      }
    }, 300)
  );
  //On click outside of the search result
  jQuery(document).mouseup(function (e) {
    if (
      !searchResultsDiv.is(e.target) &&
      searchResultsDiv.has(e.target).length === 0 &&
      !searchInput.is(e.target) &&
      searchInput.has(e.target).length === 0
    ) {
      searchResultsDiv.removeClass("active");
    }
  });
}
function copyToClipboard(text,target) {
  // Create a temporary textarea element
  const textarea = document.createElement('textarea');
  textarea.value = text;

  // Make sure it's not visible
  textarea.style.position = 'fixed';
  textarea.style.opacity = 0;

  // Append the textarea to the DOM
  document.body.appendChild(textarea);

  // Select the text within the textarea
  textarea.select();

  try {
    // Copy the selected text to the clipboard
    document.execCommand('copy');
    target.text('Text copied to clipboard');
    setTimeout(function() {
      target.text(text);
    },1000);
  } catch (err) {
    target.text('Unable to copy text to clipboard');
    setTimeout(function() {
      target.text(text);
    },1000);
  }

  // Clean up: remove the textarea from the DOM
  document.body.removeChild(textarea);
}


jQuery(document).ready(function () {
  //Copy text
  jQuery(document).on("click", ".copy-to-clipboard", function (e) {
    e.preventDefault();
    let obj = jQuery(this); 
    let target = obj.attr("data-target");
    let text = jQuery(target).text();
    copyToClipboard(text,jQuery(target));
  });

  //collapse
  jQuery(document).on("click", '[data-bs-toggle="collapse"]', function (e) {
    e.preventDefault();
    let obj = jQuery(this); 
    let target = obj.next(".collapse-content");
    if(obj.hasClass("active")) {
      obj.removeClass("active");
      target.slideUp('fast');
    }else{
      obj.addClass("active");
      target.slideDown('fast');
    }
  });

  //header-search
  jQuery(document).on("click", ".header-search", function (e) {
    e.preventDefault();
    jQuery(".header-search-desktop-outer").addClass("active");
    jQuery(".header-search-overlay").addClass("active");
    toggleScrolling(true);
  });
  jQuery(document).on(
    "click",
    ".header-search-desktop-outer .modal-close",
    function (e) {
      e.preventDefault();
      jQuery(".header-search-desktop-outer").removeClass("active");
      jQuery(".header-search-overlay").removeClass("active");
      toggleScrolling(false);
    }
  );

  jQuery(document).on("click", ".header-search-desktop-clear", function (e) {
    e.preventDefault();
    jQuery(".header-search-desktop").removeClass("active");
    jQuery(".header-search-desktop-input").val("");
  });

  //header-search input
  liveSearch(
    jQuery(".header-search-desktop-input"),
    jQuery(".header-search-result-outer")
  );

  //Read more
  if (jQuery(".read-more-area").length != 0) {
    jQuery(".read-more-area").each(function name() {
      let obj = jQuery(this);
      let inner = obj.find('.detail-read-more-inner');
      let height = inner.height();
      let contentHeight = obj.find(".read-more-area-content").height();
      if (contentHeight > height) {
        obj.find(".read-more-area-actions").show();
      }
    });
  }
  jQuery(document).on("click", ".read-more-area-btn", function (e) {
    e.preventDefault();
    let obj = jQuery(this);
    let area = obj.parents(".read-more-area");
    let inner = area.find('.detail-read-more-inner');
    let maxHeight = inner.data("max-height");
    if (area.hasClass("is-show-full-content")) {
      area.removeClass("is-show-full-content");
      inner.css("max-height", maxHeight);
    } else {
      area.addClass("is-show-full-content");
      inner.css("max-height", "100%");
    }
  });

  //Dropdown
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
      if (!dropdown.is(e.target) && dropdown.has(e.target).length === 0) {
        container.removeClass("active");
      }
    }
  });

  //MENU
  jQuery(document).on("click", ".menu-toggle", function (e) {
    e.preventDefault();
    jQuery(".horizontal-menu").addClass("active");
    jQuery(".header-center").addClass("active");
    toggleScrolling(true);
  });
  jQuery(document).on("click", ".menu-close", function (e) {
    e.preventDefault();
    jQuery(".horizontal-menu").removeClass("active");
    jQuery(".header-center").removeClass("active");
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
  jQuery(document).on(
    "click",
    ".sub-menu-mobile .menu-mb-title .icon-dropdown",
    function (e) {
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
    }
  );

  //Tab
  jQuery(document).on("click", ".tab-heading-item:not(.active)", function (e) {
    e.preventDefault();
    let obj = jQuery(this);
    let id = obj.attr("data-target");
    obj.parent().find(".tab-heading-item").removeClass("badge-active");
    obj.addClass("badge-active");

    let target = jQuery(document).find(".tab-content").find(id);
    target.parent().find(".tab-content-item").removeClass("active");
    target.addClass("active");
  });

  //Modal
  jQuery(document).on("click", '[data-toggle="owl-modal"]', function (e) {
    e.preventDefault();
    console.log("xxx");
    let obj = jQuery(this);
    let modal = obj.attr("data-modal");
    jQuery(modal).addClass("active");
    toggleScrolling(true);
  });
  jQuery(document).on("click", ".modal-close", function (e) {
    e.preventDefault();
    jQuery(this).parents(".owl-modal").removeClass("active");
    toggleScrolling(false);
  });

  //wishlist
  jQuery(document).on("click", ".wishlist-btn", function (e) {
    e.preventDefault();
    jQuery(this).toggleClass("active");
  });

  //theme-slider

  jQuery(".theme-slider").each(function () {
    let obj = jQuery(this);
    let item = Number(obj.attr("data-item"));
    let itemSm = Number(obj.attr("data-item-sm"));
    let itemMd = Number(obj.attr("data-item-md"));
    let itemLg = Number(obj.attr("data-item-lg"));
    let itemXl = Number(obj.attr("data-item-xl"));
    let autoplay = obj.attr("data-autoplay") ? obj.attr("data-autoplay") : 'false';
    let infinite = obj.attr("data-infinite") ? obj.attr("data-infinite") : 'true';
    let variableWidth = obj.attr("data-variable-width") ? obj.attr("data-variable-width") : 'false';
    let customNav = obj.attr("data-custom-nav") ? obj.attr("data-custom-nav") : 'false';

    let navPrev = obj.parents('.theme-slider-outer').find('.owl-nav-prev');
    let navNext = obj.parents('.theme-slider-outer').find('.owl-nav-next');
    obj.on("init", function (event, slick) {
      // Show images after the slider is initialized
      obj.find('[data-show-later="true"]').css("display", "block");
    });
    obj.on(
        "init reInit afterChange",
        function (event, slick, currentSlide, nextSlide) {
            if(customNav == 'true') {
                var i = currentSlide ? currentSlide : 0;
                var slidesToShow = slick.options.slidesToShow || 1; // Default to 1 if not set
                var slidesToScroll = slick.options.slidesToScroll || 1; // Default to 1 if not set
                var totalSlides = slick.slideCount;
                // Check if it's the first slide
                if (i === 0) {
                    navPrev.addClass('is-hidden');
                }else{
                    navPrev.removeClass('is-hidden');
                }
            
                // Check if it's the last slide
                if (i >= totalSlides - slidesToShow && i % slidesToScroll === 0) {
                    navNext.addClass('is-hidden');
                }else{
                    navNext.removeClass('is-hidden');
                }
            }
        }
    );
    obj.slick({
        infinite: infinite == 'true' ? true : false,
        slidesToShow: itemXl,
        slidesToScroll: itemXl,
        dots: false,
        arrows: false,
        autoplay: autoplay == 'true' ? true : false,
        autoplaySpeed: 3000,
        variableWidth: variableWidth == 'true' ? true : false,
        responsive: [
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: itemLg,
              slidesToScroll: itemLg
            }
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: itemMd,
              slidesToScroll: itemMd
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: itemSm,
              slidesToScroll: itemSm
            }
          },
          {
            breakpoint: 575,
            settings: {
              slidesToShow: item,
              slidesToScroll: item
            }
          }
        ]
    });

    navPrev.click(function (e) {
        e.preventDefault();
        obj.slick("slickPrev");
    });
    navNext.click(function (e) {
        e.preventDefault();
        obj.slick("slickNext");
    });

    
  });



  Fancybox.bind("[data-fancybox]", {
    Thumbs: false,
  });
});

jQuery(window).scroll(function () {
  //let scrollTop = jQuery(this).scrollTop();
});
