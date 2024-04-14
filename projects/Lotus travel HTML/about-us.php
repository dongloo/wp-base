<?php
$type = 'transparent';
$top = "false";
$title = "Giới thiệu";
include './template-parts/header.php'
?>
<?php
$type = "title"; // full,compact,title
$bg = './assets/app/images/cover/about-us-cover.jpg';
$pageTitle = 'Giới thiệu';
$tab = "false";
include './components/main-hero.php'
?>
<section class="py-12">
    <div class="container">
        <div class="flex flex-col gap-8">
            <img src="./assets/app/images/about-us/about-us-1.png" class="w-full" alt="Giới thiệu">
            <div class="about-us-top-box flex flex-col gap-4 items-center">
                <h2 class="m-0 text-center font-semibold fs-24">Giới thiệu về Lotus Travel</h2>
                <div class="text-editor-content-detail w-full text-detail-secondary">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    <p>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-gray py-12">
    <div class="container">
        <div class="flex flex-col gap-10">
            <div class="about-us-grid-box grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="about-us-grid-box-image bg-white rounded-12 p-6 md:p-8 lg:p-10">
                    <div class="about-us-grid-box-thumb ratio-thumb rounded-8">
                        <img src="./assets/app/images/about-us/about-us-2.jpg" class="ratio-media" alt="Uy tín tạo nên thương hiệu">
                    </div>
                </div>
                <div class="about-us-grid-box-content flex">
                    <div class="about-us-middle-box flex flex-col gap-4">
                        <h2 class="m-0 font-semibold fs-24">Uy tín tạo nên thương hiệu</h2>
                        <div class="text-editor-content-detail w-full text-detail-secondary">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. </p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-us-grid-box grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="about-us-grid-box-image bg-white rounded-12 p-6 md:p-8 lg:p-10">
                    <div class="about-us-grid-box-thumb ratio-thumb rounded-8">
                        <img src="./assets/app/images/about-us/about-us-3.jpg" class="ratio-media" alt="Giá cạnh tranh tốt nhất thị trường">
                    </div>
                </div>
                <div class="about-us-grid-box-content flex">
                    <div class="about-us-middle-box flex flex-col gap-4">
                        <h2 class="m-0 font-semibold fs-24">Giá cạnh tranh tốt nhất thị trường</h2>
                        <div class="text-editor-content-detail w-full text-detail-secondary">
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble.</p>
                            <p>That are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.  when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<section class="pt-12 pb-6">
    <div class="container">
        <div class="about-us-box grid grid-cols-1 lg:grid-cols-2 gap-0 lg:gap-8 items-stretch rounded-12 overflow-hidden border border-solid border-gray">
            <div class="about-us-box-content px-8 py-8 lg:py-11 lg:px-12 flex flex-col justify-center gap-8">
                <div class="flex flex-col gap-4">
                    <h2 class="m-0 font-semibold fs-24">Dịch vụ tận tình, chu đáo</h2>
                    <div class="text-editor-content-detail w-full text-detail-secondary">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. </p>
                    </div>
                </div>
                <div class="flex flex-col gap-5">
                    <div class="flex items-center gap-4 text-detail line-height-auto">
                        <div class="image-box">
                            <img src="./assets/app/images/icons/about-us/about-us-1.svg" alt="Bãi đỗ xe thu phí">
                        </div>
                        <span class="flex-1">We denounce with righteous indignation</span>
                    </div>
                    <div class="flex items-center gap-4 text-detail line-height-auto">
                        <div class="image-box">
                            <img src="./assets/app/images/icons/about-us/about-us-2.svg" alt="Bãi đỗ xe thu phí">
                        </div>
                        <span class="flex-1">that they cannot foresee the pain and trouble</span>
                    </div>
                    <div class="flex items-center gap-4 text-detail line-height-auto">
                        <div class="image-box">
                            <img src="./assets/app/images/icons/about-us/about-us-3.svg" alt="Bãi đỗ xe thu phí">
                        </div>
                        <span class="flex-1">These cases are perfectly simple and easy</span>
                    </div>
                    <div class="flex items-center gap-4 text-detail line-height-auto">
                        <div class="image-box">
                            <img src="./assets/app/images/icons/about-us/about-us-4.svg" alt="Bãi đỗ xe thu phí">
                        </div>
                        <span class="flex-1">The wise man therefore always holds</span>
                    </div>
                </div>
            </div>
            <div class="about-us-box-image order-first order-lg-last">
                <div class="about-us-box-thumb ratio-thumb">
                    <img src="./assets/app/images/about-us/about-us-4.jpg" class="ratio-media" alt="Dịch vụ tận tình, chu đáo">
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="pt-6 pb-12 border-0 border-b border-solid border-gray">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex flex-col gap-6">
                    <div class="bg-gray rounded-12 p-8 lg:p-10 grid grid-cols-4 lg:grid-cols-5 gap-6px">
                        <?php
                            for ($i = 0; $i < 20; $i++) :
                            $imageID = $i + 1;
                        ?>
                            <div class="partner-logo-box bg-white flex justify-center items-center rounded-8 overflow-hidden">
                                <img src="./assets/app/images/partners/logos/partner-<?php echo $imageID; ?>.jpg" alt="Đối tác lâu năm">
                            </div>
                        <?php endfor; ?>                    
                    </div>
                    <div class="about-us-middle-box flex flex-col gap-4">
                        <h2 class="m-0 font-semibold fs-24">Đối tác lâu năm</h2>
                        <div class="text-editor-content-detail w-full text-detail-secondary">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-6">
                    <div class="bg-gray rounded-12 p-8 lg:p-10 grid grid-cols-4 lg:grid-cols-5 gap-6px">
                        <?php
                            for ($i = 20; $i < 40; $i++) :
                            $imageID = $i + 1;
                        ?>
                            <div class="partner-logo-box bg-white flex justify-center items-center rounded-8 overflow-hidden">
                                <img src="./assets/app/images/partners/logos/partner-<?php echo $imageID; ?>.jpg" alt="Đối tác lâu năm">
                            </div>
                        <?php endfor; ?>                    
                    </div>
                    <div class="about-us-middle-box flex flex-col gap-4">
                        <h2 class="m-0 font-semibold fs-24">Khách hàng tiêu biểu</h2>
                        <div class="text-editor-content-detail w-full text-detail-secondary">
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum because it is pleasure, but because those who do not know how to pursue pleasure rationally.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-11 pb-18">
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
<?php
include './template-parts/footer.php'
?>