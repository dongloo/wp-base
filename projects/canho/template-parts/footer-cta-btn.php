<?php if ( have_rows( 'fixed_post', 'options' ) ) :

    $total_post_id = array();

?>

    <?php while ( have_rows( 'fixed_post', 'options' ) ) :

        the_row();

        $row_post_ids = get_sub_field( 'fixed_post_id', 'options' );

        if (is_array($row_post_ids)) {

            foreach ( $row_post_ids as $row_post_id ){

                $total_post_id[] = $row_post_id;

            }

        }else{

            $total_post_id[] = $row_post_ids;

        }

    ?>

    <?php endwhile; ?>

<?php endif; ?>





<?php if ( have_rows( 'fixed_post', 'options' ) ) :

    $current_id = get_queried_object_id();

?>

    <?php if(in_array($current_id, $total_post_id)) : ?>

        <?php while ( have_rows( 'fixed_post', 'options' ) ) :

            the_row();

                $post_id_org = get_sub_field( 'fixed_post_id', 'options' );

            if (is_array($post_id_org)) {

                foreach ( $post_id_org as $post_id ){

                    if($post_id == $current_id) : ?>

                    <?php get_template_part('template-parts/footer-cta-btn-repeater', null, null); ?>

                    <?php endif;

                }

            }else{

                if($post_id == $current_id) : ?>

                    <?php get_template_part('template-parts/footer-cta-btn-repeater', null, null); ?>

                <?php endif;

            }

        ?>

        <?php endwhile; ?>

    <?php else : ?>

        <?php get_template_part('template-parts/footer-cta-btn-repeater', null, null); ?>

    <?php endif; ?>            

<?php else : ?>

    <?php get_template_part('template-parts/footer-cta-btn-repeater', null, null); ?>

<?php endif; ?>