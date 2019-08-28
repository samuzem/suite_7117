<?php
// created: 2019-08-09 16:35:13
$dictionary["osy_supplies_cases_2"] = array (
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' =>
    array (
        'osy_supplies_cases_2' =>
        array (
            'lhs_module' => 'osy_Supplies',
            'lhs_table' => 'osy_supplies',
            'lhs_key' => 'id',
            'rhs_module' => 'Cases',
            'rhs_table' => 'cases',
            'rhs_key' => 'id',
            'relationship_type' => 'many-to-many',
            'join_table' => 'osy_supplies_cases_2_c',
            'join_key_lhs' => 'osy_supplies_cases_2osy_supplies_ida',
            'join_key_rhs' => 'osy_supplies_cases_2cases_idb',
        ),
    ),
    'table' => 'osy_supplies_cases_2_c',
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
            'name' => 'osy_supplies_cases_2osy_supplies_ida',
            'type' => 'varchar',
            'len' => 36,
        ),
        4 =>
        array (
            'name' => 'osy_supplies_cases_2cases_idb',
            'type' => 'varchar',
            'len' => 36,
        ),
    ),
    'indices' =>
    array (
        0 =>
        array (
            'name' => 'osy_supplies_cases_2spk',
            'type' => 'primary',
            'fields' =>
            array (
                0 => 'id',
            ),
        ),
        1 =>
        array (
            'name' => 'osy_supplies_cases_2_alt',
            'type' => 'alternate_key',
            'fields' =>
            array (
                0 => 'osy_supplies_cases_2osy_supplies_ida',
                1 => 'osy_supplies_cases_2cases_idb',
            ),
        ),
    ),
);

