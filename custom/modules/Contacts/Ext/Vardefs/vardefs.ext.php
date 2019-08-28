<?php 
 //WARNING: The contents of this file are auto-generated

 
$dictionary["Contact"]["fields"]["contacts_osy_Supplies"] = array (
    'name' => 'contacts_osy_Supplies',
    'type' => 'link',
    'relationship' => 'contacts_osy_Supplies',
    'source' => 'non-db',
    'module' => 'Supplies',
    'bean_name' => 'Supplies',
    'vname' => 'LBL_CONTACTS_OSY_SUPPLIES',
    'id_name' => 'contacts_osy_Supplies_ida',
    );




















// created: 2019-08-07 17:30:36
$dictionary["Contact"]["fields"]["contacts_opportunities_1"] = array (
  'name' => 'contacts_opportunities_1',
  'type' => 'link',
  'relationship' => 'contacts_opportunities_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
);


// created: 2019-08-07 17:45:02
$dictionary["Contact"]["fields"]["contacts_opportunities_2"] = array (
  'name' => 'contacts_opportunities_2',
  'type' => 'link',
  'relationship' => 'contacts_opportunities_2',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_OPPORTUNITIES_2_FROM_OPPORTUNITIES_TITLE',
);


// created: 2019-08-07 17:40:00
$dictionary["Contact"]["fields"]["opportunities_contacts_1"] = array (
  'name' => 'opportunities_contacts_1',
  'type' => 'link',
  'relationship' => 'opportunities_contacts_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_CONTACTS_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_contacts_1opportunities_ida',
);
$dictionary["Contact"]["fields"]["opportunities_contacts_1_name"] = array (
  'name' => 'opportunities_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_CONTACTS_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_contacts_1opportunities_ida',
  'link' => 'opportunities_contacts_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["opportunities_contacts_1opportunities_ida"] = array (
  'name' => 'opportunities_contacts_1opportunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_CONTACTS_1_FROM_CONTACTS_TITLE',
);


 // created: 2019-08-06 16:52:43
$dictionary['Contact']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2019-08-06 16:52:44
$dictionary['Contact']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2019-08-06 16:52:44
$dictionary['Contact']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2019-08-06 16:52:42
$dictionary['Contact']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>