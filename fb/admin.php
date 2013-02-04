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

include_once(APPLICATION_PATH . "/inc/session.inc.php");

/*
 * Include the config.inc.php file
 */
include (APPLICATION_PATH . "/inc/config.inc.php");
include (APPLICATION_PATH . "/inc/db.inc.php");
include (APPLICATION_PATH . "/inc/functions.inc.php");

//Set up variable so 'active' class set on navbar link
$activeHome = "active";

include (TEMPLATE_PATH . "/header.html");

?>
<div class="container">
<div class="whiteBg">
	<div class="row">
        <div class="span12">
			<h1>  Administration</h1>
            
		</div>
 	</div> <!-- / row -->
    
	<div clas="row">
		<div class="span12">
			<?php 
            $sqlQuery = "SELECT * FROM property";
            $result = mysql_query($sqlQuery);
            
            
            if ($result) {
                $htmlString = "";
                $htmlString .=  "<table class='table table-bordered table-condensed table-striped' border='1'>\n";
                $htmlString .= "<tr>";
                    $htmlString .= "<th>ID</th>";
                    $htmlString .= "<th>County</th>";
                    $htmlString .= "<th>Description</th>";
                    $htmlString .= "<th>House Type</th>";
                    
                    $htmlString .= "<th>Updated</th>";
                    $htmlString .= "<th colspan='2'>Actions</th>";
                $htmlString .= "</tr>";
                
                while ($property = mysql_fetch_assoc($result)){
                    
                    $htmlString .=  "<tr>" ;
                        
                        $htmlString .=  "<td>";
                            $htmlString .=  $property["property_id"];
                        $htmlString .=  "</td>";
                        
                        $htmlString .=  "<td>";
                            $htmlString .=  $property["county"];
                        $htmlString .=  "</td>";
                    
                        $htmlString .=  "<td>";
                            $htmlString .=  $property["description"];
                        $htmlString .=  "</td>";
                    
                        $htmlString .=  "<td>";
                            $htmlString .=  $property["type"];
                        $htmlString .=  "</td>";
                        
                        $htmlString .=  "<td>";
                            $htmlString .=  $property["updated"];
                        $htmlString .=  "</td>";
            
                        $htmlString .=  "<td>";
                            $htmlString .=  output_edit_link($property["property_id"]);
                        $htmlString .=  "</td>";
                    
                        $htmlString .=  "<td>";
                            $htmlString .=  output_delete_link($property["property_id"]);
                        $htmlString .=  "</td>";
                    
                    $htmlString .=  "</tr>\n";
                    
                }
                
                $htmlString .=  "</table>\n";
                
                echo $htmlString ;
                
                } else {
                
                    die("Failure: " . mysql_error($link_id));
                }
            ?>
            
		</div> <!-- / span -->
	</div> <!-- / row -->
</div>
</div> <!-- / container -->
<?php 
include (TEMPLATE_PATH . "/footer.html");
?>
