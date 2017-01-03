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
    
	$("#cuscc_menu>div>ul>li>a").on("mouseenter",function(){
		
        $(this).parent().children('ul').slideDown("fast");
        $(this).parent().siblings().children('ul').slideUp("fast");
		return false;
	});
	
	$("#cuscc_menu>div>ul>li").on("mouseleave",function(){
        //console.log("mouseleave");
		$(this).children('ul').slideUp("fast");
        return false;
	});
	
    $("#cuscc_menu>div>ul>li>ul>li").on("mouseleave",function(){
        //console.log("mouseleave 2li");
		$(this).parent().slideUp("fast");
        return false;
	});
	
	
});