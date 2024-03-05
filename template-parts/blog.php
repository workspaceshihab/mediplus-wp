<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Keep up with Our Most Recent Medical News.</h2>
                    <img src="<?php echo get_template_directory_uri().'./assets/img/section-img.png'?>" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>


        <div class="row">

            <?php
            
            wp_reset_query();

            
            $args = array(
                'post_type'      => 'post', 
                'posts_per_page' => 3,     
                'post__not_in'   => array( get_the_ID() ),
            );

            $recent_posts_query = new WP_Query( $args );

            if ( $recent_posts_query->have_posts() ) :
                while ( $recent_posts_query->have_posts() ) : $recent_posts_query->the_post();
            
                    ?>


            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <?php echo the_post_thumbnail('',); ?>
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date"><?php echo get_the_date('d M, Y'); ?></div>
                            <h2><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></h2>
                            <p class="text"><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>

            <?php
                endwhile;

                wp_reset_postdata();

            endif;
            ?>
        </div>
    </div>
</section>




<!--


<div class="single-post">
                <div class="image">
                <?php the_post_thumbnail(); ?>
                </div>
                <div class="content">
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <ul class="comment">
                        <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date('d M, Y'); ?></li>
                        <li><i class="fa fa-commenting-o" aria-hidden="true"></i><?php echo get_comments_number(); ?>
                        </li>
                    </ul>
                </div>
            </div>
-->