<?php
	$vat=15;
	$price=250;
	$vat_to_pay =($price/100)*$vat;
	$total_amount=($vat_to_pay+$price);
	echo "you have to pay : ".$total_amount;
	?>