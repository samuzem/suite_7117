<?php 
 //WARNING: The contents of this file are auto-generated

 
$dictionary['osy_Supplies']['fields']['tempi_consegna']= array(
    'name'=>'tempi_consegna',
    'vname'=>'Tempi Consegna',
    'labelValue'=>'Tempi Consegna',
    'label'=>'LBL_TEMPICONSEGNA',
    'inline_edit'=>true,
    'unified_search'=>'1',
    'audited'=> false,
    'type'=> 'varchar',
    );














// created: 2019-08-09 16:35:13
$dictionary["osy_Supplies"]["fields"]["osy_supplies_cases_2"] = array (
  'name' => 'osy_supplies_cases_2',
  'type' => 'link',
  'relationship' => 'osy_supplies_cases_2',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'vname' => 'LBL_osy_supplies_cases_2_FROM_CASES_TITLE',
);


// created: 2019-08-09 16:35:13
$dictionary["osy_Supplies"]["fields"]["osy_supplies_cases_1"] = array (
  'name' => 'osy_supplies_cases_1',
  'type' => 'link',
  'relationship' => 'osy_supplies_cases_1',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'vname' => 'LBL_OSY_SUPPLIES_CASES_1_FROM_CASES_TITLE',
);





$dictionary["osy_Supplies"]["fields"]["contacts_osy_Supplies"] = array (
  'name' => 'contacts_osy_Supplies',
  'type' => 'link',
  'relationship' => 'contacts_osy_Supplies',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_OSY_SUPPLIES',
  'id_name' => 'contacts_osy_Supplies_ida',
);
$dictionary["osy_Supplies"]["fields"]["contacts_osy_Supplies_name"] = array (
  'name' => 'contacts_osy_Supplies_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_OSY_SUPPLIES_NAME',
  'save' => true,
  'id_name' => 'contacts_osy_Supplies_ida',
  'link' => 'contacts_osy_Supplies',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
);
$dictionary["osy_Supplies"]["fields"]["contacts_osy_Supplies_ida"] = array (
  'name' => 'contacts_osy_Supplies_ida',
  'type' => 'link',
  'relationship' => 'contacts_osy_Supplies',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_OSY_SUPPLIES_IDA',
);


?>