

 /*==========================================
	navbar search
   =========================================*/



function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
}

	/*========================================
	end navbar search
	==========================================*/

/*
	==========================================
	 owel carousel
	==========================================


jQuery(document).ready(function() {
  
  jQuery("#slider1").owlCarousel({
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3],
  });
  
});

	==========================================
	 end owel carousel
	==========================================*/


/* 08 - Project gallery */
$( document ).ready(function() {
  /* activate jquery isotope */
  var $container = $('#posts').isotope({
    itemSelector : '.grid-item ',
    isFitWidth: true
  });

  $(window).smartresize(function(){
    $container.isotope({
      columnWidth: '.col-sm-3'
    });
  });
  
  $container.isotope({ filter: '*' });

    // filter items on button click
  $('#filters').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    $container.isotope({ filter: filterValue });
  });
});


