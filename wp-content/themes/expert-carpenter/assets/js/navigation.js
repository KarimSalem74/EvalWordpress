/* global ExpertCarpenterScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

jQuery(function($){
 "use strict";
   jQuery('.main-menu-navigation > ul').superfish({
     delay:       500,                            
     animation:   {opacity:'show',height:'show'},  
     speed:       'fast'                        
   });

});

function resMenu_open() {
	  document.getElementById("sidelong-menu").style.width = "250px";
}
function resMenu_close() {
  document.getElementById("sidelong-menu").style.width = "0";
}

(function( $ ) { 
	
	/**** Hidden search box ***/
	jQuery('document').ready(function($){
		jQuery('.search-box i').click(function(){
	        jQuery(".serach_outer").slideDown(700);
	    });

	    jQuery('.closepop i').click(function(){
	        jQuery(".serach_outer").slideUp(700);
	    });
	});	

})( jQuery );
