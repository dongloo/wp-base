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
