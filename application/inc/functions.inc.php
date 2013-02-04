<?php

/*
 * This constant is declared in index.php
* It prevents this file being called directly
*/
defined('MY_APP') or die('Restricted access');

function validateProperty($property) {
	return true;	
}

function saveProperty($property ) {

	$sqlQuery = "INSERT INTO property (address, description, county, price, rooms, type, contact, phone, status, address_two, address_three) values ('{$property['address']}','{$property['description']}','{$property['county']}','{$property['price']}','{$property['rooms']}','{$property['type']}','{$property['contact']}','{$property['phone']}','{$property['status']}','{$property['address_two']}','{$property['address_three']}')";
	$result = mysql_query($sqlQuery);
	
	if (!$result) {
		echo $sqlQuery;
		die("error" . mysql_error());
	} 

	return mysql_insert_id();
	
}
/* 
 * Realistically, you would pass function $_FILES array, but here we are assuming it's available
 * UPLOAD_PATH is defined in config.inc.php
 */
function uploadFiles($property_id) {
	//echo UPLOAD_PATH ;
	//echo  $_FILES['uploadedfile']['tmp_name'];
	 $target = "uploads/";
	 $target = $target . basename( $_FILES['uploadedfile']['name']);  
	 
	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target)) {
		saveImageRecord($property_id, basename( $_FILES['uploadedfile']['name']));
	} else {
		echo "<p>There was an error uploading the file, please try again!";
	}	
}

function saveImageRecord($property_id, $imageName) {
	$sqlQuery = "UPDATE property SET imagefile = '$imageName' where property_id = $property_id"; 
	$result = mysql_query($sqlQuery);	
}

/*
 * Typical things that go wrong with next script
 * You must update the insert.php file to capture any new fields
 * You must ensure there are commas on any new lines you create
 * To resolve issues, uncomment the lines which echo the $sqlQuery  and die();
 */

function updateProperty($property) {
    $propertyID = (int) $property['property_id'];
    $sqlQuery = "UPDATE property SET ";
    $sqlQuery .= " address = '" . $property['address'] . "',";
	$sqlQuery .= " address_two = '" . $property['address_two'] . "',";
	$sqlQuery .= " address_three = '" . $property['address_three'] . "',";
    $sqlQuery .= " description = '". $property['description'] . "',";
    $sqlQuery .= " county = '". $property['county'] . "',";
    $sqlQuery .= " price = '". $property['price'] . "', ";
    $sqlQuery .= " rooms = '". $property['rooms'] . "',";
	$sqlQuery .= " type = '". $property['type'] . "',";
	$sqlQuery .= " contact = '". $property['contact'] . "',";
	$sqlQuery .= " phone = '". $property['phone'] . "'";
    $sqlQuery .= " WHERE property_id = $propertyID";    
	//  echo $sqlQuery;
	//  die("...");
    $result = mysql_query($sqlQuery);
	
	if (!$result) {
		die("error" . mysql_error());
        }
}


function deleteProperty($id) {
    $propertyID = (int) $id;
    $sqlQuery = "DELETE FROM property where property_id = $propertyID";
    
    $result = mysql_query($sqlQuery);
    if (!$result) {
		die("error" . mysql_error());
        }
}


function retrieveProperty($id) {

	$sqlQuery = "SELECT * from property WHERE property_id = $id";

	$result = mysql_query($sqlQuery);
	
	if(!$result) die("error" . mysql_error());
	
	//echo $sqlQuery;

	return mysql_fetch_assoc($result);
	
}

function output_edit_link($id) {
	
	return "<a href='edit.php?id=$id'>Edit</a>";	
	
}

function output_delete_link($id) {

	return "<a href='delete.php?id=$id'>Delete</a>";

}

function output_selected($currentValue, $valueToMatch) {
	
	if ($currentValue == $valueToMatch) {
		return "selected ='selected'";
	}
	
}

function authenticate($username, $password) {   
    $boolAuthenticated = false;
    
    $sqlQuery = "SELECT * from adminusers WHERE ";
    $sqlQuery .= "username = '" . $username . "'";
    $sqlQuery .= " AND ";
    $sqlQuery .= "password = '" .$password . "'";
    
    $result = mysql_query($sqlQuery);
    
    if (!$result)  die("Error: " . $sqlQuery . mysql_error());
    
    if (mysql_num_rows($result)==1) {
        $boolAuthenticated = true;
    }
    
    return $boolAuthenticated;
}