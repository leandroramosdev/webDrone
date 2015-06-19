jQuery(document).ready(function($){
	$("body").delegate("#datetimepicker", "focusin", function(){
		$(this).datetimepicker({locale: 'pt-BR'});
		$(this).datetimepicker("show");
		$(this).find(".glyphicon-calendar").click();
		focused=true;
	});
	
	  $("body").delegate("#datetimepicker", "focusout", function(){
	    $(this).datetimepicker("hide");
	    focused=false;
	  });

});