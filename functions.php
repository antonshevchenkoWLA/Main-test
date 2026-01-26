<?php

/**
 * Including the default settings.
 *
 * *** DO NOT REMOVE ***
 */
require_once get_template_directory() . '/inc/functions-core.php';
define('IMAGE_ASSETS', get_stylesheet_directory_uri() . '/assets/images/');
define('IMAGE_PLACEHOLDER', IMAGE_ASSETS . 'placeholder.jpg');
define('AVATAR_PLACEHOLDER', IMAGE_ASSETS . 'contact-placeholder.png');

/**
 * -----------------------------------------------------------
 *             START ADDING YOUR CODE FROM HERE
 * -----------------------------------------------------------
 */

/**
 * Get the button HTML
 *
 * @param array  $acf_button_group ACF button group
 * @param string $css_class        CSS class
 *
 * @return string Button HTML
 */
function get_button($acf_button_group = [], $css_class = ''): string
{
    if (!$acf_button_group) {
        return '';
    }

    ob_start();
    get_component('button', [
        'button' => $acf_button_group,
        'class'  => $css_class,
    ]);

    $html = ob_get_clean();

    $no_comments = remove_html_comments($html);

    // Check if button is empty - output nothing
    return $no_comments ? $html : '';
}

function remove_html_comments($content = '')
{
    return preg_replace('/<!--(.|\s)*?-->/', '', $content);
}

/**
 * Get image markup with fallback to the placeholder image
 *
 * This function generates the HTML markup for an image. If the provided image data is invalid
 * or missing, it will fallback to a placeholder image (either a standard image or an avatar).
 *
 * @param array  $image        Image data, typically containing the image URL and other properties like fit, position, etc.
 * @param string $screen_width The portion of the viewport width that the image should occupy when the screen width is less than the $max_width value (e.g., if $max_width is set to 1000px and the image's size is specified as 50vw, the browser will load an image close to 500px when the screen width is under 1000px. On a retina display, the browser will load an image close to 1000px instead).
 * @param string $max_width    The maximum width at which the browser will render the image (2x resolution will be displayed on retina screens).
 * @param bool   $scale        Whether to enable or disable image scaling for the user.
 * @param bool   $type         Specify type of placeholder image to display. Allowed values are 'image' or 'avatar'.
 *
 * @return string                 The generated HTML string for the image, either the original image or the placeholder.
 */

function get_attachment_fallback($image = [], $screen_width = '', $max_width = '', $scale = false, $type = 'image'): string
{
    $placeholder = ($type === 'avatar') ? AVATAR_PLACEHOLDER : IMAGE_PLACEHOLDER;

    if (!$image || empty($image['image'])) {
        $wp_img = '<div class="h-full overflow-hidden image-wrapper">';
        $wp_img .= '<img src="' . $placeholder . '" width="1280" height="800" class="w-full h-full object-cover" alt=""/>';
        $wp_img .= '</div>';

        return $wp_img;
    }

    if (!isset($image['h_pos'])) {
        $image['h_pos'] = '50';
    }

    if (!isset($image['v_pos'])) {
        $image['v_pos'] = '50';
    }

    if (empty($image['fit'])) {
        $image['fit'] = 'cover';
    }

    ob_start();
    render_image($image, $screen_width, $max_width, $scale);
    $wp_img = ob_get_clean();

    return $wp_img;
}

/**
 * Redirect For Posts With External Link
 *
 */
function start_custom_redirect()
{
    if (is_single() && get_post_type() === 'post') {
        $post_id       = get_the_ID();
        $external_link = get_field('news_-_content_external_link', $post_id);

        if (!empty($external_link) && filter_var($external_link, FILTER_VALIDATE_URL)) {
            wp_redirect(esc_url($external_link), 301);
            exit();
        }
    }
}

add_action('template_redirect', 'start_custom_redirect');

/**
 * Use external link for posts
 *
 * @param string  $url  Post url
 * @param WP_Post $post Post object
 *
 * @return string
 */
function start_use_external_link_for_posts($url, $post): string
{
    if (is_a($post, 'WP_Post') && $post->post_type === 'post') {
        $external_link = get_field('news_-_content_external_link', $post);

        if (!empty($external_link)) {
            return esc_url($external_link);
        }
    }

    return $url;
}

add_filter('post_link', 'start_use_external_link_for_posts', 10, 2);
add_filter('post_type_link', 'start_use_external_link_for_posts', 10, 2);

/**
 * Display site logo
 *
 * @return string
 */
function get_start_logo($height = 'w-24 lg:w-40'): string
{
    $logo_image = '  <svg xmlns="http://www.w3.org/2000/svg" width="193" height="64" fill="none" viewBox="0 0 193 64"><g clip-path="url(#a)"><path fill="#2c8cff" d="M10.62 15.03 0 40.5h4.95l2.58-6.46h11.48l2.58 6.46h5.13L16.14 15.03zm-1.5 15.1 4.15-10.4 4.16 10.4zm30.66-8.18c-2.55 0-4.91 1.04-6.13 3.3v-2.87h-4.49V40.5h4.52v-9.7c0-3.08 1.9-4.91 4.56-4.91 2.8 0 4.12 1.83 4.12 4.37V40.5h4.56V29.3c0-4.23-2.73-7.35-7.14-7.35m17.98-6.99-4.52 2.4v5.02h-4.51v3.73h4.51v8.9c0 4.02 1.61 5.49 6 5.49h4.73v-3.8h-4.02c-1.62 0-2.19-.58-2.19-2.16v-8.43h6.2v-3.73h-6.2zM131.97 35c0 4.03 1.61 5.5 5.99 5.5h4.73v-3.8h-4.01c-1.62 0-2.2-.58-2.2-2.16v-8.43h6.22v-3.73h-6.21v-7.42l-4.52 2.4v5.02h-4.13v3.73h4.13v8.9m18.79-12.63h-4.52V40.5h4.51zm17.69 10.37a4.75 4.75 0 0 1-4.88 4.2c-2.83 0-5.13-2.12-5.13-5.5s2.26-5.48 5.13-5.48c2.12.03 3.88 1.15 4.45 3.08h4.77c-.79-4.37-4.6-7.17-9.22-7.17-5.16 0-9.68 3.9-9.68 9.58 0 5.66 4.34 9.57 9.68 9.57 4.8 0 8.93-3.15 9.47-8.28zm16.12-10.87c-4.7.04-7.82 2.51-8.64 5.74h4.84c.57-1.33 2-2.08 3.87-2.08 2.23 0 3.73 1.15 3.88 3.2l-6.46.89c-4.63.65-6.78 2.62-6.78 5.96 0 2.94 2.47 5.41 7.03 5.41 2.69 0 5.06-.97 6.35-2.94v2.44H193V29.16c0-4.52-3.37-7.28-8.43-7.28m3.95 10.87c0 2.7-2.27 4.7-5.5 4.7-1.93 0-3.04-1.04-3.04-2.22 0-1.51 1.11-2.3 3.08-2.59l5.46-.79zm-40.02-12.6a2.65 2.65 0 1 0 0-5.31 2.65 2.65 0 0 0 0 5.3m-10.77 38.53c-2.11-.01-3.67-1.42-3.67-3.86s1.63-3.89 3.67-3.87c1.48.02 2.7.77 3.1 2.1h2.95c-.55-2.75-3-4.6-6.05-4.6-3.57 0-6.47 2.57-6.47 6.37s2.78 6.35 6.47 6.35c3.27 0 5.95-2.14 6.26-5.34h-2.82c-.26 1.77-1.63 2.87-3.44 2.85m11.68-6.73c-2.33 0-3.91 1.22-4.3 2.87h2.76c.2-.55.79-.85 1.58-.85.93 0 1.5.47 1.55 1.24l-3 .45c-2.21.32-3.24 1.25-3.24 2.83 0 1.46 1.15 2.67 3.35 2.67 1.32 0 2.37-.5 2.97-1.4v1.15h2.48v-5.4c0-2.26-1.64-3.56-4.14-3.56m1.59 5.29c0 1.19-1.1 1.94-2.34 1.94-.76 0-1.2-.41-1.2-.9q.02-.84 1.18-1.02l2.36-.38zm9.88-5.31c-1.17 0-2.13.46-2.71 1.3v-1.04h-2.51V64h2.6v-3.9c.6.7 1.49 1.04 2.57 1.04 2.23 0 4.2-1.88 4.2-4.6 0-2.74-1.86-4.63-4.15-4.63m-.6 6.96c-1.19 0-2.11-.93-2.11-2.27v-.14c0-1.34.9-2.27 2.1-2.27 1.28 0 2.16.93 2.16 2.34s-.88 2.34-2.15 2.34m15.11-10.2-2.59 1.3v2.2h-2.14v2.12h2.14v3.75c0 2 .78 2.87 3.06 2.87h2.47v-2.13h-1.92c-.75 0-1.01-.33-1.01-1v-3.5h2.93v-2.1h-2.93zm8.72 3.27c-2.34 0-3.92 1.22-4.31 2.87h2.76c.2-.55.8-.85 1.58-.85.93 0 1.5.47 1.55 1.24l-2.99.45c-2.22.32-3.25 1.25-3.25 2.83 0 1.46 1.16 2.67 3.35 2.67 1.33 0 2.37-.5 2.98-1.4v1.15h2.47v-5.4c0-2.26-1.63-3.56-4.14-3.56m1.58 5.29c0 1.19-1.1 1.94-2.34 1.94-.75 0-1.2-.41-1.2-.9 0-.56.43-.9 1.19-1.02l2.35-.38zm7.27-8.53h-2.6v12.2h2.6zm-25.03 2.48a1.38 1.38 0 1 0 0-2.77 1.38 1.38 0 0 0 0 2.77m1.28 1h-2.6v8.73h2.6z"/><path fill="url(#b)" d="m76.5 32.64 5.46-.79v.9c0 2.7-2.26 4.7-5.49 4.7-1.94 0-3.05-1.04-3.05-2.22 0-1.51 1.11-2.3 3.09-2.59m50.08-2.19a30.45 30.45 0 1 1-60.9 0 30.45 30.45 0 0 1 60.9 0m-40.14-1.29c0-4.52-3.37-7.28-8.43-7.28-4.7.04-7.82 2.51-8.64 5.74h4.84c.58-1.33 2.01-2.08 3.88-2.08 2.22 0 3.73 1.15 3.87 3.2l-6.46.9c-4.63.64-6.78 2.61-6.78 5.95 0 2.94 2.48 5.41 7.03 5.41 2.7 0 5.06-.96 6.35-2.94v2.44h4.34zm17.12-7h-2.58c-3.04.04-4.95 1.12-5.95 3.34v-3.12h-4.41V40.5h4.52v-9.11c.03-3.88 1.47-4.88 4.91-4.88h3.51zm20.49 10.59h-4.6a4.76 4.76 0 0 1-4.87 4.2c-2.84 0-5.13-2.12-5.13-5.5s2.25-5.48 5.13-5.48c2.11.03 3.87 1.15 4.44 3.08h4.78c-.8-4.37-4.6-7.17-9.22-7.17-5.17 0-9.69 3.9-9.69 9.58 0 5.66 4.34 9.57 9.69 9.57 4.8 0 8.93-3.15 9.47-8.28"/></g><defs><linearGradient id="b" x1="117.67" x2="74.6" y1="8.92" y2="51.98" gradientUnits="userSpaceOnUse"><stop stop-color="#071359"/><stop offset=".12" stop-color="#0d2977"/><stop offset=".33" stop-color="#184ca7"/><stop offset=".53" stop-color="#2068cd"/><stop offset=".71" stop-color="#277be8"/><stop offset=".88" stop-color="#2a87f9"/><stop offset="1" stop-color="#2c8cff"/></linearGradient><clipPath id="a"><path fill="#fff" d="M0 0h193v64H0z"/></clipPath></defs></svg>';

    $logo = sprintf('<div class="%3$s" rel="home" title="%1$s" itemscope>%2$s</div>', get_bloginfo('name'), $logo_image, esc_attr($height));

    return $logo;
}


/**
 * Helper function to get list of social network icons
 *
 * @return string|string[]
 */
function get_social_icons($icon = '')
{
    $icons = [
        'linkedin'  => '<svg class="fill-current" viewBox="0 0 37 37"><path d="M32.14.81a4.02 4.02 0 0 1 4.02 4.02v28.13a4.02 4.02 0 0 1-4.02 4.01H4.02A4.02 4.02 0 0 1 0 32.96V4.83A4.02 4.02 0 0 1 4.02.81h28.12Zm-1 31.14V21.3a6.55 6.55 0 0 0-6.55-6.55c-1.7 0-3.7 1.05-4.66 2.62v-2.23h-5.6v16.81h5.6v-9.9a2.8 2.8 0 1 1 5.6 0v9.9h5.6ZM7.79 11.98a3.37 3.37 0 0 0 3.38-3.37 3.39 3.39 0 1 0-3.38 3.37Zm2.8 19.97V15.14H5.02v16.81h5.57Z"/></svg>',
        'facebook'  => '<svg class="fill-current" viewBox="0 0 11 20" aria-hidden="true"><path d="M3.05 11.25V20h3.74v-8.74h2.8l.53-3.63H6.8V5.3c0-1 .46-1.96 1.96-1.96h1.5V.25S8.89 0 7.58 0C4.84 0 3.04 1.74 3.04 4.87v2.76H0v3.62h3.05Z"/></svg>',
        'instagram' => '<svg class="fill-current" viewBox="0 0 17 17" aria-hidden="true"><path d="M12.03 0a4.89 4.89 0 0 1 3.6 1.4A4.92 4.92 0 0 1 17 4.97v7.06c0 1.47-.48 2.74-1.4 3.63A5.06 5.06 0 0 1 12 17H5a5 5 0 0 1-3.56-1.34A4.93 4.93 0 0 1 0 12V4.97C0 2 2 0 4.97 0h7.06Zm.03 1.58H5a3.5 3.5 0 0 0-2.5.89 3.41 3.41 0 0 0-.92 2.5V12c0 1.06.3 1.91.92 2.53.69.61 1.59.93 2.5.89h7c.91.04 1.81-.28 2.5-.89a3.35 3.35 0 0 0 .99-2.5V4.97c.02-.9-.3-1.8-.92-2.47a3.41 3.41 0 0 0-2.5-.92ZM8.5 4.08a4.39 4.39 0 1 1 0 8.78 4.39 4.39 0 0 1 0-8.78Zm0 1.57a2.83 2.83 0 0 0-2.81 2.81 2.83 2.83 0 0 0 2.81 2.82 2.83 2.83 0 0 0 2.81-2.82 2.83 2.83 0 0 0-2.81-2.8Zm4.56-2.67a1 1 0 1 1 0 1.99 1 1 0 0 1 0-1.99Z"/></svg>',
        'twitter'   => '<svg class="fill-current" viewBox="0 0 23 20" aria-hidden="true"><path d="M17.42 0h3.4L13.4 8.47 22.12 20H15.3l-5.35-6.99L3.83 20H.43l7.93-9.06L0 0h7l4.83 6.39L17.43 0Zm-1.19 17.97h1.88L5.98 1.92H3.96l12.27 16.05Z"/></svg>',
        'github'    => '<svg class="fill-current" viewBox="0 0 64 64" aria-hidden="true"><path d="M32 0C14 0 0 14 0 32c0 21 19 30 22 30c2 0 2-1 2-2v-5c-7 2-10-2-11-5c0 0 0-1-2-3c-1-1-5-3-1-3c3 0 5 4 5 4c3 4 7 3 9 2c0-2 2-4 2-4c-8-1-14-4-14-15q0-6 3-9s-2-4 0-9c0 0 5 0 9 4c3-2 13-2 16 0c4-4 9-4 9-4c2 7 0 9 0 9q3 3 3 9c0 11-7 14-14 15c1 1 2 3 2 6v8c0 1 0 2 2 2c3 0 22-9 22-30C64 14 50 0 32 0"/></svg>',
        'youtube'   => '<svg class="fill-current" aria-hidden="true" viewBox="0 0 24 17"><path d="M23.53,2.64c-.28-1.04-1.09-1.86-2.13-2.14-1.87-.51-9.39-.51-9.39-.51,0,0-7.52,0-9.39.51C1.59.78.78,1.6.5,2.64c-.5,1.89-.5,5.82-.5,5.82,0,0,0,3.93.5,5.82.28,1.04,1.09,1.83,2.13,2.1,1.87.51,9.39.51,9.39.51,0,0,7.52,0,9.39-.51,1.03-.28,1.85-1.06,2.13-2.1.5-1.89.5-5.82.5-5.82,0,0,0-3.93-.5-5.82h0ZM9.56,12.04v-7.15l6.28,3.57-6.28,3.57h0Z"/></svg>',
        'email'     => '<svg class="fill-current" viewBox="0 0 23 15" aria-hidden="true"><path d="M22.43.43H.57v1.64L11.5 9.35l10.93-7.28V.43Z"/><path d="M22.43 3.27 11.5 10.56.57 3.27V15h21.86V3.27Z"/></svg>',
        'share'     => '<svg class="stroke-current" viewBox="0 0 20 20" fill="none"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7.5 6.9H6.2c-1 0-1.8.8-1.8 1.8v7.6c0 1 .8 1.8 1.8 1.8h7.5c1 0 2-.8 2-1.9V8.8c0-1-1-2-2-2h-1.2m0-2.4L10 1.9m0 0L7.5 4.4M10 1.9v10.6"/></svg>',
        'copy'      => '<svg class="stroke-current" viewBox="0 0 20 20" fill="none"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 7.2a3.7 3.7 0 0 1 1 6L8.3 17A3.8 3.8 0 0 1 3 11.7l1.4-1.4m11.2-.6L17 8.3A3.8 3.8 0 0 0 11.7 3L8 6.7a3.8 3.8 0 0 0 1 6"/></svg>',
    ];

    if ($icon) {
        return $icons[$icon];
    }

    return $icons;
}

/**
 * Get link URL for share button in social media
 *
 * @param int    $post_id Post ID that need to be shared
 * @param string $network Social network name: facebook, twitter, linkedin
 *
 * @return string
 */

function get_share_link_url($title = '', $link = '', $network = 'facebook'): string
{
    if (empty($link)) {
        return '';
    }

    $title     = urlencode($title);
    $url       = $network == 'link' ? esc_url($link) : urlencode($link);
    $share_url = '';

    switch ($network) {
        case 'facebook':
            $share_url = "https://www.facebook.com/sharer/sharer.php?u={$url}";
            break;
        case 'twitter':
            $share_url = "https://twitter.com/intent/tweet?url={$url}&text={$title}";
            break;
        case 'linkedin':
            $share_url = "https://www.linkedin.com/shareArticle/?mini=true&url={$url}&title={$title}";
            break;
    }

    return $share_url;
}

/**
 * Add custom styles to the TinyMCE visual editor.
 * Appends a custom stylesheet to the `content_css` setting of TinyMCE.
 *
 * @param array $settings TinyMCE settings array.
 */

function add_editor_style_to_tinymce($settings)
{
    $editor_style = get_template_directory_uri() . '/editor-style.css';

    if (!empty($settings['content_css'])) {
        $settings['content_css'] .= ',' . $editor_style;
    } else {
        $settings['content_css'] = $editor_style;
    }

    return $settings;
}

add_filter("tiny_mce_before_init", "add_editor_style_to_tinymce", 11);

/**
 * Create pagination
 *
 * @param WP_Query    $query
 * @param bool        $echo
 * @param null|string $base
 * @param array       $args
 *
 * @return string|void
 */
function starter_pagination($query = '', $base = null, $echo = true, $args = [])
{
    if (empty($query)) {
        global $wp_query;
        $query = $wp_query;
    }

    $big       = 999999999;
    $pagi_args = array(
        'base'      => $base ?: str_replace($big, '%#%', esc_url(explode('?', get_pagenum_link($big), 2)[0])),
        'format'    => 'page/%#%',
        'prev_next' => true,
        'prev_text' => '<span class="pagination-arrow"><svg class="w-5 h-5" viewBox="0 0 320 512"><path class="fill-current" d="M9.4 233.4a32.05 32.05 0 0 0 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg></span>',
        'next_text' => '<span class="pagination-arrow"><svg class="w-5 h-5" viewBox="0 0 320 512"><path class="fill-current" d="M310.6 233.4a32.05 32.05 0 0 1 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg></span>',
        'current'   => max(1, $query->query_vars['paged']),
        'total'     => $query->max_num_pages,
        'type'      => 'array',
    );

    $args = !empty($_GET) ? array_merge($args, $_GET) : $args;
    if ($args) {
        foreach ($args as $key => $val) {
            $pagi_args['add_args'][$key] = $val;
        }
    }
    $links      = paginate_links($pagi_args);
    $pagination = '';

    if ($links) {
        // Add empty prev link
        if ($pagi_args['current'] == 1) {
            array_unshift($links, str_replace('pagination-arrow', 'pagination-arrow disabled', $pagi_args['prev_text']));
        }

        // Add empty next link
        if ($pagi_args['current'] !== 1 && $pagi_args['current'] == $pagi_args['total']) {
            $links[] = str_replace('pagination-arrow', 'pagination-arrow disabled', $pagi_args['next_text']);
        }

        $pagination = "<ul class='flex justify-center gap-4 mt-10 page-pagination'>\n\t<li>";
        $pagination .= implode("</li>\n\t<li>", $links);
        $pagination .= "</li>\n</ul>\n";
    }

    if ($echo) {
        echo $pagination;
    } else {
        return $pagination;
    }
}

/**
 * Function for media-element component
 */
function get_media_element($args): string
{
    $media_element    = $args['media_element'] ?? [];
    $ratio            = $args['ratio'] ?? '16:9';
    $autoplay         = $args['autoplay'] ?? false;
    $autoplay_scroll  = $args['autoplay_scroll'] ?? false;
    $background_block = $args['background_block'] ?? false;
    $autosize         = $args['autosize'] ?? false;

    ob_start();
    get_component('media-element', [
        'media_element'    => $media_element,
        'ratio'            => $ratio,
        'autoplay'         => $autoplay,
        'autoplay_scroll'  => $autoplay_scroll,
        'background_block' => $background_block,
        'autosize'         => $autosize,
    ]);

    $html = ob_get_clean();

    $element_without_comments = remove_html_comments($html);

    // Check if element is empty - output nothing
    return $element_without_comments ? $html : '';
}

/**
 * Loop Vimeo videos inserted via wp_oembed_get
 *
 * @param $provider
 * @param $url
 * @param $args
 *
 * @return mixed|string
 */
function loop_vimeo_videos($provider, $url, $args)
{
    if (!str_contains($provider, 'vimeo')) {
        return $provider;
    }

    $video_args = [];
    // If the video is used as a background, we need to set some specific parameters
    if (!empty($args['bg'])) {
        $video_args = [
            'loop'             => 1,
            'controls'         => 0,
            'muted'            => 1,
            'vimeo_logo'       => 0,
            'title'            => 0,
            'watch_full_video' => 0,
            'transcript'       => 0,
            'portrait'         => 0,
            'byline'           => 0,
            'quality_selector' => 0,
            'speed'            => 0,
            'pip'              => 0,
            'fullscreen'       => 0,
        ];
    }

    if (!empty($args['autoplay'])) {
        $video_args['autoplay'] = 1;
    }

    if ($video_args) {
        $provider = add_query_arg($video_args, $provider);
    }

    return $provider;
}

add_filter('oembed_fetch_url', 'loop_vimeo_videos', 10, 3);

/**
 * Add embed video Lazy Load
 */
add_filter('oembed_result', 'wp_filter_content_tags');

/**
 * Replace standard Gravity Forms submit input with button tag
 *
 * @param string $button HTML of the button
 * @param array  $form   Form object
 * @return mixed|string
 */
function prks_form_submit_button($button, $form)
{
    if ($form['button']['type'] == 'image' && !empty($form['button']['imageUrl'])) {
        return $button;
    }

    preg_match("~value=(?:\"|')(.*?)(?:\"|')~", $button, $matches);

    return str_replace(array('input', '/>', 'gform_button'), array('button', '>', 'gform_button gform-theme__disable-reset'), $button) . "{$matches[1]}</button>";
}

add_filter("gform_submit_button", "prks_form_submit_button", 10, 2);
add_filter("gform_next_button", "prks_form_submit_button", 10, 2);
add_filter("gform_previous_button", "prks_form_submit_button", 10, 2);

/**
 * Distribution of filter locations
 *
 * @param array $facets
 * @param array $location
 * @param object $search_filter
 * @return string
 */
function prsk_filter_distribution(array $facets, array $location, object $search_filter): string
{
    $html = '';

    if (empty($facets)) {
        return $html;
    }

    foreach ($facets as $name => $facet) {
        if (empty($facet)) {
            continue;
        }

        $id = !empty($facet['id']) ? $facet['id'] : '';
        $facet_class = !empty($facet['class']) ? $facet['class'] : '';
        $facet_location = !empty($facet['location']) ? $facet['location'] : 'all-bar';
        $enable = isset($facet['enable']) ? $facet['enable'] : true;
        if ($enable && $id && $facet_class && in_array($facet_location, $location)) {
            ob_start(); ?>
            <div class="<?php echo esc_attr($facet_class) ?>">
                <div class="force-active <?php echo esc_attr($name) ?>">
                    <?php $search_filter->render_facet($id); ?>
                </div>
            </div>
<?php $html .= ob_get_clean();
        }
    }

    return $html;
}
