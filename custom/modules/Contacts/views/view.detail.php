<?php
if (! defined('sugarEntry') || ! sugarEntry)
    die('Not A Valid Entry Point');

require_once 'modules/Contacts/views/view.detail.php';

class CustomContactsViewDetail extends ContactsViewDetail
{

    public function preDisplay()
    {
        parent::preDisplay();
    }

    public function display()
    {
        unset($this->dv->defs['templateMeta']['form']['buttons'][1]);
        unset($this->dv->defs['panels']['lbl_contact_information'][9]);
        parent::display();
        
        /*
        if ($this->dv->focus->marketing_c === false)
        {
            echo 
            "<script>
                $('div[field=tipomarketing_c]').hide();
            </script>";
        }
        */
    }
}
?>