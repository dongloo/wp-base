<?php
    //define('DISALLOW_FILE_EDIT', true);
    //define('DISALLOW_FILE_MODS',true);
    //define('DISALLOW_EXPORT',true);
    
    
    define( 'WP_AUTO_UPDATE_CORE', false );
    add_filter( 'auto_update_plugin', '__return_false' );

    /*Code chặn update wordpress*/
    function remove_core_updates(){
        global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
    }
    add_filter('pre_site_transient_update_core','remove_core_updates');
    add_filter('pre_site_transient_update_plugins','remove_core_updates');
    add_filter('pre_site_transient_update_themes','remove_core_updates');
    
    
    
?>