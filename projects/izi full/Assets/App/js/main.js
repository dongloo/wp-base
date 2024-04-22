const testimonialSlider = function () {
    let testimonialConfig = {
        nav: false,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: false,
        loop: true,
        dots: false,
        margin: 24,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 1,
            },
            768: {
                items: 2,
            },
        }
    }
    if(jQuery(window).width() > 992){
        jQuery(document).find("#testimonial-slider").owlCarousel('destroy');
    }else{
        jQuery(document).find("#testimonial-slider").owlCarousel(testimonialConfig);
    }
}


let Main = {
    init: function () {
        Main.onEvent();
        Main.upEvent();
    },
    upEvent: function (container) {
        if (!container) {
            container = jQuery(document);
        }
        container.find("#partner-slider").owlCarousel({
            nav: false,
            autoplay: false,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            loop: true,
            dots: false,
            margin: 24,
            responsive: {
                0: {
                    items: 2,
                },
                576: {
                    items: 3,
                },
                768: {
                    items: 4,
                },
                992: {
                    items: 5,
                },
                1200: {
                    items: 6
                }
            }
        });

        testimonialSlider();

        container.find('.counter-number span').counterUp({
            delay: 10,
            time: 2000
        });
    },
    onEvent: function () {
        jQuery(document).on('click', '.js-hamburger', function () {
            jQuery(this).toggleClass('is-active');
            jQuery('.header .menu').toggleClass('is-active');
        });
        jQuery(document).on("click", ".testimonial-nav .testimonial-prev", function (e) {
            e.preventDefault();
            $("#testimonial-slider").trigger('prev.owl.carousel');
            return false;
        });
        jQuery(document).on("click", ".testimonial-nav .testimonial-next", function (e) {
            e.preventDefault();
            $("#testimonial-slider").trigger('next.owl.carousel');
            return false;
        });
        jQuery(document).on("change", ".domain-section .domain-check-input", function (e) {
            e.preventDefault();
            if ($(this).is(':checked')) {
                //$('.btn-domain-next').prop('disabled', false);
                $('.domain-section .domain-check-content').hide()
                $(this).parents('.domain-check').find('.domain-check-content').show()
                if($(this).parents('.domain-check').attr('data-validate') == 'true'){
                    $('.btn-domain-next').prop('disabled', false);
                }else{
                    $('.btn-domain-next').prop('disabled', true);
                }

            }
        });
        jQuery(document).on("input", "#current-domain-input", function () {
            if ($(this).val() != "") {
                $(this).parents('.domain-check').attr('data-validate', 'true');
                $('.btn-domain-next').prop('disabled', false);
            }
            else{
                $(this).parents('.domain-check').attr('data-validate', 'false');
                $('.btn-domain-next').prop('disabled', true);
            }
        });
        jQuery(document).on("input", "#new-domain-input-check", function () {
            if ($(this).val() != "") {
                $('#new-domain-btn-check').prop('disabled', false);
            }
            else{
                $('#new-domain-btn-check').prop('disabled', true);
            }
        });
        jQuery(document).on("input", "#free-domain-input", function () {
            if ($(this).val() != "") {
                if($(this).val().length < 11){
                    $(this).parents('.domain-content-input-wrapper').next().removeClass('error');
                    $('.btn-domain-next').prop('disabled', false);
                    $(this).parents('.domain-check').attr('data-validate', 'true');
                }else{
                    $(this).parents('.domain-content-input-wrapper').next().addClass('error');
                    $('.btn-domain-next').prop('disabled', true);
                    $(this).parents('.domain-check').attr('data-validate', 'false');
                }
            }
            else{
                $(this).parents('.domain-content-input-wrapper').next().removeClass('error');
                $('.btn-domain-next').prop('disabled', true);
                $(this).parents('.domain-check').attr('data-validate', 'false');
            }
        });
        jQuery(document).on("input", "#modal-send-mail-input", function () {
            if ($(this).val() != "") {
                $('#modal-send-mail-submit').prop('disabled', false);
            }
            else{
                $('#modal-send-mail-submit').prop('disabled', true);
            }
        });
        jQuery(document).on("click", "#new-domain-btn-check", function () {
            $('#check-new-domain').show()
            $(this).parents('.domain-check').attr('data-validate', 'false');
            $('.btn-domain-next').prop('disabled', true);
        });
        jQuery(document).on("click", ".domain-grid-item .select-domain-to-buy-btn", function (e) {
            e.preventDefault()
            $(this).parents('.domain-check').attr('data-validate', 'true');
            $('.btn-domain-next').prop('disabled', false);
        });
        jQuery(document).on("click", ".show-domain-more-btn", function () {
            let text = $(this).find('span').html()
            $(this).find('span').html( text == 'Tất cả' ? 'Thu gọn' : 'Tất cả')
            $(this).toggleClass('active')
            $('.check-new-domain-grid').toggleClass('show-all')
        });

    },
};

jQuery(document).ready(function () {
    Main.init();
});
jQuery(window).resize(function() {
    testimonialSlider();
});
