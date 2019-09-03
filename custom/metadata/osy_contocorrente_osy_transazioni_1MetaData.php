<?php
// created: 2019-08-29 15:42:00
$dictionary["osy_contocorrente_osy_transazioni_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'osy_contocorrente_osy_transazioni_1' => 
    array (
      'lhs_module' => 'osy_Contocorrente',
      'lhs_table' => 'osy_contocorrente',
      'lhs_key' => 'id',
      'rhs_module' => 'osy_transazioni',
      'rhs_table' => 'osy_transazioni',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'osy_contocorrente_osy_transazioni_1_c',
      'join_key_lhs' => 'osy_contocorrente_osy_transazioni_1osy_contocorrente_ida',
      'join_key_rhs' => 'osy_contocorrente_osy_transazioni_1osy_transazioni_idb',
    ),
  ),
  'table' => 'osy_contocorrente_osy_transazioni_1_c',
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
      'name' => 'osy_contocorrente_osy_transazioni_1osy_contocorrente_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'osy_contocorrente_osy_transazioni_1osy_transazioni_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'osy_contocorrente_osy_transazioni_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'osy_contocorrente_osy_transazioni_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'osy_contocorrente_osy_transazioni_1osy_contocorrente_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'osy_contocorrente_osy_transazioni_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'osy_contocorrente_osy_transazioni_1osy_transazioni_idb',
      ),
    ),
  ),
);