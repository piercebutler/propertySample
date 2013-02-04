<?php

/*
 * Gets a complete list of movies Returns: Associative Array
 */
function property_listing_get() {
	$sqlQuery = "SELECT * FROM property";
	$result = mysql_query ( $sqlQuery );
	$records = array ();
	while ( $records [] = mysql_fetch_assoc ( $result ) );
	array_pop ( $records ); // pop the null record which was pushed on as last item
	return $records;
}

/*
 * Gets a complete list of movies Returns: Associative Array
 */
function property_listing_get_byid($property_id) {
	$county_id = $_REQUEST['countyId'];
	$type_id = $_REQUEST['typeId'];
	$min_Price = $_REQUEST['minPrice'];
	$max_Price = $_REQUEST['maxPrice'];
	$sqlQuery = "SELECT * FROM property WHERE county = '$county_id' AND type = '$type_id' AND price BETWEEN '$min_Price' and '$max_Price' ";
	//$sqlQuery = "SELECT * FROM property WHERE price BETWEEN '$min_Price' and '$max_Price' ";
	$result = mysql_query ( $sqlQuery );
	$records = array ();
	while ( $records [] = mysql_fetch_assoc ( $result ) );
	array_pop ( $records ); // pop the null record which was pushed on as last item
	return $records;
}
