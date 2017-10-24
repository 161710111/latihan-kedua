<?php
	require_once 'index3.php';
	
	$robot1 = new robot ('ngik ngik ngiok',66);

	echo " suara robot itu : " .$robot1->get_suara(). '<br>';
	echo " berat robot itu : " .$robot1->get_berat(). '<br>';
?>