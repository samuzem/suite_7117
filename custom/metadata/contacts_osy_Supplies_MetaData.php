<?php

$dictionary["contacts_osy_Supplies"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'contacts_osy_Supplies' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'osy_Supplies',
      'rhs_table' => 'osy_Supplies',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'contacts_osy_Supplies_c',
      'join_key_lhs' => 'contacts_osy_Supplies_ida',
      'join_key rhs' => 'contacts_osy_Supplies_idb',
  
    ),
  ),
  'table' => 'contacts_osy_Supplies_c',
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
      'name' => 'contacts_osy_Supplies_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'contacts_osy_Supplies_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'contacts_osy_Supplies_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
        'name' => 'contacts_osy_Supplies_ida',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contacts_osy_Supplies_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'contacts_osy_Supplies_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'contacts_osy_Supplies_idb',
      ),
    ),
  ),
);