<?php	
	$sql = '
	SELECT promotion
	FROM products
	WHERE id = ' .$value['id'];
	$res = mysqli_query($db_connection, $sql);
	$chk = mysqli_fetch_assoc($res);


	if ($chk['promotion'] == 1) {
	$promo = 'Yes';
	}else {
	$promo = 'No';
	}
	echo $promo;
?>
