<?php $thisPage="about"; ?>
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

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=383982501693360";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="container">
	<div class="row">
    <div class="span8">
   	  <div class="whiteBg2">
       
        	<h1>About</h1>
            <p>A little bit about this project.....</p>
            <h3>PHP Assignment</h3>
            <p><strong>Name: </strong>Pierce Butler</p>
            <p><strong>Student Number:</strong> </p>
            <p><strong>Due Date: </strong>7th Jan 2013</p>
            <p><strong>Date of Submission:</strong> 7th Jan 2013</p>
            
            <p>
The front end shows a listing of all properties available for sale. The user can filter the listing based on county, price and house type. Front end filters reload data using JSON.The admin section is protected by a login which is given in the "setup folder". Within the admin section the user is able to add, update and delete properties for sale. The date the house listing was updated is stored in the database and displayed in the backend.Each listing also has a photograph uploaded to the uploads folder.
There is a flag to indicate whether it is sold or not. House types include detached, semi- detached, terraced and have 3 address lines and a county.
This website is placed at <a href="http://www.redfinchmedia.com" title="Property Online Site" target="new">http://www.redfinchmedia.com</a>. The site was tested on Firefox, Chrome and Safari browsers. It was not tested on Internet Explorer. </p>
<br />
The background picture is taken from Deviant Art (<a href="http://browse.deviantart.com/?q=house+foggy+farm#/d4bdn1h" title="Deviant Art" target="new">http://browse.deviantart.com/?q=house+foggy+farm#/d4bdn1h</a>) <br />
            
            <h3>Property Listings</h3>
            <p>
            	Each county from Antrim to Meath have four listings, one for each property type at varying prices. Dublin has the most listings. If properties are found at the top of the findings it will output how many properties were found, house type and county whcih was searched. If no properties are found a message appers:<center><em>"Sorry, but your search yielded no results. Try broadening your search using the refine bar above."</em></center>
            </p>
            
            
            
            
      </div> <!-- / whiteBg -->
      </div>
      
      <div class="span4">
      <div class="whiteBgSb">
      <h1>Connect...</h1>
    
            
           <div class="fb-like-box" data-href="http://www.facebook.com/pages/Property/525042280861712" data-width="259" data-show-faces="true" data-stream="false" data-header="true"></div>
           <div class="twitterW">
           <a class="twitter-timeline" href="https://twitter.com/PropertyPierce" data-widget-id="290507585226948608">Tweets by @PropertyPierce</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
            </div>
    </div>
    </div> <!-- / row -->
  
    
    
   
    
</div> <!-- End Container -->


<?php include (TEMPLATE_PATH . "/public/footer.html"); ?>