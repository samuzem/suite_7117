<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 


$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'Leads push feed', 'modules/Leads/SugarFeeds/LeadFeed.php','LeadFeed', 'pushFeed'); 
$hook_array['before_save'][] = Array(77, 'updateGeocodeInfo', 'modules/Leads/LeadsJjwg_MapsLogicHook.php','LeadsJjwg_MapsLogicHook', 'updateGeocodeInfo'); 
$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(77, 'updateRelatedMeetingsGeocodeInfo', 'modules/Leads/LeadsJjwg_MapsLogicHook.php','LeadsJjwg_MapsLogicHook', 'updateRelatedMeetingsGeocodeInfo'); 


/*
$hook_array['before_save'][] = Array(
    4,
    'juynki8kmol8l',
    'custom/modules/Leads/logic_hooks2.php',
    'Leadslogichook2',
    'updateContacts'
    );*/


$hook_array['before_save'][]= Array(
    
    2,
    'juynki8kmol8l',
    'custom/modules/Leads/logic_hooks3.php',
    'Leadslogichook3',
    'metodo3'
    
    
    );






?>