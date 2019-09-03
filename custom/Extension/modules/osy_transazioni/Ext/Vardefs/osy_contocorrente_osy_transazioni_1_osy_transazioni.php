<?php
// created: 2019-08-29 15:42:00
$dictionary["osy_transazioni"]["fields"]["osy_contocorrente_osy_transazioni_1"] = array (
  'name' => 'osy_contocorrente_osy_transazioni_1',
  'type' => 'link',
  'relationship' => 'osy_contocorrente_osy_transazioni_1',
  'source' => 'non-db',
  'module' => 'osy_Contocorrente',
  'bean_name' => 'osy_Contocorrente',
  'vname' => 'LBL_OSY_CONTOCORRENTE_OSY_TRANSAZIONI_1_FROM_OSY_CONTOCORRENTE_TITLE',
  'id_name' => 'osy_contocorrente_osy_transazioni_1osy_contocorrente_ida',
);
$dictionary["osy_transazioni"]["fields"]["osy_contocorrente_osy_transazioni_1_name"] = array (
  'name' => 'osy_contocorrente_osy_transazioni_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OSY_CONTOCORRENTE_OSY_TRANSAZIONI_1_FROM_OSY_CONTOCORRENTE_TITLE',
  'save' => true,
  'id_name' => 'osy_contocorrente_osy_transazioni_1osy_contocorrente_ida',
  'link' => 'osy_contocorrente_osy_transazioni_1',
  'table' => 'osy_contocorrente',
  'module' => 'osy_Contocorrente',
  'rname' => 'name',
);
$dictionary["osy_transazioni"]["fields"]["osy_contocorrente_osy_transazioni_1osy_contocorrente_ida"] = array (
  'name' => 'osy_contocorrente_osy_transazioni_1osy_contocorrente_ida',
  'type' => 'link',
  'relationship' => 'osy_contocorrente_osy_transazioni_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OSY_CONTOCORRENTE_OSY_TRANSAZIONI_1_FROM_OSY_TRANSAZIONI_TITLE',
);
