<?php
session_start();
/*
 * Set up constant to ensure include files cannot be called on their own
*/
define ( "MY_APP", 1 );
/*
 * Set up a constant to your main application path
 */
define ( "APPLICATION_PATH", "application" );
define ( "TEMPLATE_PATH", APPLICATION_PATH . "/view" );

/* Prevent unauthorised access */
include_once(APPLICATION_PATH . "/inc/session.inc.php");

/*
 * Include the config.inc.php file
 */
include (APPLICATION_PATH . "/inc/config.inc.php");
include (APPLICATION_PATH . "/inc/db.inc.php");
include (APPLICATION_PATH . "/inc/functions.inc.php");
include (APPLICATION_PATH . "/inc/queries.inc.php");
include (APPLICATION_PATH . "/inc/ui_helpers.inc.php");
$property = array();
$property['address'] = "";
$property['address_two'] = "";
$property['address_three'] = "";
$property['description'] = "";
$property['county'] ="";
$property['price'] ="";
$property['rooms'] ="";
$property['type'] ="";
$property['contact'] ="";
$property['phone'] ="";
$property['status'] ="";
$property['address_two'] ="";
$property['property_id']=0;

if (!empty($_POST)) {
	$property = array();
	$property['address'] = htmlspecialchars(strip_tags($_POST["address"]));
	$property['address_two'] = htmlspecialchars(strip_tags($_POST["address_two"]));
	$property['address_three'] = htmlspecialchars(strip_tags($_POST["address_three"]));
	$property['description'] = htmlspecialchars(strip_tags($_POST["description"]));
	$property['county'] = htmlspecialchars(strip_tags($_POST["county"]));
	$property['price'] = htmlspecialchars(strip_tags($_POST["price"]));
	$property['rooms'] = htmlspecialchars(strip_tags($_POST["rooms"]));
	$property['type'] = htmlspecialchars(strip_tags($_POST["type"]));
	$property['contact'] = htmlspecialchars(strip_tags($_POST["contact"]));
	$property['phone'] = htmlspecialchars(strip_tags($_POST["phone"]));
	$property['status'] = htmlspecialchars(strip_tags($_POST["status"]));
	$property['property_id'] = isset($_POST["property_id"]) ? (int) $_POST["property_id"] : 0;
        
	$flashMessage = "";
	if (validateProperty($property)) {
		if ($property['property_id'] == 0) {
         //New! Save Movie returns the id of the record inserted         
		$property_id = saveProperty($property);
		uploadFiles($property_id);
		$flashMessage = "Record has been saved";
                } else {
                    updateProperty($property);
                        header("Location: admin.php");
                }	
	}
}//end post
?>

<?php 
$activeInsert = "active";
$buttonLabel = "Insert Property Record";
include (TEMPLATE_PATH . "/header.html");
include (TEMPLATE_PATH . "/form_insert.html");
include (TEMPLATE_PATH . "/footer.html");
?>