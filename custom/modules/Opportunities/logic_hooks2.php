<?php 
class  Opportunitieslogichook2 {
    public function campoopp(&$bean, $event, $arguments){
       
        if (!isset($bean->fetched_row['id'])) {
        // $bean->campoprogressivo_c= '2017_45';
  
            $sql = "select max(nopportunita_c) from opportunities_cstm";
            $result = $GLOBALS["db"]->query($sql);
            while($quotes = $GLOBALS["db"]->fetchByAssoc($result)){
               $ciao = $quotes['max(nopportunita_c)'];
               $bean-> nopportunita_c = $ciao+1;
               
                break;
                
                
                 }
        
            }
       }    
    }