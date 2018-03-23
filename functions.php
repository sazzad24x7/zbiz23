<?php
function zbiz23_one(){
    add_theme_support('title-tag');
    add_theme_support('custom-header');
    add_theme_support('custom-logos');
}
add_action('after_setup_theme','zbiz23_one');
?>