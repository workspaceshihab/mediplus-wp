<?php
get_header();
?>

<body>

    <!-- Preloader -->
    <?php get_template_part('template-parts/preloader'); ?>
    <!-- End Preloader -->

    <!-- Get Pro Button -->
    <?php get_template_part('template-parts/pro_button'); ?>
    <!-- End Get Pro Button -->

    <!-- Header Area -->
    <?php get_template_part('template-parts/header_area'); ?>
    <!-- End Header Area -->

    <!-- Error Page -->
    <section class="error-page section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12">
                    <!-- Error Inner -->
                    <div class="error-inner">
                        <h1>404<span>Oop's sorry we can't find that page!</span></h1>
                        <p>Aenean eget sollicitudin lorem, et pretium felis. Nullam euismod diam libero, sed dapibus leo
                            laoreet ut. Suspendisse potenti. Phasellus urna lacus</p>
                        <form class="search-form">
                            <input placeholder="Search from Here" type="text">
                            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!--/ End Error Inner -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Error Page -->

    <?php
    get_footer();
    ?>