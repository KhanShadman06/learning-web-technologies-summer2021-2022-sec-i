<?php
$tsk=array(1,2,3,4,5,6);
$lk=4;
$check=0;
for($i=0;$i<6;$i++){
	
	if ($tsk[$i]==$lk)
	{
		echo $lk."found";
		$check==1;
	}
}
 if ($check==0){
	echo $lk."not found";
}
?>