<?php
$module_name = 'osy_Contocorrente';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'description',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'iban_c',
            'label' => 'LBL_IBAN',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'intestatario_c',
            'label' => 'LBL_INTESTATARIO',
          ),
          1 => 
          array (
            'name' => 'datadinascita_c',
            'label' => 'LBL_DATADINASCITA',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'saldomedio_c',
            'label' => 'LBL_SALDOMEDIO',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
