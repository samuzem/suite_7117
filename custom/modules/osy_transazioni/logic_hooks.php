<?php 
$hook_version = 1; 
$hook_array = Array();


$hook_array['before_save'][] = Array(
    2,
    'Incremento del saldo medio',
    'custom/modules/osy_transazioni/logic_hooks1.php',
    'Class_osy_transazioni',
    'method_osy_transazioni'
    );