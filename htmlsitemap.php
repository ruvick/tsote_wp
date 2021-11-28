<?php

add_shortcode( 'htmlsitemap', 'wp_htmlsitemap' );

function wp_htmlsitemap( $atts ) {
    global $post;
    echo "\n" . '<div class="htmlsitemap">' . "\n";
    $cats = get_categories();
    echo '<div class="h2"><a href="/">Главная</a></div>' . "\n";
    foreach ($cats as $cat) {
        echo '<h2><a href="' . get_category_link($cat->term_id) . '">' . $cat->cat_name . '</a></h2>' . "\n";
        echo '<ul class="htmlsitemap-list">' . "\n";
        $posts = get_posts(array('category' => $cat->term_id, 'posts_per_page' => '-1'));
        foreach ($posts as $post) {
                echo "\t" . '<li><a href="' . get_permalink($post->ID) . '">'."$post->post_title" . '</a></li>' . "\n";
        }
        echo '</ul>' . "\n";
    }
    echo '<div class="h2">Страницы</div>' . "\n";
    echo '<ul class="htmlsitemap-list">' . "\n";
    $pages = get_pages(array('posts_per_page' => '-1'));
    foreach ($pages as $page) {
            echo "\t" . '<li><a href="' . get_permalink($page->ID) . '">'."$page->post_title" . '</a></li>' . "\n";
        }
    echo '</ul>' . "\n";
    echo '</div>';
}