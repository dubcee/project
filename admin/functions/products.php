<?php

function products_get_all_count() {

    $sql ='
        SELECT products.id, products.title, COUNT(products_images.products_id) as cnt
        FROM products
        LEFT JOIN products_images ON products.id = products_images.products_id
        GROUP BY products.id
    ';
    $results = db_select($sql);

    return $results;
}

function products_get($id) {
    global $db_connection;
    
    $sql = '
        SELECT products.id, products.title, products.content
        FROM products
        WHERE id = '.$id;

    $res = mysqli_query($db_connection, $sql);
    return mysqli_fetch_assoc($res);
}

function images_get($id) {
	global $db_connection;

    $sql = '
	SELECT products_images.name, products_images.products_id, products.id, products_images.id
	FROM products
	INNER JOIN products_images ON products.id = products_images.products_id 
    WHERE products.id = '.$id;
	
    $result = mysqli_query($db_connection, $sql);

    return $result;

	
}

function products_get_image($id, $products_id) {
    global $db_connection;
    $sql = '
        SELECT id, image_name
        FROM products_images
        WHERE id='.$id.' AND products_id='.$products_id;
    $res = mysqli_query($db_connection, $sql);
    return mysqli_fetch_assoc($res);
}