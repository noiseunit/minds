<?php

elgg_register_event_handler('init','system',function(){
    
    global $CONFIG;
    
    // Define "Blessed" themes
    if (!isset($CONFIG->available_themes))
        $CONFIG->available_themes = array(
            
        );
    
  
    elgg_register_admin_menu_item('configure', 'themeselection', 'appearance');
    
    elgg_register_action('theme/select', dirname(__FILE__) . '/actions/select.php', 'admin');
    
    //register our own css files
    $url = elgg_get_simplecache_url('css', 'minds/themeselector');
    elgg_register_css('minds.themeselector', $url);	
    
    if (get_context() == 'admin')
        elgg_load_css('minds.themeselector');
    
});	