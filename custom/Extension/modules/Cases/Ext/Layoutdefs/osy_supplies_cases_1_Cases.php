<?php
 // created: 2019-08-09 16:35:13
$layout_defs["Cases"]["subpanel_setup"]['osy_supplies_cases_1'] = array (
  'order' => 100,
  'module' => 'osy_Supplies',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OSY_SUPPLIES_CASES_1_FROM_OSY_SUPPLIES_TITLE',
  'get_subpanel_data' => 'osy_supplies_cases_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
