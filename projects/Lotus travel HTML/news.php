<?php
$type = 'transparent';
$top = "false";
$title = "Tin tức";
include './template-parts/header.php'
?>
<?php
$type = "title"; // full,compact,title
$bg = './assets/app/images/cover/news-cover.jpg';
$pageTitle = 'Tin tức';
$tab = "false";
include './components/main-hero.php'
?>
<section class="pt-12 pb-6">
    <div class="container">
        <div class="section-head mb-6 flex flex-col sm:flex-row justify-between gap-y-4 gap-x-6 items-start sm:items-end">
            <div class="section-head-info flex-1 flex flex-col gap-1">
                <h2 class="section-heading text-primary-600 font-semibold fs-24 m-0">Tin nổi bật</h2>
            </div>
        </div>
        <div class="news-featured-grid grid gap-y-8 gap-x-12">
            <?php
                $type="main"; // list,card, cover, main
                $border = "false";
                include './components/news-card.php'
            ?>
            <div class="news-featured-sidebar grid grid-cols-1 sm:grid-cols-2 lg:flex flex-col gap-5">
                <?php
                    $type="card"; // list,card, cover, main
                    $border = "false";
                    include './components/news-card.php'
                ?>
                <?php
                    $type="card"; // list,card, cover, main
                    $border = "false";
                    include './components/news-card.php'
                ?>
            </div>
        </div>        
    </div>
</section>
<section class="py-6">
    <div class="container">
        <div class="section-head mb-6 flex flex-col sm:flex-row justify-between gap-y-4 gap-x-6 items-start sm:items-end">
            <div class="section-head-info flex-1 flex flex-col gap-1">
                <h2 class="section-heading text-primary-600 font-semibold fs-24 m-0">Tin mới nhất</h2>
            </div>
        </div>
        <div class="theme-slider-outer news-card-slider-nav">
            <div class="theme-slider-inner">
                <div class="theme-slider" data-infinite="true" data-gap="24" data-autoplay="false" data-autoplay-speed="6000" data-item="1" data-item-sm="2" data-item-md="3" data-item-lg="4" data-item-xl="4">
                    <div class="theme-slider-item">
                        <?php
                            $type="card"; // list,card, cover, main
                            $border = "false";
                            include './components/news-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            $type="card"; // list,card, cover, main
                            $border = "false";
                            include './components/news-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            $type="card"; // list,card, cover, main
                            $border = "false";
                            include './components/news-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            $type="card"; // list,card, cover, main
                            $border = "false";
                            include './components/news-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            $type="card"; // list,card, cover, main
                            $border = "false";
                            include './components/news-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            $type="card"; // list,card, cover, main
                            $border = "false";
                            include './components/news-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            $type="card"; // list,card, cover, main
                            $border = "false";
                            include './components/news-card.php'
                        ?>
                    </div>
                    <div class="theme-slider-item">
                        <?php
                            $type="card"; // list,card, cover, main
                            $border = "false";
                            include './components/news-card.php'
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
<section class="pt-6 pb-14">
    <div class="container">
        <div class="section-head mb-6 flex flex-col sm:flex-row justify-between gap-y-4 gap-x-6 items-start sm:items-end">
            <div class="section-head-info flex-1 flex flex-col gap-1">
                <h2 class="section-heading text-primary-600 font-semibold fs-24 m-0">Vivu đó đây</h2>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-start">
            <?php
                $type="list"; // list,card, cover, main
                $border = "true";
                include './components/news-card.php'
            ?>
            <?php
                $type="list"; // list,card, cover, main
                $border = "true";
                include './components/news-card.php'
            ?>
            <?php
                $type="list"; // list,card, cover, main
                $border = "true";
                include './components/news-card.php'
            ?>
            <?php
                $type="list"; // list,card, cover, main
                $border = "true";
                include './components/news-card.php'
            ?>
            <?php
                $type="list"; // list,card, cover, main
                $border = "true";
                include './components/news-card.php'
            ?>
            <?php
                $type="list"; // list,card, cover, main
                $border = "true";
                include './components/news-card.php'
            ?>
        </div>
        <div class="flex justify-center w-full pt-8">
            <a href="#" class="flex items-center gap-6px text-primary-600 font-medium">
                <span>
                    Xem thêm
                </span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_35_3664" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
                    <rect x="0.5" y="-0.5" width="19" height="19" rx="3.5" transform="matrix(1 0 0 -1 0 19)" fill="#D9D9D9" stroke="#289EA2"/>
                    </mask>
                    <g mask="url(#mask0_35_3664)">
                    <path d="M5 7L10 12L15 7" stroke="#289EA2" stroke-width="1.5" stroke-linecap="round"/>
                    </g>
                </svg>
            </a>
        </div>            
    </div>
</section>
<?php
include './template-parts/footer.php'
?>