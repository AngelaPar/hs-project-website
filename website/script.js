var navbar = document.getElementById("navbar");
var nav_btn = document.getElementById("nav-btn");
var x_mark = document.getElementById("x-mark");

$(function () {
  $(document).scroll(function () {
	  var $nav = $(".header");
	  $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
	  console.log("SCROLLING");
	});
});

function toggle_nav() {
	console.log(isHidden(navbar));
	if (isHidden(navbar)) {
		navbar.style.visibility = "visible";
		navbar.style.opacity = "1";
		nav_btn.innerHTML = "&#10006";			
	} else {
		navbar.style.visibility = "hidden";
		navbar.style.opacity = "0";
		nav_btn.innerHTML = "&#9776";
	}
}


function isHidden(el) {
    var style = window.getComputedStyle(el);
    return (style.visibility === 'hidden')
}	
