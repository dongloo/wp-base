
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

function homeProductTabs() {
    jQuery('.home-tabs-product').each(function(){
        let obj = jQuery(this);
        let text = obj.find('.tab-heading-item.active .tab-heading-item-title').html();
        let url = obj.find('.tab-heading-item.active').attr('data-url');
        let target = obj.find('.home-tabs-product-current-tab');
        if(target.length != 0){
            target.html(text)
        }
        obj.find('.section-more-link').attr('href', url)
    });
}


function fixHeaderMenuTitle() {
    jQuery('.submenu-header-title').each(function(){
        let obj = jQuery(this);
        let text = obj.closest('.menu-dropdown').attr('data-title');
        obj.html(text);
    })
}
function checkHeaderHeight() {
    let windowWidth = jQuery(window).width();
    let headerLeftDisplay = jQuery('.header-left').is(':visible');

    if(windowWidth > 1182 && headerLeftDisplay == false){
        jQuery('.header-bottom').removeAttr('height');
        let height = jQuery('.site-nav > .item:first-child').height();
        jQuery('.header-bottom').css('height', height);

        let offsetTop = jQuery('header').height();
        let scrollTop = jQuery(window).scrollTop();

        stickyHeader(offsetTop, scrollTop)

    }else{
        jQuery('.header-bottom').css('height', 'auto');
    }
}
function stickyHeader(top, scrollTop) {
    if(scrollTop > top){
        jQuery('header').addClass('is-sticky');
    }else{
        jQuery('header').removeClass('is-sticky');
    }
}

function megaMenu(){
    let brandTarget = jQuery(document).find('.is-mega-menu-grid');
    let brandTemplate = jQuery(document).find('#template-menu-brand').html();
    let homeUrl = jQuery('#owl-home-page-url').val();
    //brandTemplate = brandTemplate.toString().replaceAll('#shop-page-link', homeUrl+'/thuong-hieu/');
    let newBrandTemplate = brandTemplate.toString();
    newBrandTemplate = newBrandTemplate.split('#shop-page-link').join('/thuong-hieu/');
    newBrandTemplate = newBrandTemplate.split('?yith_wcan=1&amp;thuong-hieu=').join('');
    brandTarget.append(newBrandTemplate);

    jQuery(document).find('.is-mega-menu:not(.is-mega-menu-grid)').each(function(){
        let obj = jQuery(this);
        let title = jQuery(this).attr('data-title');
        let link = jQuery(this).children('a').attr('href');
        let catTemplate = jQuery(document).find('#template-menu-cat').html();
        let newCatTemplate= catTemplate.toString();
        newCatTemplate = newCatTemplate.split('#menu-cat-title').join(title);
        newCatTemplate = newCatTemplate.split('#menu-cat-link').join(link);

        let innerBrandTemplate = jQuery(document).find('#template-menu-brand').html();
        let newInnerBrandTemplate = innerBrandTemplate.toString();
        newInnerBrandTemplate = newInnerBrandTemplate.split('#shop-page-link').join(link);
        newInnerBrandTemplate = newInnerBrandTemplate.split('menu-lv-2').join('menu-lv-3');

        newCatTemplate = newCatTemplate.split('<cat-first-col>').join(newInnerBrandTemplate);
        obj.append(newCatTemplate);

    });


}
function searchAjax(inputData,targetDiv) { // khởi tạo hàm ajax
    jQuery.ajax({
        type: 'POST',
        async: true,
        url: jQuery('#owl-admin-api-url').val(),
        data: {
            'action' : 'liveSearchFilter', 
            'data': inputData
        },
        beforeSend: function () {
            targetDiv.parent().children('form').addClass('is-loading');
        },
        success: function (data) {
            targetDiv.parent().children('form').removeClass('is-loading');
            targetDiv.addClass('active');
            targetDiv.html(data); // show dữ liệu khi trả về
            
        }
    });
}

function liveSearchDelay(callback, ms) {
    var timer = 0;
    return function () {
        var context = this, args = arguments;
        clearTimeout(timer);
        timer = setTimeout(function () {
            callback.apply(context, args);
        }, ms || 0);
    };
}


function liveSearch(searchInput,searchResultsDiv) {
    searchResultsDiv = searchResultsDiv.parent();
    //On focus in search box, if has value, show search result
    searchInput.on('focus', function () {
        let val = jQuery(this).val();
        if (val != '') {
            searchResultsDiv.addClass('active');
       }
    });
    searchInput.on('keyup',liveSearchDelay(function (e) {
        //if key != enter, ArrowUp, ArrowDown
        if (e.which !== 38 && e.which !== 40 && e.which !== 13) {
            let text = jQuery(this).val().toLowerCase();

            if (text != '' && text.length >= 1) {
                searchAjax(text,searchResultsDiv)
            } else {
                searchResultsDiv.removeClass('active');
            }
        }
    }, 300));
    //On click outside of the search result
    jQuery(document).mouseup(function (e) {
        if (!searchResultsDiv.is(e.target) && searchResultsDiv.has(e.target).length === 0 && !searchInput.is(e.target) && searchInput.has(e.target).length === 0) {
            searchResultsDiv.removeClass('active');
        }
    });
}

function showNewsletterPopup() {
    cookiePopup = (function() {
        if (jQuery.cookie('cookie-popup-data') == undefined) {
            jQuery('#newsletter-modal').addClass('active');
            jQuery.cookie('cookie-popup-data', true, {
                expires: parseInt(jQuery('#newsletter-modal-time').val()) //số ngày hiện lại
            });
        }
    });
    setTimeout(function() {
        cookiePopup();
    }, 5000); //số miligiây hiện popup sau khi vào trang: 1000 = 1s | 3 phút = 180000
}

jQuery(window).bind('load',function () {
    checkHeaderHeight();
});

function checkFilterCount() {
    let count = 0;
    jQuery('.collection-filter-body').find('.filter-count').each(function(){
        let number = parseInt(jQuery(this).html());
        count = count + number;
    });
    if(count > 0){
        jQuery('.collection-filter-open > span').append('<span class="inlinne-flex rounded-full text-title collection-filter-open-count">'+count+'</span>')
    }
}

jQuery(document).ready(function () {

    //AOS.init();
    fixHeaderMenuTitle();
    megaMenu();
    liveSearch(jQuery('.header-search-desktop-input'),jQuery('.header-search-result'));

    if(jQuery('.collection-filter-body').length!=0){
        checkFilterCount();
    }
    if(jQuery('.read-more-area').length!=0){
        jQuery('.read-more-area').each(function name() {
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


    //Filter
    jQuery('.collection-filter-open').click(function(e){
        e.preventDefault();
        jQuery('.collection-filter').addClass('active');
        toggleScrolling(true);
    });
    jQuery('.collection-filter-close').click(function(){
        jQuery('.collection-filter').removeClass('active');
        toggleScrolling(false);
    });

    //Dropdown
    jQuery('.theme-dropdown-toggle').click(function(e){
        e.preventDefault();
        let dropdownContent = jQuery(this).parent().find('.theme-dropdown-content');
        if(dropdownContent.hasClass('active')){
            dropdownContent.removeClass('active');
            jQuery(document).find('.theme-dropdown-content').removeClass('active');
        }else{
            jQuery(document).find('.theme-dropdown-content').removeClass('active');
            dropdownContent.addClass('active');
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


    //Filter Dropdown
    jQuery('.collection-filter-body > .yith-wcan-filters > .filters-container > form > .yith-wcan-filter > .filter-title').click(function(e){
        e.preventDefault();
        let dropdownContent = jQuery(this).parent().find('.filter-content');
        if(dropdownContent.hasClass('active')){
            dropdownContent.removeClass('active');
            jQuery(document).find('.filter-content').removeClass('active');
        }else{
            jQuery(document).find('.filter-content').removeClass('active');
            dropdownContent.addClass('active');
        }
    });
    jQuery(document).mouseup(function(e) 
    {
        if(jQuery(".filter-content.active").length != 0){
            let dropdown = jQuery(".collection-filter-body > .yith-wcan-filters > .filters-container > form > .yith-wcan-filter > .filter-title");
            let container = jQuery(".filter-content.active");
    
            // if the target of the click isn't the container nor a descendant of the container
            if (!container.is(e.target) && container.has(e.target).length === 0 && !dropdown.is(e.target) && dropdown.has(e.target).length === 0) 
            {
                container.removeClass('active');
            }
        }
    });



    //header-search
    jQuery('.header-search').click(function(){
        jQuery('.header-center').addClass('active');
        jQuery('.header-top').addClass('is-show-search-popup');
        toggleScrolling(true);
    });
    jQuery('.header-search-desktop-outer .modal-close-js').click(function(){
        jQuery('.header-center').removeClass('active');
        jQuery('.header-top').removeClass('is-show-search-popup');
        jQuery('.header-search-overlay').removeClass('active');
        toggleScrolling(false);
    });



    jQuery(document).on('click', '.open-chaty', function(e){
        e.preventDefault();
        jQuery('.chaty-widget').addClass('chaty-open');
    });
    jQuery(document).on('click', '.chaty-cta-close button', function(e){
        e.preventDefault();
        jQuery('.chaty-widget').removeClass('chaty-open');
    });






    jQuery('.menu-toggle').click(function(){
        jQuery('body').addClass('menu-open');
        jQuery('.horizontal-menu').addClass('active');
        toggleScrolling(true);
    });
    jQuery('.menu-close').click(function(){
        jQuery('body').removeClass('menu-open');
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


    jQuery('.footer-widget-toggle').click(function(){
        jQuery(this).parent().next('.footer-widget-content').slideToggle('fast');
    });
    jQuery('.icon-toggle').click(function(){
        jQuery(this).toggleClass('icon-toggle-plus icon-toggle-minus');
    });



    homeProductTabs();
    //Tab
    jQuery(document).on('click', '.tab-heading-item:not(.active)', function(){
        let obj = jQuery(this);
        let id = obj.attr('data-target');
        obj.parent().find('.tab-heading-item').removeClass('active');
        obj.addClass('active');

        let target = jQuery(document).find('.tab-content').find(id);
        let initialized = obj.attr('data-initialized');
        let url = obj.attr('data-url');

        if(obj.parents('section').hasClass('home-tabs-product') && initialized != 'true'){
            
            let slug = url.split('/danh-muc-san-pham/')[1];
            slug = slug.split('/')[0];
            let productType = obj.parents('section').attr('data-product-tab-type');
            
            jQuery.ajax({
                type: 'POST',
                url: jQuery('#owl-admin-api-url').val(),
                data: {
                    action: 'load_products',
                    productType: productType,
                    slug: slug
                },
                async: true,
                beforeSend: function () {
                    target.html(`<div class="flex justify-center"><div class="svg-loader"><svg class="svg-container" height="100" width="100" viewBox="0 0 100 100"><circle class="loader-svg bg" cx="50" cy="50" r="45"></circle><circle class="loader-svg animate" cx="50" cy="50" r="45"></circle></svg></div></div>`);
                },                
                success: function(response) {
                    obj.attr('data-initialized', 'true')
                    target.html(response);
                }
            });
            homeProductTabs();
        }


        target.parent().find('.tab-content-item').removeClass('active');
        target.addClass('active');

   
    });


    //Modal
    jQuery('[data-toggle="owl-modal"]').click(function(e){
        e.preventDefault();
        let obj = jQuery(this);
        let modal = obj.attr('data-modal');
        jQuery(modal).addClass('active');
        toggleScrolling(true);
    });
    jQuery('.modal-close-js').click(function(e){
        e.preventDefault();
        jQuery(this).parents('.owl-modal').removeClass('active');
        toggleScrolling(false);
    });



    //testimonial-slider
    jQuery('.testimonial .cust-nav-prev').click(function(){
        jQuery('.testimonial-items').slick('slickPrev');
    });
    jQuery('.testimonial .cust-nav-next').click(function(){
        jQuery('.testimonial-items').slick('slickNext');
    });

    jQuery('.testimonial-items').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false
    });

    //home-banner-slider
    if(jQuery('.banner-home-main-items').length > 0){
        jQuery('.banner-home-main-repeater .cust-nav-prev').click(function(){
            jQuery('.banner-home-main-items').slick('slickPrev');
        });
        jQuery('.banner-home-main-repeater .cust-nav-next').click(function(){
            jQuery('.banner-home-main-items').slick('slickNext');
        });
    
        jQuery('.banner-home-main-items').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 5000
        });
    }



    if(jQuery('[data-fancybox]').length > 0){
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });
    }


    var idCount = 0;
    jQuery('.video-youtube').each(function() {
        var id = jQuery(this).attr('data-url').split('watch?v=')[1];
        var hq = 'http://i3.ytimg.com/vi/' + id + '/hqdefault.jpg';
        var hd = 'http://i3.ytimg.com/vi/' + id + '/maxresdefault.jpg';
        jQuery(this).find('.youtube-thumb img').attr('src', hd);
        jQuery(this).find('.youtube-thumb').attr('id', 'youtube-item-'+idCount);
        idCount++;
    });

    jQuery('.youtube-thumb:not(.active)').click(function(e) {
        e.preventDefault();
        var id = jQuery(this).attr('id');
        var youtube_id = jQuery(this).closest('.video-youtube').attr('data-url').split('watch?v=')[1];
        var iframe = '<iframe loading="lazy" id="iframe-'+id+'" class="ratio-media z-10" width="560" height="315" src="https://www.youtube.com/embed/' + youtube_id + '?enablejsapi=1&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
        jQuery(this).addClass('active');
        jQuery(this).find('.ratio-thumb').html(iframe);
        var div = document.getElementById(id);
        var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
        document.getElementById("iframe-"+id).onload= function() {
            iframe.postMessage('{"event":"command","func":"playVideo","args":""}','*');
        };
    });
    //product-video-review-items-slider
    let productVideoSlider = jQuery('.product-video-review-items-slider');
    if(productVideoSlider.length != 0){
        jQuery('.product-video-prev').click(function(e){
            e.preventDefault();
            productVideoSlider.slick('slickPrev');
        });
        jQuery('.product-video-next').click(function(e){
            e.preventDefault();
            productVideoSlider.slick('slickNext');
        });
        productVideoSlider.on(
            "init reInit afterChange",
            function (event, slick, currentSlide, nextSlide) {
                var i = (currentSlide ? currentSlide : 0) + 1;
                var totalPage;
                var currentPage;
           
                totalPage = Math.ceil(slick.slideCount);
                currentPage = i;
                
                jQuery(document).find(".product-video-current").html(currentPage);
                jQuery(document).find(".product-video-total").html(totalPage);
            }
        );
        productVideoSlider.slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false
        });
    }


    //Product gallery
    jQuery('.product-gallery-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        fade: true,
        asNavFor: '.product-gallery-nav',
        infinite: false
    });
      
    jQuery('.product-gallery-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.product-gallery-for',
        arrows: false,
        dots: false,
        focusOnSelect: true,
        infinite: false,
        responsive: [
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 3
                }
            }
        ]
    });
    jQuery('.product-gallery-nav-outer .cust-nav-prev').click(function(){
        jQuery('.product-gallery-nav').slick('slickPrev');
    });
    jQuery('.product-gallery-nav-outer .cust-nav-next').click(function(){
        jQuery('.product-gallery-nav').slick('slickNext');
    });



    //product quantity
    jQuery('.product-quantity-btn').click(function(e){
        e.preventDefault();
        let type = jQuery(this).hasClass('product-quantity-minus') ? 'minus' : 'plus';
        let input = jQuery('.product-quantity .quantity .qty');
        let max = 99;// parseInt(input.attr('max'));
        let min = 1;// parseInt(input.attr('min'));
        let val = parseInt(input.val());

        if(type == 'plus'){
            if(val < max){
                val++;
                input.val(val)
            }
        }else{
            if(val > min){
                val--;
                input.val(val)
            }
        }
    });
    jQuery('.product-quantity .quantity .qty').on('input', function(e){
        let input = jQuery(this);
        let max = 99;// parseInt(input.attr('max'));
        let min = 1;// parseInt(input.attr('min'));
        let val = parseInt(input.val());

        if(isNaN(val)){
            val = min;
        }
        if(val > max){
            val = max;
        }
        if(val < min){
            val = min;
        }
        input.val(val)
    });
    jQuery('.cart-table-item-quantity').on('input', function(e){
        let input = jQuery(this);
        let max = 99;// parseInt(input.attr('max'));
        let min = 1;// parseInt(input.attr('min'));
        let val = parseInt(input.val());
        if(isNaN(val)){
            val = min;
        }
        if(val > max){
            val = max;
        }
        if(val < min){
            val = min;
        }
        input.val(val)
    });



    jQuery('.product-detail-review-link').click(function (e) {
        e.preventDefault();
        let id = jQuery(this).attr('href');
        jQuery('html, body').animate({
            scrollTop: jQuery(id).offset().top - 60
        }, 300);
    });




    jQuery('.owl-add-to-cart-btn').on('click', function(e) {
        e.preventDefault();
        let obj = jQuery(this);
        let product_id = jQuery(this).attr('value');
        let quantity = jQuery('.product-quantity .qty').val();
        if(quantity > 0 && !isNaN(quantity) ){
            jQuery.ajax({
                type: 'POST',
                url: jQuery('#owl-admin-api-url').val(),
                data: {
                    action: 'add_to_cart',
                    product_id: product_id,
                    quantity: quantity
                },
                beforeSend: function () {
                    obj.addClass('is-loading');
                },            
                success: function(response) {
                    let count = JSON.parse(response).cartItemsCount;
                    let headerCount = jQuery('.header-cart-count');
                    let title = jQuery('h1.product-title').text();
                    let imageSrc = jQuery('[data-owl-main-image="true"]').find('img').attr('src');
                    let imgHtml = `<img loading="lazy" src="${imageSrc}" alt="${title}" class="ratio-media">`;
                    
                    let modal = jQuery('#add-to-cart-modal');
                    let modalImg = jQuery('#add-to-cart-modal .add-to-cart-modal-img');
                    let modalProductName = jQuery('#add-to-cart-modal .add-to-cart-modal-name');
                    toggleScrolling(true);
                    modalImg.html(imgHtml);
                    modalProductName.html(title);
                    headerCount.html(count);
                    modal.addClass('active');
                    obj.removeClass('is-loading');
                }
            });

        }
    });


    jQuery(document).ready(function () {
        if(jQuery('#newsletter-modal').length!=0){
            showNewsletterPopup();
        }
    });




    

});
jQuery(window).resize(function () {
    jQuery('html').css('overflow', 'auto');
    checkHeaderHeight();
});
var lastScrollTop = 0;
jQuery(window).scroll(function () {
    let offsetTop = jQuery('header').height();
    let scrollTop = jQuery(this).scrollTop();
    stickyHeader(offsetTop, scrollTop)
    if (scrollTop > lastScrollTop){
        jQuery('header').addClass('is-scroll-down');
        jQuery('header').removeClass('is-scroll-up');
    } else {
        jQuery('header').removeClass('is-scroll-down');
        jQuery('header').addClass('is-scroll-up');
    }
    lastScrollTop = scrollTop;
});

