    <?php 
    class  Leadslogichook3 {
        public function metodo3(&$bean, $event, $arguments){
            
           
            if (!isset($bean->fetched_row['id'])) {
                if($bean-> lead_source === 'Web Site'){
                $opp = BeanFactory::newBean('Opportunities');
                $opp->lead_source =$bean-> lead_source;
                $opp->assigned_user_id= $bean-> assigned_user_id;
                $opp->opportunity_type='New Business';
           
               $task = BeanFactory::newBean('Tasks');
               $task->assigned_user_id= $bean->assigned_user_id;
               $task->status = 'In Progress';
               
               
               $opp-> save();
               
               $task->save();
               
               
               
               
                
                
                
                
                
                
                }
                else if($bean->lead_source === 'Email' ){
  $opp2 = BeanFactory::newBean('Opportunities');
  $date =date_create($bean->date_enterd);
  $newdate=date_format($date, 'Y,m,d');
  $opp2->name= $bean->first_name ."_" . $bean->last_name . "_" . $newdate;
                   $opp2-> save();
                    
                }
                else if ($bean->lead_source === 'Campaign' ){
                    $task2 = BeanFactory::newBean('Tasks');
                    $task2->first_name= $bean->first_name;
                    $date =date_create($bean->date_enterd);
                    $newdate=date_format($date, 'Y,m,d');
                    $task2->name= $bean->first_name ."_" . $bean->last_name . "_" . $newdate;
                    $task2-> save();
                    
                    $cont= beanFactory::newBean('Contacts');
                    
                    $field_defs['Contacts'] = $cont->getFieldDefinitions();
                    $field_defs['Leads']=$bean->getFieldDefinitions();
                    foreach($field_defs['Contacts'] as $fieldContact)
                    {
                        
                        foreach($field_defs['Leads'] as $fieldLead){
                                    if($fieldContact['name'] === $fieldLead['name'] ){
                                
                                
                                $cont->{$fieldContact['name']}=$bean ->{$fieldLead['name']};
                               
                                
                            }
                               
                        }
                        
                    }
                $cont-> save();
                   
                }
            }
        }
    }
   
    
    
    
    
    
    
    
    
    
    
    
    
    ?>