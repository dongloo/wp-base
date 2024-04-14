<?php
    $title = array("Khách sạn Flamingo Đại Hải", "Resort Bến Khuê Nha Trang", "Khách sạn Vision Mentor", "Resort Luxury Herritor", "Khách Sạn Maximilan Đà Nẵng", "Khách Sạn Mường Thanh Center", "Centara Mirage Resort Mũi Né", "Naman Retreat Resort");
    $local = array("Phạm Văn Đồng, Tổ 14, Thành phố Đà Nẵng", "Tổ 11, Tỉnh Phú Thọ", "Nguyễn Trãi, Tổ 12, Thủ Đô Hà nội", "Cầu Giấy, Tổ 22, Thành phố Nha Trang", "Thụy Khuê, Tổ 33,Thành phố Phan Thiết", "Liễu Giai, Tổ 43, Thành phố Vinh");
    $rate = array("244", "121", "98", "154", "275", "304", "227");
    $price = array("3,950,000 đ", "3,880,000 đ", "3,270,000 đ", "4,144,000 đ", "2,880,000 đ", "4,980,000 đ", "970,000 đ", "4,650,000 đ");
    $old_price = array("5,950,000 đ", "6,880,000 đ", "7,270,000 đ", "5,144,000 đ", "7,880,000 đ", "6,980,000 đ", "6,970,000 đ", "8,650,000 đ");
    $percent = array("11", "14", "8", "12", "22", "31", "34", "50");
    $score = array("8.8", "9.0", "9.1", "9.4", "9.5", "9.6", "9.7", "9.8");
?>

<div class="hotel-list flex flex-col sm:flex-row items-stretch gap-4">
    <div class="hotel-list-thumb">
        <a href="./hotel-detail.php" class="hotel-list-ratio hover-opacity-90 relative rounded-6 ratio-thumb">
            <?php if($sale == "true") :?>
                <div class="hotel-card-sale">Giảm <?php echo $percent[array_rand($percent)]; ?>%</div>
            <?php endif; ?>
            
            <img src="./assets/app/images/hotels/hotel-<?php echo rand(1, 11); ?>.jpg" class="ratio-media" alt="<?php echo $title[array_rand($title)]; ?>">
        </a>
    </div>
    <div class="flex flex-col sm:flex-row items-stretch gap-4 flex-1">
        <div class="hotel-list-main flex flex-col flex-1 gap-6px justify-center">
            <div class="flex items-center gap-1">
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
            </div>        
            <h3 class="m-0">
                <a href="./hotel-detail.php" class="hotel-list-title font-medium fs-16 text-body hover:text-primary text-truncate-2"><?php echo $title[array_rand($title)]; ?></a>
            </h3>
            <div class="flex items-center gap-6px">
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
                <div class="text-detail hotel-list-local flex-1 text-truncate-1"><?php echo $local[array_rand($local)]; ?></div>
            </div>
            <div class="pt-1 pb-2 flex flex-col gap-2px">
                <div class="flex items-center gap-6px text-primary-600">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_35_2534" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="#D9D9D9"/>
                        </mask>
                        <g mask="url(#mask0_35_2534)">
                        <path d="M9.45455 15.306L6.66208 12.5552C6.35786 12.2555 5.86941 12.2555 5.56519 12.5552C5.25443 12.8613 5.25443 13.3626 5.56519 13.6687L9.45455 17.5L18.4348 8.65377C18.7456 8.34765 18.7456 7.84638 18.4348 7.54026C18.1306 7.24058 17.6421 7.24058 17.3379 7.54026L9.45455 15.306Z" fill="#289EA2"/>
                        </g>
                    </svg>
                    <p class="m-0 flex-1 text-truncate-1">Khu nghỉ dưỡng cao cấp có bãi biển riêng</p>
                </div>
                <div class="flex items-center gap-6px text-primary-600">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_35_2534" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                        <rect width="24" height="24" fill="#D9D9D9"/>
                        </mask>
                        <g mask="url(#mask0_35_2534)">
                        <path d="M9.45455 15.306L6.66208 12.5552C6.35786 12.2555 5.86941 12.2555 5.56519 12.5552C5.25443 12.8613 5.25443 13.3626 5.56519 13.6687L9.45455 17.5L18.4348 8.65377C18.7456 8.34765 18.7456 7.84638 18.4348 7.54026C18.1306 7.24058 17.6421 7.24058 17.3379 7.54026L9.45455 15.306Z" fill="#289EA2"/>
                        </g>
                    </svg>
                    <p class="m-0 flex-1 text-truncate-1">Khuôn viên rộng rãi, thoáng mát, sạch sẻ</p>
                </div>
            </div>
            <div class="items-center gap-x-6 gap-y-2 flex-wrap flex lg:grid grid-cols-2 xl:flex">
                <div class="flex items-center gap-2">
                    <div class="image-box">
                        <img src="./assets/app/images/icons/utilities/utility-10.svg" alt="Bãi đỗ xe thu phí">
                    </div>
                    <span class="whitespace-nowrap text-detail-secondary">View biển</span>
                </div>
                <div class="flex items-center gap-2">
                    <div class="image-box">
                        <img src="./assets/app/images/icons/utilities/utility-5.svg" alt="Bãi đỗ xe thu phí">
                    </div>
                    <span class="whitespace-nowrap text-detail-secondary">Spa</span>
                </div>
                <div class="flex items-center gap-2">
                    <div class="image-box">
                        <img src="./assets/app/images/icons/utilities/utility-2.svg" alt="Bãi đỗ xe thu phí">
                    </div>
                    <span class="whitespace-nowrap text-detail-secondary">Bể bơi</span>
                </div>
                <div class="flex items-center gap-2">
                    <div class="image-box">
                        <img src="./assets/app/images/icons/utilities/utility-11.svg" alt="Bãi đỗ xe thu phí">
                    </div>
                    <span class="whitespace-nowrap text-detail-secondary">Ăn sáng</span>
                </div>
            </div>
        </div>
        <div class="hotel-list-right flex flex-col justify-between items-start sm:items-end gap-2">
            <div class="hotel-list-rating flex flex-row sm:flex-col items-center sm:items-end gap-6px">
                <div class="hotel-card-rating-score rounded-4 text-center font-medium text-white">
                    <?php echo $score[array_rand($score)]; ?>
                </div>
                <div class="flex flex flex-row sm:flex-col items-center sm:items-end gap-2px">
                    <span class="font-medium text-gray text-right pr-1 sm:pr-0">Tuyệt vời</span>
                    <span class="hotel-list-rating-count fs-12 text-detail-secondary text-right">(<?php echo $rate[array_rand($rate)]; ?> đánh giá)</span></span>
                </div>
            </div>
            <div class="hotel-list-price flex flex-col items-start sm:items-end gap-2px">
                <?php if($sale == "true") :?>
                    <del class="hotel-list-price-sale text-gray text-left sm:text-right"><?php echo $old_price[array_rand($old_price)]; ?></del>
                <?php endif; ?>
                <div class="hotel-list-price-regular text-primary-600 font-semibold fs-16 text-left sm:text-right"><?php echo $old_price[array_rand($old_price)]; ?></div>
            </div>
        </div>
    </div>
</div>