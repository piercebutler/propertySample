<?php $thisPage="home"; ?>
<?php

/*
 * Set up constant to ensure include files cannot be called on their own
*/
define ( "MY_APP", 1 );
/*
 * Set up a constant to your main application path
*/
define ( "APPLICATION_PATH", "application" );
define ( "TEMPLATE_PATH", APPLICATION_PATH . "/view" );
include (TEMPLATE_PATH . "/public/header.html");
/*
 * Include the config.inc.php file
 */
include (APPLICATION_PATH . "/inc/config.inc.php");
include (APPLICATION_PATH . "/inc/db.inc.php");
include (APPLICATION_PATH . "/inc/ui_helpers.inc.php");
include (APPLICATION_PATH . "/inc/functions.inc.php");
include (APPLICATION_PATH . "/inc/queries.inc.php");

?>

<div class="container">
	<div class="row">
		<div class="search">
			<div class="searchContainer">
            <div class="searchHeader">Search Our Listings</div>
            <div class="selectWrapper">
	    		<div class="span6">
                <div class="search-font">County</div>
        			<div class="county">
                        <select name="countyId" id="countyId">
                            <option value="Antrim">Antrim</option>
                            <option value="Armagh">Armagh</option>
                            <option value="Carlow">Carlow</option>
                            <option value="Cavan">Cavan</option>
                            <option value="Clare">Clare</option>
                            <option value="Cork">Cork</option>
                            <option value="Derry">Derry</option>
                            <option value="Donegal">Donegal</option>
                            <option value="Down">Down</option>
                            <option value="Dublin" selected="selected">Dublin</option>
                            <option value="Fermanagh">Fermanagh</option>
                            <option value="Galway">Galway</option>
                            <option value="Kerry">Kerry</option>
                            <option value="Kildare">Kildare</option>
                            <option value="Kilkenny">Kilkenny</option>
                            <option value="Laois">Laois</option>
                            <option value="Leitrim">Leitrim</option>
                            <option value="Limerick">Limerick</option>
                            <option value="Longford">Longford</option>
                            <option value="Louth">Louth</option>
                            <option value="Mayo">Mayo</option>
                            <option value="Meath">Meath</option>
                            <option value="Monaghan">Monaghan</option>
                            <option value="Offaly">Offaly</option>
                            <option value="Roscommon">Roscommon</option>
                            <option value="Sligo">Sligo</option>
                            <option value="Tipperary">Tipperary</option>
                            <option value="Tyrone">Tyrone</option>
                            <option value="Waterford">Waterford</option>
                            <option value="Westmeath">Westmeath</option>
                            <option value="Wexford">Wexford</option>
                            <option value="Wicklow">Wicklow</option>
                        </select>
            		</div>
    			</div> <!-- End Span -->
    
    			<div class="span6">
                <div class="search-font">Property Type</div>
        			<div class="type">
        				<select name="typeId" id="typeId">
                    		<option value="Detached" selected="selected">Detached</option>
                            <option value="Semi-Detached">Semi-Detached</option>
                            <option value="Terraced">Terraced</option>
                            <option value="Apartment">Apartment</option>
                        </select>
        			</div>
    			</div> <!-- End Span -->
        
        		<div class="span6">
                	<div class="search-font">Min Price</div>
        			<div class="county">
        				<select name="minPrice" id="minPrice">
                            <option value="50000" selected="selected">&euro;50,000</option>
                            <option value="75000">&euro;75,000</option>
                            <option value="100000">&euro;100,000</option>
                            <option value="125000">&euro;125,000</option>
                            <option value="150000">&euro;150,000</option>
                            <option value="175000">&euro;175,000</option>
                            <option value="200000">&euro;200,000</option>
                            <option value="225000">&euro;225,000</option>
                            <option value="250000">&euro;250,000</option>
                            <option value="275000">&euro;275,000</option>
                            <option value="300000">&euro;300,000</option>
                            <option value="325000">&euro;325,000</option>
                            <option value="350000">&euro;350,000</option>
                            <option value="375000">&euro;375,000</option>
                            <option value="400000">&euro;400,000</option>
                            <option value="425000">&euro;425,000</option>
                            <option value="450000">&euro;450,000</option>
                            <option value="475000">&euro;475,000</option>
                            <option value="500000">&euro;500,000</option>
                            <option value="550000">&euro;550,000</option>
                            <option value="600000">&euro;600,000</option>
                            <option value="650000">&euro;650,000</option>
                            <option value="700000">&euro;700,000</option>
                            <option value="750000">&euro;750,000</option>
                            <option value="800000">&euro;800,000</option>
                            <option value="850000">&euro;850,000</option>
                            <option value="900000">&euro;900,000</option>
                            <option value="950000">&euro;950,000</option>
                            <option value="1000000">&euro;1,000,000</option>
                            <option value="1250000">&euro;1,250,000</option>
                            <option value="1500000">&euro;1,500,000</option>
                            <option value="1750000">&euro;1,750,000</option>
                            <option value="2000000">&euro;2,000,000</option>
                            <option value="2250000">&euro;2,250,000</option>
                            <option value="2500000">&euro;2,500,000</option>
                            <option value="2750000">&euro;2,750,000</option>
                            <option value="3000000">&euro;3,000,000</option>
                            <option value="3500000">&euro;3,500,000</option>
                            <option value="4000000">&euro;4,000,000</option>
                            <option value="4500000">&euro;4,500,000</option>
                            <option value="5000000">&euro;5,000,000</option>
  						</select>
        			</div>
        		</div> <!-- End Span -->
        
                <div class="span6">
                <div class="search-font">Max Price</div>
                	<div class="county">
        				<select name="maxPrice" id="maxPrice">
                            <option value="50000" selected="selected">&euro;50,000</option>
                            <option value="75000">&euro;75,000</option>
                            <option value="100000">&euro;100,000</option>
                            <option value="125000">&euro;125,000</option>
                            <option value="150000">&euro;150,000</option>
                            <option value="175000">&euro;175,000</option>
                            <option value="200000">&euro;200,000</option>
                            <option value="225000">&euro;225,000</option>
                            <option value="250000">&euro;250,000</option>
                            <option value="275000">&euro;275,000</option>
                            <option value="300000">&euro;300,000</option>
                            <option value="325000">&euro;325,000</option>
                            <option value="350000">&euro;350,000</option>
                            <option value="375000">&euro;375,000</option>
                            <option value="400000">&euro;400,000</option>
                            <option value="425000">&euro;425,000</option>
                            <option value="450000">&euro;450,000</option>
                            <option value="475000">&euro;475,000</option>
                            <option value="500000">&euro;500,000</option>
                            <option value="550000">&euro;550,000</option>
                            <option value="600000">&euro;600,000</option>
                            <option value="650000">&euro;650,000</option>
                            <option value="700000">&euro;700,000</option>
                            <option value="750000">&euro;750,000</option>
                            <option value="800000">&euro;800,000</option>
                            <option value="850000">&euro;850,000</option>
                            <option value="900000">&euro;900,000</option>
                            <option value="950000">&euro;950,000</option>
                            <option value="1000000">&euro;1,000,000</option>
                            <option value="1250000">&euro;1,250,000</option>
                            <option value="1500000">&euro;1,500,000</option>
                            <option value="1750000">&euro;1,750,000</option>
                            <option value="2000000">&euro;2,000,000</option>
                            <option value="2250000">&euro;2,250,000</option>
                            <option value="2500000">&euro;2,500,000</option>
                            <option value="2750000">&euro;2,750,000</option>
                            <option value="3000000">&euro;3,000,000</option>
                            <option value="3500000">&euro;3,500,000</option>
                            <option value="4000000">&euro;4,000,000</option>
                            <option value="4500000">&euro;4,500,000</option>
                            <option value="5000000">&euro;5,000,000</option>
  						</select>
            		</div>
       			</div> <!-- End Span -->
    
    			<div class="span6">
        			<div class="search_but">
     					<button class="btn btn-info" id="btnLoadAjax2">Search</button>
                	</div>
    			</div> <!-- End Span -->
                </div>
        	</div> <!-- End Search Container -->
        </div> <!-- End Search -->
        <!-- <div class="slogan">Helping you find the property of your dreams</div> -->
        <div class="slogan">
        <?php
// http://css-tricks.com/snippets/php/get-latest-twitter-status/
function getTwitterStatus($userid){
$url = "https://api.twitter.com/1/statuses/user_timeline/$userid.xml?count=1&include_rts=1callback=?";

$xml = simplexml_load_file($url) or die("could not connect");

       foreach($xml->status as $status){
       $text = $status->text;
       }
       echo "Latest News: <em>" . $text . "</em>";
 }

// USAGE
getTwitterStatus("PropertyPierce");

?>
</div>
	</div> <!-- End Row -->
   
    <div class="row">
    	<div class="span9">
        
			<div id="ajaxContent2" class="ajaxContent"></div>
            </div>

            
            


    	
    </div>
    
</div> <!-- End Container -->


<?php include (TEMPLATE_PATH . "/public/footer.html"); ?>