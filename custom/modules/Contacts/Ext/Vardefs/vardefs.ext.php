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



















 
$dictionary['Contact']['fields']['tipomarketing_c'] = array (
    'inline_edit' => '',
    'labelValue' => 'Tipo Marketing',
    'required' => false,
    'name' => 'tipomarketing_c',
    'vname' => 'LBL_TIPOMARKETING',
    'type' => 'enum',
    'massupdate' => '1',
    'default' => '',		
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'size' => '20',
    'enable_range_search' => false,
    'options'=> 'contact_marketing_type_dom'
    
);


// created: 2019-08-29 17:30:53
$dictionary["Contact"]["fields"]["contacts_osy_contocorrente_1"] = array (
  'name' => 'contacts_osy_contocorrente_1',
  'type' => 'link',
  'relationship' => 'contacts_osy_contocorrente_1',
  'source' => 'non-db',
  'module' => 'osy_Contocorrente',
  'bean_name' => 'osy_Contocorrente',
  'vname' => 'LBL_CONTACTS_OSY_CONTOCORRENTE_1_FROM_OSY_CONTOCORRENTE_TITLE',
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

 

 // created: 2019-09-03 12:35:15
$dictionary['Contact']['fields']['tipomarketing_c']['inline_edit']='';
$dictionary['Contact']['fields']['tipomarketing_c']['required']=false;
$dictionary['Contact']['fields']['tipomarketing_c']['name']='tipomarketing_c';
$dictionary['Contact']['fields']['tipomarketing_c']['vname']='LBL_TIPOMARKETING';
$dictionary['Contact']['fields']['tipomarketing_c']['type']='enum';
$dictionary['Contact']['fields']['tipomarketing_c']['massupdate']='1';
$dictionary['Contact']['fields']['tipomarketing_c']['default']='';
$dictionary['Contact']['fields']['tipomarketing_c']['no_default']=false;
$dictionary['Contact']['fields']['tipomarketing_c']['comments']='';
$dictionary['Contact']['fields']['tipomarketing_c']['help']='';
$dictionary['Contact']['fields']['tipomarketing_c']['importable']='true';
$dictionary['Contact']['fields']['tipomarketing_c']['duplicate_merge']='disabled';
$dictionary['Contact']['fields']['tipomarketing_c']['duplicate_merge_dom_value']='0';
$dictionary['Contact']['fields']['tipomarketing_c']['audited']=true;
$dictionary['Contact']['fields']['tipomarketing_c']['reportable']=true;
$dictionary['Contact']['fields']['tipomarketing_c']['unified_search']=false;
$dictionary['Contact']['fields']['tipomarketing_c']['merge_filter']='disabled';
$dictionary['Contact']['fields']['tipomarketing_c']['size']='20';
$dictionary['Contact']['fields']['tipomarketing_c']['enable_range_search']=false;
$dictionary['Contact']['fields']['tipomarketing_c']['options']='contact_marketing_type_dom';

 

 // created: 2019-08-06 16:52:44
$dictionary['Contact']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2019-08-06 16:52:42
$dictionary['Contact']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2019-09-02 16:56:40
$dictionary['Contact']['fields']['marketing_c']['inline_edit']='1';
$dictionary['Contact']['fields']['marketing_c']['labelValue']='marketing';

 

 // created: 2019-08-29 17:40:08
$dictionary['Contact']['fields']['bilancio_c']['inline_edit']='1';
$dictionary['Contact']['fields']['bilancio_c']['labelValue']='Bilancio';

 
?>