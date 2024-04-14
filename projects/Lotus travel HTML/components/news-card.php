<?php
    $cat = array("Travel to Đà Lạt", "Điểm đến nổi bật", "Trải nghiệm", "Ăn gì & ở đâu", "Mẹo du lịch", "Kinh nghiệm du lịch", "Travel to Đà Nẵng", "Travel to Phu Quoc");
    $title = array("Contrary to popular belief, Lorem Ipsum is not simply random text", "Du lịch Nha Trang nên đi đâu? Gợi ý 21 điểm đến HOT nhất 2024", "Bỏ túi kinh nghiệm du lịch Tam Đảo từ A - Z", "Kinh nghiệm du lịch Ba Vì - Trốn khỏi ồn ào nơi phố thị", "Kinh nghiệm du lịch Hạ Long chi tiết mới nhất 2024", "Kinh nghiệm du lịch Cô Tô tự túc từ A - Z 2024");
    $date = array("16/2/2024", "22/2/2024", "11/3/2024", "15/4/2024", "27/9/2024", "11/9/2024");
    $view = array("2.520", "900", "1.220", "2.340", "11.279", "5.460");
?>

<div class="news-card news-card-<?php echo $type?> <?php if($border == "true") :?>border border-solid border-gray<?php endif; ?>">
    <div class="news-card-thumb">
        <a href="./news-detail.php" class="news-card-ratio overflow-hidden hover-opacity-90 ratio-thumb">
            <img src="./assets/app/images/news/news-<?php echo rand(1, 14); ?>.jpg" class="ratio-media z-1" alt="<?php echo $title[array_rand($title)]; ?>">
        </a>
    </div>
    <div class="news-card-info">
        <a href="./news.php" class="news-card-category"><?php echo $cat[array_rand($cat)]; ?></a>
        <h3 class="m-0">
            <a href="./news-detail.php" class="news-card-title text-truncate-2"><?php echo $title[array_rand($title)]; ?></a>
        </h3>
        <?php if($type == "main") :?>
        <div class="flex-1">
            <p class="text-detail-secondary text-truncate-6">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more.</p>
        </div>
        <?php endif; ?>
        <div class="news-card-meta flex items-center gap-2 sm:gap-3">
            <div class="news-card-meta-item flex items-center text-detail-secondary line-height-auto">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_35_5100" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="21">
                    <rect y="0.5" width="20" height="20" fill="#808080"/>
                    </mask>
                    <g mask="url(#mask0_35_5100)">
                    <path d="M16.6026 3.44874H14.0385V2.16669H12.7564V3.44874H7.6282V2.16669H6.34615V3.44874H3.78205C3.07692 3.44874 2.5 4.02566 2.5 4.73079V17.5513C2.5 18.2564 3.07692 18.8334 3.78205 18.8334H16.6026C17.3077 18.8334 17.8846 18.2564 17.8846 17.5513V4.73079C17.8846 4.02566 17.3077 3.44874 16.6026 3.44874ZM16.6026 17.5513H3.78205V8.57694H16.6026V17.5513ZM16.6026 7.29489H3.78205V4.73079H6.34615V6.01284H7.6282V4.73079H12.7564V6.01284H14.0385V4.73079H16.6026V7.29489Z" fill="#677185"/>
                    </g>
                </svg>
                <span class="fs-13 news-card-meta-value"><?php echo $date[array_rand($date)]; ?></span>
            </div>
            <div class="news-card-meta-item flex items-center text-detail-secondary line-height-auto">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_35_5120" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="21">
                    <rect y="0.5" width="20" height="20" fill="#D9D9D9"/>
                    </mask>
                    <g mask="url(#mask0_35_5120)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.88177 9.58516C4.12584 6.36844 7.04684 4.66669 9.9879 4.66669C13.4379 4.66669 16.398 6.91252 18.1396 9.60229L18.1406 9.6038C18.2663 9.79918 18.3332 10.0266 18.3332 10.259C18.3332 10.4908 18.2666 10.7178 18.1414 10.9129C16.4009 13.638 13.4594 15.8502 9.9879 15.8502C6.47967 15.8502 3.59444 13.6422 1.85843 10.9254C1.72976 10.7256 1.66303 10.4921 1.66664 10.2544C1.67026 10.0161 1.74446 9.78413 1.87985 9.58793L1.88176 9.58515L1.88177 9.58516ZM3.00396 10.2754C4.58447 12.7162 7.08769 14.5351 9.9879 14.5351C12.857 14.5351 15.4153 12.7059 16.9981 10.2594C15.4085 7.83748 12.8298 5.98178 9.9879 5.98178C7.60449 5.98178 5.06549 7.35203 3.00396 10.2754Z" fill="#677185"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0018 8.17514C8.85102 8.17514 7.91812 9.10804 7.91812 10.2588C7.91812 11.4096 8.85102 12.3425 10.0018 12.3425C11.1526 12.3425 12.0855 11.4096 12.0855 10.2588C12.0855 9.10804 11.1526 8.17514 10.0018 8.17514ZM6.60303 10.2588C6.60303 8.38173 8.12471 6.86005 10.0018 6.86005C11.8789 6.86005 13.4006 8.38173 13.4006 10.2588C13.4006 12.1359 11.8789 13.6576 10.0018 13.6576C8.12471 13.6576 6.60303 12.1359 6.60303 10.2588Z" fill="#677185"/>
                    </g>
                </svg>
                <span class="fs-13 news-card-meta-value"><?php echo $view[array_rand($view)]; ?></span>
            </div>
        </div>
    </div>
</div>