<?php 
$dictionary['Opportunity']['relationships'][]=array(
    'opportunities_accounts_1' => array(
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'account_id',
        'rhs_module' => 'Accounts',
        'rhs_table' => 'accounts',
        'rhs_key' => 'id',
        'relationship_type' => 'one-to-many'
        ),
                 
     );

     
    

$dictionary["Opportunity"]["fields"]["accounts_opportunities_1accounts_ida"] = array (
    'name' => 'contacts_opportunities_1accounts_ida',
    'type' => 'link',
    'relationship' => 'accounts_opportunities_1',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_ACCOUNTS_OPPORTUNITIES_2_FROM_OPPORTUNITIES_TITLE',
);
$dictionary["Opportunity"]["fields"]['accounts_opportunities_1_name'] = array (
    'name' => 'accounts_opportunities_2_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_ACCOUNTS_OPPORTUNITIES_2_FROM_ACCOUNTS_TITLE',
    'save' => true,
    'id_name' => 'contacts_opportunities_2contacts_ida',
    'link' => 'contacts_opportunities_2',
    'table' => 'contacts',
    'module' => 'Contacts',
    'rname' => 'name',
    'db_concat_fields' =>
    array (
        0 => 'first_name',
        1 => 'last_name',
    ),
);
                      












?>