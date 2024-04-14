<?php
$type = 'fill';
$top = "true";
$title = "Tin tức - Chi tiết";
include './template-parts/header.php'
?>
<section class="breadcrumb-outer py-3">
    <div class="container">
        <nav class="breadcrumb m-0 flex items-center gap-3 flex-wrap">
            <a class="breadcrumb-item flex items-center gap-3 text-body hover:text-primary-600 fs-13 font-medium" href="./index.php">Trang chủ</a>
            <a class="breadcrumb-item flex items-center gap-3 text-body hover:text-primary-600 fs-13 font-medium" href="./hotels.php">Tin tức</a>
            <span class="breadcrumb-item flex items-center gap-3 text-detail-secondary fs-13 active" aria-current="page">Chi tiết bài viết</span>
        </nav>
    </div>
</section>
<section class="news-detail-section pt-4 pb-6">
    <div class="container">
        <div class="news-detail-grid grid gap-12">
            <div class="news-detail-main">
            <?php
                include './components/news-detail.php'
            ?>
            </div>
            <div class="news-detail-sidebar flex flex-col gap-5">
                <div class="rounded-12 border border-solid border-gray p-6">
                    <div class="border-0 border-b border-solid border-gray pb-4">
                        <h2 class="font-semibold fs-16 m-0">Tin tức nổi bật</h2>
                    </div>
                    <div class="flex flex-col gap-8 items-center pt-5">
                        <div class="flex flex-col gap-5 w-full">
                            <?php
                                include './components/news-list.php'
                            ?>
                            <?php
                                include './components/news-list.php'
                            ?>
                            <?php
                                include './components/news-list.php'
                            ?>
                            <?php
                                include './components/news-list.php'
                            ?>
                        </div>
                        <a href="./news.php" class="flex items-center gap-6px text-primary-600 hover:text-primary font-medium">
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
                <div class="flex flex-col gap-5 detail-sidebar-sticky">
                    <div class="rounded-12 border border-solid border-gray p-6">
                        <div class="border-0 border-b border-solid border-gray pb-4">
                            <h2 class="font-semibold fs-16 m-0">Danh mục</h2>
                        </div>
                        <div class="flex flex-col gap-8 items-center pt-5">
                            <div class="flex gap-3 w-full flex-wrap">
                                <a href="./news.php" class="hover-opacity-90 owl-badge owl-badge-danger">Travel to Đà Lạt</a>
                                <a href="./news.php" class="hover-opacity-90 owl-badge owl-badge-warning">Mẹo du lịch</a>
                                <a href="./news.php" class="hover-opacity-90 owl-badge owl-badge-primary">Ăn gì & Ở đâu</a>
                                <a href="./news.php" class="hover-opacity-90 owl-badge owl-badge-success">Kinh nghiệm du lịch</a>
                                <a href="./news.php" class="hover-opacity-90 owl-badge owl-badge-info">Điểm đến nổi bật</a>
                                <a href="./news.php" class="hover-opacity-90 owl-badge owl-badge-secondary">Kinh nghiệm du lịch</a>
                            </div>                       
                        </div>
                    </div>       
                    <div class="rounded-12 border border-solid border-gray p-6">
                        <div class="border-0 border-b border-solid border-gray pb-4">
                            <h2 class="font-semibold fs-16 m-0">Đội ngũ tác giả</h2>
                        </div>
                        <div class="flex flex-col gap-6 items-center pt-5">
                            <div class="flex flex-col gap-5 w-full">
                                <div class="flex items-center gap-3 lg:gap-4">
                                    <div class="sidebar-user-thumb">
                                        <a href="#" class="ratio-thumb ratio-1x1 rounded-full hover-opacity-90">
                                            <img class="ratio-media" src="./assets/app/images/users/user-<?php echo rand(2,11); ?>.jpg" alt="Nguyễn Minh Nghi">
                                        </a>
                                    </div>
                                    <div class="flex-1 flex flex-col gap-1">
                                        <a href="#" class="font-medium fs-16 text-body hover:text-primary-600">Nguyễn Minh Nghi</a>
                                        <span class="text-detail-secondary">21 bài viết</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 lg:gap-4">
                                    <div class="sidebar-user-thumb">
                                        <a href="#" class="ratio-thumb ratio-1x1 rounded-full hover-opacity-90">
                                            <img class="ratio-media" src="./assets/app/images/users/user-<?php echo rand(2,11); ?>.jpg" alt="Trần thị kim phượng">
                                        </a>
                                    </div>
                                    <div class="flex-1 flex flex-col gap-1">
                                        <a href="#" class="font-medium fs-16 text-body hover:text-primary-600">Trần thị kim phượng</a>
                                        <span class="text-detail-secondary">25 bài viết</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 lg:gap-4">
                                    <div class="sidebar-user-thumb">
                                        <a href="#" class="ratio-thumb ratio-1x1 rounded-full hover-opacity-90">
                                            <img class="ratio-media" src="./assets/app/images/users/user-<?php echo rand(2,11); ?>.jpg" alt="Hoàng quốc trung">
                                        </a>
                                    </div>
                                    <div class="flex-1 flex flex-col gap-1">
                                        <a href="#" class="font-medium fs-16 text-body hover:text-primary-600">Hoàng quốc trung</a>
                                        <span class="text-detail-secondary">17 bài viết</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 lg:gap-4">
                                    <div class="sidebar-user-thumb">
                                        <a href="#" class="ratio-thumb ratio-1x1 rounded-full hover-opacity-90">
                                            <img class="ratio-media" src="./assets/app/images/users/user-<?php echo rand(2,11); ?>.jpg" alt="Trần huyền linh">
                                        </a>
                                    </div>
                                    <div class="flex-1 flex flex-col gap-1">
                                        <a href="#" class="font-medium fs-16 text-body hover:text-primary-600">Trần huyền linh</a>
                                        <span class="text-detail-secondary">19 bài viết</span>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="flex items-center gap-6px text-primary-600 hover:text-primary font-medium">
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
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-6 pb-18">
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