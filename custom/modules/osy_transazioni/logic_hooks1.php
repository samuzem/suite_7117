<?php 
class  Class_osy_transazioni {
    public function method_osy_transazioni(&$bean, $event, $arguments){
        
       
            if ($bean->load_relationship('osy_contocorrente_osy_transazioni_1')) {
                
                $relatedBeans = $bean->osy_contocorrente_osy_transazioni_1 ->getBeans();
                foreach($relatedBeans as $cont){
                    $cont-> saldomedio_c = $cont -> saldomedio_c + $bean->importospeso_c;
                    $cont -> save();
                    
               
            
                
                if($cont->load_relationship('contacts_osy_contocorrente_1')){
                    
                    $relatedBeans2 = $cont->contacts_osy_contocorrente_1-> getBeans();
                    foreach($relatedBeans2 as $contatt){
                        $contatt-> bilancio_c = $contatt-> bilancio_c + $cont->saldomedio_c;
                        $contatt-> save();
                    }
                   }
                }
       }
         }
  }
        