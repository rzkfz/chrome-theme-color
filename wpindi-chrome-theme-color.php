<?php
/**
 * Plugin Name: Chrome Theme Color
 */
/* Just change hex color code below */
add_action('wp_head', 'wpindi_chrome_theme_color');
function wpindi_chrome_theme_color(){
?>
<meta name="theme-color" content="#db5945">
<?php
};