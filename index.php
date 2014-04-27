<?php
$context = Timber::get_context();
$context['posts'] = Timber::get_posts();
if ( !is_singular() ) {
    $context['is_archive'] = true;
    $context['pagination'] = Timber::get_pagination();
}
if ( is_single() ) {
    $context['show_comments'] = true;
}
Timber::render( 'index.twig', $context );