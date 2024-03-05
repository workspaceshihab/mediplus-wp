<section class="Feautes section">

    <div class="container">
        <!-- title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Are Always Ready to Help You & Your Family</h2>

                    <img src="<?php echo get_template_directory_uri().'./assets/img/section-img.png';?>" alt="#">
                    <h1 style="font-weight:bold;">Our Doctors</h1>
                </div>
            </div>
        </div>


        <!-- forloop doc -->
        <div class="row">
            <?php 

        // Doc Loop
        $para = array(
            'post_type' => 'wporg_doctor',
            'posts_per_page' => 3,
            'post_status' => 'publish',
            'orderby' => 'time', 
            'order' => 'ASC', 

        );
        $newserice =new WP_Query($para);

        while($newserice->have_posts()):$newserice->the_post();

        $docspec= get_post_meta($post->ID,'addicon_key_uqnie',true)
        ?>
            <div class="col-lg-4 col-12">
                <!-- Start Single features -->
                <div class="single-features">
                    <div class="signle-icon">
                        <div class="doc_img">
                            <?php the_post_thumbnail();?>
                        </div>
                    </div>
                    <h3><a href=" <?php the_permalink();?>"><?php esc_html(the_title());?></a></h3>
                    <p><?php esc_html(the_excerpt());?></p>
                    <p>Speciality: <?php echo $docspec?></p>
                </div>

                <!-- End Single features -->
            </div>
            <?php 
				endwhile;
				?>
        </div>


    </div>
</section>