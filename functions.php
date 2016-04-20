add_action('genesis_after_entry', 'my_prev_next_post_nav', 9);

function my_prev_next_post_nav() {
    if (!is_singular('post'))
        return;
    genesis_markup(array(
        'html5' => '<div %s>',
        'xhtml' => '<div class="navigation">',
        'context' => 'adjacent-entry-pagination',
    ));
    echo '<div class="pagination-previous alignleft">';
    previous_post_link('%link', 'Previous');
    echo '</div>';
    echo '<div class="pagination-next alignright">';
    next_post_link('%link', 'Next');
    echo '</div>';
    echo '</div>';
}
