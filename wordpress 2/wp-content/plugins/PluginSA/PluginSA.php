<?php
/*
Plugin Name: PluginSA
Plugin URI: http://localhost:8888/plugin/wordpress/PLUGINSA/
Description: Ceci un plugin pour la recupération de données sur Saleforce et Auth0
Author: Sacha Setruk
Version: 1.0
*/

$field = get_field_object('my_field');
add_shortcode('notre_shortcode', $field);
?>
<p><?php echo $field['label']; ?>: <?php echo $field['value']; ?></p>
