<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
$icon = '';
$homepage_settings = $atts['background_style_settings'];
$homepage_default = $homepage_settings['default'];

$title = $homepage_default['home_title'];
$subtitle = $homepage_default['home_subtitle'];
$home_button = $homepage_default['home_button'];


//
$homepage_default_styles = $homepage_default['homepage_style_settings'];



$home_logo = fw_get_db_settings_option('home_logo');




if ($homepage_settings['background'] == 'slider'):
    ?>
    <!-- Carousel Slider-->   <!--data-ride="carousel" data-interval="5000"-->
    <div id="carousel-slider" class="carousel slide" data-interval="5000">

        <!-- Carousel inner -->
        <div class="carousel-inner">

            <?php
            $slider_home = $homepage_settings['slider']['slider_style'];


            foreach ($slider_home as $slider) :
                if ($slider['slider_image'] != '') {
                    $img = $slider['slider_image']['url'];
                }
                ?>
                <div class="item">
                    <img class="img-responsive" src="<?php echo esc_url($img); ?>" alt="slider">
                    <div class="slider-overlay">
                        <div class="slider-content">
                            <div class="col-md-10 col-md-offset-1 text-center">

                                <h2 class="animate-two">
                                    <?php echo sprintf(__(wp_kses_post($slider['slider_title']), 'mogo'), '<strong>', '</strong>') ?>
                                </h2>
                                <h4 class="animate-three">
                                    <?php echo sprintf(__(wp_kses_post($slider['slider_subtitle']), 'mogo'), '<strong>', '</strong>') ?>
                                </h4>
                                <p class="slider-btn animate-four">
                                    <?php
                                    if (!empty($slider['slider_button'])):
                                        $slider_button = $slider['slider_button'];
                                        foreach ($slider_button as $btn) :
                                            if ($btn['icon'] != '') {
                                                $icon_position = $btn['icon_position'];
                                                $icon = '<i class="' . $icon_position . ' ' . $btn['icon'] . '"></i>';
                                            }
                                            ?>
                                            <a href="<?php echo esc_url($btn['btn_link']); ?>" target="<?php echo $btn['btn_target']; ?>"  title="<?php echo wp_kses_post($btn['btn_label']); ?>">
                                                <div class="btn btn-<?php fw_theme_button_class($btn['btn_style']); ?> btn-lg "><?php echo $icon; ?> <?php echo $btn['btn_label']; ?></div>
                                            </a>
                                            <?php
                                        endforeach;
                                    endif;
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div><!--/ Carousel item end -->
            <?php endforeach; ?>
        </div><!-- Carousel inner end-->

        <!-- Slider Controls -->
        <a class="left carousel-control" href="#carousel-slider" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="right carousel-control" href="#carousel-slider" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>

    <?php
else:
    ?>
    <?php if ($homepage_default_styles['homepage_style'] == 'home-1'): ?>


        <div class="col-md-10 col-md-offset-1">
            <div class="home-intro-subscribe">
                <!--Header text -->
                <?php if ($title): ?>
                    <h1><?php echo sprintf(__(wp_kses_post($title), 'mogo'), '<strong>', '</strong>') ?></h1>
                    <?php
                endif;
                if ($subtitle) :
                    ?>
                    <h3><?php echo wp_kses_post($subtitle); ?></h3>
                <?php endif; ?>

                <div class=" home-subscribe center-block">
                    <form id="mailchimp-home" class="subscription-form mailchimp form-inline" role="form" >
                        <h6 class="subscription-success"></h6>
                        <h6 class="subscription-error"></h6>
                        <input type="email" name="email" id="subscriber-email" placeholder="<?php _e('Your Email', 'mogo') ?>" class="form-control subscribe-input input-lg">
                        <button type="submit" id="subscribe-button" class="btn btn-primary btn-lg"><?php _e('GET STARTED', 'mogo') ?></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="clear"></div>


    <?php elseif ($homepage_default_styles['homepage_style'] == 'home-2'): ?>


        <div class ="col-sm-6">
            <div class="home-intro-half st-2nd-half">


                <?php if (!empty($home_logo)): ?>
                    <div class="body-logo">
                        <img src="<?php echo esc_url($home_logo['url']) ?>" alt="<?php bloginfo('name') ?>">
                    </div>
                <?php endif; ?>

                <!--Header text -->
                <?php if ($title): ?>
                    <h1><?php echo sprintf(__(wp_kses_post($title), 'mogo'), '<strong>', '</strong>') ?></h1>
                    <?php
                endif;
                if ($subtitle) :
                    ?>
                    <h3><?php echo wp_kses_post($subtitle); ?></h3>
                <?php endif; ?>
                </h3>

                <!--DOWNLOAD BUTTON -->
                <div class="download-button">
                    <?php
                    
                    foreach ($home_button as $btn) :
                        if ($btn['icon'] != '') {
                            $icon_position = $btn['icon_position'];
                            $icon = '<i class="' . $icon_position . ' ' . wp_kses_post($btn['icon']) . '"></i>';
                        }
                        ?>
                        <a href="<?php echo esc_url($btn['btn_link']); ?>" target="<?php echo wp_kses_post($btn['btn_target']); ?>"  title="<?php echo wp_kses_post($btn['btn_label']); ?>">
                            <div  class="btn btn-<?php fw_theme_button_class($btn['btn_style']); ?> btn-lg "><?php echo $icon; ?> <?php echo wp_kses_post($btn['btn_label']); ?></div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
        <div class = "col-sm-6">
            <div class="home-intro-2nd-half st-half">
                <?php
                $side_image = $homepage_default_styles['home-2']['side_image'];

                if (!empty($side_image)) :
                    ?>
                    <img src="<?php echo esc_url($side_image['url']); ?>" alt = "<?php bloginfo('name') ?>" />
                <?php endif; ?>
            </div>
        </div>

    <?php elseif ($homepage_default_styles['homepage_style'] == 'home-3'): ?>
        <div class="col-md-10 col-md-offset-1">
            <div class="home-intro-block logo-intro">
                <!--Header logo-->
                <div class="body-logo">
                    <?php if ($home_logo): ?>
                        <img src="<?php echo esc_url($home_logo['url']) ?>" alt="<?php bloginfo('name') ?>">
                    <?php endif; ?>
                </div>

                <?php if ($title): ?>
                    <h1><?php echo sprintf(__(wp_kses_post($title), 'mogo'), '<strong>', '</strong>') ?></h1>
                    <?php
                endif;
                if ($subtitle) :
                    ?>
                    <h3><?php echo wp_kses_post($subtitle); ?></h3>
                <?php endif; ?>


                <!--DOWNLOAD BUTTON -->
                <div class="download-button">
                    <?php
                    foreach ($home_button as $btn) :
                        if ($btn['icon'] != '') {
                            $icon_position = $btn['icon_position'];
                            $icon = '<i class="' . $icon_position . ' ' . wp_kses_post($btn['icon']) . '"></i>';
                        }
                        ?>
                        <a href="<?php echo esc_url($btn['btn_link']); ?>" target="<?php echo wp_kses_post($btn['btn_target']); ?>"  title="<?php echo wp_kses_post($btn['btn_label']); ?>">
                            <div  class="btn btn-<?php fw_theme_button_class($btn['btn_style']); ?> btn-lg "><?php echo $icon; ?> <?php echo wp_kses_post($btn['btn_label']); ?></div>
                        </a>
                    <?php endforeach; ?>

                </div>
            </div>

        </div>



    <?php elseif ($homepage_default_styles['homepage_style'] == 'home-4'): ?>

        <div class="col-sm-7">
            <div class="home-intro-half-try">

                <div class="body-logo">
                    <?php if ($home_logo): ?>
                        <img src="<?php echo esc_url($home_logo['url']) ?>" alt="<?php bloginfo('name') ?>">
                    <?php endif; ?>
                </div>
                <!--Header text -->
                <?php if ($title): ?>
                    <h1><?php echo sprintf(__(wp_kses_post($title), 'mogo'), '<strong>', '</strong>') ?></h1>
                    <?php
                endif;
                if ($subtitle) :
                    ?>
                    <p><?php echo wp_kses_post($subtitle); ?></p>
                <?php endif; ?>
                <!--DOWNLOAD BUTTON -->
                <div class="download-button">
                    <?php
                    foreach ($home_button as $btn) :
                        if ($btn['icon'] != '') {
                            $icon_position = $btn['icon_position'];
                            $icon = '<i class="' . $icon_position . ' ' . wp_kses_post($btn['icon']) . '"></i>';
                        }
                        ?>
                        <a href="<?php echo esc_url($btn['btn_link']); ?>" target="<?php echo wp_kses_post($btn['btn_target']); ?>"  title="<?php echo wp_kses_post($btn['btn_label']); ?>">
                            <div  class="btn btn-<?php fw_theme_button_class($btn['btn_style']); ?> btn-lg "><?php echo $icon; ?> <?php echo wp_kses_post($btn['btn_label']); ?></div>
                        </a>
                    <?php endforeach; ?>

                </div>

            </div>
        </div>
        <?php $form = $homepage_default_styles['home-4']; ?>
        <div class="col-sm-5">
            <div class="home-intro-2nd-half-try">
                <div class="try-registration-form">

                    <h3><?php echo $form['title'] ?></h3>

                    <div id="message"></div>

                    <form method="post" action="<?php echo XS_SCRIPTSPHP . '/callback.php' ?>" class="try-form" id="register" role="form">
                        <input class="form-control" id="name" type="text" name="name" placeholder="<?php _e('Your Name', 'mogo') ?>">
                        <input class="form-control" id="email" type="email" name="email" placeholder="<?php _e('Your Email', 'mogo') ?>">
                        <input class="form-control" id="number" type="tel" name="number" placeholder="<?php _e('Phone Number', 'mogo') ?>">
                        <button class="btn btn-primary btn-lg center-block" type="submit" id="submit" name="submit" data-loading-text="<?php _e('Loading...', 'mogo') ?>" ><?php echo $form['button_text'] ?></button>

                    </form>
                </div>
            </div>
        </div>

    <?php elseif ($homepage_default_styles['homepage_style'] == 'home-5'): ?>

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="home-intro-app-block">
                        <!--Header text -->
                        <div class="body-logo">
                            <?php if ($home_logo): ?>
                                <img src="<?php echo esc_url($home_logo['url']) ?>" alt="<?php bloginfo('name') ?>">
                            <?php endif; ?>
                        </div>
                        <?php if ($title): ?>
                            <h1><?php echo sprintf(__(wp_kses_post($title), 'mogo'), '<strong>', '</strong>') ?></h1>
                            <?php
                        endif;
                        if ($subtitle) :
                            ?>
                            <h3><?php echo wp_kses_post($subtitle); ?></h3>
                        <?php endif; ?>

                        <!--DOWNLOAD BUTTON -->
                        <div class="download-button">
                            <?php
                            foreach ($home_button as $btn) :
                                if ($btn['icon'] != '') {
                                    $icon_position = $btn['icon_position'];
                                    $icon = '<i class="' . $icon_position . ' ' . wp_kses_post($btn['icon']) . '"></i>';
                                }
                                ?>
                                <a href="<?php echo esc_url($btn['btn_link']); ?>" target="<?php echo wp_kses_post($btn['btn_target']); ?>"  title="<?php echo wp_kses_post($btn['btn_label']); ?>">
                                    <div  class="btn btn-<?php fw_theme_button_class($btn['btn_style']); ?> btn-lg "><?php echo $icon; ?> <?php echo wp_kses_post($btn['btn_label']); ?></div>
                                </a>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <?php
            $bottom_image = $homepage_style['home-5']['bottom_image'];
            if ($bottom_image) :
                ?>
                <img src="<?php echo $bottom_image['url'] ?>" class=" img-responsive startup-image-block" alt="<?php bloginfo('name') ?>" />
            <?php endif; ?>

        </div>


    <?php elseif ($homepage_default_styles['homepage_style'] == 'home-6'): ?>

        <div class="home-intro-half">
            <div class="col-sm-6">
                <div class="body-logo">
                    <?php if ($home_logo): ?>
                        <img src="<?php echo esc_url($home_logo['url']) ?>" alt="<?php bloginfo('name') ?>">
                    <?php endif; ?>
                </div>
                <!--Header text -->
                <?php if ($title): ?>
                    <h1><?php echo sprintf(__(wp_kses_post($title), 'mogo'), '<strong>', '</strong>') ?></h1>
                    <?php
                endif;
                if ($subtitle) :
                    ?>
                    <h3><?php echo wp_kses_post($subtitle); ?></h3>
                <?php endif; ?>

                <div class="download-button">

                    <?php
                    foreach ($home_button as $btn) :
                        if ($btn['icon'] != '') {
                            $icon_position = $btn['icon_position'];
                            $icon = '<i class="' . $icon_position . ' ' . wp_kses_post($btn['icon']) . '"></i>';
                        }
                        ?>
                        <a href="<?php echo esc_url($btn['btn_link']); ?>" target="<?php echo wp_kses_post($btn['btn_target']); ?>"  title="<?php echo wp_kses_post($btn['btn_label']); ?>">
                            <div  class="btn btn-<?php fw_theme_button_class($btn['btn_style']); ?> btn-lg "><?php echo $icon; ?> <?php echo wp_kses_post($btn['btn_label']); ?></div>
                        </a>
                    <?php endforeach; ?>

                </div>


            </div>
            <div class="col-sm-6">
                <div class="margin-top-twenty describe-video">
                    <?php
                    $video_link = $homepage_style['home-6']['right_video_link'];
                    if ($video_link):
                        ?>
                        <iframe src="<?php echo $video_link ?>" width="600" height="350" allowfullscreen></iframe>
                    <?php endif; ?>
                </div>
            </div>

        </div>

    <?php elseif ($homepage_default_styles['homepage_style'] == 'home-7'): ?> 

        <div class="col-md-10 col-md-offset-1">
            <div class="home-comming-soon events-countdown">
                <?php if ($title): ?>
                    <h1><?php echo sprintf(__(wp_kses_post($title), 'mogo'), '<strong>', '</strong>') ?></h1>
                    <?php
                endif;
                if ($subtitle) :
                    ?>
                    <h3><?php echo wp_kses_post($subtitle); ?></h3>
                    <?php
                endif;
                $date = $homepage_default['homepage_style_settings']['home-7']['date'];
                if ($date):
                    ?>
                    <span class="event-date white-text"><?php echo wp_kses_post($date); ?></span>
                    <?php
                endif;
                $date = $homepage_default['homepage_style_settings']['home-7']['event'];
                $timestamp = strtotime($date);
                $event_date = date('Y/m/d', $timestamp);
                ?>
                <div class="countdown" data-date="<?php echo $event_date; ?>"></div>
                <!--subscribe form -->


            </div>

        </div>

    <?php elseif ($homepage_default_styles['homepage_style'] == 'home-8'): ?> 

        <div class="col-md-10 col-md-offset-1">
            <div class="home-comming-soon events-countdown coming-soon">
                <?php if ($title): ?>
                    <h1><?php echo sprintf(__(wp_kses_post($title), 'mogo'), '<strong>', '</strong>') ?></h1>
                    <?php
                endif;
                if ($subtitle) :
                    ?>
                    <h3><?php echo wp_kses_post($subtitle); ?></h3>
                    <?php
                endif;
                $date = $homepage_default['homepage_style_settings']['home-8']['event'];
                $timestamp = strtotime($date);
                $event_date = date('Y/m/d', $timestamp);
                ?>
                <div class="countdown" data-date="<?php echo $event_date; ?>"></div>
                <?php
                $subscribe_text = $homepage_default['homepage_style_settings']['home-8']['subscribe'];
                if ($subscribe_text):
                    ?>
                    <h4><?php echo wp_kses_post($subscribe_text); ?> </h4>
                <?php endif;
                ?>

                <div class="col-md-8 col-md-offset-2">
                    <div class="home-subscribe comming-soon center-block">

                        <form id="mailchimp" class="subscription-form mailchimp form-inline" role="form" >

                            <!-- SUBSCRIPTION SUCCESSFUL OR ERROR MESSAGES -->
                            <h6 class="subscription-success"></h6>
                            <h6 class="subscription-error"></h6>
                            <input type="email" name="EMAIL" id="subscriber-email1" placeholder="<?php _e('Your Email', 'mogo') ?>" class="form-control subscribe-input input-lg">
                            <!-- SUBSCRIBE BUTTON -->
                            <button type="submit" id="subscribe-button1" class="btn btn-primary btn-lg"><?php _e('Subscribe Now', 'mogo') ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
    endif;


endif;
?>
