<header class="header">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-12">
                    <!-- Contact -->
                    <ul class="top-link">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Doctors</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                    <!-- End Contact -->
                </div>
                <div class="col-lg-6 col-md-7 col-12">
                    <!-- Top Contact -->
                    <ul class="top-contact">
                        <li><i class="fa fa-phone"></i>

                            <?php 
                    
                    $options = get_option( '_prefix_my_options' ); // unique id of the framework

                    echo $options['cell']; // id of the field
                    
                    
                    ?>

                        </li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:workspace.shihab@gmail.com">

                                <?php 
                    
                    $options = get_option( '_prefix_my_options' ); // unique id of the framework

                    echo $options['email']; // id of the field

                    ?>
                            </a>
                        </li>
                    </ul>
                    <!-- End Top Contact -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <!-- Start Logo -->
                        <div class="logo">
                            <a href="index.php">
                                <img src="<?php 
                                
                                $options = get_option( '_prefix_my_options' ); // unique id of the framework

                                echo $options['logo']; // id of the field
                                


                                
                                ?>" alt="#">
                            </a>
                        </div>
                        <!-- End Logo -->
                        <!-- Mobile Nav -->
                        <div class="mobile-nav"></div>
                        <!-- End Mobile Nav -->
                    </div>
                    <div class="col-lg-7 col-md-9 col-12">
                        <!-- Main Menu -->
                        <?php
										wp_nav_menu(
											array(
											'theme_location' => 'mainmenu',
											'depth'          => 2, 
											'container'  	 => 'nav',
											'container_class'=> 'navigation',
											'container_id' 	 => '',
											'menu_class' 	 => 'nav menu',	
											'li_class'  	 => 'active',							
											'link_class'  	 => 'icofont-rounded-down',											
                                            
											)
										);
										?>
                        <!--/ End Main Menu -->
                    </div>
                    <div class="col-lg-2 col-12">
                        <div class="get-quote">
                            <a href="appointment.php" class="btn">Book Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>