<?php
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
