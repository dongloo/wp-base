
function toggleScrolling(state) {
    // lock scroll position, but retain settings for later
    var scrollPosition = [
        self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
        self.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop
    ];
    if (state == true) {
        var html = jQuery('html'); // it would make more sense to apply this to body, but IE7 won't have that
        html.data('scroll-position', scrollPosition);
        html.data('previous-overflow', html.css('overflow'));
        html.css('overflow', 'hidden');
        window.scrollTo(scrollPosition[0], scrollPosition[1]);
    } else {
        // un-lock scroll position
        var html = jQuery('html');
        var scrollPosition = html.data('scroll-position');
        html.css('overflow', html.data('previous-overflow'));
        if(scrollPosition){
            window.scrollTo(scrollPosition[0], scrollPosition[1]);
        }
    }
}

function stickyProjectHeader() {
    if(jQuery('#project-detail-nav').length !== 0) {
        let nav = jQuery('#project-detail-nav');
        let navTop = nav.offset().top;
        let top = jQuery(window).scrollTop();
        
        if(top + 68 >= navTop ){
            nav.addClass('is-sticky');
        }else{
            nav.removeClass('is-sticky'); 
        }
    }
}

function fixHeaderMenuTitle() {
    jQuery('.submenu-header-title').each(function(){
        let obj = jQuery(this);
        let text = obj.closest('.menu-dropdown').attr('data-title');
        obj.html(text);
    })
}

jQuery(document).ready(function () {
    stickyProjectHeader();
    fixHeaderMenuTitle();

    //Xóa database cache
    jQuery('.delete-database-cache').on('click', function(e) {
        let obj = jQuery(this);
        let transient_key = jQuery(this).attr('data-owl-cache');
        jQuery.ajax({
            type: 'POST',
            url: jQuery('#owl-admin-api-url').val(),
            data: {
                action: 'delete_transient',
                transient_key: transient_key
            },
            beforeSend: function () {
                obj.addClass('disabled');
            },            
            success: function(response) {
                alert('Xóa cache database thành công!');
                obj.removeClass('disabled');
            }
        });

        
    });


    //Read More
    if(jQuery('.read-more-area').length!=0){
        jQuery('.read-more-area').each(function() {
            let obj = jQuery(this);
            let height = obj.height();
            let contentHeight = obj.find('.read-more-area-content').height();
            if( contentHeight > height){
                obj.find('.read-more-area-actions').show();
            }
        });
    }
    jQuery(document).on('click', '.read-more-area-btn', function(){
        let obj = jQuery(this);
        let area = obj.parents('.read-more-area');
        let maxHeight = area.attr('data-max-height');
        
        if(area.hasClass('is-show-full-content')){
            area.removeClass('is-show-full-content');
            area.css('max-height', maxHeight+'px');
        }else{
            area.addClass('is-show-full-content');
            area.css('max-height', '100%');
        }
    });


    jQuery(document).mouseup(function(e) 
    {
        if(jQuery(".theme-dropdown-content.active").length != 0){
            let dropdown = jQuery(".theme-dropdown-toggle");
            let container = jQuery(".theme-dropdown-content.active");
    
            // if the target of the click isn't the container nor a descendant of the container
            if (!container.is(e.target) && container.has(e.target).length === 0 && !dropdown.is(e.target) && dropdown.has(e.target).length === 0) 
            {
                container.removeClass('active');
            }
        }
    });

    //Table
    jQuery(document).find('table').each(function(){
        let obj = jQuery(this);
        obj.removeAttr('style');
        obj.find('tr').removeAttr('style');
        obj.find('td').removeAttr('style');
        obj.wrap('<div class="table-responsive custom-scrollbar"></div>');
    });

    //header-search
    jQuery(document).on('click','.header-search', function(){
        if(jQuery('body').hasClass('admin-bar')){
            let top = jQuery(window).scrollTop();
            let height = jQuery('#wpadminbar').height();
            if(jQuery(window).width() < 600){
                if(top >= height){
                    jQuery('.header-search-desktop-popup').css('top', 0);
                }else{
                    jQuery('.header-search-desktop-popup').css('top', height);
                }
            }else{
                jQuery('.header-search-desktop-popup').css('top', height);
            }
        }
        jQuery('.header-search-desktop-popup').addClass('active');
        jQuery('.theme-overlay').addClass('active');
        jQuery('#searchFormInput').focus();
        toggleScrolling(true);
    });
    jQuery('.header-search-desktop-outer .modal-close-js').click(function(){
        jQuery('.header-search-desktop-popup').removeClass('active');
        jQuery('.theme-overlay').removeClass('active');
        toggleScrolling(false);
    });

    //Menu
    jQuery('.menu-toggle').click(function(){
        jQuery('.horizontal-menu').addClass('active');
        toggleScrolling(true);
    });
    jQuery('.menu-close').click(function(){
        jQuery('.horizontal-menu').removeClass('active');
        toggleScrolling(false);
    });
    jQuery(document).on('click','.horizontal-menu.active .menu-dropdown > a', function(e){
        e.preventDefault();
        jQuery(this).parent('.menu-dropdown').addClass('active');
        jQuery(this).parent().parent().children('li:not(.active)').addClass('is-hide');
        if(jQuery(this).parent().hasClass('menu-lv-2')){
            jQuery(this).parents('.menu-lv-1').addClass('is-show-level-2');
        }
    });
    jQuery('.sub-menu-mobile .menu-mb-title .icon-dropdown').click(function(e){
        e.preventDefault();
        jQuery(this).parent().parent().parent().removeClass('active');
        jQuery(this).parent().parent().parent().parent().children('li:not(.active)').removeClass('is-hide');
        if(jQuery(this).parent().parent().parent().hasClass('menu-lv-2')){
            jQuery(this).parents('.menu-lv-1').removeClass('is-show-level-2');
        }
    });

    //Toggle Content
    jQuery('.icon-toggle').click(function(){
        jQuery(this).toggleClass('icon-toggle-plus icon-toggle-minus');
    });



    var idCount = 0;
    jQuery('.video-youtube').each(function() {
        let url = jQuery(this).attr('data-url');
        let id = '';
        if (url.indexOf('watch?v=') != -1) {
            id = url.split('watch?v=')[1];
        } else {
            id = url.split('shorts/')[1];
        }
        let hq = 'http://i3.ytimg.com/vi/' + id + '/hqdefault.jpg';
        jQuery(this).find('.youtube-thumb img').attr('src', hq);
        jQuery(this).find('.youtube-thumb').attr('id', 'youtube-item-'+idCount);
        idCount++;
        jQuery(this).attr('data-video-id', id);
    });

    jQuery('.youtube-thumb:not(.active)').click(function(e) {
        e.preventDefault();
        var id = jQuery(this).attr('id');
        var youtube_id = jQuery(this).closest('.video-youtube').attr('data-video-id');
        var iframe = '<iframe loading="lazy" id="iframe-'+id+'" class="ratio-media z-10" width="560" height="315" src="https://www.youtube.com/embed/' + youtube_id + '?enablejsapi=1&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
        jQuery(this).addClass('active');
        jQuery(this).find('.ratio-thumb').html(iframe);
        var div = document.getElementById(id);
        var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
        document.getElementById("iframe-"+id).onload= function() {
            iframe.postMessage('{"event":"command","func":"playVideo","args":""}','*');
        };
    });

    //accordion
    jQuery('.accordion-title').click(function(e) {
        e.preventDefault();
        let obj = jQuery(this);
        let parent = obj.parent();
        let content = parent.children('.accordion-inner');
        let accordion = obj.parents('.accordion');
        accordion.find('.accordion-title').removeClass('active');
        accordion.find('.accordion-inner').slideUp();
        if(content.is(':visible')){
            obj.removeClass('active');
            content.slideUp();
        }else{
            obj.addClass('active');
            content.slideDown();
        }
    });
    //Top
    jQuery('.cd-top').click(function() {
        jQuery('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 500) {
            jQuery('.cd-top').addClass('cd-is-visible');
        } else {
            jQuery('.cd-top').removeClass('cd-is-visible');
        }
    });

    //Tab
    jQuery(document).on('click', '.tab-heading-item:not(.active)', function(){
        let obj = jQuery(this);
        let id = obj.attr('data-target');
        obj.parent().find('.tab-heading-item').removeClass('active');
        obj.addClass('active');
        let target = jQuery(document).find('.tab-content').find(id);
        target.parent().find('.tab-content-item').removeClass('active');
        target.addClass('active');
    });

    //Flatsome tab
    jQuery(document).on('click', '.tabbed-content .tab:not(.active) > a', function(e){
        e.preventDefault();
        let obj = jQuery(this);
        let id = obj.attr('href');
        obj.parent().parent().children('.tab').removeClass('active');
        obj.parent().addClass('active');
        let target = obj.parents('.tabbed-content').find('.tab-panels').find('.entry-content'+id);
        target.parent().find('.entry-content').removeClass('active');
        target.addClass('active');
    });

    //Fancybox
    if(jQuery('[data-fancybox]').length > 0){
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });
    }

   //projects-slider
   let projectSlider = jQuery('.projects-slider');
   if(projectSlider.length != 0){
       jQuery('.projects-slider-outer .cust-nav-prev').click(function(e){
           e.preventDefault();
           projectSlider.slick('slickPrev');
       });
       jQuery('.projects-slider-outer .cust-nav-next').click(function(e){
           e.preventDefault();
           projectSlider.slick('slickNext');
       });
       projectSlider.slick({
           infinite: true,
           //centerMode: true,
           slidesToShow: 2,
           slidesToScroll: 2,
           dots: true,
           arrows: false,
           //variableWidth: true
           responsive: [
               {
                 breakpoint: 767,
                 settings: {
                   slidesToShow: 1,
                   slidesToScroll: 1,
                   infinite: false,
                 }
               }
           ]            
       });
   }

    //custom-slick-slide
    if(jQuery('.custom-slick-slider').length != 0){
        jQuery('.custom-slick-slider').each(function(){
            let slide = jQuery(this);
            let slideOptions = JSON.parse(slide.attr('data-flickity-options'));
            let autoPlay = slideOptions.autoPlay;
            let pageDots = slideOptions.pageDots;
            let prevNextButtons = slideOptions.prevNextButtons;
            let wrapAround = slideOptions.wrapAround;
            slide.slick({
                infinite: wrapAround ? wrapAround : false,
                //centerMode: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: pageDots ? pageDots : true,
                autoplay: autoPlay ? true : false,
                autoplaySpeed: autoPlay,
                arrows: prevNextButtons ? prevNextButtons : true,
                prevArrow: '<button type="button" class="cust-nav-item cust-nav-prev border-0 cursor-pointer" title="Trước"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_112_2725)"><path d="M20 27.06C19.8721 27.06 19.7482 27.0144 19.6469 26.9131L10.9536 18.2198C9.73549 17.0017 9.73549 14.9983 10.9536 13.7802L19.6469 5.08691C19.8383 4.89551 20.1617 4.89551 20.3531 5.08691C20.5445 5.27832 20.5445 5.60174 20.3531 5.79314L11.6598 14.4865C10.8245 15.3217 10.8245 16.6783 11.6598 17.5136L20.3531 26.2069C20.5426 26.3964 20.5445 26.7152 20.3589 26.9072C20.2427 27.0129 20.1111 27.06 20 27.06Z" stroke="white"></path></g><defs><clipPath id="clip0_112_2725"><rect width="32" height="32" rx="16" fill="white"></rect></clipPath></defs></svg></button>',
                nextArrow: '<button type="button" class="cust-nav-item cust-nav-next border-0 cursor-pointer" title="Sau"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_112_2727)"><path d="M12 27.06C12.1279 27.06 12.2518 27.0144 12.3531 26.9131L21.0465 18.2198C22.2645 17.0017 22.2645 14.9983 21.0465 13.7802L12.3531 5.08691C12.1617 4.89551 11.8383 4.89551 11.6469 5.08691C11.4555 5.27832 11.4555 5.60174 11.6469 5.79314L20.3402 14.4865C21.1755 15.3217 21.1755 16.6783 20.3402 17.5136L11.6469 26.2069C11.4574 26.3964 11.4555 26.7152 11.6411 26.9072C11.7573 27.0129 11.8889 27.06 12 27.06Z" stroke="white"></path></g><defs><clipPath id="clip0_112_2727"><rect width="32" height="32" rx="16" transform="matrix(-1 0 0 1 32 0)" fill="white"></rect></clipPath></defs></svg></button>',
                //variableWidth: true
                // responsive: [
                //     {
                //       breakpoint: 767,
                //       settings: {
                //         slidesToShow: 1,
                //         slidesToScroll: 1
                //       }
                //     }
                // ]            
            });
            
        });
    }

    //Filter slider
    let filterSlider = jQuery('.filter-group-slider .filter-group-items');
    if(filterSlider.length != 0){
        filterSlider.slick({
            infinite: false,
            //centerMode: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            dots: true,
            arrows: false,
            //variableWidth: true
            responsive: [
                {
                  breakpoint: 767,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                  }
                }
            ]            
        });
    }

    //Filter
    jQuery('#meta-filter-form input[type="radio"]').change(function(e) {
        e.preventDefault();
        if(jQuery(this).hasClass('reset-url-param')){
            const  parameterToRemove  = jQuery(this).attr('data-param');
            const url = new URL(window.location.href);
            // Check if the parameter exists
            if (url.searchParams.has(parameterToRemove)) {
              // Remove the parameter
              url.searchParams.delete(parameterToRemove);
              // Reload the page with the modified URL
              window.location.href = url.href;
            }            
        }else{
            jQuery('#meta-filter-form').submit();
        }
    });

});

jQuery(window).resize(function () {
    jQuery('html').css('overflow', 'auto');
});

var fixPx = 88;
var lastId,
    topMenu = jQuery("#project-detail-nav"),
    topMenuHeight = topMenu.outerHeight() + fixPx,
    // All list items
    menuItems = topMenu.find(".project-detail-nav-item"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function() {
        var item = jQuery(jQuery(this).attr("href"));
        if (item.length) { return item; }
    });

menuItems.click(function(e) {
    var href = jQuery(this).attr("href");
    var id = href.replace('#', '');
    jQuery('.scroll-target-item').removeClass('active');
    jQuery('#' + id).addClass('active');
    offsetTop = href === "#" ? 0 : jQuery(href).offset().top - topMenuHeight + fixPx;
    jQuery('html, body').stop().animate({
        scrollTop: offsetTop - fixPx
    }, 300);
    e.preventDefault();
});

jQuery(window).scroll(function () {
    var fromTop = jQuery(this).scrollTop() + topMenuHeight;
    var cur = scrollItems.map(function() {
        if (jQuery(this).offset().top - fixPx < fromTop){
            return this;
        }
    });
    cur = cur[cur.length - 1];
    var id = cur && cur.length ? cur[0].id : "project-detail-general";
    if (lastId !== id) {
        lastId = id;
        menuItems.removeClass("active")
        menuItems.filter("[href='#" + id + "']").addClass("active");
    } else {

    }
    stickyProjectHeader()
})