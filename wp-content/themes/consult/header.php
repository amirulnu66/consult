<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <!-- title of site -->
    <!-- <title><?php bloginfo('name'); ?></title> -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

  
<?php wp_head(); ?>
</head>
<body>
    <!--Start Preloader-->
    <div class="preloader">
        <div class="preloader-inner-area">
            <div class="loader-overlay">
                <div class="l-preloader">
                    <div class="c-preloader"></div>
                </div>
            </div>
        </div>
    </div> 
    <!--End Preloader-->

    <header id="header" class="header_areaa">
        <nav class="navbar extended">
            <div class="nav-wrapper dark-wrapper inverse-text">
                <div class="container flex-it">
                <?php wp_nav_menu(array(
                    'theme_location'=> 'header_menu',
                    'container' => 'div',
                    'container_class' => 'navbar-collapse collapse align-left',
                    'menu_class' => 'nav navbar-nav',
                    'depth' => 3,
                    'fallback_cb' => 'wp_Bootstrap_Navwalker::fallback',
                    'walker' => new wp_Bootstrap_Navwalker()
                  )); 
                ?>    
            <!-- add new file wp_Bootstrap_Navwalker download file-->
                    <div class="navbar-other">
                        <div class="align-right text-right">
                            <div class="navbar-brand">
								<a href="index-01.html"><img alt="images" src="<?php echo get_template_directory_uri();?>/images/logo_consult.png"></a>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header><!-- /header -->
    
