<?php /* Smarty version 2.6.31, created on 2019-08-26 16:50:33
         compiled from cache/include/InlineEditing/AccountsEditViewbilling_address_street.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['billing_address_street']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['billing_address_street']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['billing_address_street']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['billing_address_street']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['billing_address_street']['name']; ?>
' size='30' 
    maxlength='150' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >