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
function makeTimer() {
  jQuery('.owl-timer').each(function(){
      var endTimeValue = jQuery(this).attr('data-end-time');
      var endTime = new Date(endTimeValue);

      var now = new Date();

      var timeDiff = endTime.getTime() - now.getTime();
      
      var hours = Math.floor(timeDiff / (1000 * 60 * 60));
      var minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);


      if (hours < "10") { hours = "0" + hours; }
      if (minutes < "10") { minutes = "0" + minutes; }
      if (seconds < "10") { seconds = "0" + seconds; }

      jQuery(this).find(".owl-hours").html(hours);
      jQuery(this).find(".owl-minutes").html(minutes);
      jQuery(this).find(".owl-seconds").html(seconds);
  });

}
function initMenu(){
  jQuery('.site-nav').find('li').each(function () {
    let obj = jQuery(this);
    //obj.addClass('menu-item');
    if(obj.children('ul').length > 0) {
     let ul =obj.children('ul');
     let button = `<button type="button" class="btn-less btn-toggle-menu">
     <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
     <path d="M3 6L8 11L13 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
     </svg>            
     </button>`;
     obj.append(button);
     obj.addClass('has-children');
     //ul.addClass('sub-menu');
     ul.css('display', 'none');
    }
  });
}
function transparentHeaderClick(){
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  var headerHeight = document.querySelector('.header-wrapper').offsetHeight;
  var siteHeader = document.querySelector('.site-header');

  if (jQuery('.site-header').attr('data-type') == 'transparent' && scrollTop < headerHeight) {
    if (jQuery('.site-header').hasClass('header-transparent')) {
        siteHeader.classList.remove('header-transparent');
    } else {
        siteHeader.classList.add('header-transparent');
    }
  }

}
function transparentHeaderScroll(){
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  var headerHeight = document.querySelector('.header-wrapper').offsetHeight;
  var siteHeader = document.querySelector('.site-header');
  if (siteHeader.getAttribute('data-type') === 'transparent') {
      if (scrollTop > headerHeight) {
          siteHeader.classList.remove('header-transparent');
      } else {
          siteHeader.classList.add('header-transparent');
      }
  }

}

function dotThumbnail(obj,length,ratio){
  var target_dots = obj.find('.slick-dots');
  var rows = Math.ceil(length/3);
  var windowWidth = jQuery(window).width();
  target_dots.addClass('custom-scrollbar');
  var target_dot_li = obj.find('.slick-dots li');
  target_dot_li.each(function() {
    var dot = jQuery(this);
    var slide = dot.find('button').attr('aria-controls');
    var thumb = obj.find('.theme-slider-item[id="' + slide + '"] img').attr('src');
    if (thumb) {
      dot.html('<img src="' + thumb + '" alt="Slide Thumbnail" />');
    }
  });
  if(windowWidth > 992 && rows > 4 && ratio == "true"){
    target_dots.css('aspect-ratio', '295 / 505');
  }
}

initMenu();


//Default show modal
// const modalAccount = new bootstrap.Modal('#modal-book-success', {
//   keyboard: false
// })
//modalAccount.show();

//refresh slider when open modal
jQuery('#modal-hotel-gallery').on('show.bs.modal', function () {
  jQuery('#modal-hotel-gallery').find('.theme-slider').slick('refresh');
});
jQuery('#modal-hotel-book').on('show.bs.modal', function () {
  jQuery('#modal-hotel-book').find('.theme-slider').slick('refresh');
});




jQuery(document).ready(function () {
  transparentHeaderScroll();
  //Flash sale timer
  setInterval(function() { makeTimer(); }, 1000);


  //Filter toggle title
  jQuery(document).on("click", ".toggle-filter-group", function (e) {
    e.preventDefault();
    jQuery(this).toggleClass("active");
    jQuery(this).next(".filter-group-items").slideToggle();
    
  });

  //Filter price
  var formatter = new Intl.NumberFormat('vi-VN', {
      style: 'currency',
      currency: 'VND'
  });

  let rangeMin = 100;
  const range = document.querySelector(".range-selected");
  const rangeInput = document.querySelectorAll(".range-input input");
  rangeInput.forEach((input) => {
    input.addEventListener("input", (e) => {
      let minRange = parseInt(rangeInput[0].value);
      let maxRange = parseInt(rangeInput[1].value);
      if (maxRange - minRange < rangeMin) {     
        if (e.target.className === "min") {
          rangeInput[0].value = maxRange - rangeMin;        
        } else {
          rangeInput[1].value = minRange + rangeMin;        
        }
      } else {
        jQuery(".range-price-min").html(formatter.format(minRange));
        jQuery(".range-price-max").html(formatter.format(maxRange));
        range.style.left = (minRange / rangeInput[0].max) * 100 + "%";
        range.style.right = 100 - (maxRange / rangeInput[1].max) * 100 + "%";
      }
    });
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
    jQuery(document).mouseup(function(e) {
      var container = jQuery(".collection-filter-container");
      if (jQuery('.collection-filter').hasClass("active")) {
          if (!container.is(e.target) // if the target of the click isn't the container...
              &&
              container.has(e.target).length === 0) // ... nor a descendant of the container
          {
            jQuery(".collection-filter").removeClass("active");
            toggleScrolling(false);
          }
      }
  });

  //Menu
  jQuery(document).on('click','#menu-trigger', function(e){
    let obj = jQuery(this);

    transparentHeaderClick();

    if(!obj.hasClass('open')){
        jQuery('.horizontal-menu').addClass('active');
        jQuery('.header-center').addClass('active');
        jQuery(this).addClass('open');
        toggleScrolling(true);
        jQuery('.horizontal-menu .nav-bar').slideDown();
    }else{
        jQuery('.horizontal-menu').removeClass('active');
        jQuery('.header-center').removeClass('active');
        jQuery(this).removeClass('open');
        toggleScrolling(false);
        jQuery('.horizontal-menu .nav-bar').slideUp();
    }
  });

  jQuery(document).on("click", ".btn-toggle-menu", function (e) {
    e.preventDefault();
    let windowWidth = $(window).width();
    if(windowWidth < 1200){
      let btn = jQuery(this);
      let li = btn.parent();
      let ul = li.children('ul');
      btn.toggleClass('active');
      ul.slideToggle();
    }
  });


  jQuery(document).mouseup(function(e) {
    var container = jQuery(".horizontal-menu");
    var menuTrigger = jQuery("#menu-trigger");
    if (container.hasClass("active")) {
        if (
            !container.is(e.target) // if the target of the click isn't the container...
            &&
            container.has(e.target).length === 0
            &&
            !menuTrigger.is(e.target) // if the target of the click isn't the menuTrigger...
            &&
            menuTrigger.has(e.target).length === 0
          ) // ... nor a descendant of the container
        {
          jQuery('.horizontal-menu').removeClass('active');
          jQuery('.header-center').removeClass('active');
          jQuery('#menu-trigger').removeClass('open');
          toggleScrolling(false);
          jQuery('.horizontal-menu .nav-bar').slideUp();
          transparentHeaderClick();
        }
    }
});

  // Password input
  jQuery(document).on("click", ".toggle-icons--password", function () {
    let obj = jQuery(this);
    let input = jQuery(this).parent().find('input');
    obj.toggleClass('active');
    input.attr('type', input.attr('type') == 'password' ? 'text' : 'password');
  });

  // Modal account
  jQuery(document).on("click", ".toggle-modal-account", function () {
    let target = jQuery(this).attr("data-target-tab");
    jQuery('[data-bs-target="' + target + '"]').tab("show");
  });

  //Header top bar
  let topBarClose = document.querySelector('.header-top-close');
  if(topBarClose){
    topBarClose.addEventListener("click", function () {
      var headerTop = document.querySelector('.header-top');
      if (headerTop) {
          headerTop.parentNode.removeChild(headerTop);
      }
    });
  }


  //Read more
  if (jQuery(".read-more-area").length != 0) {
    jQuery(".read-more-area").each(function name() {
      let obj = jQuery(this);
      let inner = obj.find('.detail-read-more-inner');
      let content = obj.find(".read-more-area-content");
      if(obj.hasClass("read-more-area-by-item")){
        obj.find(".read-more-area-actions").show();
        let max = Number(inner.attr("data-max-items"));
        content.children().each(function(){
          let contentItem = jQuery(this);
          let index = contentItem.index() + 1;
          if(index > max){
            contentItem.hide();
          }
        });
      }else{
        
        let height = inner.height();
        let contentHeight = content.height();
        if (contentHeight > height) {
          obj.find(".read-more-area-actions").show();
        }
      }
    });
  }
  jQuery(document).on("click", ".read-more-area-btn", function (e) {
    e.preventDefault();
    let obj = jQuery(this);
    let area = obj.parents(".read-more-area");
    let inner = area.find('.detail-read-more-inner');

    if(area.hasClass("read-more-area-by-item")){
      let content = area.find(".read-more-area-content");
      let max = Number(inner.attr("data-max-items"));
      if (area.hasClass("is-show-full-content")) {
        area.removeClass("is-show-full-content");
        content.children().each(function(){
          let contentItem = jQuery(this);
          let index = contentItem.index() + 1;
          if(index > max){
            contentItem.hide();
          }
        });
      } else {
        area.addClass("is-show-full-content");
        content.children().show();
      }
    }else{
      let maxHeight = inner.data("max-height");
      if (area.hasClass("is-show-full-content")) {
        area.removeClass("is-show-full-content");
        inner.css("max-height", maxHeight);
      } else {
        area.addClass("is-show-full-content");
        inner.css("max-height", "100%");
      }
    }
  });

  // collapse
  jQuery(document).on("click", ".owl-collapse-header", function (e) {
    e.preventDefault();
    let obj = jQuery(this);
    let collapse = obj.parent();
    let collapseContent = obj.next();

    collapse.toggleClass('active');
    collapseContent.slideToggle();
  });




  //theme-slider
  jQuery(".theme-slider").each(function () {
    let obj = jQuery(this);
    var itemLength = obj.find('.theme-slider-item').length;
    let item = Number(obj.attr("data-item"));
    let itemSm = Number(obj.attr("data-item-sm"));
    let itemMd = Number(obj.attr("data-item-md"));
    let itemLg = Number(obj.attr("data-item-lg"));
    let itemXl = Number(obj.attr("data-item-xl"));
    let autoplay = obj.attr("data-autoplay") ? obj.attr("data-autoplay") : 'false';
    let autoplaySpeed = obj.attr("data-autoplay-speed") ? Number(obj.attr("data-autoplay-speed")) : 6000;
    let infinite = obj.attr("data-infinite") ? obj.attr("data-infinite") : 'true';
    let variableWidth = obj.attr("data-variable-width") ? obj.attr("data-variable-width") : 'false';
    let customNav = obj.attr("data-custom-nav") ? obj.attr("data-custom-nav") : 'false';
    let dots = obj.attr("data-dots") ? obj.attr("data-dots") : 'false';
    let thumb = obj.attr("data-dot-thumb") ? obj.attr("data-dot-thumb") : 'false';
    let ratio = obj.attr("data-ratio") ? obj.attr("data-ratio") : 'false';
    let gap = obj.attr("data-gap") ? obj.attr("data-gap") : 'false';
    let sliderItem = obj.find(".theme-slider-item");
    let mainGap = Number(gap) / 2 * -1;
    let itemGap = Number(gap) / 2;
    obj.css('margin-left',mainGap+'px').css('margin-right',mainGap+'px');
    sliderItem.css('margin-left',itemGap+'px').css('margin-right',itemGap+'px');

    let navPrev = obj.parents('.theme-slider-outer').find('.owl-nav-prev');
    let navNext = obj.parents('.theme-slider-outer').find('.owl-nav-next');
    obj.on("init", function (event, slick) {
      // Show images after the slider is initialized
      obj.find('[data-show-later="true"]').css("display", "block");

   
    });
    obj.on(
        "init reInit afterChange",
        function (event, slick, currentSlide, nextSlide) {
            if(obj.parents('.theme-slider-outer').hasClass('hotel-card-slider-nav')){
              let sliderItemHeight = obj.parents('.theme-slider-outer').find('.theme-slider-item').first().find('.hotel-card-thumb').height();
              obj.parents('.theme-slider-outer').find('.owl-nav-item').css('top', sliderItemHeight/2);
            }
            if(obj.parents('.theme-slider-outer').hasClass('news-card-slider-nav')){
              let sliderItemHeight = obj.parents('.theme-slider-outer').find('.theme-slider-item').first().find('.news-card-thumb').height();
              obj.parents('.theme-slider-outer').find('.owl-nav-item').css('top', sliderItemHeight/2);
            }
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
    obj.on(
        "reInit afterChange",
        function (event, slick, currentSlide, nextSlide) {
            if(thumb == "true"){
              dotThumbnail(obj,itemLength,ratio);
            }
        }
    );
    obj.slick({
        infinite: infinite == 'true' ? true : false,
        slidesToShow: itemXl,
        slidesToScroll: itemXl,
        dots: dots == 'true' ? true : false,
        arrows: false,
        autoplay: autoplay == 'true' ? true : false,
        autoplaySpeed: autoplaySpeed,
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
      
    
    if(thumb == "true"){
      dotThumbnail(obj,itemLength,ratio);
    }

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
    //Thumbs: false,
  });


  


  //  datetimepicker
  $.datetimepicker.setLocale('vi');
  $.datetimepicker.setDateFormatter('moment');
  moment.locale('vi');

  var today = moment();
  var next = moment().add(1, 'days');
  

  function countDate(target, form, to) {
    var count = to.diff(form, 'days');
    target.html(count);
  }
  countDate(jQuery('.hotel-day-count-value'),today, next);
  countDate(jQuery('.resort-day-count-value'),today, next);
  
  jQuery('#book-date-from').datetimepicker({
    timepicker: false,
    format:'ddd, DD/MM/YYYY',
    value: today.format('ddd, DD/MM/YYYY'),
    minDate: 0,
    onShow:function( ct ){
      this.setOptions({
       maxDate:jQuery('#book-date-to').val()?moment($('#book-date-to').datetimepicker('getValue')).format('YYYY/MM/DD'):false
      })
     },
     onSelectDate:function(ct,$i){
        let dateFrom = moment(ct);
        let dateTo = moment($('#book-date-to').datetimepicker('getValue'));
        countDate(jQuery('.hotel-day-count-value'),dateFrom, dateTo);
    }
  });
  
  jQuery('#book-date-to').datetimepicker({
    timepicker: false,
    format:'ddd, DD/MM/YYYY',
    value: next.format('ddd, DD/MM/YYYY'),
    onShow:function( ct ){
      this.setOptions({
       minDate:jQuery('#book-date-from').val()?moment($('#book-date-from').datetimepicker('getValue')).format('YYYY/MM/DD'):false
      })
     },
     onSelectDate:function(ct,$i){
      let dateFrom = moment($('#book-date-from').datetimepicker('getValue'));
      let dateTo = moment(ct);
      countDate(jQuery('.hotel-day-count-value'),dateFrom, dateTo);
    } 
  });
  

  jQuery('#resort-book-date-from').datetimepicker({
    timepicker: false,
    format:'ddd, DD/MM/YYYY',
    value: today.format('ddd, DD/MM/YYYY'),
    minDate: 0,
    onShow:function( ct ){
      this.setOptions({
       maxDate:jQuery('#resort-book-date-to').val()?moment($('#resort-book-date-to').datetimepicker('getValue')).format('YYYY/MM/DD'):false
      })
     },
     onSelectDate:function(ct,$i){
        let dateFrom = moment(ct);
        let dateTo = moment($('#resort-book-date-to').datetimepicker('getValue'));
        countDate(jQuery('.resort-day-count-value'),dateFrom, dateTo);
    }
  });
  
  jQuery('#resort-book-date-to').datetimepicker({
    timepicker: false,
    format:'ddd, DD/MM/YYYY',
    value: next.format('ddd, DD/MM/YYYY'),
    onShow:function( ct ){
      this.setOptions({
       minDate:jQuery('#resort-book-date-from').val()?moment($('#resort-book-date-from').datetimepicker('getValue')).format('YYYY/MM/DD'):false
      })
     },
     onSelectDate:function(ct,$i){
      let dateFrom = moment($('#resort-book-date-from').datetimepicker('getValue'));
      let dateTo = moment(ct);
      countDate(jQuery('.resort-day-count-value'),dateFrom, dateTo);
    } 
  });



});

window.addEventListener("scroll", function () {
  transparentHeaderScroll();
});

function scrollToTarget(target) {
    var href = target.attr("href");
    var id = href.replace('#', '');
    jQuery('.scroll-target-item').removeClass('active');
    jQuery('#' + id).addClass('active');
    offsetTop = href === "#" ? 0 : jQuery(href).offset().top - topMenuHeight + fixPx;
    jQuery('html, body').stop().animate({
        scrollTop: offsetTop - fixPx
    }, 300);
}


jQuery(document).on("click", ".detail-link-target", function (e) {
  e.preventDefault();
  scrollToTarget(jQuery(this));
});

var lastId,
    topMenu = jQuery("#detail-nav"),
    fixPx = topMenu.outerHeight(),
    topMenuHeight = topMenu.outerHeight() + fixPx,
    // All list items
    menuItems = topMenu.find(".detail-nav-item"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function() {
        var item = jQuery(jQuery(this).attr("href"));
        if (item.length) { return item; }
    });

menuItems.click(function(e) {
  e.preventDefault();
  scrollToTarget(jQuery(this));
});

jQuery(window).scroll(function () {
  var fromTop = jQuery(this).scrollTop() + topMenuHeight;
  var cur = scrollItems.map(function() {
      if (jQuery(this).offset().top - fixPx < fromTop){
          return this;
      }
  });
  cur = cur[cur.length - 1];
  var id = cur && cur.length ? cur[0].id : "detail-general";
  //default active menu detail-general
  if (lastId !== id) {
      lastId = id;
      menuItems.removeClass("active")
      menuItems.filter("[href='#" + id + "']").addClass("active");
  } else {

  }
})