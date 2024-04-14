
<section class="main-hero main-hero-<?php echo $type; ?>" style='background-image: url("<?php echo $bg; ?>")'>
    <div class="container">
        <div class="main-hero-inner flex flex-col items-center">
            <?php if($type == "full" ) :?>
            <div class="main-hero-top w-full pb-4 lg:pb-8 ">
                <div class="py-10 md:py-14 lg:py-18">
                    <div class="main-hero-head flex flex-col gap-1 py-5">
                        <h1 class="main-hero-title font-semibold text-white text-center text-truncate-2 fs-40 lg:fs-48 xl:fs-64 m-0">Lotus Travel</h1>
                        <p class="main-hero-sub-title text-white text-center text-truncate-3 fs-18 lg:fs-20 uppercase m-0">Hotel & Resort</p>
                    </div>
                </div>
                <div class="main-hero-action flex justify-center">
                    <a href="https://www.youtube.com/watch?v=zoEtcR5EW08" class="main-hero-play btn-less hover-opacity-90" data-fancybox="hero-gallery">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="24" r="23.5" stroke="white"/>
                            <path d="M36.5713 23.9997L17.7141 34.8868L17.7141 13.1125L36.5713 23.9997Z" fill="white"/>
                        </svg>
                    </a>
                </div>
            </div>
            <?php endif; ?>
            <?php if($type == "title" ) :?>
            <div class="main-hero-head flex flex-col gap-1 pb-2 pt-11">
                <h1 class="main-hero-title font-semibold text-white text-center text-truncate-2 fs-28 md:fs-32 lg:fs-40 m-0 line-height-auto"><?php echo $title; ?></h1>
            </div>
            <?php endif; ?>
            <?php if($type != "title") :?>
                <?php
                    $enableTab = $tab; // true,false
                    include './components/search-box.php'
                ?>
            <?php endif; ?>
        </div>
    </div>
</section>