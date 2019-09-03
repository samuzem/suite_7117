<?php 
class Class_osy_conto_3
{

    public function myMethod_3(&$bean, $event, $arguments)
    {
        if(true){
        $a = '';
        $sql = "select * from contacts_cstm as cc
                inner join contacts_osy_contocorrente_1_c as coc
                on coc.contacts_osy_contocorrente_1contacts_ida = cc.id_c and coc.deleted =0
                where coc.contacts_osy_contocorrente_1osy_contocorrente_idb ='{$bean->id}'";

        $result = $GLOBALS["db"]->query($sql);
        while ($contacts = $GLOBALS["db"]->fetchByAssoc($result)) {

            $query = "update contacts_cstm set bilancio_c=bilancio_c + '{$bean->saldomedio_c}'";

            $update = $GLOBALS["db"]->query($query);
        }
        }
    }
}
    