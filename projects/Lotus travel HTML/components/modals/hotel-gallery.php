<div class="modal fade" id="modal-hotel-gallery" tabindex="-1" aria-labelledby="modal-hotel-galleryLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-hotel-detail-size custom-modal modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.6">
                    <path d="M4.99209 19.4268C4.80127 19.2358 4.69409 18.9768 4.69409 18.7068C4.69409 18.4368 4.80127 18.1779 4.99209 17.9868L17.9605 5.02203C18.0538 4.92224 18.1663 4.84225 18.2912 4.78681C18.4161 4.73138 18.5509 4.70164 18.6875 4.69936C18.8242 4.69708 18.9598 4.72231 19.0865 4.77355C19.2132 4.82479 19.3283 4.90099 19.4249 4.99762C19.5215 5.09424 19.5977 5.20932 19.649 5.336C19.7002 5.46268 19.7254 5.59837 19.7232 5.735C19.7209 5.87163 19.6911 6.00641 19.6357 6.13131C19.5803 6.25621 19.5003 6.36868 19.4005 6.46203L6.42849 19.4268C6.23746 19.6177 5.9785 19.7248 5.70849 19.7248C5.43848 19.7248 5.17952 19.6177 4.98849 19.4268H4.99209Z" fill="white"/>
                    <path d="M4.99286 5.02212C5.18389 4.8313 5.44285 4.72412 5.71286 4.72412C5.98287 4.72412 6.24183 4.8313 6.43286 5.02212L19.3977 17.9905C19.4975 18.0839 19.5774 18.1963 19.6329 18.3212C19.6883 18.4461 19.7181 18.5809 19.7203 18.7176C19.7226 18.8542 19.6974 18.9899 19.6461 19.1166C19.5949 19.2432 19.5187 19.3583 19.4221 19.4549C19.3255 19.5516 19.2104 19.6278 19.0837 19.679C18.957 19.7302 18.8213 19.7555 18.6847 19.7532C18.5481 19.7509 18.4133 19.7212 18.2884 19.6657C18.1635 19.6103 18.051 19.5303 17.9577 19.4305L4.99286 6.45852C4.80314 6.26764 4.69666 6.00945 4.69666 5.74032C4.69666 5.47119 4.80314 5.213 4.99286 5.02212Z" fill="white"/>
                    </g>
                </svg>
            </button>
            <div class="modal-body">
                <div class="gallery-modal-head border-0 border-b border-solid border-gray px-6 md:px-10 flex flex-col md:flex-row items-center justify-between gap-0 md:gap-4">
                    <div class="flex-1 pt-4 md:pt-0 px-4 md:px-0 w-full md:w-auto">
                        <h3 class="m-0 font-semibold fs-18 md:fs-20 text-truncate-1 text-center md:text-left">Khách sạn Flamingo Đại Hải</h3>
                    </div>
                    <!-- Nav tabs -->
                    <div class="text-center md:text-right overflow-auto w-full md:w-auto">
                        <ul class="nav nav-tabs gap-4 lg:gap-6 flat-tabs m-0 justify-start md:justify-end flex-nowrap inline-flex" id="gallery-modal-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link py-4 whitespace-nowrap active"
                                    id="gallery-modal-all-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#gallery-modal-all"
                                    type="button"
                                    role="tab"
                                    aria-controls="gallery-modal-all"
                                    aria-selected="true"
                                >
                                    Tất cả
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link py-4 whitespace-nowrap"
                                    id="gallery-modal-balcony-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#gallery-modal-balcony"
                                    type="button"
                                    role="tab"
                                    aria-controls="gallery-modal-balcony"
                                    aria-selected="false"
                                >
                                    Ban công
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link py-4 whitespace-nowrap"
                                    id="gallery-modal-bedroom-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#gallery-modal-bedroom"
                                    type="button"
                                    role="tab"
                                    aria-controls="gallery-modal-bedroom"
                                    aria-selected="false"
                                >
                                    Phòng ngủ
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button
                                    class="nav-link py-4 whitespace-nowrap"
                                    id="gallery-modal-toilet-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#gallery-modal-toilet"
                                    type="button"
                                    role="tab"
                                    aria-controls="gallery-modal-toilet"
                                    aria-selected="false"
                                >
                                    Toilet
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="custom-modal-body custom-scrollbar">
                    <div class="px-6 md:px-10 pt-4 pb-6 md:pb-8 lg:pb-10">
                        <!-- Tab panes -->
                        <div class="tab-content tab-content-visible">
                            <div
                                class="tab-pane active"
                                id="gallery-modal-all"
                                role="tabpanel"
                                aria-labelledby="gallery-modal-all-tab"
                            >
                                <div class="theme-slider-outer gallery-modal-slider-outer">
                                    <div class="theme-slider-inner">
                                        <div class="theme-slider gallery-modal-slider" data-dot-thumb="true" data-ratio="true" data-dots="true" data-infinite="true" data-gap="24" data-autoplay="false" data-autoplay-speed="6000" data-item="1" data-item-sm="1" data-item-md="1" data-item-lg="1" data-item-xl="1">
                                            <?php for ($i = 1; $i < 6; $i++) :?>
                                                <div class="theme-slider-item">
                                                    <div class="gallery-modal-image ratio-thumb rounded-8">
                                                        <img src="./assets/app/images/hotel-detail/hotel-detail-<?php echo $i; ?>.jpg" class="gallery-modal-main-image" alt="Khách sạn Flamingo Đại Hải">
                                                    </div>
                                                </div>
                                            <?php endfor; ?>    
                                            <?php for ($i = 1; $i < 12; $i++) :?>
                                                <div class="theme-slider-item">
                                                    <div class="gallery-modal-image ratio-thumb rounded-8">
                                                        <img src="./assets/app/images/hotels/hotel-<?php echo $i; ?>.jpg" class="gallery-modal-main-image" alt="Khách sạn Flamingo Đại Hải">
                                                    </div>
                                                </div>
                                            <?php endfor; ?>    
                                        </div>
                                    </div>
                                    <div class="owl-nav gallery-modal-nav">
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
                            <div
                                class="tab-pane"
                                id="gallery-modal-balcony"
                                role="tabpanel"
                                aria-labelledby="gallery-modal-balcony-tab"
                            >
                                <div class="theme-slider-outer gallery-modal-slider-outer">
                                    <div class="theme-slider-inner">
                                        <div class="theme-slider gallery-modal-slider" data-dot-thumb="true" data-ratio="true" data-dots="true" data-infinite="true" data-gap="24" data-autoplay="false" data-autoplay-speed="6000" data-item="1" data-item-sm="1" data-item-md="1" data-item-lg="1" data-item-xl="1">
                                            <?php for ($i = 3; $i < 11; $i++) :?>
                                                <div class="theme-slider-item">
                                                    <div class="gallery-modal-image ratio-thumb rounded-8">
                                                        <img src="./assets/app/images/hotels/hotel-<?php echo $i; ?>.jpg" class="gallery-modal-main-image" alt="Khách sạn Flamingo Đại Hải">
                                                    </div>
                                                </div>
                                            <?php endfor; ?>    
                                        </div>
                                    </div>
                                    <div class="owl-nav gallery-modal-nav">
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
                            <div
                                class="tab-pane"
                                id="gallery-modal-bedroom"
                                role="tabpanel"
                                aria-labelledby="gallery-modal-bedroom-tab"
                            >
                                <div class="theme-slider-outer gallery-modal-slider-outer">
                                    <div class="theme-slider-inner">
                                        <div class="theme-slider gallery-modal-slider" data-dot-thumb="true" data-ratio="true" data-dots="true" data-infinite="true" data-gap="24" data-autoplay="false" data-autoplay-speed="6000" data-item="1" data-item-sm="1" data-item-md="1" data-item-lg="1" data-item-xl="1">
                                            <?php for ($i = 1; $i < 6; $i++) :?>
                                                <div class="theme-slider-item">
                                                    <div class="gallery-modal-image ratio-thumb rounded-8">
                                                        <img src="./assets/app/images/hotel-packs/hotel-pack-<?php echo $i; ?>.jpg" class="gallery-modal-main-image" alt="Khách sạn Flamingo Đại Hải">
                                                    </div>
                                                </div>
                                            <?php endfor; ?>   
                                        </div>
                                    </div>
                                    <div class="owl-nav gallery-modal-nav">
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
                            <div
                                class="tab-pane"
                                id="gallery-modal-toilet"
                                role="tabpanel"
                                aria-labelledby="gallery-modal-toilet-tab"
                            >
                                <div class="theme-slider-outer gallery-modal-slider-outer">
                                    <div class="theme-slider-inner">
                                        <div class="theme-slider gallery-modal-slider" data-dot-thumb="true" data-ratio="true" data-dots="true" data-infinite="true" data-gap="24" data-autoplay="false" data-autoplay-speed="6000" data-item="1" data-item-sm="1" data-item-md="1" data-item-lg="1" data-item-xl="1">  
                                            <?php for ($i = 7; $i < 10; $i++) :?>
                                                <div class="theme-slider-item">
                                                    <div class="gallery-modal-image ratio-thumb rounded-8">
                                                        <img src="./assets/app/images/hotel-packs/hotel-pack-<?php echo $i; ?>.jpg" class="gallery-modal-main-image" alt="Khách sạn Flamingo Đại Hải">
                                                    </div>
                                                </div>
                                            <?php endfor; ?>    
                                        </div>
                                    </div>
                                    <div class="owl-nav gallery-modal-nav">
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
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>