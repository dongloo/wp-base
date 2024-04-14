<?php
    $comments = array("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.", "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, except to obtain some advantage from it?", "Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.");
    $users = array("Đăng Quang Minh","Lê Thị Ánh Tuyết","Hoàng Xuân Vinh");
    $locals = array("Novotel Đà Nẵng", "Star testimonial Phú Quốc", "Luxury Center Phan Thiết");
?>

<div class="testimonial-card">
    <div class="testimonial-card-head w-full">
        <svg width="32" height="25" viewBox="0 0 32 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.33152 10.6498C7.73732 10.5515 7.7209 10.4796 7.14987 10.5456L6.78807 10.5833C6.78807 10.5833 6.78011 7.87275 11.9983 1.3789C11.9952 1.37839 2.6373 6.15231 1.04214 15.8351C1.04012 15.8473 1.00265 16.0929 0.99356 16.1669L1.00121 16.1587C0.598083 19.5093 2.89403 22.6172 6.26014 23.1739C9.71813 23.7458 12.9842 21.4068 13.5561 17.9488C14.1285 14.4878 11.7895 11.2217 8.33152 10.6498Z" fill="#B0B7C4"/>
            <path d="M24.1499 10.6498C23.5557 10.5515 23.5393 10.4796 22.9682 10.5456L22.6064 10.5833C22.6064 10.5833 22.5985 7.87275 27.8167 1.3789C27.8136 1.37839 18.4557 6.15231 16.8605 15.8351C16.8585 15.8473 16.821 16.0929 16.8119 16.1669L16.8196 16.1587C16.4164 19.5093 18.7124 22.6172 22.0785 23.1739C25.5365 23.7458 28.8025 21.4068 29.3745 17.9488C29.9469 14.4878 27.6079 11.2217 24.1499 10.6498Z" fill="#B0B7C4"/>
        </svg>
        <div class="testimonial-rating-stars flex items-center justify-center flex-1 w-full">
            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.52447 0.463526C7.67415 0.0028708 8.32585 0.00286996 8.47553 0.463525L9.90837 4.87336C9.97531 5.07937 10.1673 5.21885 10.3839 5.21885H15.0207C15.505 5.21885 15.7064 5.83865 15.3146 6.12336L11.5633 8.84878C11.3881 8.9761 11.3148 9.20179 11.3817 9.4078L12.8145 13.8176C12.9642 14.2783 12.437 14.6613 12.0451 14.3766L8.29389 11.6512C8.11865 11.5239 7.88135 11.5239 7.70611 11.6512L3.95488 14.3766C3.56303 14.6613 3.03578 14.2783 3.18546 13.8176L4.6183 9.4078C4.68524 9.20179 4.61191 8.9761 4.43667 8.84878L0.685441 6.12336C0.293584 5.83866 0.494972 5.21885 0.979333 5.21885H5.6161C5.83272 5.21885 6.02469 5.07937 6.09163 4.87336L7.52447 0.463526Z" fill="#F7B92B"/>
            </svg>
            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.52447 0.463526C7.67415 0.0028708 8.32585 0.00286996 8.47553 0.463525L9.90837 4.87336C9.97531 5.07937 10.1673 5.21885 10.3839 5.21885H15.0207C15.505 5.21885 15.7064 5.83865 15.3146 6.12336L11.5633 8.84878C11.3881 8.9761 11.3148 9.20179 11.3817 9.4078L12.8145 13.8176C12.9642 14.2783 12.437 14.6613 12.0451 14.3766L8.29389 11.6512C8.11865 11.5239 7.88135 11.5239 7.70611 11.6512L3.95488 14.3766C3.56303 14.6613 3.03578 14.2783 3.18546 13.8176L4.6183 9.4078C4.68524 9.20179 4.61191 8.9761 4.43667 8.84878L0.685441 6.12336C0.293584 5.83866 0.494972 5.21885 0.979333 5.21885H5.6161C5.83272 5.21885 6.02469 5.07937 6.09163 4.87336L7.52447 0.463526Z" fill="#F7B92B"/>
            </svg>
            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.52447 0.463526C7.67415 0.0028708 8.32585 0.00286996 8.47553 0.463525L9.90837 4.87336C9.97531 5.07937 10.1673 5.21885 10.3839 5.21885H15.0207C15.505 5.21885 15.7064 5.83865 15.3146 6.12336L11.5633 8.84878C11.3881 8.9761 11.3148 9.20179 11.3817 9.4078L12.8145 13.8176C12.9642 14.2783 12.437 14.6613 12.0451 14.3766L8.29389 11.6512C8.11865 11.5239 7.88135 11.5239 7.70611 11.6512L3.95488 14.3766C3.56303 14.6613 3.03578 14.2783 3.18546 13.8176L4.6183 9.4078C4.68524 9.20179 4.61191 8.9761 4.43667 8.84878L0.685441 6.12336C0.293584 5.83866 0.494972 5.21885 0.979333 5.21885H5.6161C5.83272 5.21885 6.02469 5.07937 6.09163 4.87336L7.52447 0.463526Z" fill="#F7B92B"/>
            </svg>
            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.52447 0.463526C7.67415 0.0028708 8.32585 0.00286996 8.47553 0.463525L9.90837 4.87336C9.97531 5.07937 10.1673 5.21885 10.3839 5.21885H15.0207C15.505 5.21885 15.7064 5.83865 15.3146 6.12336L11.5633 8.84878C11.3881 8.9761 11.3148 9.20179 11.3817 9.4078L12.8145 13.8176C12.9642 14.2783 12.437 14.6613 12.0451 14.3766L8.29389 11.6512C8.11865 11.5239 7.88135 11.5239 7.70611 11.6512L3.95488 14.3766C3.56303 14.6613 3.03578 14.2783 3.18546 13.8176L4.6183 9.4078C4.68524 9.20179 4.61191 8.9761 4.43667 8.84878L0.685441 6.12336C0.293584 5.83866 0.494972 5.21885 0.979333 5.21885H5.6161C5.83272 5.21885 6.02469 5.07937 6.09163 4.87336L7.52447 0.463526Z" fill="#F7B92B"/>
            </svg>
            <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.52447 0.463526C7.67415 0.0028708 8.32585 0.00286996 8.47553 0.463525L9.90837 4.87336C9.97531 5.07937 10.1673 5.21885 10.3839 5.21885H15.0207C15.505 5.21885 15.7064 5.83865 15.3146 6.12336L11.5633 8.84878C11.3881 8.9761 11.3148 9.20179 11.3817 9.4078L12.8145 13.8176C12.9642 14.2783 12.437 14.6613 12.0451 14.3766L8.29389 11.6512C8.11865 11.5239 7.88135 11.5239 7.70611 11.6512L3.95488 14.3766C3.56303 14.6613 3.03578 14.2783 3.18546 13.8176L4.6183 9.4078C4.68524 9.20179 4.61191 8.9761 4.43667 8.84878L0.685441 6.12336C0.293584 5.83866 0.494972 5.21885 0.979333 5.21885H5.6161C5.83272 5.21885 6.02469 5.07937 6.09163 4.87336L7.52447 0.463526Z" fill="#F7B92B"/>
            </svg>
        </div>
    </div>
    <div class="testimonial-card-content">
        <div class="text-detail-secondary">
            <?php echo $comments[array_rand($comments)]; ?>
        </div>
    </div>
    <div class="testimonial-card-images flex items-center gap-2 w-full">
        <?php
            for ($i = 0; $i < 5; $i++) :
            $image = "./assets/app/images/feedback/feedback-" . rand(1, 12) . ".jpg"
        ?>

        <div class="testimonial-card-image flex-1">
            <div class="testimonial-card-thumb hover-opacity-90 rounded-4 overflow-hidden ratio-thumb ratio-1x1 cursor-pointer">
                <img class="ratio-media" src="<?php echo $image; ?>" alt="Cảm nhận khách hàng">
            </div>
        </div>
        <?php endfor; ?>
    </div>
    <div class="testimonial-card-line"></div>
    <div class="testimonial-card-user flex flex-col gap-2">
        <div class="user-card flex items-center gap-3">
            <div class="user-card-avatar">
                <div class="user-card-thumb rounded-full overflow-hidden ratio-thumb ratio-1x1">
                    <img src="./assets/app/images/users/user-<?php echo rand(2, 11); ?>.jpg" alt="<?php echo $users[array_rand($users)]; ?>" class="ratio-media">
                </div>
            </div>
            <div class="user-card-info flex flex-col gap-1 flex-1">
                <div class="font-semibold fs-16 line-height-auto"><?php echo $users[array_rand($users)]; ?></div>
                <div class="text-detail-secondary fs-13 line-height-auto">Đã đặt phòng tại <a class="text-primary-600 hover:text-primary" href="./hotel-detail.php"><?php echo $locals[array_rand($locals)]; ?></a></div>
            </div>
        </div>
    </div>
</div>