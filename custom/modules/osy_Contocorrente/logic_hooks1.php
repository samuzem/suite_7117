<?php 
class Class_osy_conto {
    
    public function myMethod(&$bean, $event, $arguments){
        

        if ($bean->load_relationship('contacts_osy_contocorrente_1')) {
            
            $relatedBeans = $bean->contacts_osy_contocorrente_1 ->getBeans();
            foreach($relatedBeans as $contatt){
                $contatt-> bilancio_c = $contatt -> bilancio_c - $bean->saldomedio_c;
                $contatt -> save();

           
            }

         }
       }

}












    






?>