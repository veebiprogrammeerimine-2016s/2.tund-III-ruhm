<?php 

	$age = 5;
	
	if ($age < 18) {
		
		//true - on väiksem kui 18
		echo "alaealine";
		
	} else {
		//muul juhul
		echo "täisealine";
		
	}

?>

<br>

<?php

	for ($i = 0; $i < $age; $i = $i + 1) {
		
		echo $i."palju ";
		
	}
	
	echo "õnne!";
	
?>

<br>

<?php 

	echo date("m. Y");

?>





