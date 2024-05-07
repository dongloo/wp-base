```php
function setup_custom_post_type_archive($query) {
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('demo-center')) {
        $query->set('posts_per_page', 3);
    }
}
add_action('pre_get_posts', 'setup_custom_post_type_archive');
```

```php
if (have_posts()) : ?>
    <div id="post-container">
        <?php while (have_posts()) : the_post(); ?>
            <div class="post">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
            </div>
        <?php endwhile; ?>
    </div>
    <button id="load-more" data-page="1">Load More</button>
    <div id="loading-icon" style="display:none;">Loading...</div>
    <div id="no-more-posts" style="display:none;">No more posts to show.</div>
<?php else :
    echo 'No posts found';
endif;

```

```php
function load_more_js() {
    ?>
    <script>
        jQuery(document).ready(function($) {
            $('#load-more').on('click', function() {
                var button = $(this);
                var page = button.data('page') + 1;
                var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
                var postContainer = $('#post-container');

                $('#loading-icon').show();
                button.hide();

                $.ajax({
                    url: ajaxurl,
                    type: 'POST',
                    data: {
                        'action': 'load_more_posts',
                        'page': page
                    },
                    success: function(response) {
                        if (response == '') {
                            $('#no-more-posts').show();
                        } else {
                            postContainer.append(response);
                            button.data('page', page);
                            button.show();
                        }
                        $('#loading-icon').hide();
                    }
                });
            });
        });
    </script>
    <?php
}

add_action('wp_footer', 'load_more_js');

```

```php
function load_more_posts() {
    $page = isset($_POST['page']) ? intval($_POST['page']) : 0;

    $args = array(
        'post_type' => 'demo-center',
        'posts_per_page' => 3,
        'paged' => $page,
    );

    $query = new WP_Query($args);

    if ($query->have_posts()):
        while ($query->have_posts()): $query->the_post(); ?>
            <div class="post">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
            </div>
        <?php endwhile;
    endif;

    wp_reset_postdata();
    die();
}

add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

```
```php
function load_more_js() {
    ?>
    <script>
        jQuery(document).ready(function($) {
            $('#load-more').on('click', function() {
                var button = $(this);
                var page = button.data('page') + 1;
                var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
                var postContainer = $('#post-container');

                $('#loading-icon').show();
                button.hide();

                $.ajax({
                    url: ajaxurl,
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        'action': 'load_more_posts',
                        'page' => page
                    },
                    success: function(response) {
                        if (response.html == '') {
                            $('#no-more-posts').show();
                        } else {
                            postContainer.append(response.html);
                            button.data('page', page);

                            if (response.has_more) {
                                button.show();
                            } else {
                                $('#no-more-posts').show();
                            }
                        }
                        $('#loading-icon').hide();
                    }
                });
            });
        });
    </script>
    <?php
}

add_action('wp_footer', 'load_more_js');
```
