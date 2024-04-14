<?php
    $type = 'transparent';
    $top = "false";
    $title = "Chi tiết khách sạn";
    include './template-parts/header.php'
?>
<?php
    $type="compact"; // full,compact,title
    $bg = './assets/app/images/cover/hotel-detail-cover.jpg';
    $pageTitle = '';
    $tab = "false";
    include './components/main-hero.php'
?>
<section class="breadcrumb-outer py-3">
    <div class="container">
        <nav class="breadcrumb m-0 flex items-center gap-3 flex-wrap">
            <a class="breadcrumb-item flex items-center gap-3 text-body hover:text-primary-600 fs-13 font-medium" href="./index.php">Trang chủ</a>
            <a class="breadcrumb-item flex items-center gap-3 text-body hover:text-primary-600 fs-13 font-medium" href="./hotels.php">Khách sạn</a>
            <span class="breadcrumb-item flex items-center gap-3 text-detail-secondary fs-13 active" aria-current="page">Khách sạn Flamingo Đại Hải</span>
        </nav>
    </div>
</section>
<section class="detail-nav sticky" id="detail-nav">
    <div class="container-left">
        <ul class="detail-nav-items list-unstyled m-0 flex items-center gap-6 lg:gap-8 overflow-auto hidden-scrollbar-mobile">
            <li class="flex">
                <a href="#detail-general" class="detail-nav-item font-medium whitespace-nowrap fs-16 py-4 lg:py-5 active">Tổng quan</a>
            </li>
            <li class="flex">
                <a href="#detail-utilities" class="detail-nav-item font-medium whitespace-nowrap fs-16 py-4 lg:py-5">Thông số</a>
            </li>
            <li class="flex">
                <a href="#detail-rules" class="detail-nav-item font-medium whitespace-nowrap fs-16 py-4 lg:py-5">Quy định</a>
            </li>
            <li class="flex">
                <a href="#detail-faq" class="detail-nav-item font-medium whitespace-nowrap fs-16 py-4 lg:py-5">Q&A</a>
            </li>
            <li class="flex">
                <a href="#detail-review" class="detail-nav-item font-medium whitespace-nowrap fs-16 py-4 lg:py-5">Bình luận</a>
            </li>
        </ul>
    </div>
</section>
<section class="detail-top-section pt-6">
    <div class="container">
        <div class="flex flex-col gap-6">
            <div class="detail-head flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 sm:gap-6">
                <div class="flex flex-col gap-3 sm:gap-4 flex-1 items-start">
                    <h1 class="m-0 font-semibold fs-24 lg:fs-28 line-height-auto">Khách sạn Flamingo Đại Hải</h1>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 ">
                        <div class="flex items-center gap-6px flex-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_35_2520" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                <rect width="24" height="24" fill="#D9D9D9"/>
                                </mask>
                                <g mask="url(#mask0_35_2520)">
                                <mask id="mask1_35_2520" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="2" y="2" width="20" height="20">
                                <path d="M2 2H22V22H2V2Z" fill="white"/>
                                </mask>
                                <g mask="url(#mask1_35_2520)">
                                <path d="M12 21.4141C9.65625 17.8984 5.55469 13.1328 5.55469 9.03125C5.55469 5.4773 8.44605 2.58594 12 2.58594C15.5539 2.58594 18.4453 5.4773 18.4453 9.03125C18.4453 13.1328 14.3438 17.8984 12 21.4141Z" stroke="#677185" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 11.9609C10.3846 11.9609 9.07031 10.6466 9.07031 9.03125C9.07031 7.4159 10.3846 6.10156 12 6.10156C13.6154 6.10156 14.9297 7.4159 14.9297 9.03125C14.9297 10.6466 13.6154 11.9609 12 11.9609Z" stroke="#677185" stroke-width="1.3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                </g>
                            </svg>
                            <div class="text-detail sm:text-truncate-1 flex-1">Phạm Văn Đồng, Tổ 14, Khánh Hòa</div>
                        </div>
                        <div class="circle-dot hidden sm:block"></div>
                        <a class="flex items-center gap-2px detail-link-target" href="#detail-review">
                            <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.04894 0.927049C5.3483 0.00573826 6.6517 0.00573993 6.95106 0.927051L7.5716 2.83688C7.70547 3.2489 8.08943 3.52786 8.52265 3.52786H10.5308C11.4995 3.52786 11.9023 4.76748 11.1186 5.33688L9.49395 6.51722C9.14347 6.77187 8.99681 7.22323 9.13068 7.63525L9.75122 9.54508C10.0506 10.4664 8.9961 11.2325 8.21238 10.6631L6.58778 9.48278C6.2373 9.22813 5.7627 9.22814 5.41221 9.48278L3.78761 10.6631C3.0039 11.2325 1.94942 10.4664 2.24878 9.54508L2.86932 7.63526C3.00319 7.22323 2.85653 6.77186 2.50604 6.51722L0.881445 5.33688C0.0977311 4.76748 0.500508 3.52786 1.46923 3.52786H3.47735C3.91057 3.52786 4.29453 3.2489 4.4284 2.83688L5.04894 0.927049Z" fill="#FCBB13"/>
                            </svg>
                            <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.04894 0.927049C5.3483 0.00573826 6.6517 0.00573993 6.95106 0.927051L7.5716 2.83688C7.70547 3.2489 8.08943 3.52786 8.52265 3.52786H10.5308C11.4995 3.52786 11.9023 4.76748 11.1186 5.33688L9.49395 6.51722C9.14347 6.77187 8.99681 7.22323 9.13068 7.63525L9.75122 9.54508C10.0506 10.4664 8.9961 11.2325 8.21238 10.6631L6.58778 9.48278C6.2373 9.22813 5.7627 9.22814 5.41221 9.48278L3.78761 10.6631C3.0039 11.2325 1.94942 10.4664 2.24878 9.54508L2.86932 7.63526C3.00319 7.22323 2.85653 6.77186 2.50604 6.51722L0.881445 5.33688C0.0977311 4.76748 0.500508 3.52786 1.46923 3.52786H3.47735C3.91057 3.52786 4.29453 3.2489 4.4284 2.83688L5.04894 0.927049Z" fill="#FCBB13"/>
                            </svg>
                            <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.04894 0.927049C5.3483 0.00573826 6.6517 0.00573993 6.95106 0.927051L7.5716 2.83688C7.70547 3.2489 8.08943 3.52786 8.52265 3.52786H10.5308C11.4995 3.52786 11.9023 4.76748 11.1186 5.33688L9.49395 6.51722C9.14347 6.77187 8.99681 7.22323 9.13068 7.63525L9.75122 9.54508C10.0506 10.4664 8.9961 11.2325 8.21238 10.6631L6.58778 9.48278C6.2373 9.22813 5.7627 9.22814 5.41221 9.48278L3.78761 10.6631C3.0039 11.2325 1.94942 10.4664 2.24878 9.54508L2.86932 7.63526C3.00319 7.22323 2.85653 6.77186 2.50604 6.51722L0.881445 5.33688C0.0977311 4.76748 0.500508 3.52786 1.46923 3.52786H3.47735C3.91057 3.52786 4.29453 3.2489 4.4284 2.83688L5.04894 0.927049Z" fill="#FCBB13"/>
                            </svg>
                            <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.04894 0.927049C5.3483 0.00573826 6.6517 0.00573993 6.95106 0.927051L7.5716 2.83688C7.70547 3.2489 8.08943 3.52786 8.52265 3.52786H10.5308C11.4995 3.52786 11.9023 4.76748 11.1186 5.33688L9.49395 6.51722C9.14347 6.77187 8.99681 7.22323 9.13068 7.63525L9.75122 9.54508C10.0506 10.4664 8.9961 11.2325 8.21238 10.6631L6.58778 9.48278C6.2373 9.22813 5.7627 9.22814 5.41221 9.48278L3.78761 10.6631C3.0039 11.2325 1.94942 10.4664 2.24878 9.54508L2.86932 7.63526C3.00319 7.22323 2.85653 6.77186 2.50604 6.51722L0.881445 5.33688C0.0977311 4.76748 0.500508 3.52786 1.46923 3.52786H3.47735C3.91057 3.52786 4.29453 3.2489 4.4284 2.83688L5.04894 0.927049Z" fill="#FCBB13"/>
                            </svg>
                            <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.04894 0.927049C5.3483 0.00573826 6.6517 0.00573993 6.95106 0.927051L7.5716 2.83688C7.70547 3.2489 8.08943 3.52786 8.52265 3.52786H10.5308C11.4995 3.52786 11.9023 4.76748 11.1186 5.33688L9.49395 6.51722C9.14347 6.77187 8.99681 7.22323 9.13068 7.63525L9.75122 9.54508C10.0506 10.4664 8.9961 11.2325 8.21238 10.6631L6.58778 9.48278C6.2373 9.22813 5.7627 9.22814 5.41221 9.48278L3.78761 10.6631C3.0039 11.2325 1.94942 10.4664 2.24878 9.54508L2.86932 7.63526C3.00319 7.22323 2.85653 6.77186 2.50604 6.51722L0.881445 5.33688C0.0977311 4.76748 0.500508 3.52786 1.46923 3.52786H3.47735C3.91057 3.52786 4.29453 3.2489 4.4284 2.83688L5.04894 0.927049Z" fill="#FCBB13"/>
                            </svg>
                        </a>                        
                    </div>
                </div>
                <div class="flex flex-row sm:flex-col items-center sm:items-end gap-6px">
                    <div class="hotel-card-rating-score rounded-4 text-center font-medium text-white">
                        9.5
                    </div>
                    <div class="flex flex flex-row sm:flex-col items-center sm:items-end gap-2px">
                        <span class="font-medium text-gray text-right pr-1 sm:pr-0">Tuyệt vời</span>
                        <a class="fs-12 text-blue text-right hover-underline detail-link-target" href="#detail-review">(275 đánh giá)</a></span>
                    </div>                    
                </div>
            </div>
            <div class="detail-gallery-grid grid gap-3">
                <div class="detail-gallery-item">
                    <button class="btn-less detail-gallery-ratio cursor-pointer hover-opacity-90 ratio-thumb ratio-1x1 rounded-8" data-bs-toggle="modal" data-bs-target="#modal-hotel-gallery">
                        <img src="./assets/app/images/hotel-detail/hotel-detail-1.jpg" alt="Khách sạn Flamingo Đại Hải" class="ratio-media">
                    </button>
                </div>
                <div class="detail-gallery-item">
                    <button class="btn-less detail-gallery-ratio cursor-pointer hover-opacity-90 ratio-thumb ratio-1x1 rounded-8" data-bs-toggle="modal" data-bs-target="#modal-hotel-gallery">
                        <img src="./assets/app/images/hotel-detail/hotel-detail-2.jpg" alt="Khách sạn Flamingo Đại Hải" class="ratio-media">
                    </button>
                </div>
                <div class="detail-gallery-item">
                    <button class="btn-less detail-gallery-ratio cursor-pointer hover-opacity-90 ratio-thumb ratio-1x1 rounded-8" data-bs-toggle="modal" data-bs-target="#modal-hotel-gallery">
                        <img src="./assets/app/images/hotel-detail/hotel-detail-3.jpg" alt="Khách sạn Flamingo Đại Hải" class="ratio-media">
                    </button>
                </div>
                <div class="detail-gallery-item">
                    <button class="btn-less detail-gallery-ratio cursor-pointer hover-opacity-90 ratio-thumb ratio-1x1 rounded-8" data-bs-toggle="modal" data-bs-target="#modal-hotel-gallery">
                        <img src="./assets/app/images/hotel-detail/hotel-detail-4.jpg" alt="Khách sạn Flamingo Đại Hải" class="ratio-media">
                    </button>
                </div>
                <div class="detail-gallery-item">
                    <button class="btn-less detail-gallery-ratio cursor-pointer hover-opacity-90 ratio-thumb ratio-1x1 rounded-8" data-bs-toggle="modal" data-bs-target="#modal-hotel-gallery">
                        <img src="./assets/app/images/hotel-detail/hotel-detail-5.jpg" alt="Khách sạn Flamingo Đại Hải" class="ratio-media">
                    </button>
                </div>
                <div class="detail-gallery-item">
                    <div class="detail-gallery-count flex items-center justify-center rounded-8 overflow-hidden gap-6px">
                        <span class="font-medium text-white fs-18 lg:fs-20">+27</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.1429 0H2.85714C1.27929 0 0 1.27929 0 2.85714V17.1429C0 18.7207 1.27929 20 2.85714 20H17.1429C18.7207 20 20 18.7207 20 17.1429V2.85714C20 1.27929 18.7207 0 17.1429 0ZM13.7936 2.92643C14.9414 2.92643 15.8721 3.85714 15.8721 5.00571C15.8721 6.15429 14.9414 7.08429 13.7936 7.08429C12.6457 7.08429 11.7143 6.15357 11.7143 5.00571C11.7143 3.85786 12.6457 2.92643 13.7936 2.92643ZM16.3979 16.5407H12.9857H3.60286C3.02857 16.5407 2.68929 15.8979 3.01286 15.4236L7.03143 9.54C7.315 9.125 7.92714 9.125 8.21071 9.54L11.0707 13.7264L12.8593 11.105C13.1429 10.6893 13.7557 10.6893 14.0393 11.105L16.9871 15.4236C17.3114 15.8979 16.9714 16.5407 16.3979 16.5407Z" fill="white"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="detail-main-section">
    <div class="container">
        <div class="detail-main-grid grid pt-4">
            <div class="detail-main pb-6"> 
                <div id="detail-general" class="scroll-target-item py-8 border-0 border-b border-solid border-gray flex flex-col gap-6">
                    <h2 class="m-0 font-semibold fs-24 line-height-auto text-primary-600">Tổng quan</h2>
                    <div class="detail-read-more-area read-more-area relative block w-full">
                        <div class="detail-read-more-inner relative block w-full overflow-hidden" data-max-height="168" style="max-height: 168px;">
                            <div class="read-more-area-content relative z-10">
                                <div class="text-editor-content-detail text-gray">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur and Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum obcaecati enim earum quisquam officia cumque minima, omnis, optio quod impedit quaerat quidem, assumenda a consectetur facilis quo libero itaque ab.</p>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur and Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum obcaecati enim earum quisquam officia cumque minima, omnis, optio quod impedit quaerat quidem, assumenda a consectetur facilis quo libero itaque ab.</p>
                                </div>
                            </div>
                        </div>
                        <div class="read-more-area-actions w-full" style="display: none;">
                            <a href="#" class="read-more-area-btn flex items-center gap-6px text-primary-600 font-medium">
                                <div class="read-more-area-more">
                                    Xem thêm
                                </div>
                                <span class="read-more-area-less">
                                    Thu gọn
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
                <div id="detail-packages" class="scroll-target-item py-8 border-0 border-b border-solid border-gray flex flex-col gap-6">
                    <div class="rounded-12 overflow-hidden book-tour-box p-8 flex flex-col gap-6 items-start">
                        <div class="flex flex-col gap-2 relative z-3">
                            <h3 class="m-0 font-semibold fs-24 text-white line-height-auto">Đặt phòng theo tour đoàn</h3>
                            <p class="m-0 text-white">Khách đoàn đông hãy liên hệ ngay để có giá tốt nhất</p>
                        </div>
                        <a href="./contact.php" class="theme-btn btn-white book-tour-box-btn relative z-3">Liên hệ</a>
                    </div>
                    <h2 class="m-0 font-semibold fs-24 line-height-auto text-primary-600">Các hạng phòng</h2>
                    <div class="flex flex-col gap-5">
                        <?php
                            $sale = 'true';
                            include './components/hotel-book.php'
                        ?>
                        <?php
                            $sale = 'true';
                            include './components/hotel-book.php'
                        ?>
                        <?php
                            $sale = 'false';
                            include './components/hotel-book.php'
                        ?>
                        <?php
                            $sale = 'false';
                            include './components/hotel-book.php'
                        ?>
                    </div>
                </div>
                <div id="detail-utilities" class="scroll-target-item py-8 border-0 border-b border-solid border-gray flex flex-col gap-6">
                    <h2 class="m-0 font-semibold fs-24 line-height-auto text-primary-600">Thông số hỗ trợ</h2>
                    <div class="detail-read-more-area read-more-area relative block w-full">
                        <div class="detail-read-more-inner relative block w-full overflow-hidden" data-max-height="112" style="max-height: 112px;">
                            <div class="read-more-area-content relative z-10">
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                                    <div class="flex items-center gap-4">
                                        <div class="image-box">
                                            <img src="./assets/app/images/icons/utilities/utility-1.svg" alt="Thu đổi ngoại tệ">
                                        </div>
                                        <span class="flex-1 text-gray">Thu đổi ngoại tệ</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="image-box">
                                            <img src="./assets/app/images/icons/utilities/utility-2.svg" alt="Hồ bơi ngoài trời">
                                        </div>
                                        <span class="flex-1 text-gray">Hồ bơi ngoài trời</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="image-box">
                                            <img src="./assets/app/images/icons/utilities/utility-3.svg" alt="Sân thượng">
                                        </div>
                                        <span class="flex-1 text-gray">Sân thượng</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="image-box">
                                            <img src="./assets/app/images/icons/utilities/utility-4.svg" alt="Thang máy">
                                        </div>
                                        <span class="flex-1 text-gray">Thang máy</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="image-box">
                                            <img src="./assets/app/images/icons/utilities/utility-5.svg" alt="Phòng massage & spa">
                                        </div>
                                        <span class="flex-1 text-gray">Phòng massage & spa</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="image-box">
                                            <img src="./assets/app/images/icons/utilities/utility-6.svg" alt="Giữ hành lý">
                                        </div>
                                        <span class="flex-1 text-gray">Giữ hành lý</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="image-box">
                                            <img src="./assets/app/images/icons/utilities/utility-7.svg" alt="Dịch vụ giặt là">
                                        </div>
                                        <span class="flex-1 text-gray">Dịch vụ giặt là</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="image-box">
                                            <img src="./assets/app/images/icons/utilities/utility-8.svg" alt="Bãi đỗ xe thu phí">
                                        </div>
                                        <span class="flex-1 text-gray">Bãi đỗ xe thu phí</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="image-box">
                                            <img src="./assets/app/images/icons/utilities/utility-9.svg" alt="Phòng tập gym">
                                        </div>
                                        <span class="flex-1 text-gray">Phòng tập gym</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="image-box">
                                            <img src="./assets/app/images/icons/utilities/utility-10.svg" alt="View biển">
                                        </div>
                                        <span class="flex-1 text-gray">View biển</span>
                                    </div>
                                    <div class="flex items-center gap-4">
                                        <div class="image-box">
                                            <img src="./assets/app/images/icons/utilities/utility-11.svg" alt="Ăn sáng">
                                        </div>
                                        <span class="flex-1 text-gray">Ăn sáng</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="read-more-area-actions w-full" style="display: none;">
                            <a href="#" class="read-more-area-btn flex items-center gap-6px text-primary-600 font-medium">
                                <div class="read-more-area-more">
                                    Xem thêm
                                </div>
                                <span class="read-more-area-less">
                                    Thu gọn
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
                <div id="detail-near" class="scroll-target-item py-8 border-0 border-b border-solid border-gray flex flex-col gap-6">
                    <h2 class="m-0 font-semibold fs-24 line-height-auto text-primary-600">Địa điểm lân cận</h2>
                    <div class="detail-read-more-area read-more-area relative block w-full">
                        <div class="detail-read-more-inner relative block w-full overflow-hidden" data-max-height="150" style="max-height: 150px;">
                            <div class="read-more-area-content relative z-10">
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                                    <ul class="flex flex-col gap-5 list-unstyled m-0">
                                        <li class="detail-near-title text-body font-medium fs-16">Có gì ở gần đây?</li>
                                        <li class="detail-near-item text-gray flex items-center gap-2">
                                            <span>Bãi biển Vịnh Paradise</span>
                                            <span>(0.5km)</span>
                                        </li>
                                        <li class="detail-near-item text-gray flex items-center gap-2">
                                            <span>Bãi biển Tuần Châu</span>
                                            <span>(1.2km)</span>
                                        </li>
                                        <li class="detail-near-item text-gray flex items-center gap-2">
                                            <span>Bến Du Lịch Bãi Cháy</span>
                                            <span>(2.4km)</span>
                                        </li>
                                        <li class="detail-near-item text-gray flex items-center gap-2">
                                            <span>Trà & Cà phê Nam Phong</span>
                                            <span>(0.5km)</span>
                                        </li>
                                        <li class="detail-near-item text-gray flex items-center gap-2">
                                            <span>Thạch Phương</span>
                                            <span>(1.2km)</span>
                                        </li>
                                    </ul>
                                    <ul class="flex flex-col gap-5 list-unstyled m-0">
                                        <li class="detail-near-title text-body font-medium fs-16">Điểm tham quan hàng đầu</li>
                                        <li class="detail-near-item text-gray flex items-center gap-2">
                                            <span>Động Thiên Cung</span>
                                            <span>(0.5km)</span>
                                        </li>
                                        <li class="detail-near-item text-gray flex items-center gap-2">
                                            <span>Hang Đầu Gỗ</span>
                                            <span>(1.2km)</span>
                                        </li>
                                        <li class="detail-near-item text-gray flex items-center gap-2">
                                            <span>Bến Du Lịch Bãi Cháy</span>
                                            <span>(2.4km)</span>
                                        </li>
                                    </ul>
                                    <ul class="flex flex-col gap-5 list-unstyled m-0">
                                        <li class="detail-near-title text-body font-medium fs-16">Nhà hàng & quán cafe</li>
                                        <li class="detail-near-item text-gray flex items-center gap-2">
                                            <span>Trà & Cà phê Nam Phong</span>
                                            <span>(0.5km)</span>
                                        </li>
                                        <li class="detail-near-item text-gray flex items-center gap-2">
                                            <span>Thạch Phương</span>
                                            <span>(1.2km)</span>
                                        </li>
                                        <li class="detail-near-item text-gray flex items-center gap-2">
                                            <span>PAPA'S BBQ</span>
                                            <span>(2.4km)</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="read-more-area-actions w-full" style="display: none;">
                            <a href="#" class="read-more-area-btn flex items-center gap-6px text-primary-600 font-medium">
                                <div class="read-more-area-more">
                                    Xem thêm
                                </div>
                                <span class="read-more-area-less">
                                    Thu gọn
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
                <div id="detail-rules" class="scroll-target-item py-8 border-0 border-b border-solid border-gray flex flex-col gap-6">
                    <h2 class="m-0 font-semibold fs-24 line-height-auto text-primary-600">Quy định chung về chỗ ở</h2>
                    <div class="detail-read-more-area read-more-area relative block w-full">
                        <div class="detail-read-more-inner relative block w-full overflow-hidden" data-max-height="106" style="max-height: 106px;">
                            <div class="read-more-area-content relative z-10">
                                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                                    <ul class="flex flex-col gap-5 list-unstyled m-0">
                                        <li class="detail-rules-item text-gray flex items-start gap-2">
                                            <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.45455 8.30597L1.66208 5.55518C1.35786 5.2555 0.869414 5.2555 0.565191 5.55518C0.254429 5.86131 0.254429 6.36257 0.565191 6.66869L4.45455 10.5L13.4348 1.65377C13.7456 1.34765 13.7456 0.846384 13.4348 0.54026C13.1306 0.240577 12.6421 0.240577 12.3379 0.54026L4.45455 8.30597Z" fill="#3CBCB9"/>
                                            </svg>
                                            <span>Check-in: Sau 14:00:00</span>
                                        </li>
                                        <li class="detail-rules-item text-gray flex items-start gap-2">
                                            <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.45455 8.30597L1.66208 5.55518C1.35786 5.2555 0.869414 5.2555 0.565191 5.55518C0.254429 5.86131 0.254429 6.36257 0.565191 6.66869L4.45455 10.5L13.4348 1.65377C13.7456 1.34765 13.7456 0.846384 13.4348 0.54026C13.1306 0.240577 12.6421 0.240577 12.3379 0.54026L4.45455 8.30597Z" fill="#3CBCB9"/>
                                            </svg>
                                            <span>Check-out: Trước 12:00:00</span>
                                        </li>
                                        <li class="detail-rules-item text-gray flex items-start gap-2">
                                            <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.45455 8.30597L1.66208 5.55518C1.35786 5.2555 0.869414 5.2555 0.565191 5.55518C0.254429 5.86131 0.254429 6.36257 0.565191 6.66869L4.45455 10.5L13.4348 1.65377C13.7456 1.34765 13.7456 0.846384 13.4348 0.54026C13.1306 0.240577 12.6421 0.240577 12.3379 0.54026L4.45455 8.30597Z" fill="#3CBCB9"/>
                                            </svg>
                                            <span>Yêu cầu CMT / CCCD / Hộ chiếu</span>
                                        </li>
                                        <li class="detail-rules-item text-gray flex items-start gap-2">
                                            <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.45455 8.30597L1.66208 5.55518C1.35786 5.2555 0.869414 5.2555 0.565191 5.55518C0.254429 5.86131 0.254429 6.36257 0.565191 6.66869L4.45455 10.5L13.4348 1.65377C13.7456 1.34765 13.7456 0.846384 13.4348 0.54026C13.1306 0.240577 12.6421 0.240577 12.3379 0.54026L4.45455 8.30597Z" fill="#3CBCB9"/>
                                            </svg>
                                            <span>Báo trước 1 tiếng trước khi trả phòng</span>
                                        </li>
                                        <li class="detail-rules-item text-gray flex items-start gap-2">
                                            <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.45455 8.30597L1.66208 5.55518C1.35786 5.2555 0.869414 5.2555 0.565191 5.55518C0.254429 5.86131 0.254429 6.36257 0.565191 6.66869L4.45455 10.5L13.4348 1.65377C13.7456 1.34765 13.7456 0.846384 13.4348 0.54026C13.1306 0.240577 12.6421 0.240577 12.3379 0.54026L4.45455 8.30597Z" fill="#3CBCB9"/>
                                            </svg>
                                            <span>Bảo quản thiết bị, dụng cụ của khách sạn</span>
                                        </li>
                                        
                                    </ul>
                                    <ul class="flex flex-col gap-5 list-unstyled m-0">
                                        <li class="detail-rules-item text-gray flex items-start gap-2">
                                            <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.45455 8.30597L1.66208 5.55518C1.35786 5.2555 0.869414 5.2555 0.565191 5.55518C0.254429 5.86131 0.254429 6.36257 0.565191 6.66869L4.45455 10.5L13.4348 1.65377C13.7456 1.34765 13.7456 0.846384 13.4348 0.54026C13.1306 0.240577 12.6421 0.240577 12.3379 0.54026L4.45455 8.30597Z" fill="#3CBCB9"/>
                                            </svg>
                                            <span>Cho phép nấu ăn</span>
                                        </li>
                                        <li class="detail-rules-item text-gray flex items-start gap-2">
                                            <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.45455 8.30597L1.66208 5.55518C1.35786 5.2555 0.869414 5.2555 0.565191 5.55518C0.254429 5.86131 0.254429 6.36257 0.565191 6.66869L4.45455 10.5L13.4348 1.65377C13.7456 1.34765 13.7456 0.846384 13.4348 0.54026C13.1306 0.240577 12.6421 0.240577 12.3379 0.54026L4.45455 8.30597Z" fill="#3CBCB9"/>
                                            </svg>
                                            <span>Cho phép tổ chức tiệc</span>
                                        </li>
                                        <li class="detail-rules-item text-gray flex items-start gap-2">
                                            <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.45455 8.30597L1.66208 5.55518C1.35786 5.2555 0.869414 5.2555 0.565191 5.55518C0.254429 5.86131 0.254429 6.36257 0.565191 6.66869L4.45455 10.5L13.4348 1.65377C13.7456 1.34765 13.7456 0.846384 13.4348 0.54026C13.1306 0.240577 12.6421 0.240577 12.3379 0.54026L4.45455 8.30597Z" fill="#3CBCB9"/>
                                            </svg>
                                            <span>Cho phép chụp ảnh thương mại</span>
                                        </li>
                                    </ul>
                                    <ul class="flex flex-col gap-5 list-unstyled m-0">
                                        <li class="detail-rules-item text-gray flex items-start gap-2">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4727 0.21967C10.7656 -0.0732233 11.2405 -0.0732233 11.5334 0.21967C11.8263 0.512563 11.8263 0.987437 11.5334 1.28033L7.06371 5.75L11.7864 10.4727C12.0793 10.7656 12.0793 11.2405 11.7864 11.5334C11.4935 11.8263 11.0187 11.8263 10.7258 11.5334L6.00305 6.81066L1.28033 11.5334C0.987437 11.8263 0.512563 11.8263 0.21967 11.5334C-0.0732233 11.2405 -0.0732233 10.7656 0.21967 10.4727L4.94239 5.75L0.472718 1.28033C0.179825 0.987437 0.179825 0.512563 0.472718 0.21967C0.765611 -0.0732233 1.24049 -0.0732233 1.53338 0.21967L6.00305 4.68934L10.4727 0.21967Z" fill="#EB5757"/>
                                            </svg>
                                            <span>Không cho phép hút thuốc</span>
                                        </li>
                                        <li class="detail-rules-item text-gray flex items-start gap-2">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4727 0.21967C10.7656 -0.0732233 11.2405 -0.0732233 11.5334 0.21967C11.8263 0.512563 11.8263 0.987437 11.5334 1.28033L7.06371 5.75L11.7864 10.4727C12.0793 10.7656 12.0793 11.2405 11.7864 11.5334C11.4935 11.8263 11.0187 11.8263 10.7258 11.5334L6.00305 6.81066L1.28033 11.5334C0.987437 11.8263 0.512563 11.8263 0.21967 11.5334C-0.0732233 11.2405 -0.0732233 10.7656 0.21967 10.4727L4.94239 5.75L0.472718 1.28033C0.179825 0.987437 0.179825 0.512563 0.472718 0.21967C0.765611 -0.0732233 1.24049 -0.0732233 1.53338 0.21967L6.00305 4.68934L10.4727 0.21967Z" fill="#EB5757"/>
                                            </svg>
                                            <span>Không mang theo thú cưng</span>
                                        </li>
                                        <li class="detail-rules-item text-gray flex items-start gap-2">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4727 0.21967C10.7656 -0.0732233 11.2405 -0.0732233 11.5334 0.21967C11.8263 0.512563 11.8263 0.987437 11.5334 1.28033L7.06371 5.75L11.7864 10.4727C12.0793 10.7656 12.0793 11.2405 11.7864 11.5334C11.4935 11.8263 11.0187 11.8263 10.7258 11.5334L6.00305 6.81066L1.28033 11.5334C0.987437 11.8263 0.512563 11.8263 0.21967 11.5334C-0.0732233 11.2405 -0.0732233 10.7656 0.21967 10.4727L4.94239 5.75L0.472718 1.28033C0.179825 0.987437 0.179825 0.512563 0.472718 0.21967C0.765611 -0.0732233 1.24049 -0.0732233 1.53338 0.21967L6.00305 4.68934L10.4727 0.21967Z" fill="#EB5757"/>
                                            </svg>
                                            <span>Hạn chế làm ồn sau 10 giờ tối</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="read-more-area-actions w-full" style="display: none;">
                            <a href="#" class="read-more-area-btn flex items-center gap-6px text-primary-600 font-medium">
                                <div class="read-more-area-more">
                                    Xem thêm
                                </div>
                                <span class="read-more-area-less">
                                    Thu gọn
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
                <div id="detail-faq" class="scroll-target-item py-8 border-0 border-b border-solid border-gray flex flex-col gap-6">
                    <h2 class="m-0 font-semibold fs-24 line-height-auto text-primary-600">FAQ</h2>
                    <div class="detail-read-more-area read-more-area read-more-area-by-item relative block w-full">
                        <div class="detail-read-more-inner relative block w-full overflow-hidden" data-max-items="3">
                            <div class="read-more-area-content relative z-10 flex flex-col gap-5">
                                <div class="faq-item">
                                    <div class="owl-collapse-item active">
                                        <div class="owl-collapse-header flex items-center gap-4 justify-between py-5 px-6 cursor-pointer">
                                            <h3 class="owl-collapse-title fs-medium m-0 fs-14">
                                                Đặt cọc thuê Mường Thanh Luxury Ha Long Residence là bao nhiêu?
                                            </h3>
                                            <div class="owl-collapse-icon">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect class="owl-collapse-h" y="5" width="12" height="2" rx="1" fill="#3CBCB9"/>
                                                    <rect class="owl-collapse-v" x="7" width="12" height="2" rx="1" transform="rotate(90 7 0)" fill="#3CBCB9"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="owl-collapse-body">
                                            <div class="px-6 pb-5 text-detail-secondary">
                                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. if you are going to use a passage of Lorem Ipsum.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item">
                                    <div class="owl-collapse-item">
                                        <div class="owl-collapse-header flex items-center gap-4 justify-between py-5 px-6 cursor-pointer">
                                            <h3 class="owl-collapse-title fs-medium m-0 fs-14">
                                                Mấy giờ nhận phòng và trả phòng biệt thự Mường Thanh Luxury Ha Long Residence?
                                            </h3>
                                            <div class="owl-collapse-icon">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect class="owl-collapse-h" y="5" width="12" height="2" rx="1" fill="#3CBCB9"/>
                                                    <rect class="owl-collapse-v" x="7" width="12" height="2" rx="1" transform="rotate(90 7 0)" fill="#3CBCB9"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="owl-collapse-body" style="display: none">
                                        <div class="px-6 pb-5 text-detail-secondary">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. if you are going to use a passage of Lorem Ipsum.
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item">
                                    <div class="owl-collapse-item">
                                        <div class="owl-collapse-header flex items-center gap-4 justify-between py-5 px-6 cursor-pointer">
                                            <h3 class="owl-collapse-title fs-medium m-0 fs-14">
                                                Giá phòng Mường Thanh Luxury Ha Long Residence bao gồm những gì?
                                            </h3>
                                            <div class="owl-collapse-icon">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect class="owl-collapse-h" y="5" width="12" height="2" rx="1" fill="#3CBCB9"/>
                                                    <rect class="owl-collapse-v" x="7" width="12" height="2" rx="1" transform="rotate(90 7 0)" fill="#3CBCB9"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="owl-collapse-body" style="display: none">
                                        <div class="px-6 pb-5 text-detail-secondary">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. if you are going to use a passage of Lorem Ipsum.
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item">
                                    <div class="owl-collapse-item">
                                        <div class="owl-collapse-header flex items-center gap-4 justify-between py-5 px-6 cursor-pointer">
                                            <h3 class="owl-collapse-title fs-medium m-0 fs-14">
                                                Mấy giờ nhận phòng và trả phòng biệt thự Mường Thanh Luxury Ha Long Residence?
                                            </h3>
                                            <div class="owl-collapse-icon">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect class="owl-collapse-h" y="5" width="12" height="2" rx="1" fill="#3CBCB9"/>
                                                    <rect class="owl-collapse-v" x="7" width="12" height="2" rx="1" transform="rotate(90 7 0)" fill="#3CBCB9"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="owl-collapse-body" style="display: none">
                                        <div class="px-6 pb-5 text-detail-secondary">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. if you are going to use a passage of Lorem Ipsum.
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-item">
                                    <div class="owl-collapse-item">
                                        <div class="owl-collapse-header flex items-center gap-4 justify-between py-5 px-6 cursor-pointer">
                                            <h3 class="owl-collapse-title fs-medium m-0 fs-14">
                                                Giá phòng Mường Thanh Luxury Ha Long Residence bao gồm những gì?
                                            </h3>
                                            <div class="owl-collapse-icon">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect class="owl-collapse-h" y="5" width="12" height="2" rx="1" fill="#3CBCB9"/>
                                                    <rect class="owl-collapse-v" x="7" width="12" height="2" rx="1" transform="rotate(90 7 0)" fill="#3CBCB9"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="owl-collapse-body" style="display: none">
                                        <div class="px-6 pb-5 text-detail-secondary">
                                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. if you are going to use a passage of Lorem Ipsum.
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="read-more-area-actions w-full" style="display: none;">
                            <a href="#" class="read-more-area-btn flex items-center gap-6px text-primary-600 font-medium">
                                <div class="read-more-area-more">
                                    Xem thêm
                                </div>
                                <span class="read-more-area-less">
                                    Thu gọn
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
                <div id="detail-review" class="scroll-target-item py-8 flex flex-col gap-6">
                    <h2 class="m-0 font-semibold fs-24 line-height-auto text-primary-600">Review</h2>
                    <div class="review-area">
                        <div class="review-statistic grid gap-6 mb-10">
                            <div class="review-chart-outer flex justify-center items-center">
                                <div class="review-chart-main">
                                    <div class="review-chart rounded-full bg-main w-full ratio-thumb ratio-1x1">
                                        <div class="review-chart-inner">
                                            <div class="single-chart">
                                                <div class="single-chart-content flex flex-col gap-1 items-center justify-center">
                                                    <span class="text-center text-primary-600 font-medium line-height-auto fs-32 lg:fs-40 xl:fs-48">9.2</span>
                                                    <span class="text-center text-gray line-height-auto fs-14 lg:fs-16 pb-2">Tuyệt vời</span>
                                                </div>
                                                <svg viewBox="0 0 36 36" class="circular-chart orange">
                                                    <path class="circle-bg"
                                                        d="M18 2.0845
                                                        a 15.9155 15.9155 0 0 1 0 31.831
                                                        a 15.9155 15.9155 0 0 1 0 -31.831"
                                                    />
                                                    <path class="circle"
                                                        stroke-dasharray="90, 100"
                                                        d="M18 2.0845
                                                        a 15.9155 15.9155 0 0 1 0 31.831
                                                        a 15.9155 15.9155 0 0 1 0 -31.831"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review-statistic-items rounded-8 border boder-solid border-gray py-5 px-6 flex flex-col gap-4">
                                <div class="review-statistic-item grid gap-4 items-center">
                                    <div class="review-statistic-title text-gray whitespace-nowrap">Tuyệt vời</div>
                                    <div class="review-statistic-line flex-1">
                                        <div class="review-statistic-progress">
                                            <div class="review-statistic-percent" style="width: 90%"></div>
                                        </div>
                                    </div>
                                    <div class="review-statistic-value text-right text-gray whitespace-nowrap">141</div>
                                </div>
                                <div class="review-statistic-item grid gap-4 items-center">
                                    <div class="review-statistic-title text-gray whitespace-nowrap">Xuất sắc</div>
                                    <div class="review-statistic-line flex-1">
                                        <div class="review-statistic-progress">
                                            <div class="review-statistic-percent" style="width: 85%"></div>
                                        </div>
                                    </div>
                                    <div class="review-statistic-value text-right text-gray whitespace-nowrap">92</div>
                                </div>
                                <div class="review-statistic-item grid gap-4 items-center">
                                    <div class="review-statistic-title text-gray whitespace-nowrap">Tốt</div>
                                    <div class="review-statistic-line flex-1">
                                        <div class="review-statistic-progress">
                                            <div class="review-statistic-percent" style="width: 33%"></div>
                                        </div>
                                    </div>
                                    <div class="review-statistic-value text-right text-gray whitespace-nowrap">16</div>
                                </div>
                                <div class="review-statistic-item grid gap-4 items-center">
                                    <div class="review-statistic-title text-gray whitespace-nowrap">Trung bình</div>
                                    <div class="review-statistic-line flex-1">
                                        <div class="review-statistic-progress">
                                            <div class="review-statistic-percent" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div class="review-statistic-value text-right text-gray whitespace-nowrap">0</div>
                                </div>
                                <div class="review-statistic-item grid gap-4 items-center">
                                    <div class="review-statistic-title text-gray whitespace-nowrap">kém</div>
                                    <div class="review-statistic-line flex-1">
                                        <div class="review-statistic-progress">
                                            <div class="review-statistic-percent" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <div class="review-statistic-value text-right text-gray whitespace-nowrap">0</div>
                                </div>                                
                            </div>
                            <div class="review-statistic-items rounded-8 border boder-solid border-gray py-5 px-6 flex flex-col gap-4">
                            <div class="review-statistic-item grid gap-4 items-center">
                                    <div class="review-statistic-title text-gray whitespace-nowrap">Vị trí</div>
                                    <div class="review-statistic-line flex-1">
                                        <div class="review-statistic-progress">
                                            <div class="review-statistic-percent" style="width: 91%"></div>
                                        </div>
                                    </div>
                                    <div class="review-statistic-value text-right text-gray whitespace-nowrap">9.1</div>
                                </div>
                                <div class="review-statistic-item grid gap-4 items-center">
                                    <div class="review-statistic-title text-gray whitespace-nowrap">Giá cả</div>
                                    <div class="review-statistic-line flex-1">
                                        <div class="review-statistic-progress">
                                            <div class="review-statistic-percent" style="width: 92%"></div>
                                        </div>
                                    </div>
                                    <div class="review-statistic-value text-right text-gray whitespace-nowrap">9.2</div>
                                </div>
                                <div class="review-statistic-item grid gap-4 items-center">
                                    <div class="review-statistic-title text-gray whitespace-nowrap">Phục vụ</div>
                                    <div class="review-statistic-line flex-1">
                                        <div class="review-statistic-progress">
                                            <div class="review-statistic-percent" style="width: 93%"></div>
                                        </div>
                                    </div>
                                    <div class="review-statistic-value text-right text-gray whitespace-nowrap">9.3</div>
                                </div>
                                <div class="review-statistic-item grid gap-4 items-center">
                                    <div class="review-statistic-title text-gray whitespace-nowrap">Vệ sinh</div>
                                    <div class="review-statistic-line flex-1">
                                        <div class="review-statistic-progress">
                                            <div class="review-statistic-percent" style="width: 92%"></div>
                                        </div>
                                    </div>
                                    <div class="review-statistic-value text-right text-gray whitespace-nowrap">9.2</div>
                                </div>
                                <div class="review-statistic-item grid gap-4 items-center">
                                    <div class="review-statistic-title text-gray whitespace-nowrap">Tiện nghi</div>
                                    <div class="review-statistic-line flex-1">
                                        <div class="review-statistic-progress">
                                            <div class="review-statistic-percent" style="width: 92%"></div>
                                        </div>
                                    </div>
                                    <div class="review-statistic-value text-right text-gray whitespace-nowrap">9.2</div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-8 border-0 border-b border-solid border-gray flex flex-col gap-4 mb-8">
                            <h3 class="m-0 font-medium fs-16">Ảnh người dùng đánh giá</h3>
                            <div class="review-thumb-grid grid md:flex gap-2 flex-wrap items-center w-full">
                                <div class="review-thumb">
                                    <a href="./assets/app/images/feedback/feedback-1.jpg" class="ratio-thumb ratio-1x1 rounded-8 hover-opacity-90" data-fancybox="review-gallery">
                                        <img src="./assets/app/images/feedback/feedback-1.jpg" alt="Ảnh người dùng đánh giá" class="ratio-media z-1">
                                    </a>
                                </div>
                                <div class="review-thumb">
                                    <a href="./assets/app/images/feedback/feedback-2.jpg" class="ratio-thumb ratio-1x1 rounded-8 hover-opacity-90" data-fancybox="review-gallery">
                                        <img src="./assets/app/images/feedback/feedback-2.jpg" alt="Ảnh người dùng đánh giá" class="ratio-media z-1">
                                    </a>
                                </div>
                                <div class="review-thumb">
                                    <a href="./assets/app/images/feedback/feedback-3.jpg" class="ratio-thumb ratio-1x1 rounded-8 hover-opacity-90" data-fancybox="review-gallery">
                                        <img src="./assets/app/images/feedback/feedback-3.jpg" alt="Ảnh người dùng đánh giá" class="ratio-media z-1">
                                    </a>
                                </div>
                                <div class="review-thumb">
                                    <a href="./assets/app/images/feedback/feedback-4.jpg" class="ratio-thumb ratio-1x1 rounded-8 hover-opacity-90" data-fancybox="review-gallery">
                                        <img src="./assets/app/images/feedback/feedback-4.jpg" alt="Ảnh người dùng đánh giá" class="ratio-media z-1">
                                    </a>
                                </div>
                                <div class="review-thumb">
                                    <a href="./assets/app/images/feedback/feedback-5.jpg" class="ratio-thumb ratio-1x1 rounded-8 hover-opacity-90" data-fancybox="review-gallery">
                                        <img src="./assets/app/images/feedback/feedback-5.jpg" alt="Ảnh người dùng đánh giá" class="ratio-media z-1">
                                    </a>
                                </div>
                                <div class="review-thumb">
                                    <a href="./assets/app/images/feedback/feedback-6.jpg" class="ratio-thumb ratio-1x1 rounded-8 hover-opacity-90" data-fancybox="review-gallery">
                                        <img src="./assets/app/images/feedback/feedback-6.jpg" alt="Ảnh người dùng đánh giá" class="ratio-media z-1">
                                    </a>
                                </div>
                                <div class="review-thumb">
                                    <a href="./assets/app/images/feedback/feedback-7.jpg" class="ratio-thumb ratio-1x1 rounded-8 hover-opacity-90" data-fancybox="review-gallery">
                                        <img src="./assets/app/images/feedback/feedback-7.jpg" alt="Ảnh người dùng đánh giá" class="ratio-media z-1">
                                    </a>
                                </div>
                                <div class="review-thumb">
                                    <a href="./assets/app/images/feedback/feedback-8.jpg" class="ratio-thumb ratio-1x1 rounded-8 hover-opacity-90" data-fancybox="review-gallery">
                                        <img src="./assets/app/images/feedback/feedback-8.jpg" alt="Ảnh người dùng đánh giá" class="ratio-media z-1">
                                    </a>
                                </div>
                                <div class="review-thumb">
                                    <a href="./assets/app/images/feedback/feedback-9.jpg" class="ratio-thumb ratio-1x1 rounded-8 hover-opacity-90" data-fancybox="review-gallery">
                                        <img src="./assets/app/images/feedback/feedback-9.jpg" alt="Ảnh người dùng đánh giá" class="ratio-media z-1">
                                    </a>
                                </div>
                                <div class="review-thumb">
                                    <a href="./assets/app/images/feedback/feedback-10.jpg" class="ratio-thumb ratio-1x1 rounded-8 hover-opacity-90" data-fancybox="review-gallery">
                                        <img src="./assets/app/images/feedback/feedback-10.jpg" alt="Ảnh người dùng đánh giá" class="ratio-media z-1">
                                    </a>
                                </div>
                                <div class="review-thumb">
                                    <a href="./assets/app/images/feedback/feedback-11.jpg" class="ratio-thumb ratio-1x1 rounded-8 hover-opacity-90" data-fancybox="review-gallery">
                                        <div class="absolute z-2 text-white fs-16 font-medium review-thumb-count flex items-center justify-center w-full h-full">+4</div>
                                        <img src="./assets/app/images/feedback/feedback-11.jpg" alt="Ảnh người dùng đánh giá" class="ratio-media z-1">
                                    </a>
                                </div>
                                <div class="review-thumb hidden">
                                    <a href="./assets/app/images/feedback/feedback-12.jpg" class="ratio-thumb ratio-1x1 rounded-8 hover-opacity-90" data-fancybox="review-gallery">
                                        <img src="./assets/app/images/feedback/feedback-12.jpg" alt="Ảnh người dùng đánh giá" class="ratio-media z-1">
                                    </a>
                                </div>
                                <div class="review-thumb hidden">
                                    <a href="./assets/app/images/feedback/feedback-5.jpg" class="ratio-thumb ratio-1x1 rounded-8 hover-opacity-90" data-fancybox="review-gallery">
                                        <img src="./assets/app/images/feedback/feedback-5.jpg" alt="Ảnh người dùng đánh giá" class="ratio-media z-1">
                                    </a>
                                </div>
                                <div class="review-thumb hidden">
                                    <a href="./assets/app/images/feedback/feedback-7.jpg" class="ratio-thumb ratio-1x1 rounded-8 hover-opacity-90" data-fancybox="review-gallery">
                                        <img src="./assets/app/images/feedback/feedback-7.jpg" alt="Ảnh người dùng đánh giá" class="ratio-media z-1">
                                    </a>
                                </div>
                                <div class="review-thumb hidden">
                                    <a href="./assets/app/images/feedback/feedback-9.jpg" class="ratio-thumb ratio-1x1 rounded-8 hover-opacity-90" data-fancybox="review-gallery">
                                        <img src="./assets/app/images/feedback/feedback-9.jpg" alt="Ảnh người dùng đánh giá" class="ratio-media z-1">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="detail-read-more-area read-more-area read-more-area-by-item relative block w-full">
                            <div class="detail-read-more-inner relative block w-full overflow-hidden" data-max-items="4">
                                <div class="read-more-area-content relative z-10 grid grid-cols-1 sm:grid-cols-2 gap-x-5 gap-y-8">
                                    <div class="review-item-outer">
                                        <div class="review-item flex flex-col gap-4">
                                            <div class="flex items-center gap-3 lg:gap-4">
                                                <div class="user-item-thumb">
                                                    <a href="#" class="ratio-thumb ratio-1x1 rounded-full hover-opacity-90">
                                                        <img class="ratio-media" src="./assets/app/images/users/user-<?php echo rand(2,11); ?>.jpg" alt="Đặng Quang Ẩn">
                                                    </a>
                                                </div>
                                                <div class="flex-1 flex flex-col gap-1">
                                                    <div class="flex items-center gap-3">
                                                        <a href="#" class="font-medium fs-16 text-body hover:text-primary-600">Đặng Quang Ẩn</a>
                                                        <div class="hotel-card-rating-score rounded-4 text-center font-medium text-white">9.8</div>
                                                    </div>
                                                    <div class="flex items-center gap-2 review-item-meta">
                                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 17H15.222M2.48086 10.0552C2.10169 10.435 1.88877 10.9497 1.88887 11.4863V14.3334H4.75371C5.29059 14.3334 5.80524 14.1201 6.18479 13.7396L14.6291 5.29089C15.0084 4.91121 15.2214 4.39648 15.2214 3.8598C15.2214 3.32312 15.0084 2.80839 14.6291 2.42872L13.7953 1.59318C13.6073 1.40505 13.384 1.25583 13.1383 1.15405C12.8925 1.05226 12.6291 0.999918 12.3632 1C12.0972 1.00008 11.8338 1.05259 11.5881 1.15453C11.3425 1.25646 11.1193 1.40582 10.9314 1.59407L2.48086 10.0552Z" stroke="#808080" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        <span>21/2/2024</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="m-0 text-detail-secondary">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                        </div>
                                    </div>
                                    <div class="review-item-outer">
                                        <div class="review-item flex flex-col gap-4">
                                            <div class="flex items-center gap-3 lg:gap-4">
                                                <div class="user-item-thumb">
                                                    <a href="#" class="ratio-thumb ratio-1x1 rounded-full hover-opacity-90">
                                                        <img class="ratio-media" src="./assets/app/images/users/user-<?php echo rand(2,11); ?>.jpg" alt="Vũ Ngọc Huyền">
                                                    </a>
                                                </div>
                                                <div class="flex-1 flex flex-col gap-1">
                                                    <div class="flex items-center gap-3">
                                                        <a href="#" class="font-medium fs-16 text-body hover:text-primary-600">Vũ Ngọc Huyền</a>
                                                        <div class="hotel-card-rating-score rounded-4 text-center font-medium text-white">9.8</div>
                                                    </div>
                                                    <div class="flex items-center gap-2 review-item-meta">
                                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 17H15.222M2.48086 10.0552C2.10169 10.435 1.88877 10.9497 1.88887 11.4863V14.3334H4.75371C5.29059 14.3334 5.80524 14.1201 6.18479 13.7396L14.6291 5.29089C15.0084 4.91121 15.2214 4.39648 15.2214 3.8598C15.2214 3.32312 15.0084 2.80839 14.6291 2.42872L13.7953 1.59318C13.6073 1.40505 13.384 1.25583 13.1383 1.15405C12.8925 1.05226 12.6291 0.999918 12.3632 1C12.0972 1.00008 11.8338 1.05259 11.5881 1.15453C11.3425 1.25646 11.1193 1.40582 10.9314 1.59407L2.48086 10.0552Z" stroke="#808080" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        <span>21/2/2024</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="m-0 text-detail-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                        </div>
                                    </div>
                                    <div class="review-item-outer">
                                        <div class="review-item flex flex-col gap-4">
                                            <div class="flex items-center gap-3 lg:gap-4">
                                                <div class="user-item-thumb">
                                                    <a href="#" class="ratio-thumb ratio-1x1 rounded-full hover-opacity-90">
                                                        <img class="ratio-media" src="./assets/app/images/users/user-<?php echo rand(2,11); ?>.jpg" alt="Đặng Tiểu Quỳnh">
                                                    </a>
                                                </div>
                                                <div class="flex-1 flex flex-col gap-1">
                                                    <div class="flex items-center gap-3">
                                                        <a href="#" class="font-medium fs-16 text-body hover:text-primary-600">Đặng Tiểu Quỳnh</a>
                                                        <div class="hotel-card-rating-score rounded-4 text-center font-medium text-white">9.8</div>
                                                    </div>
                                                    <div class="flex items-center gap-2 review-item-meta">
                                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 17H15.222M2.48086 10.0552C2.10169 10.435 1.88877 10.9497 1.88887 11.4863V14.3334H4.75371C5.29059 14.3334 5.80524 14.1201 6.18479 13.7396L14.6291 5.29089C15.0084 4.91121 15.2214 4.39648 15.2214 3.8598C15.2214 3.32312 15.0084 2.80839 14.6291 2.42872L13.7953 1.59318C13.6073 1.40505 13.384 1.25583 13.1383 1.15405C12.8925 1.05226 12.6291 0.999918 12.3632 1C12.0972 1.00008 11.8338 1.05259 11.5881 1.15453C11.3425 1.25646 11.1193 1.40582 10.9314 1.59407L2.48086 10.0552Z" stroke="#808080" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        <span>21/2/2024</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="m-0 text-detail-secondary">I'm excited many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form to be randomised</p>
                                        </div>
                                    </div>
                                    <div class="review-item-outer">
                                        <div class="review-item flex flex-col gap-4">
                                            <div class="flex items-center gap-3 lg:gap-4">
                                                <div class="user-item-thumb">
                                                    <a href="#" class="ratio-thumb ratio-1x1 rounded-full hover-opacity-90">
                                                        <img class="ratio-media" src="./assets/app/images/users/user-<?php echo rand(2,11); ?>.jpg" alt="Lê Đại">
                                                    </a>
                                                </div>
                                                <div class="flex-1 flex flex-col gap-1">
                                                    <div class="flex items-center gap-3">
                                                        <a href="#" class="font-medium fs-16 text-body hover:text-primary-600">Lê Đại</a>
                                                        <div class="hotel-card-rating-score rounded-4 text-center font-medium text-white">9.8</div>
                                                    </div>
                                                    <div class="flex items-center gap-2 review-item-meta">
                                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 17H15.222M2.48086 10.0552C2.10169 10.435 1.88877 10.9497 1.88887 11.4863V14.3334H4.75371C5.29059 14.3334 5.80524 14.1201 6.18479 13.7396L14.6291 5.29089C15.0084 4.91121 15.2214 4.39648 15.2214 3.8598C15.2214 3.32312 15.0084 2.80839 14.6291 2.42872L13.7953 1.59318C13.6073 1.40505 13.384 1.25583 13.1383 1.15405C12.8925 1.05226 12.6291 0.999918 12.3632 1C12.0972 1.00008 11.8338 1.05259 11.5881 1.15453C11.3425 1.25646 11.1193 1.40582 10.9314 1.59407L2.48086 10.0552Z" stroke="#808080" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        <span>21/2/2024</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="m-0 text-detail-secondary">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                        </div>
                                    </div>
                                    <div class="review-item-outer">
                                        <div class="review-item flex flex-col gap-4">
                                            <div class="flex items-center gap-3 lg:gap-4">
                                                <div class="user-item-thumb">
                                                    <a href="#" class="ratio-thumb ratio-1x1 rounded-full hover-opacity-90">
                                                        <img class="ratio-media" src="./assets/app/images/users/user-<?php echo rand(2,11); ?>.jpg" alt="Đặng Quang Ẩn">
                                                    </a>
                                                </div>
                                                <div class="flex-1 flex flex-col gap-1">
                                                    <div class="flex items-center gap-3">
                                                        <a href="#" class="font-medium fs-16 text-body hover:text-primary-600">Đặng Quang Ẩn</a>
                                                        <div class="hotel-card-rating-score rounded-4 text-center font-medium text-white">9.8</div>
                                                    </div>
                                                    <div class="flex items-center gap-2 review-item-meta">
                                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 17H15.222M2.48086 10.0552C2.10169 10.435 1.88877 10.9497 1.88887 11.4863V14.3334H4.75371C5.29059 14.3334 5.80524 14.1201 6.18479 13.7396L14.6291 5.29089C15.0084 4.91121 15.2214 4.39648 15.2214 3.8598C15.2214 3.32312 15.0084 2.80839 14.6291 2.42872L13.7953 1.59318C13.6073 1.40505 13.384 1.25583 13.1383 1.15405C12.8925 1.05226 12.6291 0.999918 12.3632 1C12.0972 1.00008 11.8338 1.05259 11.5881 1.15453C11.3425 1.25646 11.1193 1.40582 10.9314 1.59407L2.48086 10.0552Z" stroke="#808080" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        <span>21/2/2024</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="m-0 text-detail-secondary">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                        </div>
                                    </div>
                                    <div class="review-item-outer">
                                        <div class="review-item flex flex-col gap-4">
                                            <div class="flex items-center gap-3 lg:gap-4">
                                                <div class="user-item-thumb">
                                                    <a href="#" class="ratio-thumb ratio-1x1 rounded-full hover-opacity-90">
                                                        <img class="ratio-media" src="./assets/app/images/users/user-<?php echo rand(2,11); ?>.jpg" alt="Đặng Quang Ẩn">
                                                    </a>
                                                </div>
                                                <div class="flex-1 flex flex-col gap-1">
                                                    <div class="flex items-center gap-3">
                                                        <a href="#" class="font-medium fs-16 text-body hover:text-primary-600">Đặng Quang Ẩn</a>
                                                        <div class="hotel-card-rating-score rounded-4 text-center font-medium text-white">9.8</div>
                                                    </div>
                                                    <div class="flex items-center gap-2 review-item-meta">
                                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 17H15.222M2.48086 10.0552C2.10169 10.435 1.88877 10.9497 1.88887 11.4863V14.3334H4.75371C5.29059 14.3334 5.80524 14.1201 6.18479 13.7396L14.6291 5.29089C15.0084 4.91121 15.2214 4.39648 15.2214 3.8598C15.2214 3.32312 15.0084 2.80839 14.6291 2.42872L13.7953 1.59318C13.6073 1.40505 13.384 1.25583 13.1383 1.15405C12.8925 1.05226 12.6291 0.999918 12.3632 1C12.0972 1.00008 11.8338 1.05259 11.5881 1.15453C11.3425 1.25646 11.1193 1.40582 10.9314 1.59407L2.48086 10.0552Z" stroke="#808080" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        <span>21/2/2024</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="m-0 text-detail-secondary">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="read-more-area-actions w-full" style="display: none;">
                                <a href="#" class="read-more-area-btn flex items-center gap-6px text-primary-600 font-medium">
                                    <div class="read-more-area-more">
                                        Xem thêm
                                    </div>
                                    <span class="read-more-area-less">
                                        Thu gọn
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
            <div class="detail-sidebar pb-8 pt-0 lg:pt-8 flex flex-col gap-5">
                <div class="rounded-12 border border-solid border-gray">
                    <div class="border-0 border-b border-solid border-gray py-5 px-6">
                        <span class="text-primary-600 font-semibold fs-20 line-height-auto">3,880,000 đ</span>
                        <span class="text-detail-secondary font-medium">/ Đêm</span>
                    </div>
                    <div class="py-5 px-6 flex flex-col gap-5">
                        <div class="border-0 border-b border-solid border-gray flex flex-col gap-4 pb-5">
                            <h3 class="m-0 font-medium fs-16">Bản đồ</h3>
                            <div class="rounded-8 overflow-hidden map-ratio">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d439.37665694755685!2d105.85149887915294!3d21.031611796446942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbfecb5fe67%3A0xdf1bf52318546d6c!2zUXXhuqNuZyB0csaw4budbmcgxJDDtG5nIEtpbmggTmdoxKlhIFRo4bulYw!5e0!3m2!1svi!2s!4v1711082537971!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3">
                            <h3 class="m-0 font-medium fs-16">Thông tin nổi bật</h3>
                            <p class="m-0 tex-detail-secondary">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-5 detail-sidebar-sticky">
                    <div class="rounded-12 bg-main">
                        <div class="py-5 px-6 flex flex-col gap-3">
                            <h3 class="m-0 font-medium fs-16">Lưu ý</h3>
                            <p class="m-0 tex-detail-secondary">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure.</p>
                        </div>
                    </div>
                    <div class="rounded-12 why-us">
                        <div class="why-us-grid flex flex-col lg:grid items-center lg:items-end pl-6 pr-6 lg:pr-0">
                            <div class="why-us-content flex flex-col gap-3 py-5 w-full lg:w-auto">
                                <h3 class="m-0 why-us-title font-medium fs-16">Lí do đặt phòng tại Lotus Travel</h3>
                                <p class="m-0 why-us-des">Cam kết giá tốt nhất và thanh toán dễ dàng, đa dạng, uy tín.</p>
                            </div>
                            <img src="./assets/app/images/banner/box-why-us-user.png" class="why-us-image" alt="Lí do đặt phòng tại Lotus Travel">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
    include './template-parts/footer.php'
?>