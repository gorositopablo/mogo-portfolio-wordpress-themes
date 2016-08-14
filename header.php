<?php
/**
 * header.php
 *
 * The header for the theme.
 */
?>

<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


        <!-- Favicon and Apple Icons -->
        <?php
        mogo_get_header_icons();
        ?>
        <script type="text/javascript">
            var xsUrl = '<?php echo get_template_directory_uri(); ?>';
            var adminAjax = "<?php echo admin_url('admin-ajax.php') ?>";

        </script>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> data-spy="scroll" data-target=".navbar-collapse">
        <!--[if lt IE 8]>
           <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="//browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
       <![endif]-->
        <?php
        $loader = fw_get_db_settings_option('loader');
        if ($loader == 'yes') {
            ?>
            <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <?php } ?>

        <header id="main_menu" class="header navbar-fixed-top">            
            <div class="main_menu_bg">
                <div class="container">
                    <div class="row">
                        <div class="nave_menu">
                            <nav class="navbar navbar-default">
                                <div class="container">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#home">
                                            <?php
                                            $logo = fw_get_db_settings_option('menu_logo');
                                            if (!empty($logo)) {
                                                ?>
                                                <img src="<?php echo $logo['url']; ?>"/>
                                            <?php } ?>
                                        </a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right">

                                            <li>
                                                <a href="#"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                    <span class="glyphicon glyphicon-search"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <form method="GET" class="navbar-form" role="search" action="<?php bloginfo('url'); ?>/">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Search" value="<?php the_search_query(); ?>" name="s" id="s">
                                                            </div>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>

                                        <?php
                                        wp_nav_menu(array(
                                            'menu' => 'primary',
                                            'theme_location' => 'primary',
                                            'menu_class' => 'nav navbar-nav navbar-right',
                                            'fallback_cb' => 'mogo_xs_navwalker::fallback',
                                                )
                                        );
                                        ?>
                                    </div>

                                </div>
                            </nav>
                        </div>	
                    </div>

                </div>

            </div>
        </header> <!--End of header -->