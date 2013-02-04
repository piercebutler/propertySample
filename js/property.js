
            $(function(){     
            	initBtnJson();
            	initBtnJson2();
            }); // all content will go inside the two {}  

function initBtnJson() {
	
	   $('#btnLoadAjax').ready(function () {  
           
           //this function will only work if using firefox/firebug.  
           //It causes an error in Explorer, so use Alert instead  
           //Use F12 in Firefox to reveal the console, enable the console and look for the message output  
           console.log("Ajax button has been clicked");  
             
             
           //Write a Test message to the div  
             
           $('.ajaxContent').append("<p>Ajax button has been clicked</p>");  
           
           //Declare a variable to store the url you are calling  
           var  url = "http://www.redfinchmedia.com/api/index.php?action=api_property_listing_get";  
             
           //Clear the div containing the message  
           $(".ajaxContent").empty();  
           $(".ajaxContent").empty();  
		   
           var items1 = "";
           var items2 = "";
		   var items3 = "";
           var ulItems = "<ul>";
           
           $.getJSON(url, function(data){  
				$.each(data, function(i,jsonItem){  
			   		items2 +="<div class='listingWrapper'>"
                    items2 +="<div class='title'><h3><strong>" +jsonItem['address'] + ", " + jsonItem['address_two'] + ", " + jsonItem['address_three'] + ", Co. " + jsonItem['county'] + "</strong></h3></div>";
				    items2 += '<div class="pic"><img src="http://www.redfinchmedia.com/uploads/' + jsonItem['imagefile'] + '" width="200" height="180"/></div>';
				    items2 += '<div class="status"><img src="http://www.redfinchmedia.com/uploads/' + jsonItem['status'] + '" width="132" height="50"/></div>'; 
                  
				  	// div info 1
				  	items2 += "<div class='info1'><p><strong>Guide Price: </strong>" + "&euro;" + jsonItem['price'] +  "</p>"; 
                  	items2 += "<p><strong>Property Type: </strong>" +  jsonItem['type'] +  "</p></div>"; 
				  	// div info 2
				  	items2 += "<div class='info2'><p><strong>Contact: </strong>" + jsonItem['contact'] +  "</p>"; 
				  	items2 += "<p><strong>Phone: </strong>" + jsonItem['phone'] +  "</p></div>"; 
				  	//items2 += "<div class='updated'><p><strong>Last Updated: </strong>" + jsonItem['updated'] +  "</p></div>";
                  	items2 += "<h4><strong>Description</strong></h4><p>" + jsonItem['description'] +  "</p>";  
				  	items2+= "<hr />"
				  	items2 +="</div>"
            });  
               

                 
               $('#ajaxContent2').append(items2); 
			   
           });  
           
             
           } );  
}



function initBtnJson2() {
	
	   $('#btnLoadAjax2').click(function () {  
        
        //this function will only work if using firefox/firebug.  
        //It causes an error in Explorer, so use Alert instead  
        //Use F12 in Firefox to reveal the console, enable the console and look for the message output  
        console.log("Ajax button has been clicked");  
          
          
        //Write a Test message to the div  
          
        $('.ajaxContent').append("<p>Ajax button has been clicked</p>");  
        
        //Grab the movie id from input field
        
		// get county
		var strUser = document.getElementById("countyId");
		var countyId = strUser.options[strUser.selectedIndex].value;
		console.log(countyId); 
		// get property type
		var strrating = document.getElementById("typeId");
		var typeId = strrating.options[strrating.selectedIndex].value;
		// get max price
		var strmaxPrice = document.getElementById("maxPrice");
		var maxPrice = strmaxPrice.options[strmaxPrice.selectedIndex].value;
		// get min price
		var strminPrice = document.getElementById("minPrice");
		var minPrice = strminPrice.options[strminPrice.selectedIndex].value;
        
        //Declare a variable to store the url you are calling  
        var  url = "http://www.redfinchmedia.com/api/index.php?action=api_property_listing_get_byid&countyId=" + countyId + "&typeId=" + typeId + "&minPrice=" + minPrice + "&maxPrice=" + maxPrice;
          
        //Clear the div containing the message  
        $(".ajaxContent").empty();  
     
        var items2 = "";
		var items3 = "<h4>Sorry, but your search yielded no results.</h4><p>Try broadening your search using the refine bar above.</p>";
    
		// if search = 0 display message
        $.getJSON(url, function(data, jsonItem){  
		if (data.length == 0){
			 $('#ajaxContent2').append(items3); 
			 return;
			
			}
		
		// if search = 1 property display "property" else if greater than 1 display "properties"	
		if (data.length == 1){
			var items4 = "<br /><p>" + data.length + " " +  typeId + " Property in " + countyId + " Found</p><hr />";
			}else{
				var items4 = "<br /><p>" + data.length + " " + typeId + " Properties in " + countyId + " Found</p><hr />";
				}
	
            $.each(data, function(i,jsonItem){  

               items2 +="<div class='listingWrapper'>"
               items2 +="<div class='title'><h3><strong>" +jsonItem['address'] + ", " + jsonItem['address_two'] + ", " + jsonItem['address_three'] + ", Co. " + jsonItem['county'] + "</strong></h3></div>";
				items2 += '<div class="pic"><img src="http://www.redfinchmedia.com/uploads/' + jsonItem['imagefile'] + '" width="200" height="205"/></div>';
				items2 += '<div class="status"><img src="http://www.redfinchmedia.com/uploads/' + jsonItem['status'] + '" width="132" height="50"/></div>'; 
                  
				// Info 1
				items2 += "<div class='info1'><p><strong>Guide Price: </strong>" + "&euro;" + jsonItem['price'] +  "</p>"; 
                items2 += "<p><strong>Property Type: </strong>" +  jsonItem['type'] +  "</p></div>"; 
				  
				// Info 2
				items2 += "<div class='info2'><p><strong>Contact: </strong>" + jsonItem['contact'] +  "</p>"; 
				items2 += "<p><strong>Phone: </strong>" + jsonItem['phone'] +  "</p></div>";   
				  
                items2 += "<h4><strong>Description</strong></h4><p>" + jsonItem['description'] +  "</p>";
				//items2 += "<div class='updated'><p><strong>Last Updated: </strong>" + jsonItem['updated'] +  "</p></div>";
				items2+= "<hr />"
            	items2 +="</div>"
            
         });  
		  


             $('#ajaxContent2').append(items4 + items2); 

            /* 
                Outside the $.each() function, we append the content to the div 
                 
            */  

        });  
        
          
        } );  
	
}