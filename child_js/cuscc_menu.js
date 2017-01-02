// JavaScript Document
$(document).ready(function(){
	"use strict";
	$("#cuscc_map").on("click",function(){
		//$("#cuscc_branches").toggleClass("hide");	
		var cuscc_branches = $("#cuscc_branches");
		if(cuscc_branches.hasClass("hide")){
			cuscc_branches.slideDown("slow");
			cuscc_branches.removeClass("hide").addClass("show");
		}else{
			cuscc_branches.slideUp("slow");
			cuscc_branches.removeClass("show").addClass("hide");
		}
	} );
    
	$("#cuscc_menu>div>ul>li>a").on("mouseover",function(e){
		e.stopPropagation();
        $(e.target).parent().children('ul').slideDown("fast");
        $(e.target).parent().siblings().children('ul').slideUp("fast");
		return false;
	});
	
	$("#cuscc_menu>div>ul>li").on("mouseout",function(e){
		e.stopPropagation();
        $(e.target).children('ul').slideUp("fast");
		return false;
	});
	
	
	
});