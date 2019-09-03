<?php
//if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class Class_osy_conto_2
{

    public function myMethod_2(&$bean, $event, $arguments)
    {
        if(true){
        $a = '';
        $sql = "select * from contacts_cstm as cc
                inner join contacts_osy_contocorrente_1_c as coc
                on coc.contacts_osy_contocorrente_1contacts_ida = cc.id_c and coc.deleted =1
                where coc.contacts_osy_contocorrente_1osy_contocorrente_idb ='{$bean->id}'";

        $result = $GLOBALS["db"]->query($sql);
        while ($contacts = $GLOBALS["db"]->fetchByAssoc($result)) {

            $query = "update contacts_cstm set bilancio_c=bilancio_c - '{$bean->saldomedio_c}'";

            $update = $GLOBALS["db"]->query($query);
        }
        }
    }
}

?>