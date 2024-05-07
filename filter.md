# Filter
```php
function filter_custom_post_type_archive($query) {
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('demo-center')) {
        // Default settings
        $query->set('posts_per_page', 6);

        // Check for the chosen filter
        if (isset($_GET['filter'])) {
            $filter = sanitize_text_field($_GET['filter']);
            $today = current_time('Y-m-d');
            $day_of_week = date('N', current_time('timestamp')); // Get the current day of the week (1-7)

            switch ($filter) {
                case 'today':
                    $query->set('date_query', array(
                        array(
                            'year'  => date('Y'),
                            'month' => date('m'),
                            'day'   => date('d'),
                        ),
                    ));
                    break;

                case 'this_week':
                    $query->set('date_query', array(
                        array(
                            'year'     => date('Y'),
                            'week'     => date('W'),
                        ),
                    ));
                    break;

                case 'this_month':
                    $query->set('date_query', array(
                        array(
                            'year'  => date('Y'),
                            'month' => date('m'),
                        ),
                    ));
                    break;

                case 'last_90_days':
                    $query->set('date_query', array(
                        array(
                            'after' => date('Y-m-d', strtotime('-90 days')),
                            'inclusive' => true,
                        ),
                    ));
                    break;

                default:
                    // No filter, use the default settings
                    break;
            }
        }
    }
}
add_action('pre_get_posts', 'filter_custom_post_type_archive');
```
