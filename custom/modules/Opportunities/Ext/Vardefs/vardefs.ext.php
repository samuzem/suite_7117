<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-08-07 17:30:36
$dictionary["Opportunity"]["fields"]["contacts_opportunities_1"] = array (
  'name' => 'contacts_opportunities_1',
  'type' => 'link',
  'relationship' => 'contacts_opportunities_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
);

 
$dictionary['Opportunity']['fields']['ciao']= array(
    'name'=>'ciao',
    'vname'=>'Ciao Opportunità',
    'labelValue'=>'Ciao Opportunità',
    'label'=> 'LBL_CIAOOPPORTUNITÀ',
    'inline_edit'=>'1',
    'isnull'=>true,
    'type'=> 'bool',
    'unified_search'=> '1',
    'audited'=>false,
    );
    
















// created: 2019-08-07 17:40:00
$dictionary["Opportunity"]["fields"]["opportunities_contacts_1"] = array (
  'name' => 'opportunities_contacts_1',
  'type' => 'link',
  'relationship' => 'opportunities_contacts_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_CONTACTS_1_FROM_CONTACTS_TITLE',
);

 
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
                      














// created: 2019-08-07 17:45:02
$dictionary["Opportunity"]["fields"]["contacts_opportunities_2"] = array (
  'name' => 'contacts_opportunities_2',
  'type' => 'link',
  'relationship' => 'contacts_opportunities_2',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_OPPORTUNITIES_2_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_opportunities_2contacts_ida',
);
$dictionary["Opportunity"]["fields"]["contacts_opportunities_2_name"] = array (
  'name' => 'contacts_opportunities_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_OPPORTUNITIES_2_FROM_CONTACTS_TITLE',
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
$dictionary["Opportunity"]["fields"]["contacts_opportunities_2contacts_ida"] = array (
  'name' => 'contacts_opportunities_2contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_opportunities_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_OPPORTUNITIES_2_FROM_OPPORTUNITIES_TITLE',
);



$dictionary["Opportunity"]["fields"]["opportunities_cases"] = array (
  'name' => 'opportunities_cases',
  'type' => 'link',
  'relationship' => 'opportunities_cases',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'vname' => 'LBL_opportunities_cases_FROM_CASES_TITLE',
);

 // created: 2019-08-27 09:40:01
$dictionary['Opportunity']['fields']['ciao']['default']='0';
$dictionary['Opportunity']['fields']['ciao']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['ciao']['unified_search']=false;

 

 // created: 2019-08-06 16:52:52
$dictionary['Opportunity']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2019-08-06 16:52:53
$dictionary['Opportunity']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2019-08-06 16:52:53
$dictionary['Opportunity']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2019-08-06 16:52:51
$dictionary['Opportunity']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2019-08-26 15:07:59
$dictionary['Opportunity']['fields']['campoprogressivo_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['campoprogressivo_c']['labelValue']='campoProgressivo';

 

 // created: 2019-08-27 09:42:40
$dictionary['Opportunity']['fields']['nopportunita_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['nopportunita_c']['labelValue']='nopportunita';

 
?>