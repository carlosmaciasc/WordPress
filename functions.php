/*
Removes taxes from AddFee if is a negative amount
*/
function cmdm_exclude_cart_fees_taxes($taxes, $fee, $cart)
{
	if($taxes[0] <= 0)
	{
		return [];
	}
	else
	{
		return $taxes;
	}
}
add_action('woocommerce_cart_totals_get_fees_from_cart_taxes', 'cmdm_exclude_cart_fees_taxes', 999 ,3);
