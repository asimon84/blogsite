var body = $("body");
var sidebar = $(".sidebar");
var sidebarCol = $(".sidebarCol");

$(window).on("scroll", function (event) {
	console.log($(window).scrollTop());
	console.log(sidebar.offset().top);

	if(sidebarCol.offset().top <= $(window).scrollTop()){
		sidebar.addClass("sidebar_fixed");
		sidebar.css("left", sidebarCol.offset().left + "px");
		sidebar.css("width",sidebarCol.width() + "px");
	}else {
		sidebar.removeClass("sidebar_fixed");
	}
})