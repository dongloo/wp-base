<?php
function vh_database_cache_shortcode() {
    ob_start(); // Bắt đầu bộ đệm đầu ra
?>
<div class="flex flex-col gap-8">
    <div class="flex flex-col gap-4">
        <h2 class="mb-0">Xóa cache database trang chủ</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <button type="button" class="delete-database-cache theme-btn btn-primary" data-owl-cache="du_an_noi_bat">Xóa cache dự án nổi bật</button>
            <button type="button" class="delete-database-cache theme-btn btn-primary" data-owl-cache="dang_duoc_quan_tam">Xóa cache đang được quan tâm nổi bật</button>
            <button type="button" class="delete-database-cache theme-btn btn-primary" data-owl-cache="san_pham">Xóa cache sản phẩm nổi bật</button>
            <button type="button" class="delete-database-cache theme-btn btn-primary" data-owl-cache="home_list_video">Xóa cache video nổi bật</button>
            <button type="button" class="delete-database-cache theme-btn btn-primary" data-owl-cache="home_list_language">Xóa cache các bài ngôn ngữ khác</button>
            <button type="button" class="delete-database-cache theme-btn btn-primary" data-owl-cache="home_list_most_viewed">Xóa cache các bài xem nhiều</button>
        </div>
    </div>
    <div class="flex flex-col gap-4">
        <h2 class="mb-0">Xóa cache database khác</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <button type="button" class="delete-database-cache theme-btn btn-primary" data-owl-cache="vi_tri_du_an_cache_key">Xóa cache vị trí dự án</button>
            <button type="button" class="delete-database-cache theme-btn btn-primary" data-owl-cache="vi_tri_du_an_noi_bat_cache_key">Xóa cache vị trí dự án nổi bật</button>
            <button type="button" class="delete-database-cache theme-btn btn-primary" data-owl-cache="cache_key_project">Xóa cache bộ lọc dự án</button>
            <button type="button" class="delete-database-cache theme-btn btn-primary" data-owl-cache="cache_key_project_feature">Xóa cache bộ lọc dự án nổi bật</button>
        </div>
    </div>
</div>
<?php
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
}
add_shortcode('vh_database_cache', 'vh_database_cache_shortcode');