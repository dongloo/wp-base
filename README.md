# File version

## filemtime
```php
$css_ver = date("ymd-Gis", filemtime( get_stylesheet_directory() . '/assets/main/main.css' ));
$js_ver = date("ymd-Gis", filemtime( get_stylesheet_directory() . '/assets/main/main.js' ));
// Load CSS
wp_enqueue_style('main-style-css', get_stylesheet_directory_uri() . '/assets/main/main.css', array(), $css_ver, 'all');
// Load JS
wp_enqueue_script('main-scripts-js', get_stylesheet_directory_uri() . '/assets/main/main.js', array('jquery'), $js_ver, true);
```
### Trong đó:
`filemtime` (file modification time): là hàm lấy thời gian chỉnh sửa file

### Lưu ý:
* Hàm `get_stylesheet_directory()`: Lấy đường dẫn thư mục(path)
* Hàm `get_stylesheet_directory_uri()`: Lấy đường dẫn url
* Nếu bạn xử dụng các plugin cache, thì hãy xóa cache để cập nhât nữa nhé!


## Date
```php
<?=date('Y-m-d-h-i-s')?>
```


# Chặn spam comment
.htaccess
```php
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteCond %{REQUEST_METHOD} POST
RewriteCond %{REQUEST_URI} .wp-comments-post\.php*
RewriteCond %{HTTP_REFERER} !.yourdomain.com.* [OR] RewriteCond %{HTTP_USER_AGENT} ^$
RewriteRule (.*) ^http://%{REMOTE_ADDR}/$ [R=301,L] </IfModule>
```


# Dịch giao diện
Các từ cần dịch đều được cho vào các cú pháp được quy ước của WordPress (bước này quan trọng và phải làm trong tất cả file giao diện WordPress).
Có sử dụng textdomain trong style.css
``` css
/*
Theme Name: Code Tot
Text Domain: codetot
*/
```
Có đăng ký load file ngôn ngữ trong functions.php như sau:
```php
function codetot_theme_setup() {
  load_theme_textdomain('codetot', get_template_directory() . '/languages');
}

add_action('after_setup_theme', 'codetot_theme_setup');
```
Có thể scan code và tạo file template dịch mẫu (thường có tên trùng với giao diện, ví dụ `codetot.pot`). Bước này ta sẽ tìm hiểu ở phần dưới thông qua plugin Loco Translate.

## Cú pháp dịch ngôn ngữ trong lập trình giao diện WordPress

### Dịch từ đơn giản trong giao diện WordPress
```php
<h2>Nothing Found</h2>
```
Sẽ cần được chuyển thành:
```php
<h2><?php _e('Nothing Found', 'codetot'); ?></h2>
```
Hàm `_e('Từ cần dịch', 'codetot'`) tương đương với `echo __('Từ cần dịch bằng tiếng Anh', 'codetot'`) khi bạn muốn dịch 1 string.

### Dịch nhiều từ trong một cụm từ
Nếu bạn muốn dịch từ “Go to” nhưng nó nằm trong cụm như dưới đây thì sao?
```php
<a href="Go to <?php get_permalink(); ?>"><?php the_title(); ?></a>
```
Sẽ cần được chuyển thành
```php
printf('<a href="%s">%s</a>', __('Go to ', 'codetot') . get_permalink(), get_the_title());
```
### Phương án mở rộng: sử dụng escape
Một ví dụ khác bạn nên lưu tâm là để tránh các lỗi không đáng có thì nên chủ động sử dụng escape để output string ra không bị lỗi, thường gặp nhất là với các URL. Nó giúp mức độ bảo mật của code tăng lên.
```php
printf( '<a href="%s">%s</a>', esc_url( get_permalink() ), esc_html( get_the_title() ) );
```
### Ví dụ code dịch trên giao diện Twenty Twelve của WordPress
Còn đây là ví dụ từ theme Twenty Twelve về sử dụng dịch string PHP
```php
<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentytwelve' ), get_the_author() ); ?>
<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
```
Sau khi đảm bảo giao diện của bạn toàn bộ đều đã sử dụng theo cú pháp quy ước ví dụ ở trên, bạn cần chuyển tới bước cài đặt như ở bước 2 và bước 3 ở trên. Điều này đảm bảo giao diện của bạn hiện tại đã sẵn sàng hỗ trợ ở phần source code.

## Cài đặt và hướng dẫn sử dụng plugin Loco Translate
Giờ ta cần cài đặt plugin Loco Translate để có thể scan các giá trị cần dịch, tạo template và bắt đầu dịch.

Bước 1: Sau khi cài đặt xong, bạn chuyển vào menu Loco Translate > Themes

Bước 2: Bạn chọn giao diện đang cần dịch.

Bước 3: Nhấp vào `Create template` để tạo bản dịch mẫu.

Lưu ý là ở lần đầu tiên khi mới vào, giao diện chưa có sẵn để dịch ngay mà bạn cần chọ `Create template` như hình dưới đây:


Nếu bạn đã làm các bước với style.css và functions.php như ở trên hướng dẫn, bạn sẽ thấy kết quả như dưới đây. Nhấp nút vào `Create template` để sẵn sàng dịch thôi.


Bước 4: Bạn đã sẵn sàng chưa? Hãy nhấp vào nút `Add new language` và nhập các thông tin như phần dưới đây:

Thêm ngôn ngữ mới trong Loco Translate
Lưu ý quan trọng: Sau khi bạn dịch xong, thì phải nhấp chuột vào nút `Save` sau đó là nút `Sync` thì mới có hiệu lực ngay nhé.

Save khi dịch trong Loco Translate
Sau khi bạn nhấp vào nút Sync, trên giao diện hiện tại các giá trị sẽ được dịch.

Sync trong Loco Translate
Chúc các bạn thành công khi dịch giao diện WordPress nhé.

# Browser
Với Chrome 116+: Bật TLS 1.3 hybridized Kyber support (`enable-tls13-kyber`) trong `chrome://flags`.
Với Firefox 124+: Bật `security.tls.enable_kyber` trong `about:config`.
Done.
Cách này mọi người nên dùng chung với DNS-over-HTTPS có sẵn trong trình duyệt để tránh bị giả mạo DNS nhé.