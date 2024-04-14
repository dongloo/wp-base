<?php
    $cat = array("Travel to Đà Lạt", "Điểm đến nổi bật", "Trải nghiệm", "Ăn gì & ở đâu", "Mẹo du lịch", "Kinh nghiệm du lịch", "Travel to Đà Nẵng", "Travel to Phu Quoc");
    $title = array("Contrary to popular belief, Lorem Ipsum is not simply random text", "Du lịch Nha Trang nên đi đâu? Gợi ý 21 điểm đến HOT nhất 2024", "Bỏ túi kinh nghiệm du lịch Tam Đảo từ A - Z", "Kinh nghiệm du lịch Ba Vì - Trốn khỏi ồn ào nơi phố thị", "Kinh nghiệm du lịch Hạ Long chi tiết mới nhất 2024", "Kinh nghiệm du lịch Cô Tô tự túc từ A - Z 2024");
?>

<div class="news-list-item grid items-center gap-4">
    <div class="news-list-thumb">
        <a href="./news-detail.php" class="news-list-ratio overflow-hidden hover-opacity-90 ratio-thumb rounded-8">
            <img src="./assets/app/images/news/news-<?php echo rand(1, 14); ?>.jpg" class="ratio-media z-1" alt="<?php echo $title[array_rand($title)]; ?>">
        </a>
    </div>
    <div class="news-list-info flex flex-col gap-6px">
        <a href="./news.php" class="news-list-category text-primary-600 hover:text-primary fs-13 font-medium line-height-auto"><?php echo $cat[array_rand($cat)]; ?></a>
        <h3 class="m-0">
            <a href="./news-detail.php" class="news-list-title text-truncate-2 text-body hover:text-primary-600 font-medium fs-14"><?php echo $title[array_rand($title)]; ?></a>
        </h3>
    </div>
</div>