# Download count

`functions.php`

```php
function initialize_download_count() {
    global $post;
    if (is_single() && !empty($post)) {
        // Kiểm tra nếu trường meta 'download_count' chưa được thiết lập
        if (!get_post_meta($post->ID, 'download_count', true)) {
            // Thiết lập ban đầu là 0
            update_post_meta($post->ID, 'download_count', 0);
        }
    }
}
add_action('wp', 'initialize_download_count');

function increase_download_count() {
    $post_id = isset($_POST['post_id']) ? intval($_POST['post_id']) : 0;
    if ($post_id) {
        $current_count = (int) get_post_meta($post_id, 'download_count', true);
        $new_count = $current_count + 1;
        update_post_meta($post_id, 'download_count', $new_count);
        echo $new_count;
    }
    wp_die(); // Kết thúc AJAX
}
add_action('wp_ajax_increase_download_count', 'increase_download_count');
add_action('wp_ajax_nopriv_increase_download_count', 'increase_download_count');

```

```php
<?php if (is_single()) : ?>
    <button id="download-btn" data-post_id="<?php echo get_the_ID(); ?>">Download</button>
    <div>Downloads: <span id="download-count"><?php echo get_post_meta(get_the_ID(), 'download_count', true); ?></span></div>
<?php endif; ?>
```

```php
<script>
	jQuery(document).ready(function($) {
		$('#download-btn').click(function() {
			var post_id = $(this).data('post_id');
			$.ajax({
				url: '<?php echo admin_url('admin-ajax.php'); ?>',
				type: 'POST',
				data: {
					'action': 'increase_download_count',
					'post_id': post_id
				},
				success: function(data) {
					console.log(data);
					$('#download-count').text(data);
				}
			});
		});
	});
</script>
```
