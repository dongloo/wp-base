<?php
    $type = 'transparent';
    $top = "false";
    $title = "Trang chủ";
    include './template-parts/header.php'
?>
<?php
    $type="full"; // full,compact,title
    $bg = './assets/app/images/cover/home-hero.jpg';
    $pageTitle = '';
    $tab = "true";
    include './components/main-hero.php'
?>
<section class="pt-11 pb-18">
    <div class="container pb-4">
        <div class="about-block flex flex-col lg:flex-row items-center justify-between gap-10 lg:gap-16">
            <div class="about-block-content flex flex-col gap-6 items-start">
                <div class="flex flex-col gap-4 items-start">
                    <h3 class="about-block-sub-title m-0 font-semibold text-primary-600 fs-20 lg:fs-24 line-height-auto">Về chúng tôi</h3>
                    <h2 class="about-block-title font-medium fs-24 md:fs-28 lg:fs-32 line-height-auto m-0">There are many variations of pages in my Lorem Ipsum</h2>
                    <p class="about-block-des m-0 text-detail-secondary">
                        There are many variations of passages of Lorem Ipsum available, but suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                    </p>
                </div>
                <a href="./about-us.php" class="theme-btn btn-primary about-block-btn">Xem thêm</a>
            </div>
            <div class="about-block-banner">
                <div class="about-block-banner-inner relative">
                    <div class="about-block-image">
                        <img src="./assets/app/images/banner/about-us.jpg" alt="Về chúng tôi">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-11 pb-12 section-gradient">
    <div class="container">
        <div class="section-head mb-6 flex flex-col sm:flex-row justify-between gap-y-4 gap-x-6 items-start sm:items-end">
            <div class="section-head-info flex-1 flex flex-col gap-1">
                <h2 class="section-heading font-semibold fs-24 m-0 text-white">Chương trình đang khuyến mãi</h2>
                <div class="flex flex-wrap gap-3 items-center">
                    <p class="section-des m-0 text-white">Chương trình sẽ kết thúc trong</p>
                    <div class="owl-timer-parent">
                        <div class="owl-timer flex items-center gap-1" data-end-time="29 March 2024 9:56:00 GMT+07:00">
                            <div class="owl-timer-item fs-16 text-body text-center rounded-4 owl-hours"></div>
                            <span>:</span>
                            <div class="owl-timer-item fs-16 text-body text-center rounded-4 owl-minutes"></div>
                            <span>:</span>
                            <div class="owl-timer-item fs-16 text-body text-center rounded-4 owl-seconds"></div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="theme-btn btn-white">Xem tất cả</a>
        </div>
        <div class="theme-slider-outer flash-sale-slider">
            <div class="theme-slider-inner">
                <div class="theme-slider" data-infinite="true" data-gap="24" data-autoplay="true" data-item="1" data-item-sm="2" data-item-md="3" data-item-lg="4" data-item-xl="4">
                    <div class="theme-slider-item">
                        <?php
                            $type = 'box';
                            $sale = 'true';
                            include './components/hotel-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            $type = 'box';
                            $sale = 'true';
                            include './components/hotel-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            $type = 'box';
                            $sale = 'true';
                            include './components/hotel-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            $type = 'box';
                            $sale = 'true';
                            include './components/hotel-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            $type = 'box';
                            $sale = 'true';
                            include './components/hotel-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            $type = 'box';
                            $sale = 'true';
                            include './components/hotel-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            $type = 'box';
                            $sale = 'true';
                            include './components/hotel-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            $type = 'box';
                            $sale = 'true';
                            include './components/hotel-card.php'
                        ?>
                    </div>
                </div>
            </div>
            <div class="owl-nav owl-nav-outside owl-nav-white">
                <a href="#" class="owl-nav-item owl-nav-prev">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_35_7111" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="28" height="28">
                        <rect x="0.5" y="27.5" width="27" height="27" rx="3.5" transform="rotate(-90 0.5 27.5)" fill="#00375A" stroke="#6A0A18"/>
                        </mask>
                        <g mask="url(#mask0_35_7111)">
                        <path d="M17.792 22.75L9.04199 14L17.792 5.25" stroke="#2AAEB2" stroke-width="1.5" stroke-linecap="square"/>
                        </g>
                    </svg>                                   
                </a>
                <a href="#" class="owl-nav-item owl-nav-next">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_35_7116" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="28" height="28">
                        <rect x="-0.5" y="-0.5" width="27" height="27" rx="3.5" transform="matrix(-4.37114e-08 -1 -1 4.37114e-08 27 27)" fill="#00375A" stroke="#6A0A18"/>
                        </mask>
                        <g mask="url(#mask0_35_7116)">
                        <path d="M10.208 22.75L18.958 14L10.208 5.25" stroke="#2AAEB2" stroke-width="1.5" stroke-linecap="square"/>
                        </g>
                    </svg>                                   
                </a>
            </div>
        </div>
    </div>
</section>
<section class="pt-11 pb-12">
    <div class="container">
        <div class="section-head mb-6 flex flex-col sm:flex-row justify-between gap-y-4 gap-x-6 items-start sm:items-end">
            <div class="section-head-info flex-1 flex flex-col gap-1">
                <h2 class="section-heading text-primary-600 font-semibold fs-24 m-0">Hotel, resort tiêu biểu</h2>
                <p class="section-des text-gray m-0">Khám phá nhiều dịch vụ đa dạng của chúng tôi</p>
            </div>
            <a href="#" class="theme-btn btn-primary">Xem tất cả</a>
        </div>
        <div class="theme-slider-outer hotel-card-slider-nav">
            <div class="theme-slider-inner">
                <div class="theme-slider" data-infinite="true" data-gap="24" data-autoplay="false" data-autoplay-speed="6000" data-item="1" data-item-sm="2" data-item-md="3" data-item-lg="4" data-item-xl="4">
                    <div class="theme-slider-item">
                        <?php
                            $type = 'default';
                            $sale = 'false';
                            include './components/hotel-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            $type = 'default';
                            $sale = 'false';
                            include './components/hotel-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            $type = 'default';
                            $sale = 'false';
                            include './components/hotel-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            $type = 'default';
                            $sale = 'false';
                            include './components/hotel-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            $type = 'default';
                            $sale = 'false';
                            include './components/hotel-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            $type = 'default';
                            $sale = 'false';
                            include './components/hotel-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            $type = 'default';
                            $sale = 'false';
                            include './components/hotel-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            $type = 'default';
                            $sale = 'false';
                            include './components/hotel-card.php'
                        ?>
                    </div>
                </div>
            </div>
            <div class="owl-nav owl-nav-outside">
                <a href="#" class="owl-nav-item owl-nav-prev">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_35_7111" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="28" height="28">
                        <rect x="0.5" y="27.5" width="27" height="27" rx="3.5" transform="rotate(-90 0.5 27.5)" fill="#00375A" stroke="#6A0A18"/>
                        </mask>
                        <g mask="url(#mask0_35_7111)">
                        <path d="M17.792 22.75L9.04199 14L17.792 5.25" stroke="#2AAEB2" stroke-width="1.5" stroke-linecap="square"/>
                        </g>
                    </svg>                                   
                </a>
                <a href="#" class="owl-nav-item owl-nav-next">
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_35_7116" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="28" height="28">
                        <rect x="-0.5" y="-0.5" width="27" height="27" rx="3.5" transform="matrix(-4.37114e-08 -1 -1 4.37114e-08 27 27)" fill="#00375A" stroke="#6A0A18"/>
                        </mask>
                        <g mask="url(#mask0_35_7116)">
                        <path d="M10.208 22.75L18.958 14L10.208 5.25" stroke="#2AAEB2" stroke-width="1.5" stroke-linecap="square"/>
                        </g>
                    </svg>                                   
                </a>
            </div>
        </div>       
    </div>
</section>
<section class="py-10 bg-main">
    <div class="container-left">
        <div class="section-head mb-6 flex flex-col sm:flex-row justify-between gap-y-4 gap-x-6 items-start sm:items-end">
            <div class="section-head-info flex-1 flex flex-col gap-1">
                <h2 class="section-heading text-primary-600 font-semibold fs-24 m-0">Cảm nhận khách hàng</h2>
                <p class="section-des text-gray m-0">Khám phá nhiều dịch vụ đa dạng của chúng tôi</p>
            </div>
        </div>
        <div class="theme-slider-outer testimonial-slider">
            <div class="theme-slider-inner">
                <div class="theme-slider" data-dots="true" data-variable-width="true" data-infinite="true" data-gap="20" data-autoplay="false" data-autoplay-speed="6000" data-item="1" data-item-sm="2" data-item-md="3" data-item-lg="4" data-item-xl="4">
                    <div class="theme-slider-item">
                        <?php
                            include './components/testimonial-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            include './components/testimonial-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            include './components/testimonial-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            include './components/testimonial-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            include './components/testimonial-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            include './components/testimonial-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            include './components/testimonial-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            include './components/testimonial-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            include './components/testimonial-card.php'
                        ?>
                    </div>
                </div>
            </div>
        </div>       
    </div>
</section>
<section class="pt-10 pb-12">
    <div class="container">
        <div class="section-head mb-6 flex flex-col sm:flex-row justify-between gap-y-4 gap-x-6 items-start sm:items-end">
            <div class="section-head-info flex-1 flex flex-col gap-1">
                <h2 class="section-heading text-primary-600 font-semibold fs-24 m-0">Các địa điểm nổi bật</h2>
                <p class="section-des text-gray m-0">Khám phá nhiều dịch vụ đa dạng của chúng tôi</p>
            </div>
        </div>
        <div class="featured-places grid gap-4 sm:gap-5">
            <div class="place-card">
                <div class="place-card-thumb">
                    <a href="./hotels.php" class="place-card-ratio rounded-8 overflow-hidden hover-opacity-90 ratio-thumb ratio-1x1">
                        <div class="place-card-info flex flex-col gap-1 z-3 absolute">
                            <h3 class="text-white font-semibold fs-16 line-height-auto text-truncate-1 m-0">Đà Nẵng</h3>
                            <p class="m-0 text-white fs-12 line-height-auto">241 địa điểm</p>
                        </div>
                        <img src="./assets/app/images/places/place-1.jpg" class="ratio-media z-1" alt="<?php echo $title[array_rand($title)]; ?>">
                    </a>
                </div>
            </div>
            <div class="place-card">
                <div class="place-card-thumb">
                    <a href="./hotels.php" class="place-card-ratio rounded-8 overflow-hidden hover-opacity-90 ratio-thumb ratio-1x1">
                        <div class="place-card-info flex flex-col gap-1 z-3 absolute">
                            <h3 class="text-white font-semibold fs-16 line-height-auto text-truncate-1 m-0">Phú Quốc</h3>
                            <p class="m-0 text-white fs-12 line-height-auto">142 địa điểm</p>
                        </div>
                        <img src="./assets/app/images/places/place-2.jpg" class="ratio-media z-1" alt="<?php echo $title[array_rand($title)]; ?>">
                    </a>
                </div>
            </div>
            <div class="place-card">
                <div class="place-card-thumb">
                    <a href="./hotels.php" class="place-card-ratio rounded-8 overflow-hidden hover-opacity-90 ratio-thumb ratio-1x1">
                        <div class="place-card-info flex flex-col gap-1 z-3 absolute">
                            <h3 class="text-white font-semibold fs-16 line-height-auto text-truncate-1 m-0">Hội An</h3>
                            <p class="m-0 text-white fs-12 line-height-auto">84 địa điểm</p>
                        </div>
                        <img src="./assets/app/images/places/place-3.jpg" class="ratio-media z-1" alt="<?php echo $title[array_rand($title)]; ?>">
                    </a>
                </div>
            </div>
            <div class="place-card">
                <div class="place-card-thumb">
                    <a href="./hotels.php" class="place-card-ratio rounded-8 overflow-hidden hover-opacity-90 ratio-thumb ratio-1x1">
                        <div class="place-card-info flex flex-col gap-1 z-3 absolute">
                            <h3 class="text-white font-semibold fs-16 line-height-auto text-truncate-1 m-0">Sapa</h3>
                            <p class="m-0 text-white fs-12 line-height-auto">140 địa điểm</p>
                        </div>
                        <img src="./assets/app/images/places/place-4.jpg" class="ratio-media z-1" alt="<?php echo $title[array_rand($title)]; ?>">
                    </a>
                </div>
            </div>
            <div class="place-card">
                <div class="place-card-thumb">
                    <a href="./hotels.php" class="place-card-ratio rounded-8 overflow-hidden hover-opacity-90 ratio-thumb ratio-1x1">
                        <div class="place-card-info flex flex-col gap-1 z-3 absolute">
                            <h3 class="text-white font-semibold fs-16 line-height-auto text-truncate-1 m-0">Bà rịa vũng tàu</h3>
                            <p class="m-0 text-white fs-12 line-height-auto">177 địa điểm</p>
                        </div>
                        <img src="./assets/app/images/places/place-5.jpg" class="ratio-media z-1" alt="<?php echo $title[array_rand($title)]; ?>">
                    </a>
                </div>
            </div>
            <div class="place-card">
                <div class="place-card-thumb">
                    <a href="./hotels.php" class="place-card-ratio rounded-8 overflow-hidden hover-opacity-90 ratio-thumb ratio-1x1">
                        <div class="place-card-info flex flex-col gap-1 z-3 absolute">
                            <h3 class="text-white font-semibold fs-16 line-height-auto text-truncate-1 m-0">Hạ Long</h3>
                            <p class="m-0 text-white fs-12 line-height-auto">126 địa điểm</p>
                        </div>
                        <img src="./assets/app/images/places/place-6.jpg" class="ratio-media z-1" alt="<?php echo $title[array_rand($title)]; ?>">
                    </a>
                </div>
            </div>
            <div class="place-card">
                <div class="place-card-thumb">
                    <a href="./hotels.php" class="place-card-ratio rounded-8 overflow-hidden hover-opacity-90 ratio-thumb ratio-1x1">
                        <div class="place-card-info flex flex-col gap-1 z-3 absolute">
                            <h3 class="text-white font-semibold fs-16 line-height-auto text-truncate-1 m-0">Hà Nội</h3>
                            <p class="m-0 text-white fs-12 line-height-auto">354 địa điểm</p>
                        </div>
                        <img src="./assets/app/images/places/place-7.jpg" class="ratio-media z-1" alt="<?php echo $title[array_rand($title)]; ?>">
                    </a>
                </div>
            </div>
        </div>       
    </div>
</section>
<section class="pt-10 pb-14 bg-gray">
    <div class="container">
        <div class="section-head mb-6 flex flex-col sm:flex-row justify-between gap-y-4 gap-x-6 items-start sm:items-end">
            <div class="section-head-info flex-1 flex flex-col gap-1">
                <h2 class="section-heading text-primary-600 font-semibold fs-24 m-0">Tin tức nổi bật</h2>
                <p class="section-des text-gray m-0">Khám phá nhiều dịch vụ đa dạng của chúng tôi</p>
            </div>
            <a href="#" class="theme-btn btn-primary">Xem tất cả</a>
        </div>
        <div class="featured-news grid grid-cols-1 lg:grid-cols-2 gap-y-6 gap-x-8 items-start">
                <?php
                    $type="box"; // list,card, cover, main
                    $border = "false";
                    include './components/news-card.php'
                ?>
            <div class="flex flex-col gap-6 lg:gap-8 xl:gap-6 featured-news-list">
                <?php
                    $type="list"; // list,card, cover, main
                    $border = "false";
                    include './components/news-card.php'
                ?>
                <?php
                    $type="list"; // list,card, cover, main
                    $border = "false";
                    include './components/news-card.php'
                ?>
                <?php
                    $type="list"; // list,card, cover, main
                    $border = "false";
                    include './components/news-card.php'
                ?>
            </div>
        </div>
    </div>
</section>
<section class="pt-10 pb-6">
    <div class="container">
        <div class="section-head mb-6 flex flex-col sm:flex-row justify-between gap-y-4 gap-x-6 items-start sm:items-end">
            <div class="section-head-info flex-1 flex flex-col gap-1">
                <h2 class="section-heading text-primary-600 font-semibold fs-24 m-0">Các đối tác khách hàng nổi bật</h2>
                <p class="section-des text-gray m-0">Khám phá nhiều dịch vụ đa dạng của chúng tôi</p>
            </div>
        </div>
        <div class="theme-slider-outer">
            <div class="theme-slider-inner">
                <div class="theme-slider" data-dots="true" data-infinite="true" data-gap="20" data-autoplay="false" data-item="1" data-item-sm="1" data-item-md="1" data-item-lg="1" data-item-xl="1">
                    <div class="theme-slider-item">        
                        <div class="partner-grid grid-cols-1 gap-5">
                            <div class="partner-grid-item">
                                <div class="partner-grid-logo rounded-4 overflow-hidden">
                                    <img src="./assets/app/images/partners/featured-logos/partner-1.png" alt="Đối tác">
                                </div>
                                <div class="partner-grid-thumb">
                                    <div class="partner-grid-ratio ratio-thumb ratio-1x1 rounded-8">
                                        <img src="./assets/app/images/partners/covers/partner-1.jpg" class="ratio-media" alt="Đối tác">
                                    </div>
                                </div>
                            </div>
                            <div class="partner-grid-item">
                                <div class="partner-grid-logo rounded-4 overflow-hidden">
                                    <img src="./assets/app/images/partners/featured-logos/partner-2.png" alt="Đối tác">
                                </div>
                                <div class="partner-grid-thumb">
                                    <div class="partner-grid-ratio ratio-thumb ratio-1x1 rounded-8">
                                        <img src="./assets/app/images/partners/covers/partner-2.jpg" class="ratio-media" alt="Đối tác">
                                    </div>
                                </div>
                            </div>
                            <div class="partner-grid-item">
                                <div class="partner-grid-logo rounded-4 overflow-hidden">
                                    <img src="./assets/app/images/partners/featured-logos/partner-3.png" alt="Đối tác">
                                </div>
                                <div class="partner-grid-thumb">
                                    <div class="partner-grid-ratio ratio-thumb ratio-1x1 rounded-8">
                                        <img src="./assets/app/images/partners/covers/partner-3.jpg" class="ratio-media" alt="Đối tác">
                                    </div>
                                </div>
                            </div>
                            <div class="partner-grid-item">
                                <div class="partner-grid-logo rounded-4 overflow-hidden">
                                    <img src="./assets/app/images/partners/featured-logos/partner-4.png" alt="Đối tác">
                                </div>
                                <div class="partner-grid-thumb">
                                    <div class="partner-grid-ratio ratio-thumb ratio-1x1 rounded-8">
                                        <img src="./assets/app/images/partners/covers/partner-4.jpg" class="ratio-media" alt="Đối tác">
                                    </div>
                                </div>
                            </div>
                            <div class="partner-grid-item">
                                <div class="partner-grid-logo rounded-4 overflow-hidden">
                                    <img src="./assets/app/images/partners/featured-logos/partner-5.png" alt="Đối tác">
                                </div>
                                <div class="partner-grid-thumb">
                                    <div class="partner-grid-ratio ratio-thumb ratio-1x1 rounded-8">
                                        <img src="./assets/app/images/partners/covers/partner-5.jpg" class="ratio-media" alt="Đối tác">
                                    </div>
                                </div>
                            </div>
                            <div class="partner-grid-item">
                                <div class="partner-grid-logo rounded-4 overflow-hidden">
                                    <img src="./assets/app/images/partners/featured-logos/partner-6.png" alt="Đối tác">
                                </div>
                                <div class="partner-grid-thumb">
                                    <div class="partner-grid-ratio ratio-thumb ratio-1x1 rounded-8">
                                        <img src="./assets/app/images/partners/covers/partner-6.jpg" class="ratio-media" alt="Đối tác">
                                    </div>
                                </div>
                            </div>
                            <div class="partner-grid-item">
                                <div class="partner-grid-logo rounded-4 overflow-hidden">
                                    <img src="./assets/app/images/partners/featured-logos/partner-7.png" alt="Đối tác">
                                </div>
                                <div class="partner-grid-thumb">
                                    <div class="partner-grid-ratio ratio-thumb ratio-1x1 rounded-8">
                                        <img src="./assets/app/images/partners/covers/partner-7.jpg" class="ratio-media" alt="Đối tác">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="theme-slider-item">        
                        <div class="partner-grid grid-cols-1 gap-5">
                            <div class="partner-grid-item">
                                <div class="partner-grid-logo rounded-4 overflow-hidden">
                                    <img src="./assets/app/images/partners/featured-logos/partner-1.png" alt="Đối tác">
                                </div>
                                <div class="partner-grid-thumb">
                                    <div class="partner-grid-ratio ratio-thumb ratio-1x1 rounded-8">
                                        <img src="./assets/app/images/partners/covers/partner-1.jpg" class="ratio-media" alt="Đối tác">
                                    </div>
                                </div>
                            </div>
                            <div class="partner-grid-item">
                                <div class="partner-grid-logo rounded-4 overflow-hidden">
                                    <img src="./assets/app/images/partners/featured-logos/partner-2.png" alt="Đối tác">
                                </div>
                                <div class="partner-grid-thumb">
                                    <div class="partner-grid-ratio ratio-thumb ratio-1x1 rounded-8">
                                        <img src="./assets/app/images/partners/covers/partner-2.jpg" class="ratio-media" alt="Đối tác">
                                    </div>
                                </div>
                            </div>
                            <div class="partner-grid-item">
                                <div class="partner-grid-logo rounded-4 overflow-hidden">
                                    <img src="./assets/app/images/partners/featured-logos/partner-3.png" alt="Đối tác">
                                </div>
                                <div class="partner-grid-thumb">
                                    <div class="partner-grid-ratio ratio-thumb ratio-1x1 rounded-8">
                                        <img src="./assets/app/images/partners/covers/partner-3.jpg" class="ratio-media" alt="Đối tác">
                                    </div>
                                </div>
                            </div>
                            <div class="partner-grid-item">
                                <div class="partner-grid-logo rounded-4 overflow-hidden">
                                    <img src="./assets/app/images/partners/featured-logos/partner-4.png" alt="Đối tác">
                                </div>
                                <div class="partner-grid-thumb">
                                    <div class="partner-grid-ratio ratio-thumb ratio-1x1 rounded-8">
                                        <img src="./assets/app/images/partners/covers/partner-4.jpg" class="ratio-media" alt="Đối tác">
                                    </div>
                                </div>
                            </div>
                            <div class="partner-grid-item">
                                <div class="partner-grid-logo rounded-4 overflow-hidden">
                                    <img src="./assets/app/images/partners/featured-logos/partner-5.png" alt="Đối tác">
                                </div>
                                <div class="partner-grid-thumb">
                                    <div class="partner-grid-ratio ratio-thumb ratio-1x1 rounded-8">
                                        <img src="./assets/app/images/partners/covers/partner-5.jpg" class="ratio-media" alt="Đối tác">
                                    </div>
                                </div>
                            </div>
                            <div class="partner-grid-item">
                                <div class="partner-grid-logo rounded-4 overflow-hidden">
                                    <img src="./assets/app/images/partners/featured-logos/partner-6.png" alt="Đối tác">
                                </div>
                                <div class="partner-grid-thumb">
                                    <div class="partner-grid-ratio ratio-thumb ratio-1x1 rounded-8">
                                        <img src="./assets/app/images/partners/covers/partner-6.jpg" class="ratio-media" alt="Đối tác">
                                    </div>
                                </div>
                            </div>
                            <div class="partner-grid-item">
                                <div class="partner-grid-logo rounded-4 overflow-hidden">
                                    <img src="./assets/app/images/partners/featured-logos/partner-7.png" alt="Đối tác">
                                </div>
                                <div class="partner-grid-thumb">
                                    <div class="partner-grid-ratio ratio-thumb ratio-1x1 rounded-8">
                                        <img src="./assets/app/images/partners/covers/partner-7.jpg" class="ratio-media" alt="Đối tác">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="theme-slider-item">        
                        <div class="partner-grid grid-cols-1 gap-5">
                            <div class="partner-grid-item">
                                <div class="partner-grid-logo rounded-4 overflow-hidden">
                                    <img src="./assets/app/images/partners/featured-logos/partner-1.png" alt="Đối tác">
                                </div>
                                <div class="partner-grid-thumb">
                                    <div class="partner-grid-ratio ratio-thumb ratio-1x1 rounded-8">
                                        <img src="./assets/app/images/partners/covers/partner-1.jpg" class="ratio-media" alt="Đối tác">
                                    </div>
                                </div>
                            </div>
                            <div class="partner-grid-item">
                                <div class="partner-grid-logo rounded-4 overflow-hidden">
                                    <img src="./assets/app/images/partners/featured-logos/partner-2.png" alt="Đối tác">
                                </div>
                                <div class="partner-grid-thumb">
                                    <div class="partner-grid-ratio ratio-thumb ratio-1x1 rounded-8">
                                        <img src="./assets/app/images/partners/covers/partner-2.jpg" class="ratio-media" alt="Đối tác">
                                    </div>
                                </div>
                            </div>
                            <div class="partner-grid-item">
                                <div class="partner-grid-logo rounded-4 overflow-hidden">
                                    <img src="./assets/app/images/partners/featured-logos/partner-3.png" alt="Đối tác">
                                </div>
                                <div class="partner-grid-thumb">
                                    <div class="partner-grid-ratio ratio-thumb ratio-1x1 rounded-8">
                                        <img src="./assets/app/images/partners/covers/partner-3.jpg" class="ratio-media" alt="Đối tác">
                                    </div>
                                </div>
                            </div>
                            <div class="partner-grid-item">
                                <div class="partner-grid-logo rounded-4 overflow-hidden">
                                    <img src="./assets/app/images/partners/featured-logos/partner-4.png" alt="Đối tác">
                                </div>
                                <div class="partner-grid-thumb">
                                    <div class="partner-grid-ratio ratio-thumb ratio-1x1 rounded-8">
                                        <img src="./assets/app/images/partners/covers/partner-4.jpg" class="ratio-media" alt="Đối tác">
                                    </div>
                                </div>
                            </div>
                            <div class="partner-grid-item">
                                <div class="partner-grid-logo rounded-4 overflow-hidden">
                                    <img src="./assets/app/images/partners/featured-logos/partner-5.png" alt="Đối tác">
                                </div>
                                <div class="partner-grid-thumb">
                                    <div class="partner-grid-ratio ratio-thumb ratio-1x1 rounded-8">
                                        <img src="./assets/app/images/partners/covers/partner-5.jpg" class="ratio-media" alt="Đối tác">
                                    </div>
                                </div>
                            </div>
                            <div class="partner-grid-item">
                                <div class="partner-grid-logo rounded-4 overflow-hidden">
                                    <img src="./assets/app/images/partners/featured-logos/partner-6.png" alt="Đối tác">
                                </div>
                                <div class="partner-grid-thumb">
                                    <div class="partner-grid-ratio ratio-thumb ratio-1x1 rounded-8">
                                        <img src="./assets/app/images/partners/covers/partner-6.jpg" class="ratio-media" alt="Đối tác">
                                    </div>
                                </div>
                            </div>
                            <div class="partner-grid-item">
                                <div class="partner-grid-logo rounded-4 overflow-hidden">
                                    <img src="./assets/app/images/partners/featured-logos/partner-7.png" alt="Đối tác">
                                </div>
                                <div class="partner-grid-thumb">
                                    <div class="partner-grid-ratio ratio-thumb ratio-1x1 rounded-8">
                                        <img src="./assets/app/images/partners/covers/partner-7.jpg" class="ratio-media" alt="Đối tác">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-6 pb-14">
    <div class="container">
        <div class="newsletter-box flex flex-col items-center justify-center gap-10 p-9 sm:p-12 md:p-16 xl:p-18 rounded-12 overflow-hidden">
            <div class="flex flex-col gap-2 items-center newsletter-box-content relative z-3">
                <h2 class="newsletter-box-title text-center m-0 text-white font-bold fs-24 md:fs-28 lg:fs-32">Đăng ký để được nhận ưu đãi cực Hot của chúng tôi</h2>
                <p class="newsletter-box-des text-center m-0 text-white">The generated Lorem Ipsum is therefore always free from repetition <span class="newsletter-box-large fs-28 font-semibold">50%</span></p>
            </div>
            <form action="" class="newsletter-box-form relative z-3">
                <input type="text" class="theme-form-control" required value="" placeholder="Nhập địa chỉ email của bạn...">
                <button type="submit" class="theme-btn btn-primary btn-lg">
                    <div class="flex md:hidden">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.0703 8.51L9.51026 4.23C3.76026 1.35 1.40026 3.71 4.28026 9.46L5.15026 11.2C5.40026 11.71 5.40026 12.3 5.15026 12.81L4.28026 14.54C1.40026 20.29 3.75026 22.65 9.51026 19.77L18.0703 15.49C21.9103 13.57 21.9103 10.43 18.0703 8.51ZM14.8403 12.75H9.44026C9.03026 12.75 8.69026 12.41 8.69026 12C8.69026 11.59 9.03026 11.25 9.44026 11.25H14.8403C15.2503 11.25 15.5903 11.59 15.5903 12C15.5903 12.41 15.2503 12.75 14.8403 12.75Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="btn-text hidden md:block">Đăng ký</div>
                </button>
            </form>
        </div>
    </div>
</section>
<?php
    include './template-parts/footer.php'
?>