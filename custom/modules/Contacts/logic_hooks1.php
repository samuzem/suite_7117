<?php 
class Contactslogichook1 {
    public function indirizzo(&$bean, $event, $arguments){
        if ($bean->load_relationship('accounts')) {
            $relatedBeans = $bean->accounts->getBeans();
            
            foreach($relatedBeans as $account) {
                $bean->primary_address_city = $account->billing_address_city;
                break;
            }
        }
    }
}