<?php get_header(); ?>

		
      <h1>Combination filters</h1>
    

    <section id="copy">
  <p>Filters can be combined. In addition to filtering for just <code>.red</code> or <code>.tall</code>, you can pass in a filter selector of both: <code>.red.tall</code>.</p>
</section>

<div id="options" class="clearfix combo-filters">
  
  <h3>Filters</h3>

  
    <div class="option-combo color">
      <h4>color</h4>
      <ul class="filter option-set clearfix " data-filter-group="color"> 
        <li><a href="#filter-color-any" data-filter-value="" class="selected">any</a>
        
          <li><a href="#filter-color-red" data-filter-value=".red">red</a>
        
          <li><a href="#filter-color-blue" data-filter-value=".blue">blue</a>
        
          <li><a href="#filter-color-yellow" data-filter-value=".yellow">yellow</a>
        
      </ul>
    </div>
  
    <div class="option-combo size">
      <h4>size</h4>
      <ul class="filter option-set clearfix " data-filter-group="size"> 
        <li><a href="#filter-size-any" data-filter-value="" class="selected">any</a>
        
          <li><a href="#filter-size-small" data-filter-value=".small">small</a>
        
          <li><a href="#filter-size-wide" data-filter-value=".wide">wide</a>
        
          <li><a href="#filter-size-tall" data-filter-value=".tall">tall</a>
        
          <li><a href="#filter-size-big" data-filter-value=".big">big</a>
        
      </ul>
    </div>
  
    <div class="option-combo shape">
      <h4>shape</h4>
      <ul class="filter option-set clearfix " data-filter-group="shape"> 
        <li><a href="#filter-shape-any" data-filter-value="" class="selected">any</a>
        
          <li><a href="#filter-shape-round" data-filter-value=".round">round</a>
        
          <li><a href="#filter-shape-square" data-filter-value=".square">square</a>
        
      </ul>
    </div>
  

</div> <!-- #options -->

<div id="container" class="clearfix">
  
    
      
        <div class="color-shape small round red"></div>
      
        <div class="color-shape small round blue"></div>
      
        <div class="color-shape small round yellow"></div>
      
    
      
        <div class="color-shape small square red"></div>
      
        <div class="color-shape small square blue"></div>
      
        <div class="color-shape small square yellow"></div>
      
    
  
    
      
        <div class="color-shape wide round red"></div>
      
        <div class="color-shape wide round blue"></div>
      
        <div class="color-shape wide round yellow"></div>
      
    
      
        <div class="color-shape wide square red"></div>
      
        <div class="color-shape wide square blue"></div>
      
        <div class="color-shape wide square yellow"></div>
      
    
  
    
      
        <div class="color-shape tall round red"></div>
      
        <div class="color-shape tall round blue"></div>
      
        <div class="color-shape tall round yellow"></div>
      
    
      
        <div class="color-shape tall square red"></div>
      
        <div class="color-shape tall square blue"></div>
      
        <div class="color-shape tall square yellow"></div>
      
    
  
    
      
        <div class="color-shape big round red"></div>
      
        <div class="color-shape big round blue"></div>
      
        <div class="color-shape big round yellow"></div>
      
    
      
        <div class="color-shape big square red"></div>
      
        <div class="color-shape big square blue"></div>
      
        <div class="color-shape big square yellow"></div>
      
    
  
  
  
  
    
      
        <div class="color-shape small round red"></div>
      
        <div class="color-shape wide round red"></div>
      
        <div class="color-shape tall round red"></div>
      
        <div class="color-shape big round red"></div>
      
    
      
        <div class="color-shape small square red"></div>
      
        <div class="color-shape wide square red"></div>
      
        <div class="color-shape tall square red"></div>
      
        <div class="color-shape big square red"></div>
      
    
  
    
      
        <div class="color-shape small round blue"></div>
      
        <div class="color-shape wide round blue"></div>
      
        <div class="color-shape tall round blue"></div>
      
        <div class="color-shape big round blue"></div>
      
    
      
        <div class="color-shape small square blue"></div>
      
        <div class="color-shape wide square blue"></div>
      
        <div class="color-shape tall square blue"></div>
      
        <div class="color-shape big square blue"></div>
      
    
  
    
      
        <div class="color-shape small round yellow"></div>
      
        <div class="color-shape wide round yellow"></div>
      
        <div class="color-shape tall round yellow"></div>
      
        <div class="color-shape big round yellow"></div>
      
    
      
        <div class="color-shape small square yellow"></div>
      
        <div class="color-shape wide square yellow"></div>
      
        <div class="color-shape tall square yellow"></div>
      
        <div class="color-shape big square yellow"></div>
      
    
  
  
</div> <!-- #container -->

<script src="http://localhost:8888/BTarc/wp-content/themes/reverie/js/jquery.min.js"></script>
<script src="http://localhost:8888/BTarc/wp-content/themes/reverie/js/jquery.isotope.min.js"></script>
<script>
  $(function(){
    
    var $container = $('#container'),
        filters = {};

    $container.isotope({
      itemSelector : '.color-shape',
      masonry: {
        columnWidth: 80
      }
    });

    // filter buttons
    $('.filter a').click(function(){
      var $this = $(this);
      // don't proceed if already selected
      if ( $this.hasClass('selected') ) {
        return;
      }
      
      var $optionSet = $this.parents('.option-set');
      // change selected class
      $optionSet.find('.selected').removeClass('selected');
      $this.addClass('selected');
      
      // store filter value in object
      // i.e. filters.color = 'red'
      var group = $optionSet.attr('data-filter-group');
      filters[ group ] = $this.attr('data-filter-value');
      // convert object into array
      var isoFilters = [];
      for ( var prop in filters ) {
        isoFilters.push( filters[ prop ] )
      }
      var selector = isoFilters.join('');
      $container.isotope({ filter: selector });

      return false;
    });

  });
</script>
    
		
		<?php get_sidebar(); ?>
		
<?php get_footer(); ?>