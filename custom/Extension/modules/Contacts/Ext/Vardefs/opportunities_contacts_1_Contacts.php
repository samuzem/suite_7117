<?php
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
