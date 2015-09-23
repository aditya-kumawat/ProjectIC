$(document).ready(function(){
	navbar();
	searchbar();
	loginpopup();
});

function navbar() {
	var icNavbar = $(".ic-navbar");
	var wrapper = $(".wrapper");
	$("header .col-xs-2 img[data-target = 'navbar']").on("click",function(){
		$("#modal-container").addClass("modal-container-toggle");
		icNavbar.addClass("ic-navbar-toggle");
		wrapper.addClass("wrapper-toggle");
	});

	$("#ic-navbar-close").on("click",function(){
		$("#modal-container").removeClass("modal-container-toggle");
		icNavbar.removeClass("ic-navbar-toggle");
		wrapper.removeClass("wrapper-toggle");
	});	
}

function searchbar() {
	$("img[data-target = 'search-bar']").on("click",function(){
		$("#search-bar").toggleClass("search-bar-toggle");
	});
	$("#search-bar-close").on("click",function(){
		$("#search-bar").removeClass("search-bar-toggle");
	});
}

function loginpopup() {
	$("img[data-target = 'login-container']").on("click",function(){
		$("#modal-container").addClass("modal-container-toggle");
		$(".ic-login").addClass("ic-login-toggle");
		$("#ic-login-wrapper form input:not([type = 'submit'])").each(function(index,element){
			if($(this).val() !== "")
				$(this).val("");
		});
	});
	$("#ic-login-close").on("click",function(){
		$(".ic-login").removeClass("ic-login-toggle");
		$("#modal-container").removeClass("modal-container-toggle");
	}); 
}