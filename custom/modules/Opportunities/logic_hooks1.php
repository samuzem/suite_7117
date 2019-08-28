<?php 
class  Opportunitieslogichook1 {
    public function updateCase(&$bean, $event, $arguments){
        if ($bean->load_relationship('opportunities_cases')) {
            
            $relatedBeans = $bean->opportunities_cases->getBeans();
            foreach($relatedBeans as $case){
            
                if($bean-> sales_stage == 'Closed Won' or $bean-> sales_stage == 'Closed Lost' ){  
                    $case-> state = 'Closed';
                    
                    $case-> save();
                    
                }
            }
        }
       
    }
    
    
}
        