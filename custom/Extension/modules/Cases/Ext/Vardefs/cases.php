<?php
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