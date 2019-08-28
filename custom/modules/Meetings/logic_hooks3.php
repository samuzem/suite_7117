<?php 
    class  Meetingslh{
        public function parent(&$bean, $event, $arguments){
            $relate = BeanFactory::getBean($bean->parent_type,$bean->parent_id);
            $bean->assigned_user_id = $relate->assigned_user_id ;
        
            }
        
        }
            
            
            
            
            
               
        
        
        
        
        
        
          
        
        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    