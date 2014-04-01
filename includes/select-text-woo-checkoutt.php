<?php
/**
* Add the field to the checkout
*/
add_action('woocommerce_after_checkout_form', 'my_custom_checkout_field');

function my_custom_checkout_field( $checkout ) {

woocommerce_form_field( 'parcels', array(
'type' => 'select',
'options' => array( 'blank' => __('Selecione', 'woocommerce'),
 '1' => '1 parcela',
	'2' => '2 parcelas',
	'3' => '3 parcelas',
	'4' => '4 parcelas',
	'5' => '5 parcelas',
	'6' => '6 parcelas',
	'7' => '7 parcelas',
	'8' => '8 parcelas',
	'9' => '9 parcelas',
	'10' => '10 parcelas',
	'11' => '11 parcelas',
	'12' => '12 parcelas'
) ,
'class' => array('my-field-class orm-row-wide'),
'label' => __('Número de Parcelas '),
'placeholder' => __('Selecione'),
), $checkout->get_value( 'parcels' ));

}

?>