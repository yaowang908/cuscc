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
	$("#cuscc_menu ul li,#cuscc_menu ul li a").on("mouseover",function(e){
		$(e.target).children('ul').css("display","block");
		return false;
	});
	
	$("#cuscc_menu ul li,#cuscc_menu ul li ul").on("mouseout",function(e){
		$(e.target).children('ul').css("display","none");
		return false;
	});
	
	
	
});