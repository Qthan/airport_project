
$(document).ready(function() {
         $( "#tabs" ).tabs({
                ajaxOptions: {
                    error: function( xhr, status, index, anchor ) {
                        $( anchor.hash ).html(
                            "Couldn't load this tab. We'll try to fix this as soon as possible. " +
                            "If this wouldn't be a demo." );
                    }  
                }
            });
        });
$(document).ready(function() {
				$( "#datepicker" ).datepicker({
					dateFormat:'yy-mm-dd',
					changeMonth: true,
					changeYear: true,
                    maxDate: "+0w"
                });
			});
$(document).ready(function() {
                $( "input:submit, a, button", ".menu" ).button();
            });
$(document).ready(function() {
                $( "input:submit, a, button", ".tabsmenu" ).button();
            });
$(document).ready(function() {
                $( "input:submit, a, button", ".buttons" ).button();
            });
