<?php

function vh_tai_bang_gia_shortcode() {

    ob_start(); // Bắt đầu bộ đệm đầu ra

?>

<?php

    $shortcode_form = get_field( 'shortcode_form', 'options' );

    $popup_title = get_field( 'popup_title', 'options' );

    $popup_des = get_field( 'popup_des', 'options' );
    $popup_second_title = get_field( 'popup_second_title', 'options' );



    $grid_cols = 1;

    if ( have_rows( 'pdf_files', 'options' ) ){

        $grid_cols = 2;

    }

   



?>

<div class="download-price-table-grid grid grid-cols-1 md:grid-cols-<?php echo $grid_cols; ?> gap-6">

    <?php if ( have_rows( 'pdf_files', 'options' ) ) : ?>

        <div class="download-price-pdf">

            <div class="mb-4 lg:mb-6">

                <div class="text-center text-base lg:text-lg uppercase mb-2 font-semibold"><?php echo $popup_second_title; ?></div>

            </div>

            <div class="download-price-pdf-items">

                <?php while ( have_rows( 'pdf_files', 'options' ) ) :

                    the_row();

                    $pdf_name = get_sub_field( 'pdf_name', 'options' );
                ?>

                    <div class="download-price-pdf-item">

                        <svg enable-background="new 0 0 791.454 791.454" height="32" viewBox="0 0 791.454 791.454" width="32" xmlns="http://www.w3.org/2000/svg"><g><g id="Vrstva_x0020_1_15_"><path clip-rule="evenodd" d="m202.808 0h264.609l224.265 233.758v454.661c0 56.956-46.079 103.035-102.838 103.035h-386.036c-56.956 0-103.035-46.079-103.035-103.035v-585.384c-.001-56.956 46.078-103.035 103.035-103.035z" fill="#e5252a" fill-rule="evenodd"/><g fill="#fff"><path clip-rule="evenodd" d="m467.219 0v231.978h224.463z" fill-rule="evenodd" opacity=".302"/><path d="m214.278 590.525v-144.566h61.505c15.228 0 27.292 4.153 36.389 12.657 9.097 8.306 13.646 19.579 13.646 33.62s-4.549 25.314-13.646 33.62c-9.097 8.504-21.161 12.657-36.389 12.657h-24.523v52.012zm36.982-83.456h20.37c5.537 0 9.888-1.187 12.855-3.955 2.966-2.571 4.549-6.131 4.549-10.877s-1.582-8.306-4.549-10.877c-2.966-2.769-7.317-3.955-12.855-3.955h-20.37zm89.785 83.456v-144.566h51.221c10.086 0 19.579 1.384 28.478 4.351 8.899 2.966 17.008 7.12 24.127 12.855 7.12 5.537 12.855 13.052 17.008 22.545 3.955 9.493 6.131 20.37 6.131 32.631 0 12.064-2.175 22.941-6.131 32.433-4.153 9.493-9.888 17.008-17.008 22.545-7.12 5.735-15.228 9.888-24.127 12.855-8.899 2.966-18.392 4.351-28.478 4.351zm36.191-31.444h10.679c5.735 0 11.075-.593 16.019-1.978 4.746-1.384 9.295-3.56 13.646-6.526 4.153-2.966 7.515-7.12 9.888-12.657s3.56-12.064 3.56-19.579c0-7.713-1.187-14.239-3.56-19.776s-5.735-9.69-9.888-12.657c-4.351-2.966-8.899-5.142-13.646-6.526-4.944-1.384-10.284-1.978-16.019-1.978h-10.679zm109.364 31.444v-144.566h102.838v31.445h-65.856v23.138h52.605v31.247h-52.605v58.736z"/></g></g></g></svg>

                        <span class="download-price-pdf-item-name"><?php echo esc_html( $pdf_name ); ?></span>

                    </div>

                <?php endwhile; ?>

            </div>

        </div>

    <?php endif; ?>

    <div class="download-price-right">

        <div class="mb-4 lg:mb-6 flex flex-col gap-2">

            <div class="text-center text-base lg:text-lg uppercase font-semibold"><?php echo $popup_title; ?></div>

            <div class="text-center download-price-des"><?php echo $popup_des; ?></div>

        </div>

        <div class="download-price-form">

            <?php echo do_shortcode($shortcode_form)?>

        </div>

    </div>



</div>

<?php

    $content = ob_get_contents();

    ob_end_clean();

    return $content;

}

add_shortcode('vh_tai_bang_gia', 'vh_tai_bang_gia_shortcode');