<?php
    $title = array("Khách sạn Flamingo Đại Hải", "Resort Bến Khuê Nha Trang", "Khách sạn Vision Mentor", "Resort Luxury Herritor", "Khách Sạn Maximilan Đà Nẵng", "Khách Sạn Mường Thanh Center", "Centara Mirage Resort Mũi Né", "Naman Retreat Resort");
    $local = array("Thành phố Đà Nẵng", "Tỉnh Phú Thọ", "Thủ Đô Hà nội", "Thành phố Nha Trang", "Thành phố Phan Thiết", "Thành phố Vinh");
    $rate = array("244", "121", "98", "154", "275", "304", "227");
    $price = array("3,950,000 đ", "3,880,000 đ", "3,270,000 đ", "4,144,000 đ", "2,880,000 đ", "4,980,000 đ", "970,000 đ", "4,650,000 đ");
    $old_price = array("5,950,000 đ", "6,880,000 đ", "7,270,000 đ", "5,144,000 đ", "7,880,000 đ", "6,980,000 đ", "6,970,000 đ", "8,650,000 đ");
    $percent = array("11", "14", "8", "12", "22", "31", "34", "50");
    $score = array("8.8", "9.0", "9.1", "9.4", "9.5", "9.6", "9.7", "9.8");
?>

<div class="hotel-card hotel-card-<?php echo $type; ?>">
    <div class="hotel-card-thumb">
        <a href="./hotel-detail.php" class="hotel-card-ratio hover-opacity-90">
            <?php if($sale == "true") :?>
                <div class="hotel-card-sale">Giảm <?php echo $percent[array_rand($percent)]; ?>%</div>
            <?php endif; ?>
            <div class="card-rating-stars flex items-center">
                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.52447 0.463524C6.67415 0.00286841 7.32585 0.00286996 7.47553 0.463525L8.68386 4.18237C8.75079 4.38838 8.94277 4.52786 9.15938 4.52786H13.0696C13.554 4.52786 13.7554 5.14767 13.3635 5.43237L10.2001 7.73075C10.0248 7.85807 9.95149 8.08375 10.0184 8.28976L11.2268 12.0086C11.3764 12.4693 10.8492 12.8523 10.4573 12.5676L7.29389 10.2693C7.11865 10.1419 6.88135 10.1419 6.70611 10.2693L3.54267 12.5676C3.15081 12.8523 2.62357 12.4693 2.77325 12.0086L3.98157 8.28976C4.04851 8.08375 3.97518 7.85807 3.79994 7.73075L0.636495 5.43237C0.244639 5.14767 0.446028 4.52786 0.93039 4.52786H4.84062C5.05723 4.52786 5.24921 4.38838 5.31614 4.18237L6.52447 0.463524Z" fill="#F7B92B"/>
                </svg>
                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.52447 0.463524C6.67415 0.00286841 7.32585 0.00286996 7.47553 0.463525L8.68386 4.18237C8.75079 4.38838 8.94277 4.52786 9.15938 4.52786H13.0696C13.554 4.52786 13.7554 5.14767 13.3635 5.43237L10.2001 7.73075C10.0248 7.85807 9.95149 8.08375 10.0184 8.28976L11.2268 12.0086C11.3764 12.4693 10.8492 12.8523 10.4573 12.5676L7.29389 10.2693C7.11865 10.1419 6.88135 10.1419 6.70611 10.2693L3.54267 12.5676C3.15081 12.8523 2.62357 12.4693 2.77325 12.0086L3.98157 8.28976C4.04851 8.08375 3.97518 7.85807 3.79994 7.73075L0.636495 5.43237C0.244639 5.14767 0.446028 4.52786 0.93039 4.52786H4.84062C5.05723 4.52786 5.24921 4.38838 5.31614 4.18237L6.52447 0.463524Z" fill="#F7B92B"/>
                </svg>
                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.52447 0.463524C6.67415 0.00286841 7.32585 0.00286996 7.47553 0.463525L8.68386 4.18237C8.75079 4.38838 8.94277 4.52786 9.15938 4.52786H13.0696C13.554 4.52786 13.7554 5.14767 13.3635 5.43237L10.2001 7.73075C10.0248 7.85807 9.95149 8.08375 10.0184 8.28976L11.2268 12.0086C11.3764 12.4693 10.8492 12.8523 10.4573 12.5676L7.29389 10.2693C7.11865 10.1419 6.88135 10.1419 6.70611 10.2693L3.54267 12.5676C3.15081 12.8523 2.62357 12.4693 2.77325 12.0086L3.98157 8.28976C4.04851 8.08375 3.97518 7.85807 3.79994 7.73075L0.636495 5.43237C0.244639 5.14767 0.446028 4.52786 0.93039 4.52786H4.84062C5.05723 4.52786 5.24921 4.38838 5.31614 4.18237L6.52447 0.463524Z" fill="#F7B92B"/>
                </svg>
                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.52447 0.463524C6.67415 0.00286841 7.32585 0.00286996 7.47553 0.463525L8.68386 4.18237C8.75079 4.38838 8.94277 4.52786 9.15938 4.52786H13.0696C13.554 4.52786 13.7554 5.14767 13.3635 5.43237L10.2001 7.73075C10.0248 7.85807 9.95149 8.08375 10.0184 8.28976L11.2268 12.0086C11.3764 12.4693 10.8492 12.8523 10.4573 12.5676L7.29389 10.2693C7.11865 10.1419 6.88135 10.1419 6.70611 10.2693L3.54267 12.5676C3.15081 12.8523 2.62357 12.4693 2.77325 12.0086L3.98157 8.28976C4.04851 8.08375 3.97518 7.85807 3.79994 7.73075L0.636495 5.43237C0.244639 5.14767 0.446028 4.52786 0.93039 4.52786H4.84062C5.05723 4.52786 5.24921 4.38838 5.31614 4.18237L6.52447 0.463524Z" fill="#F7B92B"/>
                </svg>
                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.52447 0.463524C6.67415 0.00286841 7.32585 0.00286996 7.47553 0.463525L8.68386 4.18237C8.75079 4.38838 8.94277 4.52786 9.15938 4.52786H13.0696C13.554 4.52786 13.7554 5.14767 13.3635 5.43237L10.2001 7.73075C10.0248 7.85807 9.95149 8.08375 10.0184 8.28976L11.2268 12.0086C11.3764 12.4693 10.8492 12.8523 10.4573 12.5676L7.29389 10.2693C7.11865 10.1419 6.88135 10.1419 6.70611 10.2693L3.54267 12.5676C3.15081 12.8523 2.62357 12.4693 2.77325 12.0086L3.98157 8.28976C4.04851 8.08375 3.97518 7.85807 3.79994 7.73075L0.636495 5.43237C0.244639 5.14767 0.446028 4.52786 0.93039 4.52786H4.84062C5.05723 4.52786 5.24921 4.38838 5.31614 4.18237L6.52447 0.463524Z" fill="#F7B92B"/>
                </svg>
            </div>
            <img src="./assets/app/images/hotels/hotel-<?php echo rand(1, 11); ?>.jpg" alt="<?php echo $title[array_rand($title)]; ?>">
        </a>
    </div>
    <div class="hotel-card-main flex flex-col gap-2">
        <div class="hotel-card-head flex flex-col">
            <h3 class="m-0">
                <a href="./hotel-detail.php" class="font-medium fs-16 text-body hover:text-primary text-truncate-1"><?php echo $title[array_rand($title)]; ?></a>
            </h3>
            <div class="text-gray hotel-card-local text-truncate-1"><?php echo $local[array_rand($local)]; ?></div>
        </div>
        <div class="hotel-card-rating flex items-center">
            <div class="hotel-card-rating-score rounded-4 text-center font-medium text-white">
                <?php echo $score[array_rand($score)]; ?>
            </div>
            <span><span class="inline-block md:hidden xl:inline-block">Tuyệt vời</span> <span class="hotel-card-rating-count">(<?php echo $rate[array_rand($rate)]; ?> đánh giá)</span></span>
        </div>
        <div class="hotel-card-price pt-1 flex flex-col">
            <?php if($sale == "true") :?>
                <del class="hotel-card-price-sale text-gray"><?php echo $old_price[array_rand($old_price)]; ?></del>
            <?php endif; ?>
            <div class="hotel-card-price-regular text-primary-600 font-semibold fs-16"><?php echo $old_price[array_rand($old_price)]; ?></div>
        </div>
    </div>
</div>