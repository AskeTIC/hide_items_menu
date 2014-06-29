<?php

elgg_register_event_handler('init', 'system', 'hide_members_menu_item_init');

function hide_members_menu_item_init() {

}

/* controlador de la página*/
function hide_members_menu_item_page_handler() {
    $params = array(
        'title' => 'Hello world!',
        'content' => 'This is my first plugin.',
        'filter' => '',
    );

    $body = elgg_view_layout('content', $params);

    echo elgg_view_page('Hello', $body);
}
?>
