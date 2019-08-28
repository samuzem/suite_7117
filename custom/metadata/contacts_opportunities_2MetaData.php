<?php
// created: 2019-08-07 17:45:02
$dictionary["contacts_opportunities_2"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'contacts_opportunities_2' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'contacts_opportunities_2_c',
      'join_key_lhs' => 'contacts_opportunities_2contacts_ida',
      'join_key_rhs' => 'contacts_opportunities_2opportunities_idb',
    ),
  ),
  'table' => 'contacts_opportunities_2_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'contacts_opportunities_2contacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'contacts_opportunities_2opportunities_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'contacts_opportunities_2spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'contacts_opportunities_2_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contacts_opportunities_2contacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'contacts_opportunities_2_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'contacts_opportunities_2opportunities_idb',
      ),
    ),
  ),
);