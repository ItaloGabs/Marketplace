<?php 
function custom_page_title($title) {
    // Verifica se é uma página ou um post
    if (is_page() || is_single()) {
        global $post;
        // Obtém o título da página ou do post
        $page_title = get_the_title($post->ID);
        // Concatena o título do site com o título da página ou do post
        $title = $page_title . ' | ' . get_bloginfo('name');
    } else {
        // Obtém o título do site
        $title = get_bloginfo('name');
    }
    return $title;
}
add_filter('wp_title', 'custom_page_title', 99, 1);

add_filter('show_admin_bar', '__return_false');