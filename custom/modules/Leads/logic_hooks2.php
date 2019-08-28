<?php 
class  Leadslogichook2 {
    public function updateContacts(&$bean, $event, $arguments){
       
        if (!isset($bean->fetched_row['id'])) {
            $contatto = BeanFactory::newBean('Contacts');        
        
        $contatto-> first_name= $bean-> first_name;        
        $contatto-> phone_mobile= $bean-> phone_mobile;
        $contatto-> save();
        
        
        
    
        
       $bean->contact_id = $contatto->id;
        
        }
    }
}
           
  

?>