<?php



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