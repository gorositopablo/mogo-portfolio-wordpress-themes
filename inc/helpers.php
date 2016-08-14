<?php
if (!defined('ABSPATH'))
    die('Direct access forbidden.');

function mogo_return($s) {
    return $s;
}

function mogo_editor_data($value) {
    return wp_kses_post($value);
}

function mogo_get_option($k, $v = '', $m = 'theme-settings') {
    if (defined('FW')) {
        switch ($m) {
            case 'theme-settings':
                $v = fw_get_db_settings_option($k);
                break;

            default:
                $v = '';
                break;
        }
    }
    return $v;
}

// Gets unyson image url from option data in a much simple way
// sience 1.0

function mogo_get_image($k, $v = '', $d = false) {

    if ($d == true) {
        $attachment = $k;
    } else {
        $attachment = mogo_get_option($k);
    }

    if (isset($attachment['url']) && !empty($attachment)) {
        $v = $attachment['url'];
    }

    return $v;
}

/* Gets unyson image url from variable
 * sience 1.0
 * mogo_image($img, $alt )
 */

function mogo_image($img, $alt, $v = '') {

    if (isset($img['url']) && !empty($img)) {
        $i = $img['url'];
        $v = "<img src=" . $i . " alt=" . $alt . " />";
    }

    return $v;
}

// Gets original page ID/ Slug
// since 1.0

function mogo_main($id, $name = true) {
    if (function_exists('icl_object_id')) {
        $id = icl_object_id($id, 'page', true, 'en');
    }

    if ($name === true) {
        $post = get_post($id);
        return $post->post_name;
    } else {
        return $id;
    }
}

// Creates SEO friendly section ID from page ID. Returns page ID directly if $return = true
// since 2.0
function mogo_sectionID($id, $returnID = false) {

    if ($returnID == false) {

        $str = get_the_title($id);
        $patterns = array(
            "/[:#+*+&+!+@+!+\.+?+%+$+\"+'+^+\[+<+{+\(+\)}+>+\]+,+`+;+,+=+\\\\]/", // match unwanted special characters
            "@<(script|style)[^>]*?>.*?</\\1>@si", // match <script>, <style> tags
            "/[~\r\n\t \/_|+ -]+/" // match newline, tab and more unwanted characters
        );

        $replacements = array(
            "", // for 1st match
            "", // for 2nd match
            "-" // for 3rd match
        );

        $str = preg_replace($patterns, $replacements, strip_tags($str));
        return strtolower(trim($str, '-'));
    } else {

        return "section-$id";
    }
}

// Gets post's meta data in a much simplier way.
// since 1.0

function mogo_get_post_meta($id, $needle) {
    $data = get_post_meta($id, 'fw_options');
    if (is_array($data) && isset($data[0]['page_sections'])) {
        $data = $data[0]['page_sections'];

        if (is_array($data)) {
            return mogo_seekKey($data, $needle);
        }
    }
}

function mogo_seekKey($haystack, $needle) {
    foreach ($haystack as $key => $value) {

        if ($key == $needle) {
            return $value;
        } elseif (is_array($value)) {
            return mogo_seekKey($value, $needle);
        }
    }
}

/*
 * btn Function
 * since 1.0
 */
//btn function

if (!function_exists('mogo_theme_button_class')) :

    function mogo_theme_button_class($style) {
        /**
         * Display specific class for buttons - depends on theme
         */
        if ($style == 'default') {
            echo 'btn btn-default btnxs';
        } elseif ($style == 'primary') {
            echo 'btn btn-primary btnxs';
        } else {
            echo 'default';
        }
    }

endif;


/*
 * wpml compatitible 
 */

if (!function_exists('mogo_theme_translate')) :

    function mogo_theme_translate($content) {
        /**
         * Return the content for translations plugins
         * @param string $content
         */
        $content = html_entity_decode($content, ENT_QUOTES, 'UTF-8');

        if (function_exists('icl_object_id') && strpos($content, 'wpml_translate') == true) {
            $content = do_shortcode($content);
        } elseif (function_exists('qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage')) {
            $content = qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage($content);
        }

        return $content;
    }

endif;


/*
 * This fucntion for recent post shortcode.
 * people can select show from one category or from all category
 * since 1.0
 */

// term
if (!function_exists('mogo_get_category_term_list')) :

    function mogo_get_category_term_list() {
        /**
         * Return array of categories
         */
        $taxonomy = 'category';
        $args = array(
            'hide_empty' => true,
        );

        $terms = get_terms($taxonomy, $args);
        $result = array();
        $result[0] = __('All Categories', 'mogo');

        if (!empty($terms))
            foreach ($terms as $term) {
                $result[$term->term_id] = $term->name;
            }
        return $result;
    }

endif;



/*
 * THis function for favicon
 * since 1.0
 */


if (!function_exists('mogo_get_header_icons')) {

    function mogo_get_header_icons() {


        if (!defined('FW')) {
            return;
        }

        $favicon = mogo_get_image('favicon', MOGO_IMAGES . '/ico/favicon.png');
        $apple52 = mogo_get_image('apple_touch_icon52', MOGO_IMAGES . '/ico/apple-52.png');
        $apple72 = mogo_get_image('apple_touch_icon72', MOGO_IMAGES . '/ico/apple-72.png');
        $apple114 = mogo_get_image('apple_touch_icon114', MOGO_IMAGES . '/ico/apple-114.png');
        $apple144 = mogo_get_image('apple_touch_icon144', MOGO_IMAGES . '/ico/apple-144.png');


        if (!empty($favicon)) {
            echo '<meta property="og:image" content="' . esc_url($favicon) . '"/>' . "\n";
        }
        if (!empty($favicon)) {
            echo '<link rel="shortcut icon" type="image/png" href="' . esc_url($favicon) . '">' . "\n";
        }
        if (!empty($apple52)) {
            echo '<link rel="apple-touch-icon-precomposed" sizes="52x52" href="' . esc_url($apple52) . '">' . "\n";
        }
        if (!empty($apple72)) {
            echo '<link rel="apple-touch-icon-precomposed" sizes="72x72" href="' . esc_url($apple72) . '">' . "\n";
        }
        if (!empty($apple114)) {
            echo '<link rel="apple-touch-icon-precomposed" sizes="114x114" href="' . esc_url($apple114) . '">' . "\n";
        }
        if (!empty($apple144)) {
            echo '<link rel="apple-touch-icon-precomposed" sizes="144x144" href="' . esc_url($apple144) . '">' . "\n";
        }
    }

}


/*
 * Function for preloader
 */
if (!function_exists('mogo_prerloader')) {

    function mogo_prerloader() {
        if (defined("FW")) {
            ?>
            <div class="preloader"><div class="loaded">&nbsp;</div></div>
            <?php
        }
    }

}

/*
 * Function for color RGB
 */

function mogo_color_rgb($hex) {
    $hex = preg_replace("/^#(.*)$/", "$1", $hex);
    $rgb = array();
    $rgb['r'] = hexdec(substr($hex, 0, 2));
    $rgb['g'] = hexdec(substr($hex, 2, 2));
    $rgb['b'] = hexdec(substr($hex, 4, 2));
    return $rgb;
}

/*
 * Section Edit option
 * 
 * This function for show section edit option in every section in one page 
 * 
 * Since 1.0
 *  */

function mogo_edit_section($section_id) {
    ?>
    <div class="edit-section">
    <?php
    if (is_user_logged_in()) {
        $id = $section_id != '' ? $section_id : '';
        edit_post_link(sprintf(__("Edit  %s", 'mogo'), $id), '<span class="meta-edit">', '</span>');
    }
    ?>
    </div> 
        <?php
    }

  function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    echo $count.' Views';
}
    