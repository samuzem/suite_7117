<?php 
class  Contactslogichook3 {
    public function metodo3(&$bean, $event, $arguments){
        
       
        if ($bean->fetched_row['marketing_c'] != $bean->marketing_c){
               if($bean-> marketing_c === true ){
                
               if($bean ->load_relationship('prospect_lists')){
                   
                $target = BeanFactory::newBean('ProspectLists');
                $target->name= $bean->first_name ."_" . $bean->last_name . "_" . $bean->date_modified;
                $target->save();
                $bean->prospect_lists->add  ($target->id);

                  if($target->load_relationship('campaigns')){
                       
                    
                   $target->campaigns->add('b01bbe53-1152-7404-ffc0-5d499a006c76');

                  }
               }
            }
            else 
            {
                
                if($bean ->load_relationship('prospect_lists')){
                $bean->prospect_lists->delete($bean->id);
                }
            }   
                
                
     

        }

                   }
                   }









?>