<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-08-09 16:35:13
$dictionary["Case"]["fields"]["osy_supplies_cases_2"] = array (
  'name' => 'osy_supplies_cases_2',
  'type' => 'link',
  'relationship' => 'osy_supplies_cases_2',
  'source' => 'non-db',
  'module' => 'osy_Supplies',
  'bean_name' => 'osy_Supplies',
  'vname' => 'LBL_osy_supplies_cases_2_FROM_OSY_SUPPLIES_TITLE',
);




$dictionary["Case"]["fields"]["opportunities_cases"] = array (
  'name' => 'opportunities_cases',
  'type' => 'link',
  'relationship' => 'opportunities_cases',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_opportunities_cases_FROM_OPPORTUNITIES_TITLE',
);

$dictionary['Case']['fields']['accounts_name_samuele'] = array (
	'required' => false,
	'source' => 'non-db',
	'name' => 'accounts_name_samuele',
	'vname' => 'LBL_ACCOUNTS_NAME_SAMUELE',
	'type' => 'relate',
	'massupdate' => 0,
	'comments' => '',
	'help' => '',
	'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0', 
        'audited' => 0,
	'reportable' => 1,
	'len' => '36',
	'id_name' => 'accounts_id_samuele',
	'link' => 'accounts_samuele',
	'module' => 'Accounts',
	'quicksearch' => 'enabled',
	'studio' => 'visible',
);
$dictionary['Case']['fields']['accounts_id_samuele'] = array (
	'required' => false,
	'name' => 'accounts_id_samuele',
	'vname' => 'LBL_ACCOUNTS_ID_SAMUELE',
	'type' => 'link',
    'dbType' => 'id',
	'massupdate' => 0,
	'comments' => '',
	'help' => '',
	'duplicate_merge' => 'disabled',
	'duplicate_merge_dom_value' => 0,
	'audited' => 0,
	'reportable' => 0,
	'len' => 36,
);
$dictionary['Case']['fields']['accounts_samuele'] = array (
	'name' => 'accounts_samuele',
	'type' => 'link',
	'relationship' => 'accounts_cases_samuele',
	'source' => 'non-db',
	'vname' => 'LBL_ACCOUNTS_SAMUELE',
);
$dictionary["Case"]["relationships"]["accounts_cases_samuele"] = array (
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Cases',
    'rhs_table' => 'cases',
    'rhs_key' => 'accounts_id_samuele',
    'relationship_type' => 'one-to-many',
);
$dictionary["Case"]["indices"][] = array (
	'name' => 'idx_accounts_cases_id_samuele',
	'type' => 'index',
	'fields' =>    
	array (
		0 => 'accounts_id_samuele',
	),
);

// created: 2019-08-09 16:35:13
$dictionary["Case"]["fields"]["osy_supplies_cases_1"] = array (
  'name' => 'osy_supplies_cases_1',
  'type' => 'link',
  'relationship' => 'osy_supplies_cases_1',
  'source' => 'non-db',
  'module' => 'osy_Supplies',
  'bean_name' => 'osy_Supplies',
  'vname' => 'LBL_OSY_SUPPLIES_CASES_1_FROM_OSY_SUPPLIES_TITLE',
);


 // created: 2019-08-06 16:52:40
$dictionary['Case']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2019-08-06 16:52:41
$dictionary['Case']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2019-08-06 16:52:41
$dictionary['Case']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2019-08-06 16:52:39
$dictionary['Case']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>