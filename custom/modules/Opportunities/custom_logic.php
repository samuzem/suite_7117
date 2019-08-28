<?php 
class  Opportunitieslogichook {
    public function parent(&$bean, $event, $arguments){
        $a = 2;
        $bean -> description = 'pluto';
        //$bean->save();
    }
}













?>